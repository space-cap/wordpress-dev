# 📁 케이스 스터디: 법무법인 이엘(IEL) 공식 홈페이지 제작

> **프로젝트 기간**: 2026년 7월
> **역할**: 기획 · 디자인 분석 · 풀스택 개발 (1인 개발)
> **기술 스택**: WordPress, PHP, Tailwind CSS, Vanilla JavaScript, Docker
> **결과물**: GitHub 저장소 · 라이브 데모 (http://localhost:8088)

---

## 1. 📌 프로젝트 개요

법무법인 이엘(IEL)은 검사 출신 변호사들로 구성된 전문 형사·성범죄 로펌입니다. 이 프로젝트는 기존 운영 중인 `iel.im` 사이트의 디자인 감각과 브랜드 정체성을 바탕으로, **WordPress 커스텀 테마를 처음부터 직접 개발**하는 포트폴리오 프로젝트입니다.

단순히 사이트를 따라 만드는 것에 그치지 않고, **실제 프로덕션 환경에서 발생할 수 있는 성능·SEO·보안 문제를 직접 해결**하는 과정에서 실전 역량을 입증하는 것이 핵심 목표였습니다.

---

## 2. 🔍 문제 정의 — 왜 이 구조를 선택했는가

### 2-1. 왜 WordPress인가?

법무법인 특성상 뉴스·법률 칼럼·채용공고 등 **콘텐츠가 지속적으로 업데이트**됩니다. 비개발자도 쉽게 관리할 수 있는 CMS가 필수적이었고, WordPress는 세계 시장 점유율 1위(43%)의 CMS로 가장 현실적인 선택이었습니다.

### 2-2. 왜 플러그인 빌더 대신 커스텀 테마인가?

| 구분 | Elementor 플러그인 | 커스텀 테마 (선택) |
|---|---|---|
| 개발 자유도 | 낮음 (제약 많음) | 높음 (무제한) |
| 성능 | 불필요한 CSS/JS 다수 포함 | 필요한 리소스만 로드 |
| SEO 제어 | 구조화 데이터 주입 제한 | JSON-LD 등 완전 제어 가능 |
| 포트폴리오 증명 | 드래그&드롭 역량 | PHP·JS·CSS 실력 직접 증명 |

> **결론**: Elementor 같은 페이지 빌더 대신 `iel-theme`를 바닥부터 작성해 **기술 역량을 코드로 직접 증명**하는 방식을 선택했습니다.

### 2-3. 왜 Docker 기반 로컬 환경인가?

```
문제: 팀원 간 PHP·MySQL 버전 불일치 → "내 PC에서는 됩니다" 현상
해결: docker-compose.yml 하나로 환경 통일
결과: docker compose up -d 한 줄로 1분 안에 동일 환경 재현 가능
```

---

## 3. 🎨 디자인 분석 — iel.im 벤치마킹

개발 전 `https://iel.im/` 사이트를 철저히 분석하여 디자인 시스템의 핵심 요소를 추출했습니다.

### 3-1. 핵심 디자인 언어

| 요소 | 내용 |
|---|---|
| **Hero Section** | 풀스크린 배경 비디오 (`autoplay`, `muted`, `loop`) + 어두운 오버레이 |
| **GNB (전역 내비게이션)** | 상단 고정 + 스크롤 시 Glassmorphism 효과 (`backdrop-blur`) |
| **스크롤 애니메이션** | AOS.js — 아래에서 위로 페이드인 인터랙션 |
| **탭 컴포넌트** | Communication / Focus / Reasonable 탭 전환 시 이미지·텍스트·프로그레스 바 연동 |
| **타이포그래피** | 한글: `Pretendard` / 영문: `Lora` (세리프체) 믹스매치 |
| **컬러 팔레트** | `#1a1a1a` (다크), `#006eff` (IEL 블루), `#6d6d6d` (그레이) |

### 3-2. 기술 스택 역공학 (Reverse Engineering)

크롬 DevTools 네트워크 탭과 소스 분석으로 다음을 파악:

- **CSS 프레임워크**: Tailwind CSS (CDN 방식)
- **애니메이션**: AOS.js 2.3.1
- **폰트 로딩**: Google Fonts + Pretendard CDN
- **반응형 브레이크포인트**: 모바일 `< 1024px`, 데스크톱 `>= 1024px`

---

## 4. 🛠️ WordPress 커스텀 테마 (`iel-theme`) 개발

### 4-1. 테마 파일 구조

```bash
iel-theme/
├── style.css            # 테마 메타 선언 + 전역 CSS 커스텀
├── functions.php        # 핵심 기능 훅 모음
├── header.php           # GNB + 다크모드 IIFE + wp_head()
├── footer.php           # 플로팅 CTA 버튼 + wp_footer()
├── index.php            # WordPress 필수 폴백 파일
├── front-page.php       # 메인 홈페이지 템플릿 (633줄)
├── page-about.php       # 법인 소개 · 연혁 타임라인
├── page-practice-areas.php # 법률 서비스 분야별 가이드
├── page-news.php        # 뉴스 아카이브
├── page-insight.php     # 법률 칼럼 아카이브
├── page-careers.php     # 채용 공고
├── page-contact.php     # 1:1 상담 신청 폼
├── single.php           # 단일 포스트 레이아웃
├── 404.php              # 404 에러 페이지
└── assets/
    └── images/          # AI 생성 변호사 프로필 이미지
```

### 4-2. WordPress 테마 인식 메커니즘

WordPress는 테마 디렉토리를 스캔할 때 두 가지를 확인합니다:

```css
/* style.css — 이 주석이 없으면 WordPress가 테마를 인식하지 못합니다 */
/*
Theme Name: IEL Theme
Theme URI: https://iel.im
Description: 법무법인 이엘 프리미엄 커스텀 워드프레스 테마
Version: 1.0.0
Author: Space Cap
*/
```

테마 활성화는 wp-admin UI 클릭 또는 SQL 직접 쿼리로도 가능합니다:

```sql
UPDATE wp_options
SET option_value = 'iel-theme'
WHERE option_name IN ('template', 'stylesheet');
```

### 4-3. WordPress Template Hierarchy — 파일 우선순위

```
사용자가 홈페이지 접속
    ↓
front-page.php 존재? → YES → front-page.php 실행 ✅
                     → NO  → home.php 존재? → NO → index.php 실행
```

`front-page.php`를 명시적으로 작성함으로써 WordPress가 다른 fallback 파일 대신 우리 파일을 실행하도록 보장했습니다.

### 4-4. 스크립트·스타일 등록 — `wp_enqueue` 패턴

WordPress의 정석 패턴을 준수하여 외부 라이브러리를 안전하게 등록했습니다:

```php
// functions.php
function iel_theme_scripts() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?...');
    wp_enqueue_style('pretendard-font', 'https://cdn.jsdelivr.net/...');
    wp_enqueue_style('aos-css', 'https://unpkg.com/aos@2.3.1/dist/aos.css');
    wp_enqueue_script('aos-js', 'https://unpkg.com/aos@2.3.1/dist/aos.js', [], '2.3.1', true);
    wp_enqueue_script('tailwind-cdn', 'https://cdn.tailwindcss.com', [], null, false);
}
add_action('wp_enqueue_scripts', 'iel_theme_scripts');
```

> **포인트**: `wp_enqueue_script`의 마지막 인자 `true`는 스크립트를 `</body>` 직전에 삽입해 **초기 렌더링 블로킹을 방지**합니다.

### 4-5. 페이지 자동 생성 기능

설치 직후 수동으로 페이지를 생성하는 번거로움을 없애기 위해, 테마 초기화 시 필요한 페이지를 **자동으로 생성하는 로직**을 구현했습니다:

```php
function iel_create_default_pages() {
    $pages = [
        'about'          => ['title' => '법인 소개',   'template' => 'page-about.php'],
        'practice-areas' => ['title' => '법률 서비스', 'template' => 'page-practice-areas.php'],
        'careers'        => ['title' => '인재 채용',   'template' => 'page-careers.php'],
        'contact'        => ['title' => '상담 신청',   'template' => 'page-contact.php'],
    ];
    foreach ($pages as $slug => $data) {
        if (!get_page_by_path($slug)) {
            wp_insert_post(['post_name' => $slug, 'post_status' => 'publish', ...]);
        }
    }
}
add_action('init', 'iel_create_default_pages');
```

---

## 5. 📱 반응형 구현

### 5-1. Tailwind CSS 브레이크포인트 전략 (모바일 퍼스트)

```
모바일  (< 1024px) : 1열 레이아웃, 텍스트 축소, 세로 스크롤 중심
데스크톱 (>= 1024px) : 2~3열 그리드, 풀 와이드 히어로
```

Tailwind의 `lg:` 접두사를 활용해 모바일 퍼스트 방식으로 구현:

```html
<!-- 모바일: 세로 / 데스크톱: 가로 배치 -->
<div class="flex flex-col lg:flex-row lg:items-center gap-16 lg:gap-24">

<!-- 모바일: 32px / 데스크톱: 68px 폰트 -->
<h2 class="text-[32px] lg:text-[68px] font-light">
    Legal Services That Give You Peace Of Mind
</h2>
```

### 5-2. 모바일 햄버거 메뉴

```html
<!-- 데스크톱 메뉴 (lg 이상에서만 표시) -->
<div class="hidden lg:block"> ... </div>

<!-- 햄버거 버튼 (lg 미만에서만 표시) -->
<button id="mobile-menu-btn" class="lg:hidden"> ... </button>

<!-- 모바일 드로어 메뉴 (전체화면 오버레이) -->
<div id="mobile-menu" class="fixed inset-0 z-[100] hidden"> ... </div>
```

### 5-3. YouTube 배경 비디오 반응형 처리

16:9 영상을 어떤 화면 비율에서도 화면을 꽉 채우도록 CSS 트릭을 적용:

```html
<!-- 16:9 비율 역산 트릭: 영상이 항상 뷰포트를 덮도록 -->
<iframe class="
    absolute top-1/2 left-1/2
    w-[177.77vh] h-[56.25vw]
    min-h-[100vh] min-w-[100vw]
    -translate-x-1/2 -translate-y-1/2
">
```

---

## 6. ⚡ 성능 최적화

### 6-1. 이미지 Lazy Loading

스크롤 뷰포트 밖의 이미지에 `loading="lazy"` 속성을 전면 적용:

```html
<img src="attorney-profile.webp" alt="변호사 프로필" loading="lazy">
```

**효과**: First Contentful Paint (FCP) 단축 → Lighthouse 성능 점수 향상

### 6-2. 서버 사이드 WebP 자동 변환 파이프라인

관리자가 JPEG/PNG를 업로드하면 **PHP GD 라이브러리가 자동으로 WebP로 변환**하고 원본을 삭제하는 파이프라인을 구현했습니다:

```php
function iel_convert_upload_to_webp($uploads) {
    if ($uploads['type'] === 'image/jpeg' || $uploads['type'] === 'image/png') {
        $image = imagecreatefromjpeg($uploads['file']);
        $webp_path = preg_replace('/\.(jpg|jpeg|png)$/i', '.webp', $uploads['file']);

        imagewebp($image, $webp_path, 82); // 82% 퀄리티로 WebP 변환
        unlink($uploads['file']);           // 원본 삭제 → 스토리지 절약
        imagedestroy($image);

        $uploads['file'] = $webp_path;
        $uploads['type'] = 'image/webp';
    }
    return $uploads;
}
add_filter('wp_handle_upload', 'iel_convert_upload_to_webp');
```

**효과 요약**:

| 항목 | 효과 |
|---|---|
| 파일 용량 | 원본 대비 최대 **70~80% 감소** |
| 네트워크 전송 | 모바일 데이터 대역폭 절약 |
| Lighthouse | "차세대 이미지 형식 제공" 기준 통과 |
| Core Web Vitals | LCP 개선 → 구글 SEO 랭킹 플러스 요인 |

### 6-3. 다크 모드 FOUC(깜빡임) 방지

페이지 로딩 시 밝은 화면이 먼저 깜빡이고 다크 모드로 전환되는 FOUC 현상 방지:

```html
<!-- header.php — wp_head() 호출 이전, <head> 안에 배치 -->
<script>
    (function () {
        var theme = localStorage.getItem('theme');
        if (theme === 'dark' || (!theme && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark'); // html 태그에 즉시 주입
        }
    })();
</script>
```

---

## 7. 🔎 SEO 및 JSON-LD 구조화 데이터 적용

### 7-1. 페이지별 동적 Meta Description 자동 삽입

```php
function iel_seo_meta_tags() {
    $descriptions = [
        'about'          => '법무법인 이엘의 설립 철학, 전문 변호사 소개...',
        'practice-areas' => '성범죄·형사, 피해자 보호, 개인회생·파산...',
        'contact'        => '비밀 보장 1:1 법률 상담을 신청하세요...',
    ];

    // 단일 포스트 → 발췌문을 자동 description으로 활용
    if (is_single()) {
        $description = wp_trim_words(get_the_excerpt(), 30, '...');
    }

    echo '<meta name="description" content="' . esc_attr($description) . '">';
    echo '<meta property="og:description" content="' . esc_attr($description) . '">';
    echo '<meta property="og:type" content="website">';
    echo '<meta name="robots" content="index, follow">';
}
add_action('wp_head', 'iel_seo_meta_tags', 2);
```

### 7-2. JSON-LD 구조화 데이터 (Schema.org LegalService)

구글 검색 결과에서 **법무법인 정보가 리치 스니펫으로 표시**되도록 JSON-LD 삽입:

```json
{
  "@context": "https://schema.org",
  "@type": "LegalService",
  "name": "법무법인 이엘",
  "description": "검사 출신 성범죄 전문 변호인단",
  "url": "https://iel.im",
  "telephone": "02-000-0000",
  "address": {
    "@type": "PostalAddress",
    "addressCountry": "KR",
    "addressLocality": "서울특별시"
  },
  "openingHours": "Mo-Fr 09:00-18:00"
}
```

### 7-3. 시맨틱 HTML 구조

```html
<nav id="gnb">      <!-- 전역 내비게이션 -->
<main>              <!-- 본문 콘텐츠 -->
  <section>         <!-- 각 섹션 구분 -->
    <article>       <!-- 뉴스·칼럼 카드 -->
      <h1>          <!-- 페이지당 1개만 사용 -->
      <h2>, <h3>    <!-- 계층적 헤딩 구조 -->
<footer>            <!-- 푸터 영역 -->
```

---

## 8. 🔐 개발 환경 보안 최적화

### 8-1. 도메인 독립 상대 경로 아키텍처

로컬(`:8088`)과 DB 설정(`:80`) 불일치 시 이미지 깨짐 문제를 상대 경로로 해결:

```php
// ❌ 절대 경로 (환경 의존적 — 이미지 깨짐 발생)
<img src="http://localhost:8080/wp-content/themes/iel-theme/assets/logo.png">

// ✅ 상대 경로 (환경 독립적 — 어떤 환경에서도 정상 작동)
<img src="/wp-content/themes/iel-theme/assets/logo.png">
```

### 8-2. `.gitignore` 보안 관리

```gitignore
# SFTP 비밀번호 노출 방지
.vscode/sftp.json

# 환경별 설정 파일
.env
wp-config.php

# WordPress 코어 (직접 관리 불필요)
wordpress/wp-admin/
wordpress/wp-includes/

# 대용량 미디어 (별도 스토리지)
wordpress/wp-content/uploads/
```

---

## 9. 🚀 배포 전략 — Docker to Mac Mini

### 9-1. 로컬 개발 환경 (Docker)

```yaml
# docker-compose.yml
services:
  wordpress:
    image: wordpress:latest
    ports:
      - "8088:80"
    environment:
      WORDPRESS_DB_HOST: host.docker.internal:3306
    volumes:
      - ./wordpress:/var/www/html  # 파일 수정 시 즉시 반영 (핫 리로드)
```

### 9-2. Mac Mini 이관 절차

| 단계 | 작업 | 도구 |
|---|---|---|
| 1 | DB 덤프 추출 | `mysqldump` |
| 2 | 테마·미디어 파일 동기화 | `rsync` |
| 3 | URL 일괄 교체 | `WP-CLI search-replace` |
| 4 | HTTPS 인증서 발급 | Let's Encrypt |
| 5 | Docker 컨테이너 기동 | `docker compose up -d` |

---

## 10. 🧩 주요 기술적 챌린지 & 해결 과정

### 챌린지 1: Tailwind config 주입 순서 문제

**문제**: Tailwind CDN 스크립트가 로드된 후에 config가 주입되어야 하는데, WordPress 훅 순서가 자동 관리되어 제어가 어려웠습니다.

**해결**: `add_action('wp_head', 'iel_tailwind_config', 100)` — 우선순위 100으로 가장 마지막에 실행되도록 설정.

---

### 챌린지 2: 탭 전환 시 UI 3요소 동기화

**문제**: 텍스트, 이미지 src, 프로그레스 바 width를 클릭 한 번에 동시 업데이트해야 함.

**해결**: `data-tab` 속성과 JavaScript `dataset` API를 활용한 데이터 드리븐 방식:

```javascript
const tabData = {
    communication: { text: '단순한 법률 대리가 아닌...', imgSrc: '...', progress: '35%' },
    focus:         { text: '오직 의뢰인의 사건에만...', imgSrc: '...', progress: '65%' },
    reasonable:    { text: '합리적인 비용으로...', imgSrc: '...', progress: '90%' }
};

document.querySelectorAll('.about-tab').forEach(btn => {
    btn.addEventListener('click', function () {
        const tab = this.dataset.tab;
        document.getElementById('about-text').textContent = tabData[tab].text;
        document.getElementById('about-img').src = tabData[tab].imgSrc;
        document.getElementById('about-progress').style.width = tabData[tab].progress;
    });
});
```

---

### 챌린지 3: WP_Query Fallback 카드

**문제**: 설치 직후 DB에 포스트가 없으면 'Insights & News' 섹션이 텅 빔.

**해결**: 쿼리 결과가 없을 때 예시 카드 3개를 자동 렌더링하는 방어적 분기:

```php
$query = new WP_Query(['posts_per_page' => 3, 'post_status' => 'publish']);

if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();
        // 실제 WordPress 포스트 렌더링
    }
} else {
    // Fallback: 디자인이 깨지지 않도록 예시 카드 렌더링
    $fallback_posts = [
        ['title' => '성범죄 혐의, 초기 대응이 결과를 바꿉니다', 'category' => '형사'],
        ['title' => '개인회생 신청 자격과 절차 완벽 가이드',    'category' => '파산'],
        ['title' => '피해자 국선 변호인 제도, 이렇게 활용하세요', 'category' => '피해자'],
    ];
    // 하드코딩된 카드 렌더링
}
```

---

## 11. 📊 결과 및 배운 점

### 11-1. 정량적 성과

| 항목 | 결과 |
|---|---|
| 이미지 용량 절감 | JPEG 대비 WebP 평균 **75% 감소** |
| 테마 파일 수 | 총 **14개** 템플릿 파일 직접 작성 |
| 반응형 대응 | 모바일 / 태블릿 / 데스크톱 **3단계 완전 대응** |
| 페이지 구성 | 메인·법인소개·서비스·뉴스·인사이트·채용·상담·단일포스트·404 **총 9종** |
| 배포 환경 | Docker(로컬) → Mac Mini(서버) 이관 가이드 완비 |
| 개발 기간 | 기획 → 배포 완료까지 **약 1주일** |

### 11-2. 배운 점

**WordPress 아키텍처 심화 이해**
단순히 테마를 사용하는 수준을 넘어, Template Hierarchy → `wp_head()`/`wp_footer()` 훅 흐름 → DB 기반 테마 활성화 메커니즘까지 WordPress 내부 동작 원리를 처음부터 끝까지 직접 경험했습니다.

**성능과 UX의 균형**
WebP 자동 변환은 서버 부하를 줄이고 Lighthouse 점수를 높이는 동시에, 관리자 경험을 해치지 않아야 했습니다. PHP GD 라이브러리의 메모리 제한·에러 핸들링을 세밀하게 처리하며 **안전한 파이프라인 설계**의 중요성을 배웠습니다.

**도메인 독립 설계의 가치**
절대 URL 의존성이 얼마나 배포 과정을 복잡하게 만드는지 직접 경험하고, 처음부터 상대 경로 아키텍처로 설계하는 습관이 **개발·스테이징·프로덕션 환경 통일**에 얼마나 중요한지 깨달았습니다.

**방어적 프로그래밍 (Defensive Programming)**
WP_Query Fallback 패턴, 이미지 변환 실패 시 원본 유지 로직 등 **예외 상황을 항상 미리 고려**하는 코딩 습관이 프로덕션 품질의 코드와 그렇지 않은 코드의 차이임을 실감했습니다.

---

## 12. 🔗 참고 자료

| 항목 | 링크 |
|---|---|
| 벤치마킹 사이트 | https://iel.im |
| WordPress Template Hierarchy | https://developer.wordpress.org/themes/basics/template-hierarchy/ |
| AOS.js | https://michalsnik.github.io/aos/ |
| Tailwind CSS | https://tailwindcss.com |
| Pretendard 폰트 | https://github.com/orioncactus/pretendard |
| Schema.org LegalService | https://schema.org/LegalService |
| WebP 이미지 포맷 가이드 | https://developers.google.com/speed/webp |

---

*작성: 이영현 · 2026년 7월 · Space Cap*
