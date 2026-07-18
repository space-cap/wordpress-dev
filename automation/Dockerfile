FROM python:3.10-slim

# Astral의 초고속 패키지 매니저 uv 바이너리 추가
COPY --from=ghcr.io/astral-sh/uv:latest /uv /uvx /bin/

WORKDIR /app

# uv를 사용하여 시스템 패키지 형태로 비동기 초고속 빌드 진행
COPY requirements.txt .
RUN uv pip install --no-cache --system -r requirements.txt

COPY . .

EXPOSE 8089

CMD ["uvicorn", "main:app", "--host", "0.0.0.0", "--port", "8089", "--reload"]
