# ⚖️ 법무법인 파라딘 (Law Firm PARADIN) - 프리미엄 워드프레스 테마 개발 프로젝트

본 프로젝트는 전문 법률 서비스 그룹 **법무법인 파라딘 (Law Firm PARADIN)**의 공식 웹사이트를 위한 프리미엄 워드프레스(WordPress) 커스텀 테마 개발 저장소입니다. 입사 지원 포트폴리오 목적으로 설계되었으며, 모던 웹 표준 기술과 워드프레스 코어 연동 역량을 증명하기 위해 고도로 튜닝된 레이아웃과 최적화 기능이 포함되어 있습니다.

---

## 🚀 주요 특징 (Key Features)

### 1. 프리미엄 모던 UI & 반응형 레이아웃
* **Tailwind CSS 기반 설계**: 하드코딩된 스타일 없이 유연한 모던 CSS 및 Tailwind 레이아웃을 통해 높은 시각적 완성도와 풍성한 여백을 제공합니다.
* **100% 반응형 웹 지원**: 모바일(1열), 태블릿(2열), 데스크톱(3~4열) 전 디바이스 최적화 그리드 시스템 탑재.
* **AOS.js 스크롤 애니메이션**: 스크롤 시 부드럽게 페이드인/업 되는 인터랙션을 유기적으로 연동하여 하이엔드 로펌 특유의 웅장한 신뢰감을 연출합니다.
* **다크 모드 초기화 스크립트**: 시스템 설정 및 로컬스토리지에 기반하여 다크 테마 전환 시 깜빡임(Flicker) 없이 즉각적인 모드 변화를 보장합니다.

### 2. 워드프레스 코어 동적 연동 (PHP)
* **WP_Query 동적 파이프라인**: 메인 페이지의 'Insights & News' 영역에서 실제 워드프레스 포스트를 실시간으로 3개 로드합니다.
* **유연한 예외 처리 (Fallback)**: DB에 저장된 포스트가 없는 경우(초기 설치 단계 등)에도 디자인 레이아웃이 무너지지 않고, 준비된 훌륭한 법률 매거진 예시 카드를 안전하게 보여주는 방어적 분기 코드를 갖추고 있습니다.

### 3. Core Web Vitals 기반 성능 및 미디어 최적화
* **서버 수준 WebP 자동 변환 필터**: 대용량 JPG/PNG 이미지를 관리자가 업로드할 시, `functions.php`에서 `wp_handle_upload` 필터를 후킹(Hooking)해 PHP GD 라이브러리를 가동, 화질 저하 없이 용량을 최대 70~80% 압축하는 **자동 WebP 이미지 인코딩 파이프라인**을 제공합니다.
* **지연 로딩 (Lazy Loading)**: 초기 브라우저의 이미지 로드 부하를 줄여 `LCP(Largest Contentful Paint)` 속도를 획기적으로 향상했습니다.
* **Core Web Vitals 최적화**: LCP / CLS / FID 세 가지 핵심 지표를 기준으로 이미지 사전 크기 지정(레이아웃 시프트 방지), 폰트 서브셋화, 렌더 블로킹 스크립트 최소화 등을 적용하여 Google PageSpeed Insights 기준 성능을 개선했습니다.

### 4. 개발 생산성 및 보안 최적화
* **상대 경로(도메인 독립) 아키텍처**: 워드프레스의 데이터베이스 주소(Site URL) 포트와 로컬 개발 서버 포트가 불일치할 시 로고나 이미지 엑스박스(Broken Link) 현상이 일어나는 문제를 해결하기 위해, 모든 내부 리소스를 도메인 비의존적인 상대 경로(`/wp-content/...`)로 매핑하여 어떠한 환경에서도 완벽히 렌더링됩니다.
* **보안 예외 관리 (.gitignore)**: SFTP 접속 비밀번호가 노출되는 `.vscode/sftp.json` 및 로컬 서버 환경에 따른 `.htaccess`, `.env` 등을 완벽히 예외 처리하여 코드 저장소의 보안을 유지했습니다.

### 5. 랜딩 페이지 및 간편 상담 DB 저장 시스템 (AJAX)
* **standalone 독립형 템플릿 지원**: 사이트 공통 GNB 헤더/푸터가 노출되지 않도록 수동 마크업을 구축하되, `wp_head()`와 `wp_footer()` 훅은 안전하게 연동해 Tailwind/AOS 등 스타일 리소스를 차질 없이 로드하는 standalone 템플릿을 포함한 3종 랜딩 템플릿을 구현했습니다.
* **비동기 간편 상담 DB 기록 (AJAX)**: 간편 상담 폼 제출 시 Fetch API를 활용해 워드프레스 AJAX 엔드포인트(`/wp-admin/admin-ajax.php`)로 전송, DB 마이그레이션이 필요 없는 CPT(Custom Post Type - `consultation`) 글 유형으로 DB에 안전하게 우회 저장합니다.
* **입력 폼 유효성 및 실시간 포맷터 (UX)**: 연락처 입력 시 한글/영문 등 숫자 외 문자를 즉각 차단하고 국내 휴대폰 및 서울/지방 유선전화번호 규격에 맞추어 실시간으로 하이픈(`-`)을 삽입해 주는 유틸리티 스크립트를 내장했습니다. 또한 성함(최대 20자)과 연락처(최대 13자)에 자릿수 제한을 걸어 허수 데이터 입력 및 레이아웃 깨짐을 근본적으로 방지했습니다.
* **확장성 스키마 및 전용 메타박스**: `_consult_type` 메타키에 구분자(예: `rehabilitation`, `sexual_crime`)를 함께 저장하도록 구성하여 향후 타 도메인 확장에 대비하고, 어드민 상세 화면에서 연락처, 부채규모, 지역 등을 일목요연하게 볼 수 있는 메타박스 전용 패널을 제공합니다.

