<?php
/**
 * Template Name: Landing Page (Blank)
 * The template for displaying a standalone landing page without global header and footer.
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        // 기본값은 라이트 테마. (깜빡임 방지)
        (function () {
            if (localStorage.getItem('theme') === 'dark') {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        })();
    </script>
    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-white text-black font-pretendard'); ?>>
    <?php wp_body_open(); ?>

    <!-- 1. Hero Section (히어로 섹션) -->
    <section
        class="relative min-h-[90vh] flex items-center justify-center bg-gradient-to-br from-[#0b132b] via-[#1c2541] to-[#0b132b] text-white overflow-hidden pt-[100px] lg:pt-[120px]">
        <!-- 은은한 광원 효과 배경 -->
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(0,110,255,0.15),transparent_60%)]">
        </div>
        <div class="absolute -bottom-48 -left-48 w-96 h-96 bg-[#006eff]/10 rounded-full blur-3xl"></div>

        <div class="relative z-10 max-w-[1520px] mx-auto px-5 lg:px-10 text-center">
            <div class="max-w-[900px] mx-auto flex flex-col gap-6 lg:gap-8 items-center">
                <!-- 뱃지 -->
                <span
                    class="inline-flex items-center gap-1.5 px-4 py-1.5 rounded-full bg-[#006eff]/10 border border-[#006eff]/30 text-[#60a5fa] font-inter text-[13px] lg:text-[14px] font-semibold tracking-wider uppercase"
                    data-aos="fade-up">
                    <span class="w-2 h-2 rounded-full bg-[#006eff] animate-pulse"></span>
                    Introducing Paradin Legal Solution
                </span>

                <!-- 메인 카피 -->
                <h1 class="font-pretendard text-[36px] sm:text-[48px] lg:text-[68px] font-extrabold leading-tight tracking-tight text-white"
                    data-aos="fade-up" data-aos-delay="100">
                    의뢰인의 미래를 바꾸는<br class="hidden sm:block">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#60a5fa] to-[#006eff]">단 하나의
                        파트너</span>
                </h1>

                <!-- 서브 카피 -->
                <p class="font-pretendard text-[16px] sm:text-[18px] lg:text-[22px] font-light text-gray-300 leading-relaxed max-w-[700px]"
                    data-aos="fade-up" data-aos-delay="200">
                    어려운 순간일수록 정교한 법리 해석과 맞춤 솔루션이 필요합니다. 파라딘 법무법인이 최고의 전략으로 당신의 권리를 지키겠습니다.
                </p>

                <!-- CTA 버튼 -->
                <div class="flex flex-col sm:flex-row gap-4 mt-4 w-full sm:w-auto" data-aos="fade-up"
                    data-aos-delay="300">
                    <a href="#consultation"
                        class="inline-flex items-center justify-center h-[56px] px-8 rounded-xl bg-[#006eff] text-white font-semibold hover:bg-blue-600 shadow-lg shadow-[#006eff]/20 hover:shadow-xl transition-all duration-300 text-[16px]">
                        무료 법률상담 신청하기
                        <svg class="w-5 h-5 ml-2 -mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </a>
                    <a href="#features"
                        class="inline-flex items-center justify-center h-[56px] px-8 rounded-xl bg-white/10 text-white font-semibold hover:bg-white/20 border border-white/20 transition-all duration-300 text-[16px]">
                        서비스 알아보기
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. Value Propositions Section (특장점 섹션) -->
    <section id="features" class="py-24 lg:py-36 bg-[#f8fafe] overflow-hidden">
        <div class="max-w-[1520px] mx-auto px-5 lg:px-10">
            <!-- 섹션 헤더 -->
            <div class="text-center mb-16 lg:mb-24" data-aos="fade-up">
                <span
                    class="text-[#006eff] font-inter text-[13px] lg:text-[15px] font-bold tracking-wider uppercase">WHY
                    PARADIN</span>
                <h2 class="font-pretendard text-[28px] lg:text-[44px] font-bold text-[#1a1a1a] tracking-tight mt-3">
                    파라딘만이 제안하는 3가지 가치
                </h2>
                <p
                    class="font-pretendard text-gray-500 text-[15px] lg:text-[18px] mt-4 max-w-[700px] mx-auto leading-relaxed">
                    법률적 난관을 헤쳐나가는 가장 현명하고 확실한 솔루션을 제공합니다.
                </p>
            </div>

            <!-- 3열 그리드 카드 -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-12">
                <!-- 가치 1 -->
                <div class="bg-white border border-gray-100 rounded-[24px] p-8 lg:p-10 hover:shadow-2xl hover:shadow-[#006eff]/5 hover:border-[#006eff]/20 transition-all duration-300 group flex flex-col justify-between"
                    data-aos="fade-up">
                    <div>
                        <div
                            class="w-14 h-14 bg-[#f4f8ff] rounded-2xl flex items-center justify-center group-hover:bg-[#006eff] transition-colors duration-300 mb-8">
                            <svg class="w-7 h-7 text-[#006eff] group-hover:text-white transition-colors duration-300"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="font-pretendard text-[20px] lg:text-[24px] font-bold text-[#1a1a1a] mb-4">
                            24시간 실시간 모니터링
                        </h3>
                        <p
                            class="font-pretendard text-gray-500 text-[14px] lg:text-[16px] leading-relaxed font-light mb-6">
                            사건의 접수부터 진행 상황, 판결까지 전 과정을 실시간 알림 시스템으로 가장 빠르게 전달받으실 수 있습니다.
                        </p>
                    </div>
                    <div
                        class="text-[#006eff] text-[14px] font-semibold group-hover:translate-x-1.5 transition-transform duration-300 flex items-center gap-1.5 mt-4">
                        자세히 보기
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </div>
                </div>

                <!-- 가치 2 -->
                <div class="bg-white border border-gray-100 rounded-[24px] p-8 lg:p-10 hover:shadow-2xl hover:shadow-[#006eff]/5 hover:border-[#006eff]/20 transition-all duration-300 group flex flex-col justify-between"
                    data-aos="fade-up" data-aos-delay="100">
                    <div>
                        <div
                            class="w-14 h-14 bg-[#f4f8ff] rounded-2xl flex items-center justify-center group-hover:bg-[#006eff] transition-colors duration-300 mb-8">
                            <svg class="w-7 h-7 text-[#006eff] group-hover:text-white transition-colors duration-300"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 0-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="font-pretendard text-[20px] lg:text-[24px] font-bold text-[#1a1a1a] mb-4">
                            분야별 밀착 전담 케어
                        </h3>
                        <p
                            class="font-pretendard text-gray-500 text-[14px] lg:text-[16px] leading-relaxed font-light mb-6">
                            사건 유형에 특화된 베테랑 변호사 3인 이상으로 전담 TF를 신속히 구성하여, 빈틈없는 전략을 설계합니다.
                        </p>
                    </div>
                    <div
                        class="text-[#006eff] text-[14px] font-semibold group-hover:translate-x-1.5 transition-transform duration-300 flex items-center gap-1.5 mt-4">
                        자세히 보기
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </div>
                </div>

                <!-- 가치 3 -->
                <div class="bg-white border border-gray-100 rounded-[24px] p-8 lg:p-10 hover:shadow-2xl hover:shadow-[#006eff]/5 hover:border-[#006eff]/20 transition-all duration-300 group flex flex-col justify-between"
                    data-aos="fade-up" data-aos-delay="200">
                    <div>
                        <div
                            class="w-14 h-14 bg-[#f4f8ff] rounded-2xl flex items-center justify-center group-hover:bg-[#006eff] transition-colors duration-300 mb-8">
                            <svg class="w-7 h-7 text-[#006eff] group-hover:text-white transition-colors duration-300"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="font-pretendard text-[20px] lg:text-[24px] font-bold text-[#1a1a1a] mb-4">
                            합리적인 수임 구조
                        </h3>
                        <p
                            class="font-pretendard text-gray-500 text-[14px] lg:text-[16px] leading-relaxed font-light mb-6">
                            불투명한 추가 청구를 배제하고, 의뢰인이 납득할 수 있는 투명하고 공정한 성공보수 모델을 정립했습니다.
                        </p>
                    </div>
                    <div
                        class="text-[#006eff] text-[14px] font-semibold group-hover:translate-x-1.5 transition-transform duration-300 flex items-center gap-1.5 mt-4">
                        자세히 보기
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Detail Showcase Section (상세 강점 쇼케이스) -->
    <section class="py-24 lg:py-36 bg-white overflow-hidden">
        <div class="max-w-[1520px] mx-auto px-5 lg:px-10 flex flex-col gap-24 lg:gap-36">

            <!-- 쇼케이스 1 (좌 텍스트, 우 이미지) -->
            <div class="flex flex-col lg:flex-row items-center justify-between gap-16 lg:gap-24">
                <div class="w-full lg:max-w-[600px]" data-aos="fade-right">
                    <span
                        class="text-[#006eff] font-inter text-[13px] lg:text-[15px] font-bold tracking-wider uppercase mb-4 block">PRECISE
                        ANALYSIS</span>
                    <h3
                        class="font-pretendard text-[26px] lg:text-[38px] font-bold text-[#1a1a1a] leading-tight tracking-tight mb-6">
                        최신 판결 빅데이터 기반의<br>
                        과학적 형량 분석 시스템
                    </h3>
                    <p class="font-pretendard text-gray-500 text-[15px] lg:text-[17px] leading-relaxed font-light mb-8">
                        단순한 감이나 경험에 의존하지 않습니다. 수십만 건의 판례 빅데이터와 자체 개발한 법률 분석 알고리즘을 결합하여, 예상 승소 확률 및 가장 유리한 대처 방향을 즉시 진단해
                        드립니다.
                    </p>
                    <ul class="space-y-3.5 font-pretendard text-[14px] lg:text-[16px] text-gray-700 font-medium">
                        <li class="flex items-center gap-2.5">
                            <span
                                class="w-5 h-5 rounded-full bg-[#e6f0ff] flex items-center justify-center text-[#006eff]">✓</span>
                            전국 주요 법원 판례 30만 건 데이터베이스 분석
                        </li>
                        <li class="flex items-center gap-2.5">
                            <span
                                class="w-5 h-5 rounded-full bg-[#e6f0ff] flex items-center justify-center text-[#006eff]">✓</span>
                            유사 사건 양형 기준 및 수사 경향 실시간 반영
                        </li>
                    </ul>
                </div>

                <div class="w-full lg:flex-1 h-[300px] sm:h-[400px] lg:h-[500px] rounded-[32px] overflow-hidden shadow-2xl relative"
                    data-aos="fade-left">
                    <img src="https://images.pexels.com/photos/5669614/pexels-photo-5669614.jpeg"
                        alt="Big data analysis" loading="lazy" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                </div>
            </div>

            <!-- 쇼케이스 2 (좌 이미지, 우 텍스트) -->
            <div class="flex flex-col lg:flex-row-reverse items-center justify-between gap-16 lg:gap-24">
                <div class="w-full lg:max-w-[600px]" data-aos="fade-left">
                    <span
                        class="text-[#006eff] font-inter text-[13px] lg:text-[15px] font-bold tracking-wider uppercase mb-4 block">CLOSE
                        SYSTEM</span>
                    <h3
                        class="font-pretendard text-[26px] lg:text-[38px] font-bold text-[#1a1a1a] leading-tight tracking-tight mb-6">
                        철저한 의뢰인 보호 및<br>
                        1대1 안심 전담 비공개 상담
                    </h3>
                    <p class="font-pretendard text-gray-500 text-[15px] lg:text-[17px] leading-relaxed font-light mb-8">
                        상담 신청 시점부터 비밀 유지를 최우선으로 합니다. 어떠한 흔적이나 자료도 허가되지 않은 외부로 노출되지 않도록, 통신 및 데이터 서버를 엄격한 다중 보안 시스템으로
                        암호화하여 지켜냅니다.
                    </p>
                    <ul class="space-y-3.5 font-pretendard text-[14px] lg:text-[16px] text-gray-700 font-medium">
                        <li class="flex items-center gap-2.5">
                            <span
                                class="w-5 h-5 rounded-full bg-[#e6f0ff] flex items-center justify-center text-[#006eff]">✓</span>
                            개인정보 유출 원천 차단 (End-to-End 암호화)
                        </li>
                        <li class="flex items-center gap-2.5">
                            <span
                                class="w-5 h-5 rounded-full bg-[#e6f0ff] flex items-center justify-center text-[#006eff]">✓</span>
                            전담 변호사 외 열람 불가능한 단독 보안 스토리지
                        </li>
                    </ul>
                </div>

                <div class="w-full lg:flex-1 h-[300px] sm:h-[400px] lg:h-[500px] rounded-[32px] overflow-hidden shadow-2xl relative"
                    data-aos="fade-right">
                    <img src="https://images.pexels.com/photos/3184423/pexels-photo-3184423.jpeg"
                        alt="Secure Consulting" loading="lazy" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                </div>
            </div>

        </div>
    </section>

    <!-- 4. Testimonials Section (고객 후기 섹션) -->
    <section class="py-24 lg:py-36 bg-[#f8fafe] overflow-hidden">
        <div class="max-w-[1520px] mx-auto px-5 lg:px-10">
            <!-- 섹션 헤더 -->
            <div class="text-center mb-16 lg:mb-24" data-aos="fade-up">
                <span
                    class="text-[#006eff] font-inter text-[13px] lg:text-[15px] font-bold tracking-wider uppercase">CLIENT
                    REVIEWS</span>
                <h2 class="font-pretendard text-[28px] lg:text-[44px] font-bold text-[#1a1a1a] tracking-tight mt-3">
                    의뢰인이 직접 말하는 파라딘
                </h2>
                <p
                    class="font-pretendard text-gray-500 text-[15px] lg:text-[18px] mt-4 max-w-[700px] mx-auto leading-relaxed">
                    파라딘과 함께 일상으로 평온하게 복귀한 분들의 진솔한 자필 및 실제 리뷰입니다.
                </p>
            </div>

            <!-- 리뷰 3열 배치 -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-12">
                <!-- 후기 1 -->
                <div class="bg-white rounded-[24px] p-8 lg:p-10 border border-gray-100 shadow-sm flex flex-col justify-between"
                    data-aos="fade-up">
                    <div>
                        <!-- 별점 -->
                        <div class="flex items-center gap-1 mb-6 text-yellow-400">
                            <?php for ($i = 0; $i < 5; $i++): ?>
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                            <?php endfor; ?>
                        </div>
                        <p class="font-pretendard text-gray-700 text-[15px] lg:text-[16px] leading-relaxed mb-8 italic">
                            "억울한 혐의에 연루되어 매일이 불안하고 괴로웠는데, 사건 당일 바로 변호사 전담팀이 꾸려져서 밀착 피드백을 주신 덕분에 무사히 무혐의 처분을 받게 되었습니다.
                            진심으로 감사드립니다."
                        </p>
                    </div>
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 rounded-full bg-gray-200 overflow-hidden flex items-center justify-center font-bold text-[#006eff]">
                            K
                        </div>
                        <div>
                            <h4 class="font-pretendard text-[15px] lg:text-[16px] font-bold text-[#1a1a1a]">김** 의뢰인</h4>
                            <span class="font-pretendard text-[13px] text-[#006eff]">민·형사 무죄/무혐의 해결</span>
                        </div>
                    </div>
                </div>

                <!-- 후기 2 -->
                <div class="bg-white rounded-[24px] p-8 lg:p-10 border border-gray-100 shadow-sm flex flex-col justify-between"
                    data-aos="fade-up" data-aos-delay="100">
                    <div>
                        <!-- 별점 -->
                        <div class="flex items-center gap-1 mb-6 text-yellow-400">
                            <?php for ($i = 0; $i < 5; $i++): ?>
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                            <?php endfor; ?>
                        </div>
                        <p class="font-pretendard text-gray-700 text-[15px] lg:text-[16px] leading-relaxed mb-8 italic">
                            "여러 곳을 돌며 상담을 받아도 신뢰가 가지 않았는데, 파라딘은 투명한 수임 체계와 실시간 앱 알림 등으로 과정 하나하나가 눈에 직접 보여 믿고 끝까지 갈 수
                            있었습니다."
                        </p>
                    </div>
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 rounded-full bg-gray-200 overflow-hidden flex items-center justify-center font-bold text-[#006eff]">
                            L
                        </div>
                        <div>
                            <h4 class="font-pretendard text-[15px] lg:text-[16px] font-bold text-[#1a1a1a]">이** 의뢰인</h4>
                            <span class="font-pretendard text-[13px] text-[#006eff]">비즈니스 법률 자문</span>
                        </div>
                    </div>
                </div>

                <!-- 후기 3 -->
                <div class="bg-white rounded-[24px] p-8 lg:p-10 border border-gray-100 shadow-sm flex flex-col justify-between"
                    data-aos="fade-up" data-aos-delay="200">
                    <div>
                        <!-- 별점 -->
                        <div class="flex items-center gap-1 mb-6 text-yellow-400">
                            <?php for ($i = 0; $i < 5; $i++): ?>
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                            <?php endfor; ?>
                        </div>
                        <p class="font-pretendard text-gray-700 text-[15px] lg:text-[16px] leading-relaxed mb-8 italic">
                            "처음 겪는 이혼 소송에서 정말 막막했는데 가족처럼 다정하게 제 마음을 다독여 주셨어요. 결과도 생각보다 훨씬 위자료나 양육권 면에서 잘 나와서 새 삶을 시작할 수
                            있게 됐습니다."
                        </p>
                    </div>
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 rounded-full bg-gray-200 overflow-hidden flex items-center justify-center font-bold text-[#006eff]">
                            P
                        </div>
                        <div>
                            <h4 class="font-pretendard text-[15px] lg:text-[16px] font-bold text-[#1a1a1a]">박** 의뢰인</h4>
                            <span class="font-pretendard text-[13px] text-[#006eff]">이혼 · 가사 소송 해결</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Final CTA Section (최종 액션 유도) -->
    <section id="consultation"
        class="py-24 lg:py-32 bg-gradient-to-br from-[#0b132b] via-[#1c2541] to-[#0b132b] text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_left,rgba(0,110,255,0.12),transparent_50%)]">
        </div>
        <div class="relative z-10 max-w-[1520px] mx-auto px-5 lg:px-10 text-center">
            <div class="max-w-[800px] mx-auto flex flex-col gap-6 lg:gap-8 items-center" data-aos="fade-up">
                <h2
                    class="font-pretendard text-[30px] sm:text-[40px] lg:text-[52px] font-bold leading-tight tracking-tight">
                    지금, 파라딘의 안심 상담을<br>
                    직접 경험해 보세요.
                </h2>
                <p
                    class="font-pretendard text-[15px] sm:text-[17px] lg:text-[19px] text-gray-300 font-light max-w-[600px] leading-relaxed">
                    모든 상담 정보는 철저히 대외비로 보장됩니다. 복잡한 사건 해결의 첫 단추는 신속한 초기 조치로부터 시작합니다.
                </p>
                <div class="mt-4">
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>"
                        class="inline-flex items-center justify-center h-[58px] px-10 rounded-xl bg-[#006eff] text-white font-bold hover:bg-blue-600 shadow-xl shadow-[#006eff]/20 hover:shadow-2xl transition-all duration-300 text-[16px] lg:text-[17px]">
                        1:1 비공개 상담 예약하기
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php wp_footer(); ?>
</body>

</html>