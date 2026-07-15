<?php
/**
 * The template for displaying the footer
 */
?>

<footer class="bg-[#111111] text-white font-pretendard border-t border-white/5">

    <!-- 푸터 상단 메인 영역 -->
    <div class="max-w-[1520px] mx-auto px-5 lg:px-10 py-16 lg:py-24">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-8">

            <!-- 컬럼 1: 브랜드 및 회사 정보 -->
            <div class="lg:col-span-1 flex flex-col gap-5">
                <span class="font-lora text-[22px] font-bold tracking-tight">법무법인 이엘</span>
                <p class="text-[14px] text-[#9d9d9d] leading-loose font-light">
                    의뢰인의 든든한 동반자.<br>
                    처음부터 끝까지 진심을 다합니다.
                </p>
                <div
                    class="text-[13px] text-[#6d6d6d] leading-relaxed space-y-1.5 font-light border-t border-white/5 pt-5">
                    <p>서울 강남구 테헤란로 110, 15층</p>
                    <p class="font-inter">Tel. 02-872-1307</p>
                    <p class="font-inter">iel@iel.im</p>
                    <p>대표변호사: 이영현</p>
                </div>
            </div>

            <!-- 컬럼 2: 법률 서비스 링크 -->
            <div class="flex flex-col gap-5">
                <h3 class="text-[15px] font-semibold text-white tracking-wide">법률 서비스</h3>
                <ul class="space-y-3 text-[14px] text-[#9d9d9d] font-light">
                    <li><a href="<?php echo esc_url(home_url('/practice-areas/')); ?>"
                            class="hover:text-white transition-colors duration-200">성범죄 · 강력 형사 전담</a></li>
                    <li><a href="<?php echo esc_url(home_url('/practice-areas/')); ?>"
                            class="hover:text-white transition-colors duration-200">피해자 보호 · 고소 대리</a></li>
                    <li><a href="<?php echo esc_url(home_url('/practice-areas/')); ?>"
                            class="hover:text-white transition-colors duration-200">개인회생 · 파산 전담</a></li>
                    <li><a href="<?php echo esc_url(home_url('/practice-areas/')); ?>"
                            class="hover:text-white transition-colors duration-200">민사 · 가사 · 상속 분쟁</a></li>
                </ul>
            </div>

            <!-- 컬럼 3: 법인 안내 링크 -->
            <div class="flex flex-col gap-5">
                <h3 class="text-[15px] font-semibold text-white tracking-wide">법인 안내</h3>
                <ul class="space-y-3 text-[14px] text-[#9d9d9d] font-light">
                    <li><a href="<?php echo esc_url(home_url('/about/')); ?>"
                            class="hover:text-white transition-colors duration-200">법인 소개</a></li>
                    <li><a href="<?php echo esc_url(home_url('/news/')); ?>"
                            class="hover:text-white transition-colors duration-200">뉴스</a></li>
                    <li><a href="<?php echo esc_url(home_url('/insight/')); ?>"
                            class="hover:text-white transition-colors duration-200">법률 인사이트</a></li>
                    <li><a href="<?php echo esc_url(home_url('/careers/')); ?>"
                            class="hover:text-white transition-colors duration-200">인재 채용</a></li>
                </ul>
            </div>

            <!-- 컬럼 4: 빠른 상담 CTA -->
            <div class="flex flex-col gap-5">
                <h3 class="text-[15px] font-semibold text-white tracking-wide">빠른 상담</h3>
                <p class="text-[14px] text-[#9d9d9d] font-light leading-relaxed">
                    모든 상담 내용은 변호사법에 따라 엄격히 비밀 보장됩니다.
                </p>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>"
                    class="inline-flex items-center justify-center gap-2 w-full h-[48px] bg-[#006eff] text-white text-[14px] font-semibold rounded-xl hover:bg-blue-500 transition-colors duration-200 shadow-lg shadow-[#006eff]/15">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                        </path>
                    </svg>
                    1:1 상담 신청
                </a>
                <div class="border border-white/10 rounded-xl p-4 text-center">
                    <p class="text-[12px] text-[#6d6d6d] mb-1 font-light">평일 상담 운영 시간</p>
                    <p class="text-[14px] text-white font-semibold font-inter">09:00 — 19:00</p>
                    <p class="text-[12px] text-[#6d6d6d] mt-1 font-light">토·일·공휴일 제외</p>
                </div>
            </div>

        </div>
    </div>

    <!-- 푸터 하단 저작권 바 -->
    <div class="border-t border-white/5">
        <div
            class="max-w-[1520px] mx-auto px-5 lg:px-10 py-5 flex flex-col md:flex-row items-center justify-between gap-3">
            <p class="text-[13px] text-[#4d4d4d] font-light">
                © 2026 Law Firm IEL. All Rights Reserved.
            </p>
            <div class="flex items-center gap-6 text-[13px] text-[#4d4d4d]">
                <a href="#" class="hover:text-white transition-colors duration-200">이용약관</a>
                <a href="#"
                    class="hover:text-white font-semibold transition-colors duration-200 text-[#6d6d6d]">개인정보처리방침</a>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>"
                    class="hover:text-white transition-colors duration-200">찾아오시는 길</a>
            </div>
        </div>
    </div>

