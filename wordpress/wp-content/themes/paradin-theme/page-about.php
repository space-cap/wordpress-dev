<?php
/**
 * Template Name: About Page
 * The template for displaying the About page.
 */

get_header();
?>

<!-- 히어로 섹션 -->
<section class="relative pt-[120px] lg:pt-[200px] pb-[60px] lg:pb-[120px] bg-gradient-to-br from-[#0b132b] via-[#1c2541] to-[#0b132b] text-white overflow-hidden">
    <!-- 은은한 오버레이 배경 효과 -->
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(0,110,255,0.15),transparent_50%)]"></div>
    
    <div class="relative z-10 max-w-[1520px] mx-auto px-5 lg:px-10">
        <div class="max-w-[800px]" data-aos="fade-up" data-aos-duration="1000">
            <span class="inline-block text-[#006eff] font-inter text-[14px] lg:text-[16px] font-bold tracking-widest uppercase mb-4">ABOUT PARADIN</span>
            <h1 class="font-pretendard text-[32px] lg:text-[54px] font-bold leading-tight tracking-tight mb-6">
                정의와 진실을 향한<br>
                의뢰인의 확고한 동반자
            </h1>
            <p class="font-pretendard text-[16px] lg:text-[20px] font-light text-gray-300 leading-relaxed">
                법무법인 파라딘은 풍부한 실무 경험을 지닌 전문가 그룹이 모여 탄생했습니다.<br class="hidden lg:inline">
                어렵고 복잡한 법률 분쟁 속에서 의뢰인이 다시 평온한 일상으로 복귀할 수 있도록, 처음부터 끝까지 진심을 다해 밀착 변호합니다.
            </p>
        </div>
    </div>
</section>

