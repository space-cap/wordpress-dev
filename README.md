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

### 3. 성능 및 미디어 최적화
* **서버 수준 WebP 자동 변환 필터**: 대용량 JPG/PNG 이미지를 관리자가 업로드할 시, `functions.php`에서 `wp_handle_upload` 필터를 후킹(Hooking)해 PHP GD 라이브러리를 가동, 화질 저하 없이 용량을 최대 70~80% 압축하는 **자동 WebP 이미지 인코딩 파이프라인**을 제공합니다.
* **지연 로딩 (Lazy Loading)**: 초기 브라우저의 이미지 로드 부하를 줄여 FCP(First Contentful Paint) 속도를 획기적으로 향상했습니다.

### 4. 개발 생산성 및 보안 최적화
* **상대 경로(도메인 독립) 아키텍처**: 워드프레스의 데이터베이스 주소(Site URL) 포트와 로컬 개발 서버 포트가 불일치할 시 로고나 이미지 엑스박스(Broken Link) 현상이 일어나는 문제를 해결하기 위해, 모든 내부 리소스를 도메인 비의존적인 상대 경로(`/wp-content/...`)로 매핑하여 어떠한 환경에서도 완벽히 렌더링됩니다.
* **보안 예외 관리 (.gitignore)**: SFTP 접속 비밀번호가 노출되는 `.vscode/sftp.json` 및 로컬 서버 환경에 따른 `.htaccess`, `.env` 등을 완벽히 예외 처리하여 코드 저장소의 보안을 유지했습니다.

### 5. 랜딩 페이지 및 간편 상담 DB 저장 시스템 (AJAX)
* **standalone 독립형 템플릿 지원**: 사이트 공통 GNB 헤더/푸터가 노출되지 않도록 수동 마크업을 구축하되, `wp_head()`와 `wp_footer()` 훅은 안전하게 연동해 Tailwind/AOS 등 스타일 리소스를 차질 없이 로드하는 standalone 템플릿을 포함한 3종 랜딩 템플릿을 구현했습니다.
* **비동기 간편 상담 DB 기록 (AJAX)**: 간편 상담 폼 제출 시 Fetch API를 활용해 워드프레스 AJAX 엔드포인트(`/wp-admin/admin-ajax.php`)로 전송, DB 마이그레이션이 필요 없는 CPT(Custom Post Type - `consultation`) 글 유형으로 DB에 안전하게 우회 저장합니다.
* **확장성 스키마 및 전용 메타박스**: `_consult_type` 메타키에 구분자(예: `rehabilitation`, `sexual_crime`)를 함께 저장하도록 구성하여 향후 타 도메인 확장에 대비하고, 어드민 상세 화면에서 연락처, 부채규모, 지역 등을 일목요연하게 볼 수 있는 메타박스 전용 패널을 제공합니다.

---

## 🛠️ 기술 스택 (Tech Stack)

* **Backend / CMS**: WordPress Core, PHP
* **Frontend**: HTML5, Vanilla JavaScript, Tailwind CSS, AOS.js
* **Environment**: Docker, Docker Compose (Local Dev)
* **VCS**: Git & GitHub

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

## 👤 개발자 소개 및 포트폴리오 활용 안내
본 테마는 고해상도 그래픽과 인터랙티브 스크립트를 조화롭게 다루며 백엔드(PHP/WordPress) 데이터의 안전성까지 확보할 수 있는 풀스택 역량을 검증하기 위해 정교하게 작성된 코드베이스입니다. 

자세히 보기 및 라이브 데모 관련 추가 문의는 본 저장소의 Issues 또는 이메일(contact@paradin.com)을 통해 전달해 주시기 바랍니다.
