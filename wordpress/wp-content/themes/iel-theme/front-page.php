<?php
/**
 * The template for displaying the front page
 */

get_header();
?>

<!-- 웅장한 풀스크린 비디오 백그라운드 히어로 섹션 -->
<section class="relative h-[80vh] lg:h-[100vh] w-full flex items-center justify-center bg-black overflow-hidden">
    <!-- 유튜브 배경 비디오 (16:9 반응형 Cover 트릭 적용) -->
    <div class="absolute inset-0 w-full h-full pointer-events-none z-0 overflow-hidden">
        <iframe
            class="absolute top-1/2 left-1/2 w-[177.77vh] h-[56.25vw] min-h-[100vh] min-w-[100vw] -translate-x-1/2 -translate-y-1/2"
            src="https://www.youtube.com/embed/QR2UT85c1Yc?autoplay=1&mute=1&loop=1&playlist=QR2UT85c1Yc&controls=0&showinfo=0&rel=0&enablejsapi=1&playsinline=1"
            frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
        </iframe>
    </div>

    <!-- 글씨가 선명하게 보이도록 어두운 반투명 가림막(오버레이) 적용 -->
    <div class="absolute inset-0 bg-black/45 z-10"></div>

    <!-- 비디오 위의 텍스트 콘텐츠 -->
    <div class="relative z-20 max-w-[1520px] mx-auto px-5 text-center text-white">
        <div class="flex flex-col gap-5 lg:gap-8 items-center">
            <h2 class="font-lora text-[32px] lg:text-[68px] font-light leading-tight text-white" data-aos="fade-up">
                <span class="block">Legal Services</span>
                <span class="block italic font-normal text-white/90">That Give You Peace Of Mind</span>
            </h2>
            <h3 class="font-pretendard text-[18px] lg:text-[26px] font-medium text-white/80 tracking-tight"
                data-aos="fade-up" data-aos-delay="200">
                의뢰인의 든든한 동반자, 법무법인 이엘이 함께합니다.
            </h3>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="py-24 lg:py-36 bg-white overflow-hidden">
    <div
        class="max-w-[1520px] mx-auto px-5 lg:px-10 flex flex-col lg:flex-row lg:items-center justify-between gap-16 lg:gap-24">
        <!-- 왼쪽 텍스트 정보 영역 -->
        <div
            class="w-full lg:max-w-[550px] flex flex-col items-center text-center lg:items-start lg:text-left shrink-0">
            <!-- 소제목 -->
            <div id="about-heading" class="mb-8 lg:mb-12 h-[80px] lg:h-[100px]">
                <h2 class="font-pretendard text-[24px] lg:text-[34px] font-bold text-[#1f1f1f] leading-snug"
                    data-aos="fade-up">
                    처음부터 끝까지
                </h2>
                <h2 class="font-pretendard text-[24px] lg:text-[34px] font-bold text-[#1f1f1f] leading-snug"
                    data-aos="fade-up" data-aos-delay="100">
                    의뢰인의 편에서 함께합니다.
                </h2>
            </div>

            <!-- 탭 제어 버튼 -->
            <div class="flex flex-wrap justify-center lg:justify-start gap-3 lg:gap-4 mb-8 lg:mb-10" data-aos="fade-up"
                data-aos-delay="200">
                <button
                    class="about-tab active h-[38px] lg:h-[48px] px-6 lg:px-8 rounded-full font-inter text-[13px] lg:text-[15px] font-semibold transition-all duration-300 bg-[#eef4ff] border border-iel-blue text-iel-blue shadow-sm"
                    data-tab="communication">
                    Communication
                </button>
                <button
                    class="about-tab h-[38px] lg:h-[48px] px-6 lg:px-8 rounded-full font-inter text-[13px] lg:text-[15px] font-medium transition-all duration-300 bg-[#f8f8f8] text-[#5f5f5f] hover:bg-[#f0f0f0]"
                    data-tab="focus">
                    Focus
                </button>
                <button
                    class="about-tab h-[38px] lg:h-[48px] px-6 lg:px-8 rounded-full font-inter text-[13px] lg:text-[15px] font-medium transition-all duration-300 bg-[#f8f8f8] text-[#5f5f5f] hover:bg-[#f0f0f0]"
                    data-tab="reasonable">
                    Reasonable
                </button>
            </div>

            <!-- 탭 텍스트 내용 -->
            <div id="about-content"
                class="font-pretendard text-[16px] lg:text-[19px] font-medium text-[#4b4b4b] leading-relaxed mb-8 lg:mb-12 h-[120px] lg:h-[140px] flex items-center"
                data-aos="fade-up" data-aos-delay="300">
                <p id="about-text">
                    단순한 법률 대리가 아닌, 의뢰인의 삶을 깊이 이해하는 파트너가 되겠습니다. 실시간 진행 상황을 신속하고 투명하게 공유하며, 든든한 소통으로 처음부터 끝까지 책임을 다합니다.
                </p>
            </div>

            <!-- 게이지 바 (Progress Bar) -->
            <div class="relative w-[140px] lg:w-[200px] h-[5px] rounded-full overflow-hidden bg-[#e4e4e4]"
                data-aos="fade-up" data-aos-delay="400">
                <div id="about-progress" class="absolute left-0 top-0 h-full bg-iel-blue transition-all duration-500"
                    style="width: 35%;"></div>
            </div>
        </div>

        <!-- 오른쪽 이미지 영역 (반응형 대응) -->
        <div class="w-full flex-1 h-[300px] sm:h-[400px] lg:h-[580px] rounded-[24px] overflow-hidden shadow-md relative"
            data-aos="fade-left">
            <img id="about-img" src="https://images.pexels.com/photos/3184418/pexels-photo-3184418.jpeg"
                alt="Communication" loading="lazy" class="w-full h-full object-cover transition-all duration-500">
        </div>
    </div>
