# 📱 인스타그램 카드뉴스 제작 가이드
## 법무법인 이엘(IEL) 홈페이지 개발 포트폴리오 편

> 이 문서는 포트폴리오 SNS 홍보용 인스타그램 카드뉴스를 제작하기 위한 가이드입니다.  
> 각 버전의 **카피라이팅**, **디자인 가이드**, **AI 이미지 생성 프롬프트**를 복붙 가능한 형태로 제공합니다.

---

## 🎯 인스타그램 카드뉴스 기본 스펙

| 항목 | 권장 설정 |
|---|---|
| **포맷** | 정방형 1:1 or 세로형 4:5 |
| **해상도** | 1080 × 1080px (정방형) / 1080 × 1350px (세로형) |
| **슬라이드 수** | 5~10장 (첫 장이 가장 중요) |
| **폰트 크기** | 제목 60~80px / 본문 30~40px |
| **여백** | 최소 60px 이상 (엄지로 가려지는 영역 고려) |
| **파일 형식** | JPG 또는 PNG |

---

## 🎨 공통 브랜드 컬러 & 디자인 토큰

```
메인 다크   : #1a1a1a
IEL 블루   : #006eff
그레이      : #6d6d6d
화이트      : #ffffff
밝은 블루   : #eef4ff
배경 그레이 : #f5f5f5
```

**폰트**
- 한글: Pretendard (Noto Sans KR 대체 가능)
- 영문/숫자: Lora (세리프), Inter (산세리프)

---

---

# 📦 버전 A — "스토리텔링형" (추천 ⭐⭐⭐)
> **컨셉**: 개발자가 프로젝트를 처음부터 끝까지 경험한 이야기를 8장으로 풀어냄  
> **타깃**: 이직을 준비하는 개발자 / 주니어 개발자 / 기술 면접관  
> **톤앤매너**: 담백하고 진솔한 개발자의 언어  

---

### A-1 | 커버 카드 (첫 장)

**레이아웃**: 다크 배경 + 대형 영문 타이틀 + 한글 서브타이틀 + 태그

```
━━━━━━━━━━━━━━━━━━━━━━
[배경: #1a1a1a 전체 채움]

[상단 좌측]
  작은 텍스트: PORTFOLIO  ·  2026.07

[중앙]
  대형 영문:
  Law Firm
  Homepage
  from Scratch.

[하단 좌측]
  한글 서브:
  WordPress 커스텀 테마
  처음부터 끝까지 혼자 만든 이야기

[하단]
  태그 칩: #WordPress  #PHP  #TailwindCSS  #Docker
━━━━━━━━━━━━━━━━━━━━━━
```

**카피라이팅 (복붙용)**
```
Law Firm
Homepage
from Scratch.

WordPress 커스텀 테마
처음부터 끝까지 혼자 만든 이야기

#WordPress  #PHP  #TailwindCSS  #Docker
PORTFOLIO · 2026.07
```

**AI 이미지 생성 프롬프트 (배경용)**
```
[Midjourney / DALL-E 3]
Dark minimal tech background, deep charcoal #1a1a1a texture,
subtle blue accent light glow, law office atmosphere,
modern developer aesthetic, no text, cinematic, 4K, --ar 1:1
```

---

### A-2 | 문제 정의 카드

**레이아웃**: 화이트 배경 + 아이콘 + 문제 3개 나열

```
━━━━━━━━━━━━━━━━━━━━━━
[배경: #ffffff]

[상단]
  섹션 번호: 01
  제목: "이런 문제를 해결해야 했습니다"

[중앙 - 3개 블록]
  ❶ 비개발자가 직접 콘텐츠를 올릴 수 있어야 한다
     → CMS가 필요했다

  ❷ Elementor 플러그인은 너무 무겁고 자유도가 낮다
     → 커스텀 테마 직접 개발

  ❸ 로컬 · 스테이징 · 프로덕션 환경이 달라 이미지가 깨진다
     → 상대경로 아키텍처 설계
━━━━━━━━━━━━━━━━━━━━━━
```