<!-- 비전 & 핵심 가치 섹션 -->
<section class="py-20 lg:py-32 bg-white">
    <div class="max-w-[1520px] mx-auto px-5 lg:px-10">
        <div class="text-center mb-16 lg:mb-24" data-aos="fade-up">
            <h2 class="font-pretendard text-[28px] lg:text-[40px] font-bold text-[#1a1a1a] tracking-tight">Core Values</h2>
            <p class="font-pretendard text-gray-500 text-[15px] lg:text-[18px] mt-3">법무법인 파라딘이 지켜 나가는 세 가지 철학입니다.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-12">
            <!-- 가치 1 -->
            <div class="group relative bg-[#f8fafe] border border-gray-100 rounded-3xl p-8 lg:p-10 transition-all duration-300 hover:shadow-xl hover:shadow-[#006eff]/5 hover:-translate-y-1.5" data-aos="fade-up" data-aos-delay="100">
                <div class="w-12 h-12 bg-white rounded-2xl flex items-center justify-center shadow-md mb-8 group-hover:bg-[#006eff] transition-colors duration-300">
                    <svg class="w-6 h-6 text-[#006eff] group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path></svg>
                </div>
                <h3 class="font-pretendard text-[20px] lg:text-[24px] font-bold text-[#1a1a1a] mb-4">신뢰와 소통 (Trust)</h3>
                <p class="font-pretendard text-gray-600 leading-relaxed text-[15px] lg:text-[16px]">
                    의뢰인과의 긴밀하고 투명한 커뮤니케이션을 통해 사건 진행 과정을 실시간 공유하며 깊은 정서적 안정감과 신뢰를 안겨드립니다.
                </p>
            </div>

            <!-- 가치 2 -->
            <div class="group relative bg-[#f8fafe] border border-gray-100 rounded-3xl p-8 lg:p-10 transition-all duration-300 hover:shadow-xl hover:shadow-[#006eff]/5 hover:-translate-y-1.5" data-aos="fade-up" data-aos-delay="200">
                <div class="w-12 h-12 bg-white rounded-2xl flex items-center justify-center shadow-md mb-8 group-hover:bg-[#006eff] transition-colors duration-300">
                    <svg class="w-6 h-6 text-[#006eff] group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                </div>
                <h3 class="font-pretendard text-[20px] lg:text-[24px] font-bold text-[#1a1a1a] mb-4">정교한 전략 (Strategy)</h3>
                <p class="font-pretendard text-gray-600 leading-relaxed text-[15px] lg:text-[16px]">
                    모든 사건을 일률적으로 처리하지 않습니다. 판례에 대한 면밀한 분석과 다각적 시뮬레이션을 통해 사건의 핵심을 파고드는 맞춤 해결책을 구상합니다.
                </p>
            </div>

            <!-- 가치 3 -->
            <div class="group relative bg-[#f8fafe] border border-gray-100 rounded-3xl p-8 lg:p-10 transition-all duration-300 hover:shadow-xl hover:shadow-[#006eff]/5 hover:-translate-y-1.5" data-aos="fade-up" data-aos-delay="300">
                <div class="w-12 h-12 bg-white rounded-2xl flex items-center justify-center shadow-md mb-8 group-hover:bg-[#006eff] transition-colors duration-300">
                    <svg class="w-6 h-6 text-[#006eff] group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3 class="font-pretendard text-[20px] lg:text-[24px] font-bold text-[#1a1a1a] mb-4">합리성 (Reasonableness)</h3>
                <p class="font-pretendard text-gray-600 leading-relaxed text-[15px] lg:text-[16px]">
                    의뢰인의 경제적 상황과 권리 보호를 최우선으로 생각합니다. 불투명하고 과도한 비용 대신 투명하고 명문화된 수임 제도를 지켜나갑니다.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- 전문 변호사 소개 섹션 -->
<section class="py-20 lg:py-32 bg-[#fafafa]">
    <div class="max-w-[1520px] mx-auto px-5 lg:px-10">
        <div class="flex flex-col lg:flex-row justify-between items-start lg:items-end mb-16 lg:mb-24" data-aos="fade-up">
            <div>
                <span class="text-[#006eff] font-inter text-[13px] lg:text-[15px] font-bold tracking-wider uppercase">OUR TEAM</span>
                <h2 class="font-pretendard text-[28px] lg:text-[40px] font-bold text-[#1a1a1a] tracking-tight mt-2">파라딘의 전문가들을 소개합니다.</h2>
            </div>
            <p class="font-pretendard text-gray-500 max-w-[450px] mt-4 lg:mt-0 text-[15px] lg:text-[16px] leading-relaxed">
                검사 출신 변호사부터 분야별 깊은 관록을 자랑하는 법률 대리인들까지, 압도적인 실력으로 여러분의 승소를 이끕니다.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-12">
            <!-- 변호사 1 -->
            <div class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group" data-aos="fade-up" data-aos-delay="100">
                <div class="h-[360px] lg:h-[420px] overflow-hidden relative">
                    <img src="https://images.pexels.com/photos/5668772/pexels-photo-5668772.jpeg" alt="이진혁 대표변호사" loading="lazy" class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                        <span class="text-white text-[14px] font-light">"진실은 언제나 단순하지만, 증명하기까지는 험난합니다."</span>
                    </div>
                </div>
                <div class="p-8">
                    <span class="text-[#006eff] text-[13px] lg:text-[14px] font-semibold uppercase tracking-wider">Representative Attorney</span>
                    <h3 class="font-pretendard text-[22px] lg:text-[26px] font-bold text-[#1a1a1a] mt-1 mb-4">이진혁 대표변호사</h3>
                    <ul class="text-gray-500 text-[14px] lg:text-[15px] space-y-2 font-light">
                        <li>• 전 서울중앙지방검찰청 검사</li>
                        <li>• 대한변호사협회 형사전문변호사 등록</li>
                        <li>• 서울대학교 법과대학 졸업</li>
                    </ul>
                </div>
            </div>

            <!-- 변호사 2 -->
            <div class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group" data-aos="fade-up" data-aos-delay="200">
                <div class="h-[360px] lg:h-[420px] overflow-hidden relative">
                    <img src="https://images.pexels.com/photos/5668853/pexels-photo-5668853.jpeg" alt="김윤아 파트너변호사" loading="lazy" class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                        <span class="text-white text-[14px] font-light">"의뢰인이 겪는 억울함을 깊이 공감하고 전략으로 돌파합니다."</span>
                    </div>
                </div>
                <div class="p-8">
                    <span class="text-[#006eff] text-[13px] lg:text-[14px] font-semibold uppercase tracking-wider">Partner Attorney</span>
                    <h3 class="font-pretendard text-[22px] lg:text-[26px] font-bold text-[#1a1a1a] mt-1 mb-4">김윤아 파트너변호사</h3>
                    <ul class="text-gray-500 text-[14px] lg:text-[15px] space-y-2 font-light">
                        <li>• 대한변호사협회 개인회생·파산 전문 등록</li>
                        <li>• 전 법무법인 세종 소속 변호사</li>
                        <li>• 고려대학교 법학전문대학원 우수 졸업</li>
                    </ul>
                </div>
            </div>

            <!-- 변호사 3 -->
            <div class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group" data-aos="fade-up" data-aos-delay="300">
                <div class="h-[360px] lg:h-[420px] overflow-hidden relative">
                    <img src="https://images.pexels.com/photos/8112129/pexels-photo-8112129.jpeg" alt="박준성 파트너변호사" loading="lazy" class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                        <span class="text-white text-[14px] font-light">"꼼꼼한 리서치와 빈틈없는 서면 작성으로 완벽을 기합니다."</span>
                    </div>
                </div>
                <div class="p-8">
                    <span class="text-[#006eff] text-[13px] lg:text-[14px] font-semibold uppercase tracking-wider">Partner Attorney</span>
                    <h3 class="font-pretendard text-[22px] lg:text-[26px] font-bold text-[#1a1a1a] mt-1 mb-4">박준성 파트너변호사</h3>
                    <ul class="text-gray-500 text-[14px] lg:text-[15px] space-y-2 font-light">
                        <li>• 대한변호사협회 민사·가사 전문 등록</li>
                        <li>• 전 서울가정법원 조정위원</li>
                        <li>• 연세대학교 법학과 졸업</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 연혁 및 발자취 섹션 -->
<section class="py-20 lg:py-32 bg-white">
    <div class="max-w-[1100px] mx-auto px-5">
        <div class="text-center mb-16 lg:mb-24" data-aos="fade-up">
            <span class="text-[#006eff] font-inter text-[13px] lg:text-[15px] font-bold tracking-wider uppercase">HISTORY</span>
            <h2 class="font-pretendard text-[28px] lg:text-[40px] font-bold text-[#1a1a1a] tracking-tight mt-2">법무법인 파라딘의 발자취</h2>
        </div>

        <!-- 타임라인 UI -->
        <div class="relative border-l border-gray-200 ml-4 md:ml-32 py-4">
            
            <!-- 연혁 1 -->
            <div class="mb-12 lg:mb-16 relative pl-8 md:pl-12" data-aos="fade-up">
                <!-- 타임라인 포인트 -->
                <span class="absolute -left-[9px] top-1.5 w-[18px] h-[18px] rounded-full bg-white border-[4px] border-[#006eff] shadow-sm"></span>
                <span class="hidden md:block absolute -left-[140px] top-1 text-[20px] font-bold text-[#1a1a1a] font-inter">2026</span>
                <div class="bg-gray-50 rounded-2xl p-6 lg:p-8">
                    <span class="md:hidden inline-block text-[15px] font-bold text-[#006eff] mb-2 font-inter">2026</span>
                    <h4 class="font-pretendard text-[18px] lg:text-[20px] font-bold text-[#1a1a1a] mb-3">서초 주사무소 확장 이전 및 성범죄 전담 센터 개편</h4>
                    <p class="font-pretendard text-gray-500 text-[14px] lg:text-[15px] font-light leading-relaxed">
                        사무실 규모 확장과 더불어 검사 출신 변호사 추가 영입. 성범죄 대응팀과 디지털 포렌식 검토 전담 부서를 확대 개편하였습니다.
                    </p>
                </div>
            </div>

            <!-- 연혁 2 -->
            <div class="mb-12 lg:mb-16 relative pl-8 md:pl-12" data-aos="fade-up">
                <!-- 타임라인 포인트 -->
                <span class="absolute -left-[9px] top-1.5 w-[18px] h-[18px] rounded-full bg-white border-[4px] border-[#006eff] shadow-sm"></span>
                <span class="hidden md:block absolute -left-[140px] top-1 text-[20px] font-bold text-gray-400 font-inter">2024</span>
                <div class="bg-gray-50 rounded-2xl p-6 lg:p-8">
                    <span class="md:hidden inline-block text-[15px] font-bold text-[#006eff] mb-2 font-inter">2024</span>
                    <h4 class="font-pretendard text-[18px] lg:text-[20px] font-bold text-[#1a1a1a] mb-3">개인회생 및 도산 전문 브랜치 설립</h4>
                    <p class="font-pretendard text-gray-500 text-[14px] lg:text-[15px] font-light leading-relaxed">
                        회생 및 파산 실무 경험이 풍부한 전문 변호인단을 주축으로 전담 브랜치를 성공적으로 출범, 서민 법률 구제에 기여하고 있습니다.
                    </p>
                </div>
            </div>

            <!-- 연혁 3 -->
            <div class="relative pl-8 md:pl-12" data-aos="fade-up">
                <!-- 타임라인 포인트 -->
                <span class="absolute -left-[9px] top-1.5 w-[18px] h-[18px] rounded-full bg-white border-[4px] border-[#006eff] shadow-sm"></span>
                <span class="hidden md:block absolute -left-[140px] top-1 text-[20px] font-bold text-gray-400 font-inter">2022</span>
                <div class="bg-gray-50 rounded-2xl p-6 lg:p-8">
                    <span class="md:hidden inline-block text-[15px] font-bold text-[#006eff] mb-2 font-inter">2022</span>
                    <h4 class="font-pretendard text-[18px] lg:text-[20px] font-bold text-[#1a1a1a] mb-3">법무법인 파라딘 설립</h4>
                    <p class="font-pretendard text-gray-500 text-[14px] lg:text-[15px] font-light leading-relaxed">
                        각 분야 베테랑 법률가들이 의기투합하여 고객에게 투명하고 강력한 올케어 법률 서비스를 약속하며 서초동에 법인을 설립하였습니다.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- 하단 CTA 배너 -->
<section class="py-16 lg:py-24 bg-[#0a1128] text-center relative overflow-hidden">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(0,110,255,0.1),transparent_70%)]"></div>
    <div class="relative z-10 max-w-[800px] mx-auto px-5" data-aos="fade-up">
        <h2 class="font-pretendard text-[24px] lg:text-[36px] font-bold text-white mb-6">지금 파라딘의 전략적인 자문을 받아보세요.</h2>
        <p class="font-pretendard text-gray-400 text-[15px] lg:text-[17px] mb-8 font-light">모든 상담 내용은 변호사법에 따라 엄격히 비밀 보장되며, 꼼꼼하게 해결 방향을 모색해 드립니다.</p>
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="inline-block bg-[#006eff] text-white font-pretendard text-[16px] lg:text-[18px] font-semibold px-8 py-4 rounded-full hover:bg-blue-600 shadow-lg shadow-[#006eff]/20 transition-all duration-300">
            실시간 1:1 상담 신청
        </a>
    </div>
</section>

<?php
get_footer();
