# 📄 JSON-LD 구조화 데이터 적용 작업계획서 (Technical SEO)

이 문서는 **법무법인 파라딘(PARADIN)** 워드프레스 테마에 JSON-LD 기반 구조화 데이터를 성공적으로 이식하여 검색 엔진 최적화(SEO) 및 리치 검색 결과를 얻기 위한 기술 작업계획서입니다.

---

## 1. JSON-LD의 역사와 배경 (History & Evolution)

우리가 웹 서핑을 할 때 눈으로 보는 정보는 인간에게 맞춤화된 시각적 디자인입니다. 하지만 구글이나 네이버 같은 검색엔진 로봇은 웹페이지의 텍스트가 '회사 전화번호'인지, '대표 변호사 이름'인지, '채용 공고 내용'인지 정확히 구분하기 어렵습니다. 이 문제를 해결하기 위해 **시맨틱 웹(Semantic Web)**의 개념이 등장했습니다.

### 📜 웹 메타데이터 기술의 변천사

| 기술 규격 | 등장 배경 및 특징 | 한계점 |
| :--- | :--- | :--- |
| **Microformats**<br>(마이크로포맷) | HTML의 `class` 속성 등을 이용하여 의미 정보를 담으려고 한 초기 시도입니다. | 표준이 통일되지 못했고 표현할 수 있는 구조화 데이터의 한계가 명확했습니다. |
| **RDFa** | HTML 문서에 확장 XML 메타데이터를 삽입하는 방식입니다. | 문법이 너무 복잡하여 개발자들이 배우고 유지보수하기가 매우 까다로웠습니다. |
| **Microdata**<br>(마이크로데이터) | HTML5 태그 안에 `itemscope`, `itemtype` 등의 속성을 직접 삽입하는 방식입니다. | HTML 마크업 구조와 데이터 구조가 뒤엉켜 디자인을 수정하면 검색 마크업까지 깨지는 치명적인 단점이 있었습니다. |
| **JSON-LD**<br>(W3C 표준) | **JSON for Linking Data**의 약자로, 마크업과 완전히 분리된 JSON 형식의 독립 스크립트를 주입하는 방식입니다. | **현재 구글, 네이버 등 글로벌 검색엔진의 표준 추천 포맷**으로 등극하였습니다. |

> [!NOTE]  
> W3C(World Wide Web Consortium)에서 제정된 JSON-LD는 기존 시맨틱 마크업의 복잡성과 디자인-데이터 결합 문제를 한 번에 해결한 현대 웹 표준의 결정체입니다.

---

## 2. 왜 JSON-LD를 사용해야 하는가? (Why JSON-LD?)

### ① 마크업과 로직의 완벽한 분리 (Separation of Concerns)
기존 Microdata 방식은 HTML 엘리먼트 내부에 속성을 일일이 쪼개 넣어야 해서 프론트엔드 개발자와 디자이너가 코드 수정 시 매우 고통받았습니다. 반면 JSON-LD는 웹페이지 내부 아무 곳에나 `<script type="application/ld+json">` 형태로 가두어 표현하므로 HTML 구조와 무관하게 안전하게 데이터를 관리할 수 있습니다.

### ② 가독성과 성능 최적화 (Clean Code & Fast Performance)
JSON 데이터 포맷을 그대로 사용하므로 백엔드(PHP)에서 `json_encode()` 함수를 이용해 가볍고 빠르게 빌드할 수 있으며, 개발자가 한눈에 데이터 구조를 파악하고 디버깅하기 쉽습니다. 웹 렌더링 차단 요소(Render-Blocking)가 아니기 때문에 웹사이트 성능에도 악영향을 주지 않습니다.

### ③ 리치 검색 결과(Rich Results) 제공을 통한 클릭률(CTR) 향상
구글 검색 결과창에서 일반적인 단순 텍스트 링크가 아니라 **로펌의 영업시간, 전화번호, 주소 위치, 채용 공고(연봉, 마감일, 근무지)** 등이 풍부하게 노출되는 **스니펫(Rich Snippets)** 혜택을 받을 수 있습니다. 이는 사용자의 신뢰도를 높이고 클릭률을 압도적으로 향상시킵니다.

---

## 3. 파라딘 테마 적용 계획 (Implementation Plan)

법무법인 파라딘 사이트의 신뢰도 향상과 프로그래머 채용 공고 노출을 타겟으로 하여 다음 2가지 스키마를 정밀하게 적용합니다.

### 📌 타겟 구조화 데이터 명세

- **1. LegalService Schema**
  - 대상: 메인페이지 & 법인소개
  - 정보: 상호명, 주소, 연락처, 로고, 소셜미디어
- **2. JobPosting Schema**
  - 대상: 인재 채용 페이지
  - 정보: 채용 직무, 계약 조건, 마감일, 근무처, 기업 정보