</section>

<!-- Practice Areas Section -->
<section class="py-24 lg:py-36 bg-[#f8fafe] overflow-hidden">
    <div class="max-w-[1520px] mx-auto px-5 lg:px-10">
        <div class="text-center mb-16 lg:mb-24" data-aos="fade-up">
            <span
                class="text-[#006eff] font-inter text-[13px] lg:text-[15px] font-bold tracking-wider uppercase">PRACTICE
                AREAS</span>
            <h2 class="font-pretendard text-[28px] lg:text-[44px] font-bold text-[#1a1a1a] tracking-tight mt-3">
                분야별 최고 전문가들의 정밀한 해결책
            </h2>
            <p
                class="font-pretendard text-gray-500 text-[15px] lg:text-[18px] mt-4 max-w-[700px] mx-auto leading-relaxed">
                법무법인 이엘은 풍부한 성공 경험을 바탕으로, 각 센터별 전담 변호사들이 사건 초기부터 합심하여 다각적인 법리 검토를 진행합니다.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12">
            <!-- 1. 성범죄/강력형사 -->
            <div class="bg-white border border-gray-100 rounded-[32px] p-8 lg:p-12 hover:shadow-2xl hover:shadow-[#006eff]/5 hover:border-[#006eff]/20 transition-all duration-300 group flex flex-col justify-between"
                data-aos="fade-up">
                <div>
                    <div class="flex items-start justify-between mb-8">
                        <div
                            class="w-14 h-14 bg-[#f4f8ff] rounded-2xl flex items-center justify-center group-hover:bg-[#006eff] transition-colors duration-300">
                            <svg class="w-7 h-7 text-[#006eff] group-hover:text-white transition-colors duration-300"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3">
                                </path>
                            </svg>
                        </div>
                        <span
                            class="font-inter text-gray-200 font-bold text-[32px] lg:text-[40px] group-hover:text-[#006eff]/20 transition-colors">01</span>
                    </div>
                    <h3 class="font-pretendard text-[22px] lg:text-[26px] font-bold text-[#1a1a1a] mb-4">성범죄 · 강력 형사 전담
                        센터</h3>
                    <p class="font-pretendard text-gray-500 text-[15px] lg:text-[16px] leading-relaxed mb-6 font-light">
                        성추행, 성폭행, 디지털 성범죄 등 강력 형사 연루 시 경찰 수사 초기부터 즉각 대응합니다. 무죄 판결 및 불기소 이끌어내기 위한 최적의 양형 변론을 제시합니다.
                    </p>
                </div>
                <a href="<?php echo esc_url(home_url('/practice-areas/')); ?>"
                    class="inline-flex items-center text-[#006eff] font-semibold text-[15px] hover:underline gap-1.5 mt-4">
                    자세히 보기
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>

            <!-- 2. 피해자 보호/고소 대리 -->
            <div class="bg-white border border-gray-100 rounded-[32px] p-8 lg:p-12 hover:shadow-2xl hover:shadow-[#006eff]/5 hover:border-[#006eff]/20 transition-all duration-300 group flex flex-col justify-between"
                data-aos="fade-up" data-aos-delay="100">
                <div>
                    <div class="flex items-start justify-between mb-8">
                        <div
                            class="w-14 h-14 bg-[#f4f8ff] rounded-2xl flex items-center justify-center group-hover:bg-[#006eff] transition-colors duration-300">
                            <svg class="w-7 h-7 text-[#006eff] group-hover:text-white transition-colors duration-300"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                </path>
                            </svg>
                        </div>
                        <span
                            class="font-inter text-gray-200 font-bold text-[32px] lg:text-[40px] group-hover:text-[#006eff]/20 transition-colors">02</span>
                    </div>
                    <h3 class="font-pretendard text-[22px] lg:text-[26px] font-bold text-[#1a1a1a] mb-4">피해자 보호 · 고소 대리
                    </h3>
                    <p class="font-pretendard text-gray-500 text-[15px] lg:text-[16px] leading-relaxed mb-6 font-light">
                        억울한 피해 사실을 명명백백히 입증하고 합의 및 가해자 처벌까지 동행합니다. 스토킹, 보복 협박 등 추가 피해 방지를 위한 법적 보호조치를 신속하게 실행합니다.
                    </p>
                </div>
                <a href="<?php echo esc_url(home_url('/practice-areas/')); ?>"
                    class="inline-flex items-center text-[#006eff] font-semibold text-[15px] hover:underline gap-1.5 mt-4">
                    자세히 보기
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>

            <!-- 3. 개인회생/파산 -->
            <div class="bg-white border border-gray-100 rounded-[32px] p-8 lg:p-12 hover:shadow-2xl hover:shadow-[#006eff]/5 hover:border-[#006eff]/20 transition-all duration-300 group flex flex-col justify-between"
                data-aos="fade-up" data-aos-delay="200">
                <div>
                    <div class="flex items-start justify-between mb-8">
                        <div
                            class="w-14 h-14 bg-[#f4f8ff] rounded-2xl flex items-center justify-center group-hover:bg-[#006eff] transition-colors duration-300">
                            <svg class="w-7 h-7 text-[#006eff] group-hover:text-white transition-colors duration-300"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                        </div>
                        <span
                            class="font-inter text-gray-200 font-bold text-[32px] lg:text-[40px] group-hover:text-[#006eff]/20 transition-colors">03</span>
                    </div>
                    <h3 class="font-pretendard text-[22px] lg:text-[26px] font-bold text-[#1a1a1a] mb-4">개인회생 · 파산 전담 센터
                    </h3>
                    <p class="font-pretendard text-gray-500 text-[15px] lg:text-[16px] leading-relaxed mb-6 font-light">
                        감당할 수 없는 채무 독촉에서 벗어나 합법적인 면책과 재기를 도모합니다. 까다로운 법원 심사 절차와 보정 권고에 완벽히 대응하여 높은 인가결정률을 달성합니다.
                    </p>
                </div>
                <a href="<?php echo esc_url(home_url('/practice-areas/')); ?>"
                    class="inline-flex items-center text-[#006eff] font-semibold text-[15px] hover:underline gap-1.5 mt-4">
                    자세히 보기
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>

            <!-- 4. 민사/가사/상속 -->
            <div class="bg-white border border-gray-100 rounded-[32px] p-8 lg:p-12 hover:shadow-2xl hover:shadow-[#006eff]/5 hover:border-[#006eff]/20 transition-all duration-300 group flex flex-col justify-between"
                data-aos="fade-up" data-aos-delay="300">
                <div>
                    <div class="flex items-start justify-between mb-8">
                        <div
                            class="w-14 h-14 bg-[#f4f8ff] rounded-2xl flex items-center justify-center group-hover:bg-[#006eff] transition-colors duration-300">
                            <svg class="w-7 h-7 text-[#006eff] group-hover:text-white transition-colors duration-300"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                </path>
                            </svg>
                        </div>
                        <span
                            class="font-inter text-gray-200 font-bold text-[32px] lg:text-[40px] group-hover:text-[#006eff]/20 transition-colors">04</span>
                    </div>
                    <h3 class="font-pretendard text-[22px] lg:text-[26px] font-bold text-[#1a1a1a] mb-4">민사 · 가사 · 상속 분쟁
                    </h3>
                    <p class="font-pretendard text-gray-500 text-[15px] lg:text-[16px] leading-relaxed mb-6 font-light">
                        이혼, 양육권, 위자료 소송 및 유산 상속 지분 분쟁 등 가족 간의 복잡한 송사를 법률적으로 조율합니다. 철저한 재산 분할 설계와 합리적 중재안으로 분쟁을 수습합니다.
                    </p>
                </div>
                <a href="<?php echo esc_url(home_url('/practice-areas/')); ?>"
                    class="inline-flex items-center text-[#006eff] font-semibold text-[15px] hover:underline gap-1.5 mt-4">
                    자세히 보기
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Statistics Section -->
<section class="py-24 lg:py-32 bg-[#0c1020] text-white relative overflow-hidden">
    <!-- 미세한 배경 광채 효과 -->
    <div
        class="absolute top-[-20%] left-[-10%] w-[50%] h-[60%] rounded-full bg-[#006eff]/10 blur-[150px] pointer-events-none">
    </div>
    <div
        class="absolute bottom-[-20%] right-[-10%] w-[50%] h-[60%] rounded-full bg-[#0047cc]/10 blur-[150px] pointer-events-none">
    </div>

    <div class="relative z-10 max-w-[1520px] mx-auto px-5 lg:px-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">

            <div class="lg:col-span-4" data-aos="fade-right">
                <span class="text-[#006eff] font-inter text-[13px] lg:text-[15px] font-bold tracking-wider uppercase">BY
                    THE NUMBERS</span>
                <h2 class="font-pretendard text-[28px] lg:text-[40px] font-bold leading-tight tracking-tight mt-3 mb-6">
                    검증된 통계와<br>실적이 증명합니다.
                </h2>
                <p class="font-pretendard text-gray-400 text-[15px] lg:text-[16px] leading-relaxed font-light">
                    법무법인 이엘은 말뿐인 변론이 아닌, 실체적인 판결과 데이터로 차별화된 실력을 입증합니다. 압도적인 결과로 신뢰를 지켜 드립니다.
                </p>
            </div>

            <div class="lg:col-span-8 grid grid-cols-2 md:grid-cols-4 gap-6 lg:gap-8">

                <!-- 지표 1 -->
                <div class="bg-white/5 border border-white/10 rounded-2xl p-6 lg:p-8 text-center backdrop-blur-sm hover:border-[#006eff]/50 transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="100">
                    <span class="block font-inter text-[36px] lg:text-[48px] font-extrabold text-[#006eff]">95.8%</span>
                    <span class="block font-pretendard text-gray-300 text-[14px] lg:text-[16px] font-medium mt-2">승소 및
                        성공 사례</span>
                </div>

                <!-- 지표 2 -->
                <div class="bg-white/5 border border-white/10 rounded-2xl p-6 lg:p-8 text-center backdrop-blur-sm hover:border-[#006eff]/50 transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="200">
                    <span class="block font-inter text-[36px] lg:text-[48px] font-extrabold text-white">3,200+</span>
                    <span class="block font-pretendard text-gray-300 text-[14px] lg:text-[16px] font-medium mt-2">누적 해결
                        사건</span>
                </div>

                <!-- 지표 3 -->
                <div class="bg-white/5 border border-white/10 rounded-2xl p-6 lg:p-8 text-center backdrop-blur-sm hover:border-[#006eff]/50 transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="300">
                    <span class="block font-inter text-[36px] lg:text-[48px] font-extrabold text-white">24명</span>
                    <span class="block font-pretendard text-gray-300 text-[14px] lg:text-[16px] font-medium mt-2">전문
                        자문위원단</span>
                </div>

                <!-- 지표 4 -->
                <div class="bg-white/5 border border-white/10 rounded-2xl p-6 lg:p-8 text-center backdrop-blur-sm hover:border-[#006eff]/50 transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="400">
                    <span class="block font-inter text-[36px] lg:text-[48px] font-extrabold text-[#006eff]">24h</span>
                    <span class="block font-pretendard text-gray-300 text-[14px] lg:text-[16px] font-medium mt-2">긴급 대응
                        체계</span>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Attorneys Section -->
