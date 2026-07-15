<?php
/**
 * The template for displaying 404 pages (not found)
 */

get_header();
?>

<section class="min-h-screen flex items-center justify-center bg-white font-pretendard px-5">
    <div class="text-center max-w-[600px] mx-auto py-24">

        <!-- 404 대형 텍스트 -->
        <div class="relative mb-8" data-aos="fade-up">
            <span class="block font-lora text-[140px] lg:text-[180px] font-bold text-[#f0f3ff] leading-none select-none">
                404
            </span>
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="w-16 h-16 bg-[#006eff]/10 rounded-full flex items-center justify-center">
                    <svg class="w-8 h-8 text-[#006eff]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
            </div>
        </div>

        <!-- 제목 및 설명 -->
        <h1 class="text-[22px] lg:text-[30px] font-bold text-[#1a1a1a] tracking-tight mb-4" data-aos="fade-up" data-aos-delay="100">
            요청하신 페이지를 찾을 수 없습니다.
        </h1>
        <p class="text-[15px] lg:text-[16px] text-gray-400 font-light leading-relaxed mb-10" data-aos="fade-up" data-aos-delay="200">
            주소가 변경되었거나 삭제된 페이지입니다.<br>
            아래 버튼을 눌러 홈으로 돌아가거나, 필요하시면 법률 상담을 신청해 주세요.
        </p>

        <!-- 버튼 그룹 -->
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4" data-aos="fade-up" data-aos-delay="300">
            <a href="<?php echo esc_url(home_url('/')); ?>"
               class="inline-flex items-center gap-2 h-[52px] px-8 bg-[#1a1a1a] text-white text-[15px] font-semibold rounded-xl hover:bg-black transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
                홈으로 이동
            </a>
            <a href="<?php echo esc_url(home_url('/contact/')); ?>"
               class="inline-flex items-center gap-2 h-[52px] px-8 bg-[#006eff] text-white text-[15px] font-semibold rounded-xl hover:bg-blue-600 transition-colors shadow-md shadow-[#006eff]/15">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                </svg>
                1:1 무료 상담 신청
            </a>
        </div>

        <!-- 사이트 주요 메뉴 바로가기 -->
        <div class="mt-16 pt-10 border-t border-gray-100" data-aos="fade-up" data-aos-delay="400">
            <p class="text-[13px] text-gray-300 font-light mb-5">주요 메뉴 바로가기</p>
            <div class="flex flex-wrap justify-center gap-3">
                <?php
                $quick_links = array(
                    '법인 소개'  => '/about/',
                    '법률 서비스' => '/practice-areas/',
                    '이엘 피드'  => '/news/',
                    '인재 채용'  => '/careers/',
                );
                foreach ($quick_links as $label => $path) :
                ?>
                    <a href="<?php echo esc_url(home_url($path)); ?>"
                       class="inline-block h-[36px] px-5 border border-gray-200 text-[13px] text-gray-500 rounded-full hover:border-[#006eff] hover:text-[#006eff] transition-all duration-200">
                        <?php echo esc_html($label); ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</section>

<?php get_footer(); ?>