### 6. 기술적 SEO & AEO/GEO 최적화 (AI 검색 최적화)
* **JSON-LD 기반 구조화 데이터 적용**: `LegalService`(로펌 법인 정보) 및 `JobPosting`(웹 프로그래머 채용 정보) 스키마 마크업을 `functions.php`의 `wp_head` 훅을 통해 페이지 조건에 맞춰 동적으로 주입함으로써 구글 및 네이버 검색 리치 스니펫 노출 확률을 높였습니다.
* **AEO / GEO 최적화 FAQ 컴포넌트**: `FAQPage` 스키마 마크업과 연계하여, 회생파산 랜딩 페이지에 바닐라 JS 및 Tailwind CSS로 설계된 FAQ 아코디언 UI를 이식하여 AI 대답 엔진(Generative Engine Optimization)의 인용 출처 확보에 최적화했습니다.
* **사이트 구조 개선**: 시맨틱 HTML5 마크업(`<article>`, `<section>`, `<header>` 등)과 올바른 헤딩 계층 구조(`h1`→`h2`→`h3`)를 일관성 있게 적용하여 크롤러 이해도와 접근성을 동시에 향상시켰습니다.

### 7. UI/UX 디자인 구현 및 개선
* **하이엔드 랜딩 페이지 디자인**: Tailwind CSS 유틸리티 클래스 기반의 디자인 시스템을 활용해 법무법인 브랜드 아이덴티티(프리미엄 네이비 블루, 글래스모피즘 카드 등)에 맞는 고퀄리티 UI를 처음부터 직접 설계·구현했습니다.
* **마이크로 인터랙션 설계**: 호버 효과(hover), 트랜지션 애니메이션, FAQ 아코디언, 탭 UI 등의 인터랙티브 컴포넌트를 바닐라 JavaScript로 직접 구현하여 사용자 체류 시간과 전환율 향상에 기여했습니다.
* **실시간 데이터 시각화 UI**: 사용자가 부채액·소득·부양가족 수를 입력하면 즉시 탕감액·변제율을 계산해 보여주는 **인터랙티브 채무 진단 계산기**를 JavaScript만으로 설계, 페이지 이탈 없이 자가 진단이 가능한 UX를 구현했습니다.
* **모바일 퍼스트 UX 설계**: 모바일 전용 하단 고정 퀵 액션바(전화/진단/신청)를 별도 구현하고, 데스크톱 대비 다른 레이아웃과 폰트 크기를 적용하여 모바일 사용자의 이탈을 최소화했습니다.

---

## 🛠️ 기술 스택 (Tech Stack)

| 분류 | 기술 |
|---|---|
| **Backend / CMS** | WordPress Core, PHP (커스텀 테마 · 플러그인 개발) |
| **Frontend** | HTML5, Vanilla JavaScript, Tailwind CSS, AOS.js |
| **자동화 서버** | Python, FastAPI, Google Sheets API, Slack API |
| **성능 최적화** | WebP 변환, Lazy Loading, Core Web Vitals |
| **SEO / 데이터** | JSON-LD, Schema Markup (LegalService, FAQPage, JobPosting) |
| **개발 환경** | Docker, Docker Compose |
| **버전 관리** | Git, GitHub |

---

## 📂 테마 디렉토리 구조 (Theme Structure)

```bash
paradin-theme/ (이엘 브랜드를 파라딘으로 변경한 새 포트폴리오 테마 폴더)
├── assets/
│   └── images/          # 로컬 변호사 프로필 및 백그라운드 이미지 자산 (AI 생성 고화질 리소스)
├── landing/             # 모듈화된 랜딩 페이지 템플릿 폴더 (1단계 하위 폴더 탐색 메커니즘 활용)
│   ├── page-landing.php        # 일반형 랜딩 페이지 템플릿
│   ├── page-landing-blank.php  # 독립형(Standalone) 순수 랜딩 페이지 템플릿
│   └── page-rehabilitation.php # 회생·파산 센터용 특화 standalone 랜딩 페이지 템플릿 (계산기 및 AJAX DB 저장 탑재)
├── style.css            # 워드프레스 테마 메타 정보 선언 및 Vanilla CSS 커스텀 스타일시트
├── functions.php        # WebP 자동 변환 필터, CPT 및 AJAX DB 저장 로직 등 선언
├── header.php           # GNB 및 다크모드 제어, 상대경로 최적화가 포함된 헤더
├── footer.php           # 1:1 상담 플로팅 메뉴 제어 스크립트와 저작권 영역이 포함된 푸터
├── front-page.php       # 메인 비디오 히어로, 탭 콘텐츠, Attorneys, Insights 그리드 템플릿
├── page-about.php       # 법인 소개 및 연혁 타임라인 템플릿
├── page-practice-areas.php # 분야별 전담 센터 상세 가이드 템플릿
└── single.php           # 단일 글/칼럼 레이아웃 템플릿
```

