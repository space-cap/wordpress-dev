<?php
/**
 * Template Name: Practice Areas Page
 * The template for displaying the Practice Areas page.
 */

get_header();
?>

<!-- 히어로 섹션 -->
<section class="relative pt-[120px] lg:pt-[200px] pb-[60px] lg:pb-[120px] bg-gradient-to-br from-[#0c1020] via-[#101b3a] to-[#0c1020] text-white overflow-hidden">
    <!-- 오버레이 광채 효과 -->
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_left,rgba(0,110,255,0.12),transparent_60%)]"></div>
    
    <div class="relative z-10 max-w-[1520px] mx-auto px-5 lg:px-10">
        <div class="max-w-[800px]" data-aos="fade-up" data-aos-duration="1000">
            <span class="inline-block text-[#006eff] font-inter text-[14px] lg:text-[16px] font-bold tracking-widest uppercase mb-4">PRACTICE AREAS</span>
            <h1 class="font-pretendard text-[32px] lg:text-[54px] font-bold leading-tight tracking-tight mb-6">
                분야별 최고 전문가들의<br>
                정밀하고 입체적인 해결책
            </h1>
            <p class="font-pretendard text-[16px] lg:text-[20px] font-light text-gray-300 leading-relaxed">
                법무법인 이엘은 각 전담 센터를 필두로 복잡하게 얽힌 사건을 세분화하여 분석합니다.<br class="hidden lg:inline">
                단 하나의 쟁점도 놓치지 않는 철저한 법리 검토로 의뢰인의 권리를 완벽하게 수호합니다.
            </p>
        </div>
    </div>
</section>

