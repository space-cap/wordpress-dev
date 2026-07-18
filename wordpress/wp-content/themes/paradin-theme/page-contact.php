<?php
/**
 * Template Name: Contact Page
 * The template for displaying the Contact page.
 */

get_header();
?>

<!-- 히어로 섹션 -->
<section class="relative pt-[120px] lg:pt-[200px] pb-[60px] lg:pb-[100px] bg-gradient-to-br from-[#0b132b] via-[#1c2541] to-[#0b132b] text-white overflow-hidden">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(0,110,255,0.12),transparent_50%)]"></div>
    <div class="relative z-10 max-w-[1520px] mx-auto px-5 lg:px-10">
        <div class="max-w-[800px]" data-aos="fade-up" data-aos-duration="1000">
            <span class="inline-block text-[#006eff] font-inter text-[14px] lg:text-[16px] font-bold tracking-widest uppercase mb-4">CONTACT US</span>
            <h1 class="font-pretendard text-[32px] lg:text-[54px] font-bold leading-tight tracking-tight mb-4">
                비밀 보장 1:1 법률 상담
            </h1>
            <p class="font-pretendard text-[16px] lg:text-[19px] font-light text-gray-300 leading-relaxed">
                당신의 고민을 편안하게 털어놓으세요. 파라딘의 전문 변호인단이 직접 검토합니다.
            </p>
        </div>
    </div>
</section>