<section class="py-24 lg:py-36 bg-white overflow-hidden">
    <div class="max-w-[1520px] mx-auto px-5 lg:px-10">
        <div class="flex flex-col lg:flex-row justify-between items-start lg:items-end mb-16 lg:mb-24"
            data-aos="fade-up">
            <div>
                <span
                    class="text-[#006eff] font-inter text-[13px] lg:text-[15px] font-bold tracking-wider uppercase">OUR
                    TEAM</span>
                <h2 class="font-pretendard text-[28px] lg:text-[44px] font-bold text-[#1a1a1a] tracking-tight mt-2">최고의
                    법률 드림팀을 소개합니다</h2>
            </div>
            <p
                class="font-pretendard text-gray-500 max-w-[450px] mt-4 lg:mt-0 text-[15px] lg:text-[17px] leading-relaxed font-light">
                검사 출신 변호사부터 풍부한 성공 경험을 지닌 전문가 그룹까지, 의뢰인의 권리를 수호하기 위해 유기적으로 연대하고 협업합니다.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-12">

            <!-- 변호사 1 -->
            <div class="bg-gray-50 rounded-[32px] overflow-hidden hover:shadow-2xl hover:shadow-[#006eff]/5 transition-all duration-300 group border border-gray-100"
                data-aos="fade-up" data-aos-delay="100">
                <div class="h-[380px] lg:h-[450px] overflow-hidden relative">
                    <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/attorney_lee.png'); ?>" alt="이영현 대표변호사"
                        loading="lazy"
                        class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-8">
                        <p class="text-white text-[14px] lg:text-[15px] font-light leading-relaxed mb-4">"의뢰인이 겪고 있는 고통의
                            크기가 곧 우리가 집중해야 할 문제의 무게입니다."</p>
                        <span class="text-white/60 text-[13px] font-light">성범죄 · 강력 형사 센터장 / 前 부부장검사</span>
                    </div>
                </div>
                <div class="p-8 bg-white border-t border-gray-50">
                    <span
                        class="text-[#006eff] text-[13px] lg:text-[14px] font-bold uppercase tracking-wider">Representative
                        Attorney</span>
                    <h3 class="font-pretendard text-[22px] lg:text-[26px] font-bold text-[#1a1a1a] mt-1">이영현 대표변호사</h3>
                </div>
            </div>

            <!-- 변호사 2 -->
            <div class="bg-gray-50 rounded-[32px] overflow-hidden hover:shadow-2xl hover:shadow-[#006eff]/5 transition-all duration-300 group border border-gray-100"
                data-aos="fade-up" data-aos-delay="200">
                <div class="h-[380px] lg:h-[450px] overflow-hidden relative">
                    <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/attorney_park.png'); ?>" alt="박민서 파트너변호사"
                        loading="lazy"
                        class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-8">
                        <p class="text-white text-[14px] lg:text-[15px] font-light leading-relaxed mb-4">"법리는 오차 없이 정밀하게
                            검토하고, 변론은 따뜻한 공감을 바탕으로 의뢰인의 편에서 펼치겠습니다."</p>
                        <span class="text-white/60 text-[13px] font-light">개인회생 · 파산 센터장 / 대한변협 등록 변호사</span>
                    </div>
                </div>
                <div class="p-8 bg-white border-t border-gray-50">
                    <span class="text-[#006eff] text-[13px] lg:text-[14px] font-bold uppercase tracking-wider">Partner
                        Attorney</span>
                    <h3 class="font-pretendard text-[22px] lg:text-[26px] font-bold text-[#1a1a1a] mt-1">박민서 파트너변호사</h3>
                </div>
            </div>

            <!-- 변호사 3 -->
            <div class="bg-gray-50 rounded-[32px] overflow-hidden hover:shadow-2xl hover:shadow-[#006eff]/5 transition-all duration-300 group border border-gray-100"
                data-aos="fade-up" data-aos-delay="300">
                <div class="h-[380px] lg:h-[450px] overflow-hidden relative">
                    <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/attorney_kim.png'); ?>" alt="김우진 소송전담변호사"
                        loading="lazy"
                        class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-8">
                        <p class="text-white text-[14px] lg:text-[15px] font-light leading-relaxed mb-4">"사건 현장의 작은 흔적조차
                            결정적인 증거가 될 수 있습니다. 현장형 정밀 조사를 약속합니다."</p>
                        <span class="text-white/60 text-[13px] font-light">민사 · 가사 소송 전담 / 前 대형 로펌 시니어 변호사</span>
                    </div>
                </div>
                <div class="p-8 bg-white border-t border-gray-50">
                    <span class="text-[#006eff] text-[13px] lg:text-[14px] font-bold uppercase tracking-wider">Senior
                        Associate Attorney</span>
                    <h3 class="font-pretendard text-[22px] lg:text-[26px] font-bold text-[#1a1a1a] mt-1">김우진 전담변호사</h3>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Insights & News Section -->