---

### 💻 세부 구현 방식

#### 1) 메인 및 회사 소개 페이지용 `LegalService` 스키마 동적 삽입
[functions.php](file:///c:/workdir/space-cap/wordpress-dev/wordpress/wp-content/themes/paradin-theme/functions.php)에 테마 로드 시 자동으로 헤더에 JSON-LD를 출력해주는 훅을 작성합니다.

```php
function paradin_inject_legal_service_schema() {
    // 홈 화면이거나 법인소개(about) 페이지일 때만 주입
    if (is_front_page() || is_page('about')) {
        $schema = array(
            "@context" => "https://schema.org",
            "@type" => "LegalService",
            "@id" => home_url('/#organization'),
            "name" => "법무법인 파라딘",
            "url" => home_url('/'),
            "logo" => get_template_directory_uri() . "/assets/images/logo.png",
            "image" => get_template_directory_uri() . "/assets/images/attorney_lee.png",
            "telephone" => "02-872-1307",
            "priceRange" => "$$$",
            "address" => array(
                "@type" => "PostalAddress",
                "streetAddress" => "서초대로 123길 45 법률타워 5층",
                "addressLocality" => "Seoul",
                "postalCode" => "06596",
                "addressCountry" => "KR"
            ),
            "geo" => array(
                "@type" => "GeoCoordinates",
                "latitude" => 37.4979,
                "longitude" => 127.0276
            ),
            "sameAs" => array(
                "https://www.youtube.com/c/paradin-law",
                "https://blog.naver.com/paradin-law"
            )
        );
        echo "\n" . '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) . '</script>' . "\n";
    }
}
add_action('wp_head', 'paradin_inject_legal_service_schema');
```

#### 2) 인재 채용 페이지용 `JobPosting` 스키마 동적 삽입
채용 페이지([page-careers.php](file:///c:/workdir/space-cap/wordpress-dev/wordpress/wp-content/themes/paradin-theme/page-careers.php)) 로딩 시 실제 채용 정보를 구조화하여 주입합니다. 구글 검색엔진의 **'구글 채용 정보(Google Jobs)'** 영역에 연동되도록 규격을 엄격히 맞춥니다.

```php
function paradin_inject_job_posting_schema() {
    if (is_page('careers')) {
        $schema = array(
            "@context" => "https://schema.org",
            "@type" => "JobPosting",
            "title" => "법무법인 파라딘 웹 프로그래머 채용",
            "description" => "<p>법무법인 파라딘에서 워드프레스 테마 커스터마이징 및 사내 시스템 자동화를 담당할 유능한 개발자를 모집합니다.</p>",
            "identifier" => array(
                "@type" => "PropertyValue",
                "name" => "PARADIN",
                "value" => "PARADIN-DEV-2026"
            ),
            "datePosted" => "2026-07-15",
            "validThrough" => "2026-08-31T23:59:59+09:00",
            "employmentType" => "FULL_TIME",
            "hiringOrganization" => array(
                "@type" => "Organization",
                "name" => "법무법인 파라딘",
                "sameAs" => home_url('/')
            ),
            "jobLocation" => array(
                "@type" => "Place",
                "address" => array(
                    "@type" => "PostalAddress",
                    "streetAddress" => "서초대로 123길 45 법률타워 5층",
                    "addressLocality" => "Seoul",
                    "postalCode" => "06596",
                    "addressCountry" => "KR"
                )
            )
        );
        echo "\n" . '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) . '</script>' . "\n";
    }
}
add_action('wp_head', 'paradin_inject_job_posting_schema');
```

---

## 4. 검증 및 테스트 계획 (Verification Plan)

구조화 데이터가 올바른 표준 문법에 맞게 헤더에 삽입되었는지 검증하기 위해 다음의 방법들을 수행합니다.

### 🧪 검증 방법론
1. **로컬 코드 검증:** 브라우저 개발자 도구(`Ctrl + Shift + I`)를 열고 헤더 영역(`<head>`)에 `<script type="application/ld+json">` 태그가 이중 에스케이프 없이 올바른 JSON 포맷으로 생성되는지 확인합니다.
2. **구글 리치 결과 테스트 도구 사용:**
   - [Google Rich Results Test (구글 리치 결과 테스트)](https://search.google.com/test/rich-results)에 코드를 직접 복사/붙여넣기 하거나 배포된 URL을 입력하여 경고(Warning) 또는 오류(Error)가 없는지 확인합니다.
3. **스키마 마크업 검증 도구(Schema Markup Validator):**
   - [Schema.org Validator](https://validator.schema.org/)를 이용해 W3C 및 schema.org 표준에 위배되는 속성이 없는지 최종 검사합니다.
