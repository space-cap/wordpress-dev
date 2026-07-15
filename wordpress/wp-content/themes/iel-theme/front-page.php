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
            frameborder="0" 
            allow="autoplay; encrypted-media" 
            allowfullscreen>
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
            <h3 class="font-pretendard text-[18px] lg:text-[26px] font-medium text-white/80 tracking-tight" data-aos="fade-up" data-aos-delay="200">
                의뢰인의 든든한 동반자, 법무법인 이엘이 함께합니다.
            </h3>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="py-24 lg:py-36 bg-white overflow-hidden">
    <div class="max-w-[1520px] mx-auto px-5 lg:px-10 flex flex-col lg:flex-row lg:items-center justify-between gap-16 lg:gap-24">
        <!-- 왼쪽 텍스트 정보 영역 -->
        <div class="w-full lg:max-w-[550px] flex flex-col items-center text-center lg:items-start lg:text-left shrink-0">
            <!-- 소제목 -->
            <div id="about-heading" class="mb-8 lg:mb-12 h-[80px] lg:h-[100px]">
                <h2 class="font-pretendard text-[24px] lg:text-[34px] font-bold text-[#1f1f1f] leading-snug" data-aos="fade-up">
                    처음부터 끝까지
                </h2>
                <h2 class="font-pretendard text-[24px] lg:text-[34px] font-bold text-[#1f1f1f] leading-snug" data-aos="fade-up" data-aos-delay="100">
                    의뢰인의 편에서 함께합니다.
                </h2>
            </div>

            <!-- 탭 제어 버튼 -->
            <div class="flex flex-wrap justify-center lg:justify-start gap-3 lg:gap-4 mb-8 lg:mb-10" data-aos="fade-up" data-aos-delay="200">
                <button class="about-tab active h-[38px] lg:h-[48px] px-6 lg:px-8 rounded-full font-inter text-[13px] lg:text-[15px] font-semibold transition-all duration-300 bg-[#eef4ff] border border-iel-blue text-iel-blue shadow-sm" data-tab="communication">
                    Communication
                </button>
                <button class="about-tab h-[38px] lg:h-[48px] px-6 lg:px-8 rounded-full font-inter text-[13px] lg:text-[15px] font-medium transition-all duration-300 bg-[#f8f8f8] text-[#5f5f5f] hover:bg-[#f0f0f0]" data-tab="focus">
                    Focus
                </button>
                <button class="about-tab h-[38px] lg:h-[48px] px-6 lg:px-8 rounded-full font-inter text-[13px] lg:text-[15px] font-medium transition-all duration-300 bg-[#f8f8f8] text-[#5f5f5f] hover:bg-[#f0f0f0]" data-tab="reasonable">
                    Reasonable
                </button>
            </div>

            <!-- 탭 텍스트 내용 -->
            <div id="about-content" class="font-pretendard text-[16px] lg:text-[19px] font-medium text-[#4b4b4b] leading-relaxed mb-8 lg:mb-12 h-[120px] lg:h-[140px] flex items-center" data-aos="fade-up" data-aos-delay="300">
                <p id="about-text">
                    단순한 법률 대리가 아닌, 의뢰인의 삶을 깊이 이해하는 파트너가 되겠습니다. 실시간 진행 상황을 신속하고 투명하게 공유하며, 든든한 소통으로 처음부터 끝까지 책임을 다합니다.
                </p>
            </div>

            <!-- 게이지 바 (Progress Bar) -->
            <div class="relative w-[140px] lg:w-[200px] h-[5px] rounded-full overflow-hidden bg-[#e4e4e4]" data-aos="fade-up" data-aos-delay="400">
                <div id="about-progress" class="absolute left-0 top-0 h-full bg-iel-blue transition-all duration-500" style="width: 35%;"></div>
            </div>
        </div>

        <!-- 오른쪽 이미지 영역 (반응형 대응) -->
        <div class="w-full flex-1 h-[300px] sm:h-[400px] lg:h-[580px] rounded-[24px] overflow-hidden shadow-md relative" data-aos="fade-left">
            <img id="about-img" src="https://images.pexels.com/photos/3184418/pexels-photo-3184418.jpeg" alt="Communication" loading="lazy" class="w-full h-full object-cover transition-all duration-500">
        </div>
    </div>
</section>

<!-- 탭 기능 제어 바닐라 JS 스크립트 -->
<script>
document.addEventListener('DOMContentLoaded', function() {
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
        tab.addEventListener('click', function() {
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