</footer>

<?php wp_footer(); ?>

<script>
    // AOS 애니메이션 전역 초기화 (모든 페이지 템플릿에서 공통 작동)
    document.addEventListener('DOMContentLoaded', function () {
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 800,
                once: true,
                easing: 'ease-out-quad',
                offset: 60
            });
        }
    });
</script>

<!-- ============================================
     플로팅 상담 버튼 (모든 페이지 공통)
     ============================================ -->
<div id="float-consult-wrap"
    style="position:fixed;bottom:28px;right:28px;z-index:9999;display:flex;flex-direction:column;align-items:flex-end;gap:12px;">

    <!-- 채널 선택 팝업 (기본 숨김) -->
    <div id="float-consult-menu" style="display:flex;flex-direction:column;gap:10px;align-items:flex-end;
                opacity:0;transform:translateY(12px) scale(0.95);
                transition:opacity 0.22s ease, transform 0.22s ease;
                pointer-events:none;">

        <!-- 카카오톡 채널 -->
        <a href="http://pf.kakao.com/_INxeeT" target="_blank" rel="noopener" id="float-kakao" style="display:flex;align-items:center;gap:10px;
                  background:#FEE500;color:#1a1a1a;
                  padding:10px 18px 10px 14px;
                  border-radius:100px;
                  font-family:Pretendard,sans-serif;font-size:14px;font-weight:700;
                  text-decoration:none;white-space:nowrap;
                  box-shadow:0 4px 20px rgba(0,0,0,0.12);
                  transition:transform 0.15s ease, box-shadow 0.15s ease;"
            onmouseover="this.style.transform='scale(1.04)';this.style.boxShadow='0 6px 24px rgba(0,0,0,0.18)';"
            onmouseout="this.style.transform='scale(1)';this.style.boxShadow='0 4px 20px rgba(0,0,0,0.12)';">
            <!-- 카카오 말풍선 아이콘 -->
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12 3C6.477 3 2 6.82 2 11.5c0 2.91 1.67 5.48 4.22 7.09L5 21l3.6-1.8C9.5 19.38 10.73 19.5 12 19.5c5.523 0 10-3.82 10-8.5S17.523 3 12 3z"
                    fill="#1a1a1a" />
            </svg>
            카카오톡 상담
        </a>

        <!-- 상담 신청 폼 -->
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" id="float-form" style="display:flex;align-items:center;gap:10px;
                  background:#006eff;color:#fff;
                  padding:10px 18px 10px 14px;
                  border-radius:100px;
                  font-family:Pretendard,sans-serif;font-size:14px;font-weight:700;
                  text-decoration:none;white-space:nowrap;
                  box-shadow:0 4px 20px rgba(0,110,255,0.25);
                  transition:transform 0.15s ease, box-shadow 0.15s ease;"
            onmouseover="this.style.transform='scale(1.04)';this.style.boxShadow='0 6px 24px rgba(0,110,255,0.35)';"
            onmouseout="this.style.transform='scale(1)';this.style.boxShadow='0 4px 20px rgba(0,110,255,0.25)';">
            <svg width="20" height="20" fill="none" stroke="#fff" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
            </svg>
            상담 신청 폼
        </a>

        <!-- 전화 연결 -->
        <a href="tel:02-872-1307" id="float-tel" style="display:flex;align-items:center;gap:10px;
                  background:#fff;color:#1a1a1a;
                  padding:10px 18px 10px 14px;
                  border-radius:100px;
                  border:1.5px solid #e5e7eb;
                  font-family:Pretendard,sans-serif;font-size:14px;font-weight:700;
                  text-decoration:none;white-space:nowrap;
                  box-shadow:0 4px 20px rgba(0,0,0,0.08);
                  transition:transform 0.15s ease, box-shadow 0.15s ease;"
            onmouseover="this.style.transform='scale(1.04)';this.style.boxShadow='0 6px 24px rgba(0,0,0,0.14)';"
            onmouseout="this.style.transform='scale(1)';this.style.boxShadow='0 4px 20px rgba(0,0,0,0.08)';">
            <svg width="20" height="20" fill="none" stroke="#006eff" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
            </svg>
            02-872-1307
        </a>

    </div>

    <!-- 메인 플로팅 버튼 -->
    <button id="float-consult-btn" aria-label="상담 채널 선택" style="width:58px;height:58px;border-radius:50%;
                   background:linear-gradient(135deg,#006eff 0%,#0047cc 100%);
                   border:none;cursor:pointer;
                   display:flex;align-items:center;justify-content:center;
                   box-shadow:0 6px 24px rgba(0,110,255,0.35);
                   transition:transform 0.2s ease, box-shadow 0.2s ease;
                   position:relative;"
        onmouseover="this.style.transform='scale(1.08)';this.style.boxShadow='0 8px 30px rgba(0,110,255,0.45)';"
        onmouseout="if(!document.getElementById('float-consult-menu').classList.contains('open')){this.style.transform='scale(1)';this.style.boxShadow='0 6px 24px rgba(0,110,255,0.35)';}">
        <!-- 채팅 아이콘 (기본) -->
        <svg id="float-icon-chat" width="26" height="26" fill="none" stroke="#fff" stroke-width="2" viewBox="0 0 24 24"
            style="transition:opacity 0.2s ease, transform 0.2s ease;">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
        </svg>
        <!-- X 아이콘 (팝업 열렸을 때) -->
        <svg id="float-icon-close" width="24" height="24" fill="none" stroke="#fff" stroke-width="2.5"
            viewBox="0 0 24 24"
            style="position:absolute;opacity:0;transform:rotate(-90deg);transition:opacity 0.2s ease, transform 0.2s ease;">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>

        <!-- 펄스 링 애니메이션 -->
        <span style="position:absolute;inset:0;border-radius:50%;
                     background:rgba(0,110,255,0.3);
                     animation:iel-pulse 2s ease-out infinite;"></span>
    </button>
</div>

<!-- 펄스 키프레임 -->
<style>
    @keyframes iel-pulse {
        0% {
            transform: scale(1);
            opacity: 0.7;
        }

        70% {
            transform: scale(1.6);
            opacity: 0;
        }

        100% {
            transform: scale(1.6);
            opacity: 0;
        }
    }
</style>

<script>
    (function () {
        var btn = document.getElementById('float-consult-btn');
        var menu = document.getElementById('float-consult-menu');
        var iconChat = document.getElementById('float-icon-chat');
        var iconClose = document.getElementById('float-icon-close');
        var isOpen = false;

        function openMenu() {
            isOpen = true;
            menu.style.opacity = '1';
            menu.style.transform = 'translateY(0) scale(1)';
            menu.style.pointerEvents = 'auto';
            iconChat.style.opacity = '0';
            iconChat.style.transform = 'rotate(90deg)';
            iconClose.style.opacity = '1';
            iconClose.style.transform = 'rotate(0deg)';
            menu.classList.add('open');
        }

        function closeMenu() {
            isOpen = false;
            menu.style.opacity = '0';
            menu.style.transform = 'translateY(12px) scale(0.95)';
            menu.style.pointerEvents = 'none';
            iconChat.style.opacity = '1';
            iconChat.style.transform = 'rotate(0deg)';
            iconClose.style.opacity = '0';
            iconClose.style.transform = 'rotate(-90deg)';
            btn.style.transform = 'scale(1)';
            btn.style.boxShadow = '0 6px 24px rgba(0,110,255,0.35)';
            menu.classList.remove('open');
        }

        btn.addEventListener('click', function (e) {
            e.stopPropagation();
            isOpen ? closeMenu() : openMenu();
        });

        // 메뉴 바깥 클릭 시 닫기
        document.addEventListener('click', function (e) {
            if (isOpen && !document.getElementById('float-consult-wrap').contains(e.target)) {
                closeMenu();
            }
        });
    })();
</script>

</body>

</html>