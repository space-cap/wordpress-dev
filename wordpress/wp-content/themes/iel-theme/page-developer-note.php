<?php
/**
 * Template Name: 개발자 노트 (Developer's Note)
 * 
 * 법무법인 이엘 커스텀 WordPress 테마 개발 포트폴리오 페이지.
 * 채용 담당자가 기술 역량과 개발 의도를 확인할 수 있도록 구성됩니다.
 */

get_header();
?>

<!-- 페이지 히어로 섹션 -->
<section class="dev-note-hero">
    <div class="dev-note-hero-inner">
        <div class="dev-note-hero-badge" data-aos="fade-down">
            <span class="dev-note-badge-dot"></span>
            포트폴리오 · 채용 지원
        </div>
        <h1 class="dev-note-hero-title" data-aos="fade-up" data-aos-delay="100">
            Developer's Note<br>
            <span class="dev-note-hero-subtitle-ko">개발자 노트</span>
        </h1>
        <p class="dev-note-hero-desc" data-aos="fade-up" data-aos-delay="200">
            본 사이트는 <strong>법무법인 이엘(IEL)의 프로그래머 채용 지원</strong>을 위해<br class="hidden lg:block">
            커스텀 WordPress 테마를 처음부터 직접 개발한 모의 리뉴얼 프로젝트입니다.
        </p>
        <!-- 기술 스택 태그 배지 -->
        <div class="dev-note-hero-tags" data-aos="fade-up" data-aos-delay="300">
            <span class="dev-tag dev-tag-php">PHP 8</span>
            <span class="dev-tag dev-tag-wp">WordPress</span>
            <span class="dev-tag dev-tag-tw">Tailwind CSS</span>
            <span class="dev-tag dev-tag-js">Vanilla JS</span>
            <span class="dev-tag dev-tag-docker">Docker</span>
            <span class="dev-tag dev-tag-git">Git</span>
        </div>
    </div>
    <!-- 스크롤 인디케이터 -->
    <div class="dev-note-scroll-indicator">
        <div class="dev-note-scroll-mouse">
            <div class="dev-note-scroll-wheel"></div>
        </div>
    </div>
</section>

<!-- 섹션 내비게이션 -->
<nav class="dev-note-tab-nav" id="dev-note-nav">
    <div class="dev-note-tab-nav-inner">
        <a href="#section-problems" class="dev-note-tab active" id="tab-1">
            <span class="dev-note-tab-num">01</span>
            기존 사이트 문제점 분석
        </a>
        <a href="#section-purpose" class="dev-note-tab" id="tab-2">
            <span class="dev-note-tab-num">02</span>
            커스텀 테마 개발 목적
        </a>
        <a href="#section-stack" class="dev-note-tab" id="tab-3">
            <span class="dev-note-tab-num">03</span>
            기술 스택 및 성과
        </a>
    </div>
</nav>

<!-- ===================================================
     섹션 01: 기존 사이트 문제점 분석
     =================================================== -->