<section class="py-24 lg:py-36 bg-[#fcfcfc] border-t border-gray-100 overflow-hidden">
    <div class="max-w-[1520px] mx-auto px-5 lg:px-10">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-16 lg:mb-24"
            data-aos="fade-up">
            <div>
                <span
                    class="text-[#006eff] font-inter text-[13px] lg:text-[15px] font-bold tracking-wider uppercase">INSIGHTS
                    & NEWS</span>
                <h2 class="font-pretendard text-[28px] lg:text-[44px] font-bold text-[#1a1a1a] tracking-tight mt-2">이엘의
                    법률 가이드 & 뉴스</h2>
            </div>
            <a href="<?php echo esc_url(home_url('/insight/')); ?>"
                class="group inline-flex items-center gap-1.5 text-gray-500 hover:text-[#006eff] transition-colors mt-4 md:mt-0 font-medium">
                전체 소식 보기
                <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-12">
            <?php
            // 최신 3개의 글 가져오기
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'post_status' => 'publish'
            );
            $query = new WP_Query($args);

            if ($query->have_posts()):
                while ($query->have_posts()):
                    $query->the_post();
                    $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
                    if (!$thumbnail_url) {
                        // 썸네일 없을 경우 더미 이미지
                        $thumbnail_url = 'https://images.pexels.com/photos/3760067/pexels-photo-3760067.jpeg';
                    }
                    ?>
                    <!-- 동적 카드 -->
                    <article
                        class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 flex flex-col justify-between"
                        data-aos="fade-up">
                        <div class="h-[220px] overflow-hidden relative">
                            <img src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php the_title_attribute(); ?>"
                                class="w-full h-full object-cover">
                        </div>
                        <div class="p-8 flex-1 flex flex-col justify-between">
                            <div>
                                <span class="text-[12px] font-bold text-[#006eff] uppercase tracking-wider">
                                    <?php
                                    $categories = get_the_category();
                                    if (!empty($categories)) {
                                        echo esc_html($categories[0]->name);
                                    } else {
                                        echo 'NEWS';
                                    }
                                    ?>
                                </span>
                                <h3
                                    class="font-pretendard text-[18px] lg:text-[21px] font-bold text-[#1a1a1a] mt-2 mb-3 line-clamp-2 hover:text-[#006eff] transition-colors">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                                <p
                                    class="font-pretendard text-gray-500 text-[14px] lg:text-[15px] font-light leading-relaxed line-clamp-3 mb-6">
                                    <?php echo esc_html(wp_strip_all_tags(get_the_excerpt())); ?>
                                </p>
                            </div>
                            <span
                                class="block text-[13px] text-gray-400 font-inter font-light"><?php echo get_the_date('Y.m.d'); ?></span>
                        </div>
                    </article>
                    <?php
                endwhile;
                wp_reset_postdata();
            else:
                // 글이 없을 경우 예시 데이터 출력
                $dummy_posts = array(
                    array(
                        'title' => '디지털 성범죄 수사 초기 대응 전략과 무죄 입증을 위한 요건',
                        'excerpt' => '최근 모바일 및 통신매체를 이용한 범죄 혐의에 대해 디지털 포렌식 데이터 수집 및 분석 과정에서의 절차적 위법성을 지적하여 불기소를 이끌어내는 전문 방어 기법이 강조되고 있습니다.',
                        'date' => '2026.07.15',
                        'tag' => '성범죄 · 형사',
                        'img' => 'https://images.pexels.com/photos/6077368/pexels-photo-6077368.jpeg'
                    ),
                    array(
                        'title' => '채무자 구제 제도의 핵심: 개인회생 신청 시 기각 사유와 보정 권고 해결법',
                        'excerpt' => '개인회생 신청 이후 법원 측에서 자주 요구하는 주소지 소명, 최근 채무 사용처 설명, 가용소득 소명 등 기각 및 절차 지연을 최소화하기 위한 법률적 점검 사항을 상세히 분석합니다.',
                        'date' => '2026.07.12',
                        'tag' => '회생 · 파산',
                        'img' => 'https://images.pexels.com/photos/5668858/pexels-photo-5668858.jpeg'
                    ),
                    array(
                        'title' => '상속 재산 분할 청구 소송 시 기여분 주장 및 유류분 반환 소송의 핵심 쟁점',
                        'excerpt' => '가족 간 상속 분쟁 발생 시, 공동상속인 중 피상속인을 특별히 부양했거나 재산 유지에 기여한 기여분을 법적으로 인정받는 기준 및 소송 소멸시효에 관해 검토해 봅니다.',
                        'date' => '2026.07.09',
                        'tag' => '민사 · 가사',
                        'img' => 'https://images.pexels.com/photos/3760067/pexels-photo-3760067.jpeg'
                    )
                );
                foreach ($dummy_posts as $post) {
                    ?>
                    <article
                        class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 flex flex-col justify-between"
                        data-aos="fade-up">
                        <div class="h-[220px] overflow-hidden relative">
                            <img src="<?php echo esc_url($post['img']); ?>" alt="<?php echo esc_attr($post['title']); ?>"
                                class="w-full h-full object-cover">
                        </div>
                        <div class="p-8 flex-1 flex flex-col justify-between">
                            <div>
                                <span
                                    class="text-[12px] font-bold text-[#006eff] uppercase tracking-wider"><?php echo esc_html($post['tag']); ?></span>
                                <h3
                                    class="font-pretendard text-[18px] lg:text-[21px] font-bold text-[#1a1a1a] mt-2 mb-3 line-clamp-2 hover:text-[#006eff] transition-colors">
                                    <a
                                        href="<?php echo esc_url(home_url('/insight/')); ?>"><?php echo esc_html($post['title']); ?></a>
                                </h3>
                                <p
                                    class="font-pretendard text-gray-500 text-[14px] lg:text-[15px] font-light leading-relaxed line-clamp-3 mb-6">
                                    <?php echo esc_html($post['excerpt']); ?>
                                </p>
                            </div>
                            <span
                                class="block text-[13px] text-gray-400 font-inter font-light"><?php echo esc_html($post['date']); ?></span>
                        </div>
                    </article>
                    <?php
                }
            endif;
            ?>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 lg:py-32 bg-[#006eff] relative overflow-hidden text-white text-center">
    <!-- 원형 빛 무늬 효과 -->
    <div
        class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] lg:w-[1000px] h-[600px] lg:h-[1000px] rounded-full bg-white/10 blur-[80px] lg:blur-[120px] pointer-events-none z-0">
    </div>

    <div class="relative z-10 max-w-[800px] mx-auto px-5">
        <h2 class="font-pretendard text-[28px] lg:text-[48px] font-bold leading-tight tracking-tight mb-6"
            data-aos="fade-up">
            혼자 고민하지 마세요.<br>이엘이 함께 헤쳐 나갑니다.
        </h2>
        <p class="font-pretendard text-white/80 text-[15px] lg:text-[18px] font-light leading-relaxed mb-10 max-w-[600px] mx-auto"
            data-aos="fade-up" data-aos-delay="100">
            사건 초기 수사 단계 대처부터 최종 법원 변론까지,<br>법률 전문가들의 즉각적이고 다각적인 대응으로 최선의 결과를 약속드립니다.
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-4" data-aos="fade-up" data-aos-delay="200">
            <a href="<?php echo esc_url(home_url('/contact/')); ?>"
                class="inline-flex items-center justify-center gap-2 h-[56px] px-8 bg-white text-[#006eff] text-[16px] font-bold rounded-2xl hover:bg-gray-50 transition-colors duration-200 shadow-xl shadow-[#006eff]/20">
                1:1 온라인 상담 신청
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3">
                    </path>
                </svg>
            </a>
            <a href="tel:02-872-1307"
                class="inline-flex items-center justify-center gap-2 h-[56px] px-8 border border-white/30 bg-white/10 text-white text-[16px] font-bold rounded-2xl hover:bg-white/20 transition-colors duration-200 backdrop-blur-sm">
                전화 법률 상담 연결
            </a>
        </div>
    </div>