<!-- 상담 폼 및 오시는 길 2단 섹션 -->
<section class="py-20 lg:py-32 bg-white">
    <div class="max-w-[1520px] mx-auto px-5 lg:px-10 flex flex-col lg:flex-row gap-16 lg:gap-24">
        
        <!-- 왼쪽: 상담 신청 폼 -->
        <div class="w-full lg:flex-1" data-aos="fade-up">
            <div class="mb-10">
                <h2 class="font-pretendard text-[24px] lg:text-[32px] font-bold text-[#1a1a1a] tracking-tight">온라인 상담 신청</h2>
                <p class="font-pretendard text-gray-500 text-[14px] lg:text-[16px] mt-2 font-light">
                    작성하신 모든 정보는 변호사법 제26조에 의해 비밀이 보장됩니다.
                </p>
            </div>

            <!-- 커스텀 폼 (제출 시 모달 띄우기) -->
            <form id="consultation-form" class="space-y-6 lg:space-y-8 font-pretendard">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- 이름 -->
                    <div>
                        <label for="user-name" class="block text-[14px] font-semibold text-gray-700 mb-2">성함 *</label>
                        <input type="text" id="user-name" required placeholder="홍길동" class="w-full h-[52px] px-4 rounded-xl border border-gray-200 focus:outline-none focus:border-[#006eff] focus:ring-1 focus:ring-[#006eff] transition-all placeholder-gray-300 text-[15px]">
                    </div>
                    <!-- 연락처 -->
                    <div>
                        <label for="user-phone" class="block text-[14px] font-semibold text-gray-700 mb-2">연락처 *</label>
                        <input type="tel" id="user-phone" required placeholder="010-0000-0000" maxlength="13" inputmode="numeric" autocomplete="tel" class="w-full h-[52px] px-4 rounded-xl border border-gray-200 focus:outline-none focus:border-[#006eff] focus:ring-1 focus:ring-[#006eff] transition-all placeholder-gray-300 text-[15px]">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- 상담 분야 -->
                    <div>
                        <label for="consult-type" class="block text-[14px] font-semibold text-gray-700 mb-2">상담 분류 *</label>
                        <select id="consult-type" required class="w-full h-[52px] px-4 rounded-xl border border-gray-200 bg-white focus:outline-none focus:border-[#006eff] focus:ring-1 focus:ring-[#006eff] transition-all text-[15px]">
                            <option value="" disabled selected>분야를 선택해주세요</option>
                            <option value="criminal">성범죄 / 형사 사건</option>
                            <option value="victim">피해자 보호 / 고소 대리</option>
                            <option value="bankruptcy">개인회생 / 파산</option>
                            <option value="civil">일반 민사 / 가사 / 상속</option>
                            <option value="other">기타 법률 문의</option>
                        </select>
                    </div>
                    <!-- 이메일 -->
                    <div>
                        <label for="user-email" class="block text-[14px] font-semibold text-gray-700 mb-2">이메일 주소</label>
                        <input type="email" id="user-email" placeholder="example@email.com" class="w-full h-[52px] px-4 rounded-xl border border-gray-200 focus:outline-none focus:border-[#006eff] focus:ring-1 focus:ring-[#006eff] transition-all placeholder-gray-300 text-[15px]">
                    </div>
                </div>

                <!-- 문의 내용 -->
                <div>
                    <label for="consult-message" class="block text-[14px] font-semibold text-gray-700 mb-2">상담 요약 및 문의 내용 *</label>
                    <textarea id="consult-message" required rows="6" placeholder="상담받고자 하시는 사건 내용을 간략히 적어주시면 신속한 대응에 도움이 됩니다." class="w-full p-4 rounded-xl border border-gray-200 focus:outline-none focus:border-[#006eff] focus:ring-1 focus:ring-[#006eff] transition-all placeholder-gray-300 text-[15px] resize-none"></textarea>
                </div>

                <!-- 약관 동의 -->
                <div class="flex items-center gap-2.5">
                    <input type="checkbox" id="privacy-agree" required class="w-5 h-5 text-[#006eff] border-gray-300 rounded focus:ring-[#006eff]">
                    <label for="privacy-agree" class="text-[14px] text-gray-500 font-light select-none">
                        개인정보 수집 및 이용약관에 동의합니다. (필수)
                    </label>
                </div>

                <!-- 제출 버튼 -->
                <button type="submit" class="w-full h-[56px] bg-[#006eff] text-white font-semibold rounded-xl hover:bg-blue-600 shadow-lg shadow-[#006eff]/10 hover:shadow-xl transition-all duration-300">
                    상담 신청 완료하기
                </button>
            </form>
        </div>

        <!-- 오른쪽: 오시는 길 및 안내 -->
        <div class="w-full lg:w-[480px] shrink-0" data-aos="fade-left">
            <div class="mb-10">
                <h2 class="font-pretendard text-[24px] lg:text-[32px] font-bold text-[#1a1a1a] tracking-tight">오시는 길</h2>
                <p class="font-pretendard text-gray-500 text-[14px] lg:text-[16px] mt-2 font-light">
                    방문 상담 예약 시 편리하게 찾아오실 수 있습니다.
                </p>
            </div>

            <!-- 카카오맵 -->
            <div id="kakao-map" class="w-full h-[280px] lg:h-[320px] rounded-3xl overflow-hidden border border-gray-200 mb-8 shadow-sm bg-gray-100"></div>

            <!-- 카카오맵 SDK -->
            <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=b01f3d5e16e99b08927d358b940a07eb"></script>
            <script>
            (function() {
                var container = document.getElementById('kakao-map');
                var options = {
                    center: new kakao.maps.LatLng(37.498107, 127.0292857),
                    level: 3
                };
                var map = new kakao.maps.Map(container, options);

                // 마커 생성
                var markerPosition = new kakao.maps.LatLng(37.498107, 127.0292857);
                var marker = new kakao.maps.Marker({ position: markerPosition });
                marker.setMap(map);

                // 인포윈도우 (말풍선)
                var infowindow = new kakao.maps.InfoWindow({
                    content: '<div style="padding:10px 14px;font-family:Pretendard,sans-serif;font-size:13px;font-weight:600;color:#1a1a1a;white-space:nowrap;line-height:1.5;">법무법인 파라딘<br><span style="font-weight:400;color:#6d6d6d;font-size:12px;">강남구 테헤란로 110, 15층</span></div>',
                    removable: false
                });
                infowindow.open(map, marker);

                // 지도 컨트롤 추가
                var zoomControl = new kakao.maps.ZoomControl();
                map.addControl(zoomControl, kakao.maps.ControlPosition.RIGHT);
            })();
            </script>

            <!-- 상세 주소 및 교통편 -->
            <div class="space-y-6 font-pretendard text-[15px]">
                <!-- 주소 -->
                <div>
                    <h4 class="font-bold text-[#1a1a1a] mb-1">상세 주소</h4>
                    <p class="text-gray-500 font-light leading-relaxed">서울특별시 강남구 테헤란로 110 (역삼동, 파라딘타워) 15층</p>
                </div>
                <!-- 연락처 -->
                <div>
                    <h4 class="font-bold text-[#1a1a1a] mb-1">전화 및 이메일</h4>
                    <p class="text-gray-500 font-light font-inter">Tel. 02-872-1307</p>
                    <p class="text-gray-500 font-light font-inter">Email. contact@paradin.com</p>
                </div>
                <!-- 지하철 -->
                <div>
                    <h4 class="font-bold text-[#1a1a1a] mb-1">지하철 이용 시</h4>
                    <p class="text-gray-500 font-light leading-relaxed">
                        <span class="text-green-600 font-medium">2호선</span> / <span class="text-rose-700 font-medium">신분당선</span> 강남역 6번 출구로 나오셔서 전방 50m 직진, 좌측 파라딘타워로 진입하십시오.
                    </p>
                </div>
                <!-- 주차 -->
                <div>
                    <h4 class="font-bold text-[#1a1a1a] mb-1">주차 안내</h4>
                    <p class="text-gray-500 font-light leading-relaxed">본 건물 지하 주차장 이용 가능 (상담 고객에 한해 무료 주차권을 제공해 드립니다).</p>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- 커스텀 완료 모달 (바닐라 JS) -->