**카피라이팅 (복붙용)**
```
01. 이런 문제를 해결해야 했습니다

❶ 비개발자가 직접 콘텐츠를 올릴 수 있어야 한다
   → CMS가 필요했다

❷ Elementor 플러그인은 너무 무겁고 자유도가 낮다
   → 커스텀 테마 직접 개발

❸ 로컬·스테이징·프로덕션 환경이 달라 이미지가 깨진다
   → 상대경로 아키텍처 설계
```

---

### A-3 | 기술 스택 카드

**레이아웃**: 그리드형 기술 배지 나열

```
━━━━━━━━━━━━━━━━━━━━━━
[배경: #1a1a1a]

[상단]
  02  Tech Stack

[중앙 그리드 2x3]
  [WordPress]  [PHP]
  [Tailwind]   [JavaScript]
  [Docker]     [Git]

[하단 설명]
  플러그인 0개. 바닐라 코드로만.
━━━━━━━━━━━━━━━━━━━━━━
```

**카피라이팅 (복붙용)**
```
02. Tech Stack

WordPress   ·   PHP
Tailwind CSS  ·  Vanilla JS
Docker  ·  Git & GitHub

플러그인 0개.
바닐라 코드로만 만들었습니다.
```

---

### A-4 | 핵심 기능 카드 — WebP 자동 변환

**레이아웃**: 코드 스니펫 카드 (다크 테마)

```
━━━━━━━━━━━━━━━━━━━━━━
[배경: #1a1a1a]

[상단]
  03  성능 최적화

[코드 블록 (모노스페이스 폰트)]
  add_filter('wp_handle_upload',
    'iel_convert_to_webp');

  // JPEG 업로드 → WebP 자동 변환
  // 용량 최대 75% 절감

[하단 강조 수치]
  📉 파일 크기 -75%
  ✅ Lighthouse "차세대 이미지" 통과
━━━━━━━━━━━━━━━━━━━━━━
```

**카피라이팅 (복붙용)**
```
03. 성능 최적화 — WebP 자동 변환

add_filter('wp_handle_upload',
  'iel_convert_to_webp');

관리자가 JPEG를 올리면
서버가 자동으로 WebP로 변환합니다.

📉 파일 크기 최대 75% 절감
✅ Lighthouse "차세대 이미지" 기준 통과
🔧 PHP GD 라이브러리 활용
```

**AI 이미지 생성 프롬프트 (배경용)**
```
[Midjourney / DALL-E 3]
Dark code editor aesthetic background, green terminal glow,
floating PHP code snippets blur effect, programmer desk setup,
professional portfolio card, minimal, --ar 1:1
```

---

### A-5 | 핵심 기능 카드 — 반응형 & 다크모드

**레이아웃**: 폰 + 데스크톱 나란히 배치

```
━━━━━━━━━━━━━━━━━━━━━━
[배경: #f5f5f5]

[상단]
  04  반응형 × 다크 모드

[중앙 - 두 영역]
  [모바일 목업]      [데스크톱 목업]
  1열 레이아웃       3열 그리드

[하단]
  FOUC 없는 다크 모드 전환
  localStorage + IIFE 즉시 실행 패턴
━━━━━━━━━━━━━━━━━━━━━━
```

**카피라이팅 (복붙용)**
```
04. 반응형 × 다크 모드

모바일  →  1열 레이아웃
태블릿  →  2열 그리드
데스크톱 → 3열 풀와이드

화면이 바뀔 때 깜빡임이 없어야 합니다.
localStorage + IIFE 패턴으로
FOUC(Flash of Unstyled Content) 완전 차단.
```

---

### A-6 | SEO 카드

**레이아웃**: 구글 검색 결과 목업 스타일