<section class="dev-note-section" id="section-problems">
    <div class="dev-note-container">
        <!-- 섹션 헤더 -->
        <div class="dev-note-section-header" data-aos="fade-up">
            <div class="dev-note-section-num">01</div>
            <div>
                <h2 class="dev-note-section-title">기존 사이트 문제점 분석</h2>
                <p class="dev-note-section-desc">
                    <code class="dev-code">https://iel.im/</code> 원본 사이트를 Chrome DevTools, Lighthouse, PageSpeed
                    Insights로 직접 분석하여 개선 기회를 도출했습니다.
                </p>
            </div>
        </div>

        <!-- 문제점 카드 그리드 -->
        <div class="dev-note-problems-grid">

            <!-- 성능 -->
            <div class="dev-problem-card" data-aos="fade-up" data-aos-delay="100">
                <div class="dev-problem-icon" style="background: linear-gradient(135deg, #ff6b6b, #ee5a24);">
                    <svg width="22" height="22" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="dev-problem-title">성능 (Performance)</h3>
                <ul class="dev-problem-list">
                    <li>
                        <span class="dev-problem-badge bad">문제</span>
                        일부 이미지가 JPG/PNG 형식으로 서비스 — 차세대 포맷(WebP) 미적용
                    </li>
                    <li>
                        <span class="dev-problem-badge bad">문제</span>
                        외부 폰트·스크립트가 FCP(First Contentful Paint) 지연 유발 가능성
                    </li>
                    <li>
                        <span class="dev-problem-badge bad">문제</span>
                        Hero 배경 영상이 페이지 진입 즉시 스트리밍 — 초기 로드 부담
                    </li>
                    <li>
                        <span class="dev-problem-badge good">개선</span>
                        PHP GD 라이브러리로 업로드 시 WebP 자동 변환 <em>(평균 30~50% 용량 절감)</em>
                    </li>
                    <li>
                        <span class="dev-problem-badge good">개선</span>
                        <code class="dev-code">wp_enqueue_*</code> 훅으로 CSS/JS 로드 순서 최적화
                    </li>
                </ul>
            </div>

            <!-- SEO -->
            <div class="dev-problem-card" data-aos="fade-up" data-aos-delay="200">
                <div class="dev-problem-icon" style="background: linear-gradient(135deg, #f9ca24, #f0932b);">
                    <svg width="22" height="22" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <h3 class="dev-problem-title">SEO 검색 최적화</h3>
                <ul class="dev-problem-list">
                    <li>
                        <span class="dev-problem-badge bad">문제</span>
                        페이지별 고유 <code class="dev-code">meta description</code> 태그 부재
                    </li>
                    <li>
                        <span class="dev-problem-badge bad">문제</span>
                        SNS 공유용 Open Graph 태그 (<code class="dev-code">og:title</code>, <code
                            class="dev-code">og:image</code>) 없음
                    </li>
                    <li>
                        <span class="dev-problem-badge bad">문제</span>
                        일부 영역 시맨틱 태그 부족, 헤딩 계층 검토 필요
                    </li>
                    <li>
                        <span class="dev-problem-badge good">개선</span>
                        <code class="dev-code">functions.php</code>에서 slug별 description 자동 주입
                    </li>
                    <li>
                        <span class="dev-problem-badge good">개선</span>
                        OG 태그 + <code class="dev-code">&lt;section&gt;</code>, <code
                            class="dev-code">&lt;article&gt;</code> 시맨틱 구조 정비
                    </li>
                </ul>
            </div>

            <!-- 접근성 -->
            <div class="dev-problem-card" data-aos="fade-up" data-aos-delay="300">
                <div class="dev-problem-icon" style="background: linear-gradient(135deg, #6c5ce7, #a29bfe);">
                    <svg width="22" height="22" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                </div>
                <h3 class="dev-problem-title">접근성 (Accessibility)</h3>
                <ul class="dev-problem-list">
                    <li>
                        <span class="dev-problem-badge bad">문제</span>
                        드롭다운 메뉴가 마우스 <code class="dev-code">hover</code>에만 반응 — 키보드 접근 불가
                    </li>
                    <li>
                        <span class="dev-problem-badge bad">문제</span>
                        배경 동영상에 <code class="dev-code">aria-hidden="true"</code> 미적용 — 스크린리더 혼란
                    </li>
                    <li>
                        <span class="dev-problem-badge bad">문제</span>
                        투명 GNB 상태에서 일부 텍스트 명도 대비 WCAG 2.1 AA 기준 미달 가능성
                    </li>
                    <li>
                        <span class="dev-problem-badge good">개선</span>
                        JS <code class="dev-code">focus</code> 이벤트 추가로 키보드 내비게이션 지원
                    </li>
                    <li>
                        <span class="dev-problem-badge good">개선</span>
                        배경 요소에 <code class="dev-code">aria-hidden</code> 처리, 색상 대비 검토 후 조정
                    </li>
                </ul>
            </div>

            <!-- 유지보수성 -->
            <div class="dev-problem-card" data-aos="fade-up" data-aos-delay="400">
                <div class="dev-problem-icon" style="background: linear-gradient(135deg, #00b894, #00cec9);">
                    <svg width="22" height="22" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                    </svg>
                </div>
                <h3 class="dev-problem-title">유지보수성</h3>
                <ul class="dev-problem-list">
                    <li>
                        <span class="dev-problem-badge bad">문제</span>
                        배포 환경 공유 불가 — "내 PC에서는 됩니다" 현상 발생 가능
                    </li>
                    <li>
                        <span class="dev-problem-badge bad">문제</span>
                        콘텐츠 수정을 위해 HTML 직접 편집 필요 추정
                    </li>
                    <li>
                        <span class="dev-problem-badge bad">문제</span>
                        코드 이력(버전 관리) 추적 어려움
                    </li>
                    <li>
                        <span class="dev-problem-badge good">개선</span>
                        <code class="dev-code">docker-compose.yml</code> 한 줄로 1분 내 동일 환경 재현
                    </li>
                    <li>
                        <span class="dev-problem-badge good">개선</span>
                        WordPress CMS — 비개발자도 게시물·채용공고 직접 관리 가능
                    </li>
                </ul>
            </div>

        </div><!-- /dev-note-problems-grid -->
    </div>
</section>

<!-- ===================================================
     섹션 02: 커스텀 테마 개발 목적
     =================================================== -->
