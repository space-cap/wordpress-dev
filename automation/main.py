import os
import logging
from datetime import datetime
from typing import Optional
from fastapi import FastAPI, BackgroundTasks, HTTPException
from pydantic import BaseModel
import requests
import gspread
from google.oauth2.service_account import Credentials
from dotenv import load_dotenv

# .env 환경변수 파일 로드 (로컬 개발 환경 대응)
load_dotenv()

# 로깅 설정
logging.basicConfig(
    level=logging.INFO,
    format="%(asctime)s [%(levelname)s] %(message)s",
    handlers=[
        logging.StreamHandler()
    ]
)
logger = logging.getLogger("paradin-automation")

app = FastAPI(title="Law Firm PARADIN Work Automation Server")

# Webhook payload 규격 선언 (Pydantic 모델)
class ConsultationPayload(BaseModel):
    name: str
    phone: str
    debt: Optional[str] = "미입력"
    region: Optional[str] = "미입력"
    message: Optional[str] = "상황 설명이 없습니다."
    type: str  # rehabilitation (회생파산) 등
    date: Optional[str] = None

# 1. Google Sheets 동기화 로직
def sync_to_google_sheet(data: ConsultationPayload):
    try:
        credentials_path = os.getenv("GOOGLE_APPLICATION_CREDENTIALS", "/app/credentials.json")
        
        # 🆕 로컬 개발 환경(Windows/uv) 대응: 설정된 경로가 없고 로컬 폴더에 credentials.json이 있다면 자동 대체
        if not os.path.exists(credentials_path) and os.path.exists("credentials.json"):
            credentials_path = "credentials.json"
        
        if not os.path.exists(credentials_path):
            logger.warning(f"구글 인증 파일({credentials_path})이 존재하지 않아 시트 동기화를 건너뜁니다.")
            return

        # Oauth2 서비스 계정 자격 증명 획득
        scopes = [
            "https://www.googleapis.com/auth/spreadsheets",
            "https://www.googleapis.com/auth/drive"
        ]
        creds = Credentials.from_service_account_file(credentials_path, scopes=scopes)
        client = gspread.authorize(creds)

        # 환경변수에 등록된 구글 스프레드시트 열기
        sheet_title = os.getenv("GOOGLE_SHEET_TITLE", "법무법인 파라딘 상담 현황")
        tab_name = os.getenv("GOOGLE_SHEET_TAB_NAME", "실시간신청")

        spreadsheet = client.open(sheet_title)
        worksheet = spreadsheet.worksheet(tab_name)

        # 삽입할 데이터 튜플 구성
        created_time = data.date if data.date else datetime.now().strftime("%Y-%m-%d %H:%M:%S")
        consult_type = "회생·파산" if data.type == "rehabilitation" else "일반상담"

        row_data = [
            created_time,
            data.name,
            data.phone,
            consult_type,
            data.debt,
            data.region,
            data.message
        ]

        # 스프레드시트 하단에 새로운 행 삽입
        worksheet.append_row(row_data)
        logger.info(f"구글 스프레드시트 동기화 완료: {data.name} 님 데이터 추가됨.")

    except Exception as e:
        logger.error(f"구글 스프레드시트 동기화 도중 오류 발생: {str(e)}")

# 2. Slack Webhook 푸시 알림 로직
def send_slack_notification(data: ConsultationPayload):
    webhook_url = os.getenv("SLACK_WEBHOOK_URL")
    if not webhook_url or "hooks.slack.com" not in webhook_url:
        logger.warning("올바른 SLACK_WEBHOOK_URL 환경변수가 세팅되지 않아 알림 전송을 건너뜁니다.")
        return

    try:
        created_time = data.date if data.date else datetime.now().strftime("%Y-%m-%d %H:%M:%S")
        consult_type = "개인회생·파산 전담 센터" if data.type == "rehabilitation" else "일반상담 센터"

        # 슬랙 Block Kit 디자인 포맷 구성 (모던 레이아웃)
        payload = {
            "blocks": [
                {
                    "type": "header",
                    "text": {
                        "type": "plain_text",
                        "text": "⚖️ 법무법인 파라딘 - 실시간 상담 신청 접수",
                        "emoji": True
                    }
                },
                {
                    "type": "divider"
                },
                {
                    "type": "section",
                    "fields": [
                        {"type": "mrkdwn", "text": f"*의뢰인 성함:*\n{data.name}"},
                        {"type": "mrkdwn", "text": f"*연락처:*\n{data.phone}"},
                        {"type": "mrkdwn", "text": f"*상담 구분:*\n{consult_type}"},
                        {"type": "mrkdwn", "text": f"*거주 지역:*\n{data.region}"},
                        {"type": "mrkdwn", "text": f"*총 채무액:*\n{data.debt}"},
                        {"type": "mrkdwn", "text": f"*접수 시간:*\n{created_time}"}
                    ]
                },
                {
                    "type": "section",
                    "text": {
                        "type": "mrkdwn",
                        "text": f"*의뢰 상황 설명:*\n```{data.message}```"
                    }
                },
                {
                    "type": "divider"
                },
                {
                    "type": "context",
                    "elements": [
                        {
                            "type": "mrkdwn",
                            "text": "💡 *업무 지침:* 의뢰 정보가 접수되었습니다. 담당 변호사는 변호사법에 의거 100% 비밀을 보장하며 30분 이내에 긴급 유선 상담을 개시해 주시기 바랍니다."
                        }
                    ]
                }
            ]
        }

        # 슬랙 서버로 전송
        response = requests.post(webhook_url, json=payload, timeout=5)
        if response.status_code == 200:
            logger.info(f"슬랙 알림 전송 완료: {data.name} 님 신규 알림.")
        else:
            logger.error(f"슬랙 알림 전송 실패 (코드 {response.status_code}): {response.text}")

    except Exception as e:
        logger.error(f"슬랙 알림 전송 도중 오류 발생: {str(e)}")

# 3. 비동기 실시간 웹훅 수신 엔드포인트
@app.post("/webhook")
async def receive_webhook(payload: ConsultationPayload, background_tasks: BackgroundTasks):
    logger.info(f"신규 Webhook 데이터 수신: {payload.name} 님 접수.")
    
    # 비동기 백그라운드 작업 등록 (워드프레스 응답 대기 지연 원천 제거)
    background_tasks.add_task(sync_to_google_sheet, payload)
    background_tasks.add_task(send_slack_notification, payload)

    return {"status": "success", "message": f"{payload.name} 님 데이터 백그라운드 처리 등록됨."}

# 헬스 체크 엔드포인트
@app.get("/")
def read_root():
    return {
        "status": "healthy",
        "service": "PARADIN Automation Server",
        "timestamp": datetime.now().strftime("%Y-%m-%d %H:%M:%S")
    }