```
━━━━━━━━━━━━━━━━━━━━━━
[배경: #ffffff]

[상단]
  05  SEO & 구조화 데이터

[중앙 - 구글 검색 결과 모형]
  ┌────────────────────┐
  │ 법무법인 이엘       │
  │ https://iel.im     │
  │ 검사 출신 성범죄 전문 변호인단이... │
  │ ⭐ 리치 스니펫 표시 │
  └────────────────────┘

[하단 3가지]
  JSON-LD Schema.org
  페이지별 Meta Description
  OG 태그 (SNS 공유 최적화)
━━━━━━━━━━━━━━━━━━━━━━
```

**카피라이팅 (복붙용)**
```
05. SEO & 구조화 데이터

구글 검색에서 리치 스니펫으로 보이게 하려면
Schema.org JSON-LD가 필요합니다.

✅ LegalService 타입 구조화 데이터
✅ 페이지별 동적 Meta Description
✅ Open Graph — SNS 공유 미리보기 최적화
✅ robots: index, follow 명시적 선언
```

---

### A-7 | 결과 수치 카드

**레이아웃**: 큰 숫자 강조 카드 (빅 넘버 스타일)

```
━━━━━━━━━━━━━━━━━━━━━━
[배경: #1a1a1a]

[중앙 - 격자형 수치]

  14        9
  템플릿 파일  페이지 종류

  75%       1주
  이미지 용량 절감  기획~배포 기간

[하단]
  플러그인 없이, 바닐라 코드로.
━━━━━━━━━━━━━━━━━━━━━━
```

**카피라이팅 (복붙용)**
```
결과 수치

14        9
템플릿 파일  페이지 종류

75%       1주일
이미지 절감   기획→배포

플러그인 없이.
바닐라 코드로.
```

---

### A-8 | 마무리 CTA 카드 (마지막 장)

**레이아웃**: 연락처 + 링크 + 해시태그

```
━━━━━━━━━━━━━━━━━━━━━━
[배경: 그라데이션 #1a1a1a → #003380]

[중앙]
  전체 코드는 GitHub에 공개되어 있습니다.
  
  github.com/[your-id]/wordpress-dev

[하단]
  궁금한 점이 있으시면 DM 주세요 😊

  #WordPress개발  #PHP  #웹개발포트폴리오
  #프론트엔드  #백엔드  #커스텀테마
  #도커  #개발자  #취준생  #포트폴리오
━━━━━━━━━━━━━━━━━━━━━━
```

**카피라이팅 (복붙용)**
```
전체 코드는 GitHub에 공개되어 있습니다.
프로필 링크에서 확인해보세요 🔗

궁금한 점이 있으시면 DM 주세요 😊

#WordPress개발 #PHP #웹개발포트폴리오
#프론트엔드 #백엔드 #커스텀테마
#도커 #개발자 #취준생 #포트폴리오
#TailwindCSS #풀스택 #개발블로그
```

---

---

# 📦 버전 B — "기술 하이라이트형" (임팩트 강조)
> **컨셉**: 핵심 기술 하나씩 깊게 파고드는 테크 카드  
> **타깃**: 기술에 관심 있는 개발자, 테크 팔로워  
> **톤앤매너**: 심플하고 임팩트 있는 기술 설명  
> **슬라이드 수**: 6장

---

### B-1 | 커버

**카피라이팅 (복붙용)**
```
WordPress
커스텀 테마를
바닥부터 만들면
이런 것들을 배웁니다.

PHP · Tailwind · Docker · SEO

6가지 핵심 기술 →
```

---

### B-2 | 기술 #1 — Template Hierarchy

**카피라이팅 (복붙용)**
```
🔹 기술 01 / 06
WordPress Template Hierarchy

홈페이지에 접속하면
WordPress는 이 순서로 파일을 찾습니다:

front-page.php  ← 우리가 만든 파일
   ↓ 없으면
home.php
   ↓ 없으면
index.php

파일 이름 하나가 전체 렌더링을 결정합니다.
```

---

### B-3 | 기술 #2 — wp_enqueue 패턴