---

## ⚙️ 로컬 개발 환경 실행 방법 (How to Run Locally)

본 프로젝트는 Docker를 통해 1분 안에 로컬 개발 환경 구축이 가능합니다.

### 1. 전제 조건 (Prerequisites)
* 로컬 PC에 [Docker Desktop](https://www.docker.com/products/docker-desktop/) 및 `docker compose` 명령어가 실행 가능해야 합니다.

### 2. 컨테이너 기동
저장소의 루트 폴더(docker-compose.yml이 위치한 곳)에서 아래 명령어를 실행합니다:
```bash
docker compose up -d
```

### 3. 브라우저 접속
웹 브라우저를 열고 다음 주소로 이동하여 로컬 개발 중인 워드프레스 사이트에 접속합니다:
* **주소:** `http://localhost:8088`

---

## 🐍 파이썬 실시간 업무 자동화 모듈 (Python Automation & API Integration)

본 프로젝트는 로펌의 실무 행정 및 마케팅 효율성을 극대화하기 위해 **Python FastAPI** 기반의 실시간 데이터 파이프라인 자동화 서버를 내장하고 있습니다. 

### 1. 주요 자동화 시나리오
* **실시간 Google Sheets 동기화:** 워드프레스에 새로운 상담 신청글이 등록되면, API를 통해 구글 스프레드시트에 즉각적으로 상담 의뢰 기록을 누적 추가합니다.
* **실시간 Slack 긴급 알리미:** 신속한 30분 이내 변호사 긴급 진단 통화를 개시할 수 있도록, 담당 부서의 슬랙 채널로 의뢰 내용 카드 알림을 POST 전송합니다.

### 2. 도커 컴포즈 실행 방법
도커 컴포즈 빌드 체계를 갖추고 있으므로, 아래 단 한 줄의 명령어로 워드프레스와 파이썬 웹 서버가 동일 네트워크 상에 동시에 백그라운드로 빌드 및 구동됩니다:
```bash
docker compose up -d --build
```
* **워드프레스 주소:** `http://localhost:8088`
* **파이썬 자동화 서버 API 주소:** `http://localhost:8089` (API 스펙 문서: `http://localhost:8089/docs`)

### 3. (로컬 단독 구동 시) `uv` 활용 가이드
만약 도커를 띄우지 않고 로컬 호스트 PC에서 단독으로 파이썬 모듈을 구동할 때는 Astral의 초고속 파이썬 패키지 매니저인 `uv`를 사용합니다:
```bash
# automation 폴더로 이동하여 가상환경 생성
cd automation
uv venv

# 가상환경 활성화 (Mac/Linux)
source .venv/bin/activate

# 의존성 패키지 설치 및 서버 구동
uv pip install -r requirements.txt
uvicorn main:app --port 8089 --reload
```

---

## 👤 개발자 소개 및 포트폴리오 활용 안내

본 프로젝트는 **[법무법인 이엘 웹 프로그래머 채용공고]** 의 요구사항을 기준으로, 실무 역량을 직접 코드로 입증하기 위해 제작된 포트폴리오 저장소입니다.

| 채용공고 요구/우대사항 | 본 프로젝트에서의 증명 |
|---|---|
| WordPress 구축 및 운영 | 커스텀 테마 전체 설계 및 Docker 기반 운영 |
| HTML, CSS, JavaScript | 모든 템플릿 직접 마크업 · 바닐라 JS 컴포넌트 |
| PHP WordPress 커스터마이징 | `functions.php` WebP 필터, CPT, AJAX, JSON-LD 훅 |
| 반응형 웹 제작 | 모바일~데스크톱 전 구간 Tailwind 반응형 그리드 |
| 랜딩페이지 제작 | 3종 standalone 랜딩 템플릿 (회생파산 특화 포함) |
| SEO · AEO 최적화 | JSON-LD 구조화 데이터, FAQPage, 사이트 구조 개선 |
| JSON-LD / Schema Markup | LegalService · JobPosting · FAQPage 스키마 적용 |
| Core Web Vitals 개선 | LCP · CLS 최적화, WebP · Lazy Loading 적용 |
| UI/UX 개선 | 인터랙티브 계산기, FAQ 아코디언, 마이크로 인터랙션 |
| Python 업무 자동화 | FastAPI 서버 · Google Sheets · Slack 연동 |
| Git 사용 경험 | 본 저장소 커밋 히스토리 및 브랜치 관리 |

자세히 보기 및 라이브 데모 관련 추가 문의는 본 저장소의 Issues 또는 이메일(contact@paradin.com)을 통해 전달해 주시기 바랍니다.