</section>

<!-- 탭 기능 제어 바닐라 JS 스크립트 -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const tabs = document.querySelectorAll('.about-tab');
        const textElement = document.getElementById('about-text');
        const headingElement = document.getElementById('about-heading');
        const progressBar = document.getElementById('about-progress');
        const imageElement = document.getElementById('about-img');

        const tabData = {
            communication: {
                headings: ['처음부터 끝까지', '의뢰인의 편에서 함께합니다.'],
                text: '단순한 법률 대리가 아닌, 의뢰인의 삶을 깊이 이해하는 파트너가 되겠습니다. 실시간 진행 상황을 신속하고 투명하게 공유하며, 든든한 소통으로 처음부터 끝까지 책임을 다합니다.',
                progress: '35%',
                image: 'https://images.pexels.com/photos/3184418/pexels-photo-3184418.jpeg'
            },
            focus: {
                headings: ['사건의 본질을 분석하고', '가장 유리한 해결책에 집중합니다.'],
                text: '각 분야 전문 법률 대리인으로 구성된 드림팀이 사건의 실마리를 짚어냅니다. 핵심 쟁점에 수사력을 집중하여 의뢰인의 권리를 극대화하는 정밀한 변론을 보장합니다.',
                progress: '70%',
                image: 'https://images.pexels.com/photos/4427610/pexels-photo-4427610.jpeg'
            },
            reasonable: {
                headings: ['합리적이고 투명한', '수임료 기준을 약속합니다.'],
                text: '불안감을 악용하는 과도한 수임료 책정을 지양합니다. 투명한 가격 정책과 예측 가능한 단계별 비용 안내를 통해 신뢰받는 법률 동반자로서 거품 없는 가치를 증명하겠습니다.',
                progress: '100%',
                image: 'https://images.pexels.com/photos/5668858/pexels-photo-5668858.jpeg'
            }
        };

        tabs.forEach(tab => {
            tab.addEventListener('click', function () {
                // 모든 탭 스타일 초기화
                tabs.forEach(t => {
                    t.classList.remove('active', 'bg-[#eef4ff]', 'border-iel-blue', 'text-iel-blue', 'shadow-sm');
                    t.classList.add('bg-[#f8f8f8]', 'text-[#5f5f5f]');
                });

                // 클릭된 탭 스타일 활성화
                this.classList.add('active', 'bg-[#eef4ff]', 'border-iel-blue', 'text-iel-blue', 'shadow-sm');
                this.classList.remove('bg-[#f8f8f8]', 'text-[#5f5f5f]');

                const data = tabData[this.dataset.tab];

                // 텍스트 및 게이지 바 업데이트
                progressBar.style.width = data.progress;
                imageElement.src = data.image;
                textElement.innerHTML = data.text;

                // 헤더 내용 변경
                headingElement.innerHTML = `
                <h2 class="font-pretendard text-[24px] lg:text-[34px] font-bold text-[#1f1f1f] leading-snug">${data.headings[0]}</h2>
                <h2 class="font-pretendard text-[24px] lg:text-[34px] font-bold text-[#1f1f1f] leading-snug">${data.headings[1]}</h2>
            `;
            });
        });
    });
</script>

<?php
get_footer();