**카피라이팅 (복붙용)**
```
🔹 기술 02 / 06
wp_enqueue — 올바른 스크립트 로딩

❌ 잘못된 방법
<script src="aos.js"></script>
(헤더에 하드코딩 → 플러그인과 충돌 가능)

✅ WordPress 방식
wp_enqueue_script(
  'aos-js',
  'https://...',
  [], '2.3.1',
  true ← 이게 핵심! body 마지막에 삽입
);

마지막 인자 true = 렌더링 블로킹 방지
```

---

### B-4 | 기술 #3 — WebP 자동 변환

**카피라이팅 (복붙용)**
```
🔹 기술 03 / 06
서버 사이드 WebP 변환 파이프라인

add_filter(
  'wp_handle_upload',
  'iel_convert_to_webp'
);

워크플로우:
관리자가 JPEG 업로드
  → PHP GD가 WebP로 변환 (82% 품질)
  → 원본 삭제
  → 용량 최대 75% 절감

Lighthouse "차세대 이미지 제공" ✅
```

---

### B-5 | 기술 #4 — FOUC 방지

**카피라이팅 (복붙용)**
```
🔹 기술 04 / 06
다크모드 FOUC 방지 패턴

FOUC = Flash of Unstyled Content
(흰 화면이 잠깐 깜빡이는 현상)

해결책: IIFE를 <head> 안에 배치

(function() {
  var theme = localStorage.getItem('theme');
  if (theme === 'dark') {
    document.documentElement
      .classList.add('dark');
  }
})();

body 렌더링 전에 즉시 실행 → 깜빡임 0
```

---

### B-6 | 기술 #5 — JSON-LD 구조화 데이터

**카피라이팅 (복붙용)**
```
🔹 기술 05 / 06
JSON-LD — 구글에게 직접 알려주는 언어

{
  "@type": "LegalService",
  "name": "법무법인 이엘",
  "telephone": "02-000-0000",
  "openingHours": "Mo-Fr 09:00-18:00"
}

이 코드 한 블록이
구글 검색 결과를 리치 스니펫으로 만듭니다.

Schema.org 표준 → 검색 노출 품질 향상
```

---

### B-7 | 기술 #6 — Docker 개발환경

**카피라이팅 (복붙용)**
```
🔹 기술 06 / 06
Docker로 개발환경 통일하기

docker compose up -d

이 한 줄로:
✅ WordPress 서버 기동
✅ MySQL 데이터베이스 연결
✅ 파일 변경 즉시 반영 (볼륨 마운트)
✅ 어떤 PC에서도 동일한 환경

"내 PC에서는 됩니다" 현상 완전 제거
```

---

---

# 📦 버전 C — "Before / After형" (직관적 대비)
> **컨셉**: 문제 vs 해결 구조로 임팩트 있게 전달  
> **타깃**: 비개발자 / 기술 채용 담당자 / 일반 팔로워  
> **톤앤매너**: 쉽고 명확한 대비 서술  
> **슬라이드 수**: 6장

---

### C-1 | 커버

**카피라이팅 (복붙용)**
```
문제가 있었습니다.
그리고 해결했습니다.

법무법인 홈페이지 개발
Before & After

WordPress  ·  PHP  ·  Docker
```

---

### C-2 | Before vs After #1 — 이미지 문제

**레이아웃 가이드**
```
좌측 절반: 빨간 배경 (Before)
우측 절반: 초록 배경 (After)
중앙 구분선: 세로 흰 선
```

**카피라이팅 (복붙용)**
```
BEFORE ←        → AFTER

❌ 이미지 업로드    ✅ 자동으로 변환
   JPEG 5MB        WebP 1.2MB

관리자가 무거운 파일을 올려도
서버가 알아서 WebP로 변환합니다.

파일 크기 -75%
```

---

### C-3 | Before vs After #2 — 환경 문제