<section class="dev-note-section dev-note-section-alt" id="section-purpose">
    <div class="dev-note-container">
        <!-- 섹션 헤더 -->
        <div class="dev-note-section-header" data-aos="fade-up">
            <div class="dev-note-section-num">02</div>
            <div>
                <h2 class="dev-note-section-title">커스텀 테마 개발 목적</h2>
                <p class="dev-note-section-desc">
                    왜 Elementor 같은 페이지 빌더 대신 처음부터 직접 PHP 템플릿을 작성했는지, 그 기술적 의사결정 근거를 설명합니다.
                </p>
            </div>
        </div>

        <!-- 비교 테이블 -->
        <div class="dev-note-compare-wrap" data-aos="fade-up" data-aos-delay="100">
            <div class="dev-note-compare-header">
                <div class="dev-note-compare-vs">
                    <span class="dev-compare-label elementor">Elementor 빌더</span>
                    <span class="dev-compare-vs-text">vs</span>
                    <span class="dev-compare-label custom">iel-theme 커스텀</span>
                </div>
            </div>
            <div class="dev-note-compare-table-wrap">
                <table class="dev-note-compare-table">
                    <thead>
                        <tr>
                            <th>비교 항목</th>
                            <th class="text-center">Elementor</th>
                            <th class="text-center highlight-col">iel-theme 커스텀</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>개발 자유도</strong></td>
                            <td class="text-center"><span class="dev-compare-bad">플러그인 제약 내</span></td>
                            <td class="text-center highlight-col"><span class="dev-compare-good">PHP 100% 완전 제어</span>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>성능</strong></td>
                            <td class="text-center"><span class="dev-compare-bad">CSS/JS 수백 KB 자동 포함</span></td>
                            <td class="text-center highlight-col"><span class="dev-compare-good">필요한 리소스만 선택적 로드</span>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>SEO 제어</strong></td>
                            <td class="text-center"><span class="dev-compare-bad">구조화 데이터 주입 제한</span></td>
                            <td class="text-center highlight-col"><span class="dev-compare-good">wp_head() 훅으로 완전
                                    제어</span></td>
                        </tr>
                        <tr>
                            <td><strong>채용 어필</strong></td>
                            <td class="text-center"><span class="dev-compare-neutral">드래그&amp;드롭 역량 증명</span></td>
                            <td class="text-center highlight-col"><span class="dev-compare-good">PHP · JS · CSS 실력 직접
                                    증명</span></td>
                        </tr>
                        <tr>
                            <td><strong>기술 복잡도</strong></td>
                            <td class="text-center"><span class="dev-compare-neutral">코딩 불필요</span></td>
                            <td class="text-center highlight-col"><span class="dev-compare-good">템플릿 계층 · Hook · 바닐라
                                    JS</span></td>
                        </tr>
                        <tr>
                            <td><strong>환경 재현</strong></td>
                            <td class="text-center"><span class="dev-compare-bad">설치·환경 매번 별도 구성</span></td>
                            <td class="text-center highlight-col"><span class="dev-compare-good">Docker — 60초 내 즉시
                                    재현</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- WordPress + Docker 선택 이유 카드 -->
        <div class="dev-note-reason-grid">
            <div class="dev-reason-card" data-aos="fade-up" data-aos-delay="100">
                <div class="dev-reason-emoji">🔵</div>
                <h3 class="dev-reason-title">WordPress 선택 이유</h3>
                <ul class="dev-reason-list">
                    <li>뉴스·칼럼 콘텐츠의 <strong>지속적 업데이트</strong> — 비개발자도 CMS로 관리 가능</li>
                    <li>채용공고·법률 인사이트 <strong>구조화된 게시 시스템</strong> 기본 탑재</li>
                    <li>플러그인 생태계 — <strong>미래 기능 확장</strong> 용이</li>
                    <li>전 세계 CMS 시장 점유율 <strong>1위(43%)</strong> — 가장 범용적인 기술</li>
                </ul>
            </div>
            <div class="dev-reason-card" data-aos="fade-up" data-aos-delay="200">
                <div class="dev-reason-emoji">🐳</div>
                <h3 class="dev-reason-title">Docker 선택 이유</h3>
                <div class="dev-reason-code">
                    <div class="dev-reason-code-line dev-code-comment"># 문제</div>
                    <div class="dev-reason-code-line">"내 PC에서는 됩니다"</div>
                    <div class="dev-reason-code-line dev-code-comment"># 원인: PHP·MySQL 버전 불일치</div>
                    <br>
                    <div class="dev-reason-code-line dev-code-comment"># 해결</div>
                    <div class="dev-reason-code-line"><span class="dev-code-cmd">$</span> docker compose up -d</div>
                    <div class="dev-reason-code-line dev-code-comment"># → 60초 내 동일 환경 즉시 재현</div>
                </div>
                <p class="dev-reason-note">Mac Mini, Windows WSL, Linux 서버 어디서나 동일하게 동작하는 이식성 확보</p>
            </div>
        </div>

    </div>
</section>

<!-- ===================================================
     섹션 03: 기술 스택 및 성과 어필
     =================================================== -->
