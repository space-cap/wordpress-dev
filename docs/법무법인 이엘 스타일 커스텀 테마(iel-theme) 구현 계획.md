# 법무법인 이엘 스타일 커스텀 테마(iel-theme) 구현 계획

법무법인 이엘(`https://iel.im/`)의 세련된 디자인 감각을 100% 코드로 이식하기 위해, 워드프레스의 **커스텀 테마(iel-theme)**를 처음부터 직접 작성합니다. Tailwind CSS, AOS(스크롤 애니메이션), 그리고 부드러운 탭 컴포넌트 인터랙션이 내장된 프리미엄 원페이지 랜딩 테마를 구현하는 것을 목표로 합니다.

## User Review Required

> [!IMPORTANT]
> **테마 활성화 조건**
> 이 테마가 브라우저에 표시되기 위해서는 아래 파일들을 생성한 후, 워드프레스 관리자 화면(`http://localhost:8080/wp-admin`)의 **외모(Appearance) -> 테마(Themes)** 메뉴에서 `iel-theme`를 활성화해 주어야 합니다. 
> 혹은 원하신다면 저희가 CLI를 사용해 다이렉트로 테마를 활성화해 드릴 수도 있습니다!

## Proposed Changes

새로운 커스텀 테마 디렉토리인 `html/wp-content/themes/iel-theme`를 만들고 하위에 다음과 같은 파일들을 새로 작성합니다.

---

### [Component] 워드프레스 커스텀 테마 (iel-theme)

#### [NEW] [style.css](file:///\\wsl.localhost\Ubuntu-24.04\home\lee\wordpress\html\wp-content\themes\iel-theme\style.css)
워드프레스가 이 폴더를 테마로 인식할 수 있게 정보를 선언해 주는 필수 스타일시트 파일입니다.

#### [NEW] [functions.php](file:///\\wsl.localhost\Ubuntu-24.04\home\lee\wordpress\html\wp-content\themes\iel-theme\functions.php)
Tailwind CSS, AOS CSS/JS, Swiper.js, 구글 Lora 폰트 및 Pretendard 한글 폰트를 워드프레스 템플릿에 안전하게 인큐(Enqueue) 처리합니다.

#### [NEW] [header.php](file:///\\wsl.localhost\Ubuntu-24.04\home\lee\wordpress\html\wp-content\themes\iel-theme\header.php)
Glassmorphism(유리광택 배경 블러) 효과가 가미된 투명 상단 고정 헤더(GNB)를 마크업합니다. 모바일 대응 반응형 햄버거 메뉴 및 JS 토글 코드가 내장됩니다.

#### [NEW] [footer.php](file:///\\wsl.localhost\Ubuntu-24.04\home\lee\wordpress\html\wp-content\themes\iel-theme\footer.php)
아래쪽 하단 영역을 닫고, AOS 애니메이션을 초기화하는 간단한 스크립트를 로드하며 마무리합니다.

#### [NEW] [index.php](file:///\\wsl.localhost\Ubuntu-24.04\home\lee\wordpress\html\index.php)
워드프레스 규격상 필수 폴백(Fallback) 파일입니다. 

#### [NEW] [front-page.php](file:///\\wsl.localhost\Ubuntu-24.04\home\lee\wordpress\html\wp-content\themes\iel-theme\front-page.php)
메인 홈화면 레이아웃입니다. 다음 핵심 섹션들을 포함합니다:
- **Hero Video Section**: 전체 화면에 맞춘 오피스 배경 영상 루프 배치 및 오버레이 카피 문구.
- **Interactive About Section**: `Communication`, `Focus`, `Reasonable` 세 가지 탭을 누를 때마다 화면 텍스트 내용, 프로그레스 바 너비, 연동 이미지가 부드럽게 연동 전환되는 바닐라 JS 제어 탭.

## Verification Plan

### Manual Verification
1. **코드 작성 후 테마 활성화**:
   - `wp-cli` 명령어 혹은 웹 관리자 페이지를 사용하여 새로 만든 `iel-theme`를 활성화합니다.
2. **레이아웃 확인 (`http://localhost:8080/`)**:
   - 브라우저로 접속해 상단 메뉴바가 투명하게 고정되어 있고, 백그라운드 영상이 루프로 원활하게 재생되는지 확인합니다.
   - 아래로 스크롤할 때 AOS 스크롤 모션이 적용되는지 검증합니다.
   - 탭 버튼을 클릭하여 우측 이미지와 프로그레스 바가 생동감 있게 변화하는지 확인합니다.