**카피라이팅 (복붙용)**
```
BEFORE ←        → AFTER

❌ 로컬에서       ✅ 어디서나
   이미지 깨짐       정상 작동

http://localhost:8080/wp-content/...
(포트가 달라지면 이미지가 엑스박스)

/wp-content/themes/iel-theme/...
(상대경로 → 환경에 무관하게 정상 렌더링)
```

---

### C-4 | Before vs After #3 — 다크모드

**카피라이팅 (복붙용)**
```
BEFORE ←        → AFTER

❌ 페이지 로딩 시   ✅ 깜빡임 없음
   흰 화면 깜빡임     즉시 다크 적용

FOUC(Flash of Unstyled Content)

<head> 안에 IIFE 배치로
body가 그려지기 전에 다크 클래스 주입.
```

---

### C-5 | Before vs After #4 — SEO

**카피라이팅 (복붙용)**
```
BEFORE ←        → AFTER

❌ 구글 검색에서   ✅ 리치 스니펫으로
   밋밋한 파란 링크   전화번호까지 표시

JSON-LD Schema.org 구조화 데이터 +
페이지별 맞춤 Meta Description +
Open Graph 태그

검색 품질이 달라집니다.
```

---

### C-6 | 마무리 CTA

**카피라이팅 (복붙용)**
```
문제를 정의하고
해결 방법을 찾고
코드로 증명했습니다.

전체 소스코드 → 프로필 링크 GitHub

#웹개발 #WordPress #포트폴리오
#PHP #개발자 #취준 #프론트엔드
```

---

---

# 📦 버전 D — "미니멀 한 줄 인사이트형" (감성 개발자 카드)
> **컨셉**: 개발하면서 깨달은 인사이트를 짧고 감성적으로 전달  
> **타깃**: 개발자 커뮤니티, 팔로워 유입용  
> **톤앤매너**: 깔끔하고 여운 있는 문장  
> **슬라이드 수**: 단독 카드로 각각 사용 가능 (릴스 커버로도 활용 가능)

---

### D-1 | 인사이트 카드 #1

**카피라이팅 (복붙용)**
```
코드는 실행되는 문서입니다.

읽히지 않는 코드는
작동해도 의미가 없습니다.

— WordPress 커스텀 테마를 만들며
```

---

### D-2 | 인사이트 카드 #2

**카피라이팅 (복붙용)**
```
플러그인 하나가
편리함과 동시에
자유를 빼앗습니다.

직접 만들면
내가 원하는 대로 됩니다.

— Elementor 대신 커스텀 테마를 선택하며
```

---

### D-3 | 인사이트 카드 #3

**카피라이팅 (복붙용)**
```
예외 처리는
귀찮은 일이 아닙니다.

DB에 포스트가 하나도 없어도
레이아웃이 무너지지 않게 하는 것,
그게 프로덕션 품질입니다.

— WP_Query Fallback 패턴을 구현하며
```

---

### D-4 | 인사이트 카드 #4

**카피라이팅 (복붙용)**
```
절대경로는 지뢰입니다.

localhost:8080에서는 되는데
localhost:8088에서는 깨집니다.

상대경로로 짜면
어디서든 됩니다.

— 도메인 독립 아키텍처를 설계하며
```

---

### D-5 | 인사이트 카드 #5

**카피라이팅 (복붙용)**
```
사용자는 깜빡임을 기억합니다.

다크모드가 0.1초라도 늦게 적용되면
그 흰 화면이 눈에 남습니다.

IIFE 다섯 줄로 그 찰나를 없앴습니다.

— FOUC 방지 패턴을 구현하며
```

---

---

# 🖼️ AI 이미지 프롬프트 모음 (배경 이미지용)

> Midjourney, DALL-E 3, Adobe Firefly, Canva AI 등에서 사용 가능

---

### 다크 테크 배경 (버전 A·B 커버용)

```
Dark minimal developer workspace background, charcoal black texture #1a1a1a,
subtle electric blue accent glow, floating abstract code fragments,
clean and premium aesthetic, no text, cinematic lighting, 8K quality --ar 1:1
```