<section class="dev-note-section" id="section-stack">
    <div class="dev-note-container">
        <!-- 섹션 헤더 -->
        <div class="dev-note-section-header" data-aos="fade-up">
            <div class="dev-note-section-num">03</div>
            <div>
                <h2 class="dev-note-section-title">기술 스택 및 성과 어필</h2>
                <p class="dev-note-section-desc">
                    사용한 기술 목록, 구현 난이도 하이라이트, 그리고 측정 가능한 개선 지표를 제시합니다.
                </p>
            </div>
        </div>

        <!-- 기술 스택 카드들 -->
        <div class="dev-stack-grid" data-aos="fade-up" data-aos-delay="100">

            <div class="dev-stack-group">
                <h3 class="dev-stack-group-title">🎨 프론트엔드</h3>
                <div class="dev-stack-cards">
                    <div class="dev-stack-card">
                        <div class="dev-stack-icon" style="background:#4f46e5;">PHP</div>
                        <div class="dev-stack-info">
                            <strong>PHP 8.x</strong>
                            <span>WordPress 템플릿 엔진 — 페이지별 독립 PHP 템플릿 8개 작성</span>
                        </div>
                    </div>
                    <div class="dev-stack-card">
                        <div class="dev-stack-icon" style="background:#0ea5e9;">TW</div>
                        <div class="dev-stack-info">
                            <strong>Tailwind CSS (CDN)</strong>
                            <span>유틸리티-퍼스트 스타일링 — 반응형 UI를 클래스명으로 직관적 구현</span>
                        </div>
                    </div>
                    <div class="dev-stack-card">
                        <div class="dev-stack-icon" style="background:#f59e0b;">JS</div>
                        <div class="dev-stack-info">
                            <strong>Vanilla JavaScript</strong>
                            <span>탭 인터랙션, Glassmorphism GNB, 다크모드 — 프레임워크 없이 순수 JS 구현</span>
                        </div>
                    </div>
                    <div class="dev-stack-card">
                        <div class="dev-stack-icon" style="background:#10b981;">AOS</div>
                        <div class="dev-stack-info">
                            <strong>AOS.js 2.3.1</strong>
                            <span>스크롤 트리거 애니메이션 — 자연스러운 콘텐츠 등장 효과</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dev-stack-group">
                <h3 class="dev-stack-group-title">⚙️ 백엔드 · 인프라</h3>
                <div class="dev-stack-cards">
                    <div class="dev-stack-card">
                        <div class="dev-stack-icon" style="background:#21759b;">WP</div>
                        <div class="dev-stack-info">
                            <strong>WordPress 6.x</strong>
                            <span>CMS 플랫폼 — Hook, Template Hierarchy, Custom Page 완전 활용</span>
                        </div>
                    </div>
                    <div class="dev-stack-card">
                        <div class="dev-stack-icon" style="background:#2496ed;">🐳</div>
                        <div class="dev-stack-info">
                            <strong>Docker + docker-compose</strong>
                            <span>개발 환경 컨테이너화 — 환경 재현성 100% 보장</span>
                        </div>
                    </div>
                    <div class="dev-stack-card">
                        <div class="dev-stack-icon" style="background:#f05032;">Git</div>
                        <div class="dev-stack-info">
                            <strong>Git 버전 관리</strong>
                            <span>모든 개발 과정을 커밋 이력으로 추적 가능</span>
                        </div>
                    </div>
                    <div class="dev-stack-card">
                        <div class="dev-stack-icon" style="background:#336791;">DB</div>
                        <div class="dev-stack-info">
                            <strong>MySQL 8.0 + Nginx</strong>
                            <span>WordPress 공식 지원 DB + 프로덕션 동일 웹서버 구성</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- 구현 난이도 하이라이트 -->
        <h3 class="dev-highlight-title" data-aos="fade-up">🏆 구현 난이도 하이라이트</h3>
        <div class="dev-highlight-grid">

            <div class="dev-highlight-card" data-aos="fade-up" data-aos-delay="100">
                <div class="dev-highlight-num">①</div>
                <div class="dev-highlight-content">
                    <h4>Glassmorphism GNB</h4>
                    <p>스크롤 전 완전 투명 → 스크롤 후 배경 블러 + 반투명. <code class="dev-code">scrollY</code> 값 감지 후 CSS 클래스 동적 토글.
                        다크/라이트 모드 각각 별도 처리.</p>
                </div>
            </div>

            <div class="dev-highlight-card" data-aos="fade-up" data-aos-delay="150">
                <div class="dev-highlight-num">②</div>
                <div class="dev-highlight-content">
                    <h4>인터랙티브 탭 컴포넌트</h4>
                    <p>Communication / Focus / Reasonable 탭 전환 시 텍스트·이미지·프로그레스 바 3가지 요소 동시 연동. <code
                            class="dev-code">requestAnimationFrame</code> 기반 부드러운 바 애니메이션 구현.</p>
                </div>
            </div>

            <div class="dev-highlight-card" data-aos="fade-up" data-aos-delay="200">
                <div class="dev-highlight-num">③</div>
                <div class="dev-highlight-content">
                    <h4>깜빡임 없는 다크모드</h4>
                    <p><code class="dev-code">localStorage</code> + 시스템 설정(<code
                            class="dev-code">prefers-color-scheme</code>) 감지. 페이지 로드 즉시 실행되는 인라인 IIFE 스크립트로 FOUC(깜빡임) 완전
                        방지.</p>
                </div>
            </div>

            <div class="dev-highlight-card" data-aos="fade-up" data-aos-delay="250">
                <div class="dev-highlight-num">④</div>
                <div class="dev-highlight-content">
                    <h4>WebP 자동 변환 파이프라인</h4>
                    <p>이미지 업로드 시 PHP GD 라이브러리로 JPEG/PNG → WebP 자동 변환. 원본 삭제로 디스크 용량 절약. 압축 품질 82%로 화질/용량 최적 균형점 적용.</p>
                </div>
            </div>

            <div class="dev-highlight-card" data-aos="fade-up" data-aos-delay="300">
                <div class="dev-highlight-num">⑤</div>
                <div class="dev-highlight-content">
                    <h4>페이지 자동 생성 시스템</h4>
                    <p>WordPress 활성화 시 <code class="dev-code">init</code> 훅으로 필요한 모든 페이지가 자동 생성. 슬러그 기반 템플릿 자동 연결. 개발자
                        없이도 즉시 사용 가능한 구조 설계.</p>
                </div>
            </div>

            <div class="dev-highlight-card" data-aos="fade-up" data-aos-delay="350">
                <div class="dev-highlight-num">⑥</div>
                <div class="dev-highlight-content">
                    <h4>포트폴리오 안내 배너</h4>
                    <p>채용 담당자가 사이트 목적을 즉시 파악할 수 있도록 최상단에 고정 배너 구현. <code class="dev-code">localStorage</code>로 닫힌 상태
                        영속화. CSS 변수로 GNB 위치 동적 조정.</p>
                </div>
            </div>

        </div><!-- /dev-highlight-grid -->

        <!-- 개선 지표 -->
        <h3 class="dev-highlight-title" data-aos="fade-up">📊 개선 지표 (Quantified Results)</h3>
        <div class="dev-metrics-grid" data-aos="fade-up" data-aos-delay="100">
            <div class="dev-metric-card">
                <div class="dev-metric-value">~60<span class="dev-metric-unit">KB</span></div>
                <div class="dev-metric-label">초기 JS 번들 크기<br><small>(AOS + Swiper 합계)</small></div>
                <div class="dev-metric-compare">Elementor 대비 ~89% 감소</div>
            </div>
            <div class="dev-metric-card">
                <div class="dev-metric-value">30~50<span class="dev-metric-unit">%</span></div>
                <div class="dev-metric-label">이미지 용량 절감<br><small>(WebP 자동 변환)</small></div>
                <div class="dev-metric-compare">업로드 즉시 자동 처리</div>
            </div>
            <div class="dev-metric-card">
                <div class="dev-metric-value">~60<span class="dev-metric-unit">초</span></div>
                <div class="dev-metric-label">환경 재현 시간<br><small>(docker compose up -d)</small></div>
                <div class="dev-metric-compare">기존 서버 셋업 대비 수십 배 단축</div>
            </div>
            <div class="dev-metric-card">
                <div class="dev-metric-value">8<span class="dev-metric-unit">개</span></div>
                <div class="dev-metric-label">PHP 페이지 템플릿<br><small>(페이지별 독립 제어)</small></div>
                <div class="dev-metric-compare">단일 빌더 템플릿 대비 완전 분리</div>
            </div>
        </div>

        <!-- CTA -->
        <div class="dev-note-cta" data-aos="fade-up" data-aos-delay="100">
            <p class="dev-note-cta-text">커스텀 WordPress 테마 개발의 전 과정이 GitHub에 기록되어 있습니다.</p>
            <div class="dev-note-cta-buttons">
                <a href="/" class="dev-cta-btn dev-cta-btn-primary">
                    <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    메인 홈페이지 보기
                </a>
                <a href="/contact/" class="dev-cta-btn dev-cta-btn-outline">
                    <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                    </svg>
                    채용 담당자 문의
                </a>
            </div>
        </div>

    </div>