<!-- 서비스 목록 그리드 섹션 -->
<section class="py-20 lg:py-32 bg-white">
    <div class="max-w-[1520px] mx-auto px-5 lg:px-10">
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12">
            
            <!-- 서비스 1: 성범죄 및 강력 형사 사건 -->
            <div class="bg-gray-50 border border-gray-100 rounded-[32px] p-8 lg:p-12 hover:bg-white hover:shadow-2xl hover:shadow-[#006eff]/5 hover:border-[#006eff]/20 transition-all duration-300 group" data-aos="fade-up">
                <div class="flex items-start justify-between mb-8">
                    <div class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center shadow-sm group-hover:bg-[#006eff] transition-colors duration-300">
                        <!-- 형사 사건 해머 아이콘 -->
                        <svg class="w-7 h-7 text-[#006eff] group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path></svg>
                    </div>
                    <span class="font-inter text-gray-300 font-bold text-[32px] lg:text-[40px] group-hover:text-[#006eff]/20 transition-colors">01</span>
                </div>
                <h3 class="font-pretendard text-[22px] lg:text-[28px] font-bold text-[#1a1a1a] mb-4">성범죄 · 강력 형사 전담 센터</h3>
                <p class="font-pretendard text-gray-500 text-[15px] lg:text-[16px] leading-relaxed mb-6 font-light">
                    성추행, 성폭행, 카메라 이용 촬영죄 등 예기치 못한 성범죄 연루 시 수사 초기(경찰 단계)부터 검사 출신 변호사팀이 즉각 투입됩니다. 무죄 주장 및 불기소 처분, 양형 변론에 대한 체계적이고 과학적인 방어막을 형성합니다.
                </p>
                <ul class="space-y-2.5 text-[14px] lg:text-[15px] text-gray-600 font-light border-t border-gray-100 pt-6">
                    <li class="flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-[#006eff]"></span>
                        강제추행 / 준강간 등 성폭력 사건 적극 방어
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-[#006eff]"></span>
                        통신매체이용음란, 카메라이용촬영 등 디지털 성범죄 포렌식 검토
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-[#006eff]"></span>
                        사기, 횡령, 배임 등 기업 형사 및 재산 범죄
                    </li>
                </ul>
            </div>

            <!-- 서비스 2: 피해자 법률 보호 및 고소 대리 -->
            <div class="bg-gray-50 border border-gray-100 rounded-[32px] p-8 lg:p-12 hover:bg-white hover:shadow-2xl hover:shadow-[#006eff]/5 hover:border-[#006eff]/20 transition-all duration-300 group" data-aos="fade-up" data-aos-delay="100">
                <div class="flex items-start justify-between mb-8">
                    <div class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center shadow-sm group-hover:bg-[#006eff] transition-colors duration-300">
                        <!-- 피해자 보호/실드 아이콘 -->
                        <svg class="w-7 h-7 text-[#006eff] group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    </div>
                    <span class="font-inter text-gray-300 font-bold text-[32px] lg:text-[40px] group-hover:text-[#006eff]/20 transition-colors">02</span>
                </div>
                <h3 class="font-pretendard text-[22px] lg:text-[28px] font-bold text-[#1a1a1a] mb-4">피해자 보호 · 고소 대리</h3>
                <p class="font-pretendard text-gray-500 text-[15px] lg:text-[16px] leading-relaxed mb-6 font-light">
                    사건의 피해자로서 억울함을 밝히고 가해자에게 엄중한 법적 책임을 묻고 싶은 분들을 위해 존재합니다. 정교한 고소장 작성, 피해자 진술 동행, 형사 합의 및 민사 손해배상 청구까지 의뢰인이 2차 피해 없이 상처를 치유하도록 돕습니다.
                </p>
                <ul class="space-y-2.5 text-[14px] lg:text-[15px] text-gray-600 font-light border-t border-gray-100 pt-6">
                    <li class="flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-[#006eff]"></span>
                        스토킹, 데이트 폭력, 직장 내 성희롱 피해자 보호 조치
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-[#006eff]"></span>
                        형사 고소장 작성 및 수사 참여 동석 지원
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-[#006eff]"></span>
                        가해자 대응 형사 합의 및 민사상 불법행위 손해배상 청구
                    </li>
                </ul>
            </div>

            <!-- 서비스 3: 개인회생 및 파산 전담 센터 -->
            <div class="bg-gray-50 border border-gray-100 rounded-[32px] p-8 lg:p-12 hover:bg-white hover:shadow-2xl hover:shadow-[#006eff]/5 hover:border-[#006eff]/20 transition-all duration-300 group" data-aos="fade-up">
                <div class="flex items-start justify-between mb-8">
                    <div class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center shadow-sm group-hover:bg-[#006eff] transition-colors duration-300">
                        <!-- 동전/금융 아이콘 -->
                        <svg class="w-7 h-7 text-[#006eff] group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <span class="font-inter text-gray-300 font-bold text-[32px] lg:text-[40px] group-hover:text-[#006eff]/20 transition-colors">03</span>
                </div>
                <h3 class="font-pretendard text-[22px] lg:text-[28px] font-bold text-[#1a1a1a] mb-4">개인회생 · 파산 전담 센터</h3>
                <p class="font-pretendard text-gray-500 text-[15px] lg:text-[16px] leading-relaxed mb-6 font-light">
                    감당하기 힘든 과도한 채무로 고통받는 의뢰인을 위해 신속하고 확실한 빚 탕감 솔루션을 제시합니다. 법원의 까다로운 보정 명령에 정밀하게 대응하고, 면책 허가를 조속히 받아내어 새로운 경제적 출발을 적극적으로 지원합니다.
                </p>
                <ul class="space-y-2.5 text-[14px] lg:text-[15px] text-gray-600 font-light border-t border-gray-100 pt-6">
                    <li class="flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-[#006eff]"></span>
                        개인회생 신청 및 금지명령 · 개시결정 신속 도출
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-[#006eff]"></span>
                        채무 과다 직장인, 프리랜서, 자영업자 맞춤 회생 솔루션
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-[#006eff]"></span>
                        개인파산 신청 및 면책 절차 수행
                    </li>
                </ul>
            </div>

            <!-- 서비스 4: 일반 민사, 가사 및 상속 분쟁 -->
            <div class="bg-gray-50 border border-gray-100 rounded-[32px] p-8 lg:p-12 hover:bg-white hover:shadow-2xl hover:shadow-[#006eff]/5 hover:border-[#006eff]/20 transition-all duration-300 group" data-aos="fade-up" data-aos-delay="100">
                <div class="flex items-start justify-between mb-8">
                    <div class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center shadow-sm group-hover:bg-[#006eff] transition-colors duration-300">
                        <!-- 빌딩/계약 아이콘 -->
                        <svg class="w-7 h-7 text-[#006eff] group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    </div>
                    <span class="font-inter text-gray-300 font-bold text-[32px] lg:text-[40px] group-hover:text-[#006eff]/20 transition-colors">04</span>
                </div>
                <h3 class="font-pretendard text-[22px] lg:text-[28px] font-bold text-[#1a1a1a] mb-4">민사 · 가사 · 상속 분쟁</h3>
                <p class="font-pretendard text-gray-500 text-[15px] lg:text-[16px] leading-relaxed mb-6 font-light">
                    부동산 분쟁, 임대차 분쟁, 대여금 등 다양한 민사 소송과 가사(이혼, 재산분할), 상속 분쟁을 원만하고 조속히 매듭짓습니다. 의뢰인의 재산권과 가족 간의 갈등 속 정당한 몫을 보장하기 위한 철저한 증거 확보 및 빈틈없는 소송 변론을 진행합니다.
                </p>
                <ul class="space-y-2.5 text-[14px] lg:text-[15px] text-gray-600 font-light border-t border-gray-100 pt-6">
                    <li class="flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-[#006eff]"></span>
                        임대차 보증금 반환, 부동산 매매 계약 분쟁 및 소송
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-[#006eff]"></span>
                        재판상 이혼, 위자료 및 재산분할 청구
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-[#006eff]"></span>
                        상속 재산 분할 협의, 유류분 반환 청구 소송
                    </li>
                </ul>
            </div>

        </div>
    </div>
</section>

<!-- 상담 예약 링크 CTA -->
<section class="py-16 lg:py-24 bg-[#0a1128] text-center relative overflow-hidden">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(0,110,255,0.1),transparent_70%)]"></div>
    <div class="relative z-10 max-w-[800px] mx-auto px-5" data-aos="fade-up">
        <h2 class="font-pretendard text-[24px] lg:text-[36px] font-bold text-white mb-6">당신의 고민에 최고의 법률 대응을 세워 드립니다.</h2>
        <p class="font-pretendard text-gray-400 text-[15px] lg:text-[17px] mb-8 font-light">
            아무에게도 털어놓지 못했던 법률 고민, 이엘의 대표변호사팀이 직접 들여다보고 속 시원한 돌파구를 마련해 드리겠습니다.
        </p>
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="inline-block bg-[#006eff] text-white font-pretendard text-[16px] lg:text-[18px] font-semibold px-8 py-4 rounded-full hover:bg-blue-600 shadow-lg shadow-[#006eff]/20 transition-all duration-300">
            실시간 1:1 상담 신청
        </a>
    </div>
</section>

<?php
get_footer();