<div id="success-modal" class="hidden fixed inset-0 z-[100] flex items-center justify-center p-5 bg-black/60 backdrop-blur-[5px] transition-all duration-300">
    <div class="bg-white max-w-[480px] w-full rounded-[32px] p-8 lg:p-10 shadow-2xl text-center scale-95 transition-transform duration-300" id="success-modal-card">
        <!-- 체크 아이콘 -->
        <div class="mx-auto w-16 h-16 bg-[#eef4ff] rounded-full flex items-center justify-center text-[#006eff] mb-6">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
        </div>
        <h3 class="font-pretendard text-[22px] lg:text-[26px] font-bold text-[#1a1a1a] mb-3">상담 신청 접수 완료</h3>
        <p class="font-pretendard text-gray-500 text-[14px] lg:text-[15px] font-light leading-relaxed mb-8">
            상담 내용이 보안 서버로 안전하게 이송되었습니다.<br>
            대표변호사팀 검토 후 영업시간 기준 1시간 이내에 기재해주신 번호로 신속히 연락해 드리겠습니다.
        </p>
        <button id="success-modal-close" class="w-full h-[52px] bg-[#006eff] hover:bg-blue-600 text-white font-semibold rounded-2xl transition-all duration-300 shadow-md">
            확인
        </button>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {

    // ── 전화번호 자동 포매팅 (숫자만 허용, 000-0000-0000 형식) ──
    const phoneInput = document.getElementById('user-phone');
    if (phoneInput) {
        phoneInput.addEventListener('input', function(e) {
            // 숫자 이외의 문자 모두 제거
            let digits = this.value.replace(/\D/g, '');

            // 최대 11자리(01012345678)만 허용
            if (digits.length > 11) digits = digits.slice(0, 11);

            // 010-XXXX-XXXX 또는 02-XXX-XXXX 형식으로 자동 변환
            let formatted = '';
            if (digits.startsWith('02')) {
                // 서울 지역번호: 02-XXX-XXXX
                if (digits.length <= 2)       formatted = digits;
                else if (digits.length <= 5)  formatted = digits.slice(0,2) + '-' + digits.slice(2);
                else if (digits.length <= 9)  formatted = digits.slice(0,2) + '-' + digits.slice(2,5) + '-' + digits.slice(5);
                else                          formatted = digits.slice(0,2) + '-' + digits.slice(2,6) + '-' + digits.slice(6);
            } else {
                // 010, 011, 016, 기타 3자리 국번: 000-0000-0000
                if (digits.length <= 3)       formatted = digits;
                else if (digits.length <= 7)  formatted = digits.slice(0,3) + '-' + digits.slice(3);
                else if (digits.length <= 11) formatted = digits.slice(0,3) + '-' + digits.slice(3,7) + '-' + digits.slice(7);
            }

            this.value = formatted;
        });

        // 붙여넣기 시에도 동일한 포매팅 적용
        phoneInput.addEventListener('paste', function() {
            setTimeout(() => phoneInput.dispatchEvent(new Event('input')), 0);
        });
    }

    // ── 상담 신청 폼 제출 & 완료 모달 ──
    const form = document.getElementById('consultation-form');
    const modal = document.getElementById('success-modal');
    const modalClose = document.getElementById('success-modal-close');
    const modalCard = document.getElementById('success-modal-card');

    if (form && modal && modalClose) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            modal.classList.remove('hidden');
            setTimeout(function() {
                modalCard.classList.remove('scale-95');
                modalCard.classList.add('scale-100');
            }, 10);
            form.reset();
        });

        modalClose.addEventListener('click', function() {
            modalCard.classList.remove('scale-100');
            modalCard.classList.add('scale-95');
            setTimeout(function() {
                modal.classList.add('hidden');
            }, 150);
        });
    }
});
</script>

<?php
get_footer();