</section>

<!-- ===================================================
     개발자 노트 전용 CSS
     =================================================== -->
<style>
    /* ---- 공통 레이아웃 ---- */
    .dev-note-hero {
        min-height: 100vh;
        background: linear-gradient(160deg, #0a0f1e 0%, #0d1b3e 40%, #0a1628 100%);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 140px 20px 80px;
        position: relative;
        overflow: hidden;
    }

    .dev-note-hero::before {
        content: '';
        position: absolute;
        inset: 0;
        background-image: radial-gradient(circle at 25% 40%, rgba(0, 110, 255, 0.15) 0%, transparent 50%),
            radial-gradient(circle at 75% 60%, rgba(99, 102, 241, 0.12) 0%, transparent 50%);
        pointer-events: none;
    }

    .dev-note-hero-inner {
        position: relative;
        z-index: 1;
        max-width: 900px;
    }

    .dev-note-hero-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: rgba(0, 110, 255, 0.15);
        border: 1px solid rgba(0, 110, 255, 0.3);
        border-radius: 100px;
        padding: 6px 18px;
        font-size: 13px;
        color: #93c5fd;
        font-weight: 600;
        letter-spacing: 0.05em;
        text-transform: uppercase;
        margin-bottom: 28px;
        font-family: 'Inter', sans-serif;
    }

    .dev-note-badge-dot {
        width: 7px;
        height: 7px;
        background: #60a5fa;
        border-radius: 50%;
        animation: badgePulse 2s ease-in-out infinite;
    }

    @keyframes badgePulse {

        0%,
        100% {
            opacity: 1;
            transform: scale(1);
        }

        50% {
            opacity: 0.5;
            transform: scale(0.8);
        }
    }

    .dev-note-hero-title {
        font-family: 'Lora', serif;
        font-size: clamp(36px, 7vw, 72px);
        font-weight: 700;
        color: #ffffff;
        line-height: 1.2;
        margin-bottom: 24px;
        letter-spacing: -0.01em;
    }

    .dev-note-hero-subtitle-ko {
        font-family: 'Pretendard', sans-serif;
        font-size: 0.55em;
        font-weight: 400;
        color: rgba(255, 255, 255, 0.6);
        display: block;
        margin-top: 8px;
        letter-spacing: 0.1em;
    }

    .dev-note-hero-desc {
        font-family: 'Pretendard', sans-serif;
        font-size: clamp(15px, 2vw, 18px);
        color: rgba(255, 255, 255, 0.7);
        line-height: 1.8;
        margin-bottom: 36px;
    }

    .dev-note-hero-desc strong {
        color: #60a5fa;
        font-weight: 700;
    }

    .dev-note-hero-tags {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 10px;
    }

    .dev-tag {
        font-size: 13px;
        font-weight: 700;
        font-family: 'Inter', monospace;
        padding: 5px 14px;
        border-radius: 6px;
        letter-spacing: 0.02em;
    }

    .dev-tag-php {
        background: rgba(79, 70, 229, 0.2);
        color: #a5b4fc;
        border: 1px solid rgba(79, 70, 229, 0.3);
    }

    .dev-tag-wp {
        background: rgba(33, 117, 155, 0.2);
        color: #7dd3fc;
        border: 1px solid rgba(33, 117, 155, 0.3);
    }

    .dev-tag-tw {
        background: rgba(14, 165, 233, 0.2);
        color: #7dd3fc;
        border: 1px solid rgba(14, 165, 233, 0.3);
    }

    .dev-tag-js {
        background: rgba(245, 158, 11, 0.2);
        color: #fcd34d;
        border: 1px solid rgba(245, 158, 11, 0.3);
    }

    .dev-tag-docker {
        background: rgba(36, 150, 237, 0.2);
        color: #7dd3fc;
        border: 1px solid rgba(36, 150, 237, 0.3);
    }

    .dev-tag-git {
        background: rgba(240, 80, 50, 0.2);
        color: #fca5a5;
        border: 1px solid rgba(240, 80, 50, 0.3);
    }

    /* 스크롤 인디케이터 */
    .dev-note-scroll-indicator {
        position: absolute;
        bottom: 32px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        flex-direction: column;
        align-items: center;
        animation: scrollBounce 2s ease-in-out infinite;
    }

    .dev-note-scroll-mouse {
        width: 22px;
        height: 36px;
        border: 2px solid rgba(255, 255, 255, 0.3);
        border-radius: 12px;
        display: flex;
        justify-content: center;
        padding-top: 6px;
    }

    .dev-note-scroll-wheel {
        width: 4px;
        height: 8px;
        background: rgba(255, 255, 255, 0.5);
        border-radius: 2px;
        animation: wheelScroll 1.5s ease-in-out infinite;
    }

    @keyframes scrollBounce {

        0%,
        100% {
            transform: translateX(-50%) translateY(0)
        }

        50% {
            transform: translateX(-50%) translateY(6px)
        }
    }

    @keyframes wheelScroll {

        0%,
        100% {
            transform: translateY(0);
            opacity: 1
        }

        70% {
            transform: translateY(8px);
            opacity: 0
        }
    }

    /* ---- 탭 내비게이션 ---- */
    .dev-note-tab-nav {
        position: sticky;
        top: calc(var(--banner-height, 48px) + 72px);
        z-index: 40;
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(12px);
        border-bottom: 1px solid rgba(0, 0, 0, 0.08);
    }

    html.dark .dev-note-tab-nav {
        background: rgba(11, 15, 25, 0.95);
        border-bottom-color: rgba(255, 255, 255, 0.08);
    }

    .dev-note-tab-nav-inner {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
        display: flex;
        overflow-x: auto;
        scrollbar-width: none;
    }

    .dev-note-tab-nav-inner::-webkit-scrollbar {
        display: none;
    }

    .dev-note-tab {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 18px 24px;
        font-family: 'Pretendard', sans-serif;
        font-size: 14px;
        font-weight: 600;
        color: #6b7280;
        text-decoration: none;
        white-space: nowrap;
        border-bottom: 2.5px solid transparent;
        transition: all 0.2s;
    }

    .dev-note-tab:hover {
        color: #006eff;
    }

    .dev-note-tab.active {
        color: #006eff;
        border-bottom-color: #006eff;
    }

    .dev-note-tab-num {
        font-size: 11px;
        font-weight: 700;
        color: #006eff;
        font-family: 'Inter', monospace;
        opacity: 0.7;
    }

    /* ---- 섹션 공통 ---- */
    .dev-note-section {
        padding: 96px 0;
    }

    .dev-note-section-alt {
        background: #f8faff;
    }

    html.dark .dev-note-section-alt {
        background: #0d1117;
    }

    .dev-note-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .dev-note-section-header {
        display: flex;
        align-items: flex-start;
        gap: 28px;
        margin-bottom: 64px;
    }

    .dev-note-section-num {
        font-size: 64px;
        font-weight: 900;
        font-family: 'Lora', serif;
        color: rgba(0, 110, 255, 0.1);
        line-height: 1;
        flex-shrink: 0;
        user-select: none;
    }

    .dev-note-section-title {
        font-family: 'Pretendard', sans-serif;
        font-size: clamp(22px, 3vw, 32px);
        font-weight: 800;
        color: #1a1a1a;
        margin-bottom: 12px;
        line-height: 1.3;
    }

    html.dark .dev-note-section-title {
        color: #f3f4f6;
    }

    .dev-note-section-desc {
        font-family: 'Pretendard', sans-serif;
        font-size: 15px;
        color: #6b7280;
        line-height: 1.7;
    }

    /* ---- 문제점 카드 ---- */
    .dev-note-problems-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(480px, 1fr));
        gap: 24px;
    }

    @media (max-width: 767px) {
        .dev-note-problems-grid {
            grid-template-columns: 1fr;
        }
    }

    .dev-problem-card {
        background: #fff;
        border: 1px solid rgba(0, 0, 0, 0.07);
        border-radius: 20px;
        padding: 28px;
        transition: transform 0.2s, box-shadow 0.2s;
    }

    .dev-problem-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 40px rgba(0, 0, 0, 0.1);
    }

    html.dark .dev-problem-card {
        background: #111827;
        border-color: rgba(255, 255, 255, 0.08);
    }

    .dev-problem-icon {
        width: 48px;
        height: 48px;
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        margin-bottom: 20px;
    }

    .dev-problem-title {
        font-family: 'Pretendard', sans-serif;
        font-size: 18px;
        font-weight: 800;
        color: #1a1a1a;
        margin-bottom: 16px;
    }

    html.dark .dev-problem-title {
        color: #f3f4f6;
    }

    .dev-problem-list {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .dev-problem-list li {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        font-family: 'Pretendard', sans-serif;
        font-size: 14px;
        color: #4b5563;
        line-height: 1.6;
    }

    html.dark .dev-problem-list li {
        color: #9ca3af;
    }

    .dev-problem-badge {
        font-size: 11px;
        font-weight: 700;
        padding: 2px 8px;
        border-radius: 4px;
        white-space: nowrap;
        flex-shrink: 0;
        margin-top: 2px;
        font-family: 'Inter', sans-serif;
    }

    .dev-problem-badge.bad {
        background: rgba(239, 68, 68, 0.1);
        color: #ef4444;
    }

    .dev-problem-badge.good {
        background: rgba(16, 185, 129, 0.1);
        color: #10b981;
    }

    /* ---- 비교 테이블 ---- */
    .dev-note-compare-wrap {
        background: #fff;
        border: 1px solid rgba(0, 0, 0, 0.07);
        border-radius: 20px;
        overflow: hidden;
        margin-bottom: 48px;
    }

    html.dark .dev-note-compare-wrap {
        background: #111827;
        border-color: rgba(255, 255, 255, 0.08);
    }

    .dev-note-compare-header {
        padding: 24px 28px 0;
    }

    .dev-note-compare-vs {
        display: flex;
        align-items: center;
        gap: 16px;
        flex-wrap: wrap;
    }

    .dev-compare-label {
        font-size: 14px;
        font-weight: 700;
        font-family: 'Pretendard', sans-serif;
        padding: 6px 16px;
        border-radius: 20px;
    }

    .dev-compare-label.elementor {
        background: rgba(239, 68, 68, 0.1);
        color: #ef4444;
    }

    .dev-compare-label.custom {
        background: rgba(0, 110, 255, 0.1);
        color: #006eff;
    }

    .dev-compare-vs-text {
        font-size: 14px;
        color: #9ca3af;
        font-weight: 600;
        font-family: 'Inter', sans-serif;
    }

    .dev-note-compare-table-wrap {
        overflow-x: auto;
        padding: 0 8px 8px;
    }

    .dev-note-compare-table {
        width: 100%;
        border-collapse: collapse;
        font-family: 'Pretendard', sans-serif;
        font-size: 14px;
    }

    .dev-note-compare-table th {
        padding: 14px 20px;
        text-align: left;
        font-size: 13px;
        font-weight: 700;
        color: #9ca3af;
        border-bottom: 1px solid rgba(0, 0, 0, 0.06);
        white-space: nowrap;
    }

    .dev-note-compare-table td {
        padding: 14px 20px;
        color: #374151;
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        vertical-align: middle;
    }

    html.dark .dev-note-compare-table td {
        color: #9ca3af;
    }

    html.dark .dev-note-compare-table th {
        border-bottom-color: rgba(255, 255, 255, 0.06);
    }

    html.dark .dev-note-compare-table td {
        border-bottom-color: rgba(255, 255, 255, 0.04);
    }

    .dev-note-compare-table .highlight-col {
        background: rgba(0, 110, 255, 0.03);
    }

    .dev-compare-good {
        color: #10b981;
        font-weight: 700;
    }

    .dev-compare-bad {
        color: #ef4444;
    }

    .dev-compare-neutral {
        color: #6b7280;
    }

    /* ---- 이유 카드 ---- */
    .dev-note-reason-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 24px;
    }

    .dev-reason-card {
        background: #fff;
        border: 1px solid rgba(0, 0, 0, 0.07);
        border-radius: 20px;
        padding: 28px;
    }

    html.dark .dev-reason-card {
        background: #111827;
        border-color: rgba(255, 255, 255, 0.08);
    }

    .dev-reason-emoji {
        font-size: 32px;
        margin-bottom: 16px;
    }

    .dev-reason-title {
        font-family: 'Pretendard', sans-serif;
        font-size: 18px;
        font-weight: 800;
        color: #1a1a1a;
        margin-bottom: 16px;
    }

    html.dark .dev-reason-title {
        color: #f3f4f6;
    }

    .dev-reason-list {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .dev-reason-list li {
        font-family: 'Pretendard', sans-serif;
        font-size: 14px;
        color: #4b5563;
        line-height: 1.6;
        padding-left: 18px;
        position: relative;
    }

    .dev-reason-list li::before {
        content: '▸';
        position: absolute;
        left: 0;
        color: #006eff;
    }

    html.dark .dev-reason-list li {
        color: #9ca3af;
    }

    .dev-reason-code {
        background: #0d1117;
        border-radius: 12px;
        padding: 16px 20px;
        font-family: 'Courier New', monospace;
        font-size: 13px;
        line-height: 1.8;
        margin-bottom: 12px;
    }

    .dev-reason-code-line {
        color: #e2e8f0;
    }

    .dev-code-comment {
        color: #6b7280;
        font-style: italic;
    }

    .dev-code-cmd {
        color: #10b981;
    }

    .dev-reason-note {
        font-family: 'Pretendard', sans-serif;
        font-size: 13px;
        color: #6b7280;
        line-height: 1.6;
    }

    /* ---- 기술 스택 ---- */
    .dev-stack-grid {
        display: flex;
        flex-direction: column;
        gap: 40px;
        margin-bottom: 64px;
    }

    .dev-stack-group-title {
        font-family: 'Pretendard', sans-serif;
        font-size: 18px;
        font-weight: 800;
        color: #1a1a1a;
        margin-bottom: 20px;
    }

    html.dark .dev-stack-group-title {
        color: #f3f4f6;
    }

    .dev-stack-cards {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
        gap: 16px;
    }

    .dev-stack-card {
        display: flex;
        align-items: flex-start;
        gap: 16px;
        background: #fff;
        border: 1px solid rgba(0, 0, 0, 0.07);
        border-radius: 16px;
        padding: 20px;
        transition: transform 0.2s, box-shadow 0.2s;
    }

    .dev-stack-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
    }

    html.dark .dev-stack-card {
        background: #111827;
        border-color: rgba(255, 255, 255, 0.08);
    }

    .dev-stack-icon {
        width: 44px;
        height: 44px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 12px;
        font-weight: 800;
        font-family: 'Inter', monospace;
        flex-shrink: 0;
    }

    .dev-stack-info {
        display: flex;
        flex-direction: column;
        gap: 4px;
    }

    .dev-stack-info strong {
        font-family: 'Pretendard', sans-serif;
        font-size: 15px;
        font-weight: 800;
        color: #1a1a1a;
    }

    html.dark .dev-stack-info strong {
        color: #f3f4f6;
    }

    .dev-stack-info span {
        font-family: 'Pretendard', sans-serif;
        font-size: 13px;
        color: #6b7280;
        line-height: 1.5;
    }

    /* ---- 하이라이트 ---- */
    .dev-highlight-title {
        font-family: 'Pretendard', sans-serif;
        font-size: 22px;
        font-weight: 800;
        color: #1a1a1a;
        margin-bottom: 28px;
    }

    html.dark .dev-highlight-title {
        color: #f3f4f6;
    }

    .dev-highlight-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(360px, 1fr));
        gap: 20px;
        margin-bottom: 64px;
    }

    @media (max-width: 767px) {
        .dev-highlight-grid {
            grid-template-columns: 1fr;
        }
    }

    .dev-highlight-card {
        display: flex;
        gap: 18px;
        background: #fff;
        border: 1px solid rgba(0, 0, 0, 0.07);
        border-radius: 16px;
        padding: 24px;
        transition: transform 0.2s;
    }

    .dev-highlight-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
    }

    html.dark .dev-highlight-card {
        background: #111827;
        border-color: rgba(255, 255, 255, 0.08);
    }

    .dev-highlight-num {
        font-size: 28px;
        font-weight: 900;
        font-family: 'Lora', serif;
        color: rgba(0, 110, 255, 0.2);
        line-height: 1;
        flex-shrink: 0;
    }

    .dev-highlight-content h4 {
        font-family: 'Pretendard', sans-serif;
        font-size: 16px;
        font-weight: 800;
        color: #1a1a1a;
        margin-bottom: 8px;
    }

    html.dark .dev-highlight-content h4 {
        color: #f3f4f6;
    }

    .dev-highlight-content p {
        font-family: 'Pretendard', sans-serif;
        font-size: 13.5px;
        color: #6b7280;
        line-height: 1.7;
        margin: 0;
    }

    .dev-code {
        font-family: 'Courier New', monospace;
        font-size: 0.9em;
        background: rgba(0, 110, 255, 0.08);
        color: #006eff;
        padding: 1px 6px;
        border-radius: 4px;
    }

    html.dark .dev-code {
        background: rgba(0, 110, 255, 0.15);
        color: #93c5fd;
    }

    /* ---- 지표 카드 ---- */
    .dev-metrics-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
        gap: 20px;
        margin-bottom: 64px;
    }

    .dev-metric-card {
        background: linear-gradient(135deg, #0d1b3e, #1a2f6e);
        border: 1px solid rgba(0, 110, 255, 0.2);
        border-radius: 20px;
        padding: 28px 24px;
        text-align: center;
    }

    .dev-metric-value {
        font-family: 'Lora', serif;
        font-size: 42px;
        font-weight: 700;
        color: #ffffff;
        line-height: 1;
        margin-bottom: 4px;
    }

    .dev-metric-unit {
        font-size: 20px;
        font-family: 'Pretendard', sans-serif;
        font-weight: 600;
        color: #60a5fa;
    }

    .dev-metric-label {
        font-family: 'Pretendard', sans-serif;
        font-size: 14px;
        font-weight: 600;
        color: rgba(255, 255, 255, 0.8);
        margin-bottom: 10px;
        line-height: 1.4;
    }

    .dev-metric-label small {
        font-size: 12px;
        color: rgba(255, 255, 255, 0.5);
        display: block;
        margin-top: 2px;
    }

    .dev-metric-compare {
        font-family: 'Pretendard', sans-serif;
        font-size: 12px;
        color: #10b981;
        font-weight: 600;
        background: rgba(16, 185, 129, 0.1);
        padding: 4px 10px;
        border-radius: 20px;
        display: inline-block;
    }

    /* ---- CTA ---- */
    .dev-note-cta {
        text-align: center;
        padding: 60px 20px;
        background: linear-gradient(135deg, #f0f4ff, #e8f0fe);
        border-radius: 24px;
        border: 1px solid rgba(0, 110, 255, 0.1);
    }

    html.dark .dev-note-cta {
        background: linear-gradient(135deg, #0d1b3e, #111827);
        border-color: rgba(0, 110, 255, 0.2);
    }

    .dev-note-cta-text {
        font-family: 'Pretendard', sans-serif;
        font-size: 18px;
        color: #374151;
        margin-bottom: 28px;
        font-weight: 500;
    }

    html.dark .dev-note-cta-text {
        color: #9ca3af;
    }

    .dev-note-cta-buttons {
        display: flex;
        justify-content: center;
        gap: 16px;
        flex-wrap: wrap;
    }

    .dev-cta-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 14px 28px;
        border-radius: 12px;
        font-family: 'Pretendard', sans-serif;
        font-size: 15px;
        font-weight: 700;
        text-decoration: none;
        transition: all 0.2s;
    }

    .dev-cta-btn-primary {
        background: #006eff;
        color: #fff;
    }

    .dev-cta-btn-primary:hover {
        background: #0055cc;
        transform: translateY(-2px);
        box-shadow: 0 8px 24px rgba(0, 110, 255, 0.3);
    }

    .dev-cta-btn-outline {
        background: #fff;
        color: #374151;
        border: 1.5px solid rgba(0, 0, 0, 0.12);
    }

    .dev-cta-btn-outline:hover {
        background: #f9fafb;
        transform: translateY(-2px);
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
    }

    html.dark .dev-cta-btn-outline {
        background: #1f2937;
        color: #f3f4f6;
        border-color: rgba(255, 255, 255, 0.1);
    }
</style>

<script>
    // 탭 내비게이션 활성 상태 처리
    (function () {
        const tabs = document.querySelectorAll('.dev-note-tab');
        const sections = ['section-problems', 'section-purpose', 'section-stack'];

        const observerOptions = {
            rootMargin: '-30% 0px -60% 0px',
            threshold: 0
        };

        const observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    const id = entry.target.id;
                    tabs.forEach(function (tab) {
                        tab.classList.remove('active');
                        if (tab.getAttribute('href') === '#' + id) {
                            tab.classList.add('active');
                        }
                    });
                }
            });
        }, observerOptions);

        sections.forEach(function (id) {
            var el = document.getElementById(id);
            if (el) observer.observe(el);
        });

        // 탭 클릭 시 부드러운 스크롤
        tabs.forEach(function (tab) {
            tab.addEventListener('click', function (e) {
                e.preventDefault();
                var targetId = this.getAttribute('href').slice(1);
                var target = document.getElementById(targetId);
                if (target) {
                    var bannerH = parseInt(getComputedStyle(document.documentElement).getPropertyValue('--banner-height')) || 0;
                    var navH = document.getElementById('dev-note-nav') ? document.getElementById('dev-note-nav').offsetHeight : 0;
                    var gnbH = document.getElementById('gnb') ? document.getElementById('gnb').offsetHeight : 0;
                    var offset = bannerH + gnbH + navH + 20;
                    var top = target.getBoundingClientRect().top + window.scrollY - offset;
                    window.scrollTo({ top: top, behavior: 'smooth' });
                }
            });
        });
    })();
</script>

<?php get_footer(); ?>