---

### 법률 오피스 배경 (법무법인 테마)

```
Premium law office interior, dark wood desk, soft warm lighting,
minimalist modern Korean legal firm atmosphere, bookshelves with legal volumes,
blurred background bokeh effect, professional, cinematic, no people --ar 1:1
```

---

### 코드 에디터 배경 (기술 카드용)

```
Dark code editor screen close-up, PHP and JavaScript syntax highlighting,
green and blue terminal glow, bokeh effect, programmer aesthetic,
moody ambient light, no readable text, abstract --ar 1:1
```

---

### 그라데이션 배경 (CTA 카드용)

```
Smooth dark gradient background transitioning from deep black #1a1a1a
to royal blue #003380, subtle noise texture, professional tech brand feel,
no text, clean minimal --ar 1:1
```

---

### 모바일 목업 배경 (반응형 카드용)

```
Clean floating smartphone and laptop mockup display on soft gray background,
minimal design, professional product photography style, soft shadows,
tech portfolio card aesthetic, white/light gray background --ar 1:1
```

---

---

# 📋 인스타그램 본문 캡션 (복붙용)

> 카드뉴스와 함께 올리는 본문 텍스트입니다.

---

### 캡션 버전 1 — 스토리텔링

```
법무법인 홈페이지를 WordPress로 처음부터 만들었습니다. 🏛️

플러그인 하나 없이, PHP와 Tailwind CSS만으로
14개의 템플릿 파일을 직접 작성했습니다.

가장 어려웠던 건 기술이 아니라
"왜 이 선택을 했는가"를 설명하는 일이었습니다.

카드를 넘기시면 개발 과정을 확인하실 수 있어요 →

.
.
.
#WordPress개발 #PHP #TailwindCSS #웹개발포트폴리오
#프론트엔드 #백엔드 #커스텀테마 #도커 #Docker
#개발자 #취준생 #포트폴리오 #웹디자인 #SEO
#풀스택 #개발블로그 #코딩 #법무법인 #홈페이지제작
```

---

### 캡션 버전 2 — 기술 설명형

```
이미지를 올리면 자동으로 WebP로 변환되게 만들었습니다. 📸

PHP GD 라이브러리를 활용해
`wp_handle_upload` 필터를 후킹하는 방식인데요,

덕분에 파일 크기가 평균 75% 줄었고
Lighthouse "차세대 이미지" 기준도 통과했습니다.

구체적인 코드는 카드에서 확인하세요 →

.
.
.
#WordPress #PHP #WebP #성능최적화 #Lighthouse
#웹개발 #개발자 #백엔드 #이미지최적화
#포트폴리오 #취준 #풀스택개발자 #코딩
```

---

### 캡션 버전 3 — 짧고 임팩트 있는 버전

```
플러그인 0개.
코드 14개 파일.
개발 기간 1주.

법무법인 WordPress 커스텀 테마
처음부터 끝까지 혼자 만든 기록입니다.

→ 전체 코드: 프로필 링크 GitHub

#WordPress #포트폴리오 #개발자 #PHP #취준
```

---

---

# ✅ 제작 체크리스트

```
[ ] Canva 또는 Figma 1080×1080 프레임 생성
[ ] 컬러 팔레트 등록 (#1a1a1a, #006eff, #eef4ff)
[ ] Pretendard 폰트 설치 (또는 Noto Sans KR 대체)
[ ] AI 이미지 프롬프트로 배경 이미지 생성
[ ] 각 카드 카피라이팅 붙여넣기
[ ] 로고 / 이름 / SNS 핸들 추가
[ ] 슬라이드 순서 확인 (첫 장이 가장 중요!)
[ ] 모바일에서 미리보기 확인 (텍스트가 가리지 않는지)
[ ] 해시태그 캡션 붙여넣기
[ ] 업로드 최적 시간: 평일 저녁 7~9시
```

---

*문서 작성: 이영현 · 2026년 7월*
