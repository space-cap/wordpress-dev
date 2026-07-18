<?php
/**
 * The template for displaying single posts in the News category
 */

get_header();
?>

<!-- 포스트 히어로 헤더 (뉴스 전용 어두운 남색 배경) -->
<section
    class="relative pt-[120px] lg:pt-[200px] pb-[60px] lg:pb-[100px] bg-gradient-to-br from-[#0c1020] via-[#101b3a] to-[#0c1020] text-white overflow-hidden">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(0,110,255,0.1),transparent_50%)]"></div>
    <div class="relative z-10 max-w-[860px] mx-auto px-5 lg:px-10">
        <!-- 뒤로가기 & 카테고리 -->
        <div class="flex items-center gap-3 mb-8" data-aos="fade-up">
            <a href="javascript:history.back()"
                class="inline-flex items-center gap-1.5 text-[#60a5fa] font-pretendard text-[14px] font-medium hover:underline">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                목록으로
            </a>
            <?php
            $categories = get_the_category();
            if ($categories):
                ?>
                <span class="text-white/20">|</span>
                <span class="font-pretendard text-[13px] font-bold text-[#60a5fa] uppercase tracking-wider">
                    <?php echo esc_html($categories[0]->name); ?>
                </span>
            <?php endif; ?>
        </div>

        <?php while (have_posts()):
            the_post(); ?>

            <!-- 포스트 제목 -->
            <h1 class="font-pretendard text-[24px] lg:text-[40px] font-bold text-white leading-snug tracking-tight mb-6"
                data-aos="fade-up">
                <?php the_title(); ?>
            </h1>

            <!-- 메타 정보 바 -->
            <div class="flex flex-wrap items-center gap-4 text-[14px] text-gray-300 font-pretendard font-light pb-8 border-b border-white/10"
                data-aos="fade-up">
                <!-- 작성일 -->
                <span class="flex items-center gap-1.5">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                        </path>
                    </svg>
                    <?php echo get_the_date('Y년 m월 d일'); ?>
                </span>
                <!-- 작성자 -->
                <span class="flex items-center gap-1.5">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                    <?php the_author(); ?>
                </span>
                <!-- 읽기 소요 시간 -->
                <?php
                $content = get_the_content();
                $word_count = mb_strlen(strip_tags($content));
                $reading_time = max(1, ceil($word_count / 500));
                ?>
                <span class="flex items-center gap-1.5">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    약 <?php echo $reading_time; ?>분 소요
                </span>
            </div>
        <?php endwhile; ?>
    </div>
</section>

<!-- 썸네일 이미지 -->
<?php if (has_post_thumbnail()): ?>
    <section class="bg-white py-8 lg:py-12">
        <div class="max-w-[860px] mx-auto px-5 lg:px-10" data-aos="fade-up">
            <div class="w-full aspect-[16/8] rounded-3xl overflow-hidden shadow-sm">
                <?php the_post_thumbnail('full', array('class' => 'w-full h-full object-cover')); ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<!-- 포스트 본문 -->
<section class="py-10 lg:py-16 bg-white">
    <div class="max-w-[860px] mx-auto px-5 lg:px-10">
        <?php rewind_posts();
        while (have_posts()):
            the_post(); ?>
            <div class="
                font-pretendard text-[16px] lg:text-[18px] text-[#3a3a3a] leading-[1.9] tracking-[-0.01em]
                [&_h2]:text-[20px] [&_h2]:lg:text-[26px] [&_h2]:font-bold [&_h2]:text-[#1a1a1a] [&_h2]:mt-12 [&_h2]:mb-5 [&_h2]:leading-snug
                [&_h3]:text-[18px] [&_h3]:lg:text-[22px] [&_h3]:font-bold [&_h3]:text-[#1a1a1a] [&_h3]:mt-10 [&_h3]:mb-4
                [&_p]:mb-6
                [&_ul]:mb-6 [&_ul]:pl-5 [&_ul]:space-y-2 [&_ul>li]:list-disc [&_ul>li]:text-gray-600
                [&_ol]:mb-6 [&_ol]:pl-5 [&_ol]:space-y-2 [&_ol>li]:list-decimal [&_ol>li]:text-gray-600
                [&_blockquote]:border-l-4 [&_blockquote]:border-[#006eff] [&_blockquote]:pl-6 [&_blockquote]:py-2 [&_blockquote]:my-8 [&_blockquote]:bg-[#f8fafe] [&_blockquote]:rounded-r-xl [&_blockquote]:text-[#4b4b4b] [&_blockquote]:italic
                [&_a]:text-[#006eff] [&_a]:underline [&_a]:underline-offset-2 [&_a:hover]:text-blue-700
                [&_strong]:font-semibold [&_strong]:text-[#1a1a1a]
                [&_img]:rounded-2xl [&_img]:my-8 [&_img]:w-full [&_img]:shadow-sm
                [&_hr]:border-gray-100 [&_hr]:my-10
            ">
                <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
    </div>
</section>

<!-- 법률 면책 고지 박스 -->
<section class="pb-10 bg-white">
    <div class="max-w-[860px] mx-auto px-5 lg:px-10">
        <div class="bg-gray-50 border border-gray-200 rounded-2xl p-6 lg:p-8">
            <p class="font-pretendard text-[13px] lg:text-[14px] text-gray-400 font-light leading-relaxed">
                <strong class="font-semibold text-gray-500">⚠️ 법률 면책 고지:</strong>
                본 게시물에 기재된 내용은 일반적인 법률 정보 제공을 목적으로 하며, 구체적인 법률적 자문이나 의견을 구성하지 않습니다. 개별 사건의 사실 관계에 따라 법리가 달리 적용될 수 있으므로,
                구체적인 법률 자문을 위해서는 반드시 담당 변호사와 직접 상담하시기 바랍니다.
            </p>
        </div>
    </div>
</section>

<!-- 공유 & 상담 CTA -->
<section class="py-10 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-[860px] mx-auto px-5 lg:px-10 flex flex-col md:flex-row items-center justify-between gap-6">
        <!-- 이전/다음 글 -->
        <div class="flex items-center gap-4 text-[14px] font-pretendard text-gray-500">
            <?php previous_post_link('%link', '← 이전 글'); ?>
            <?php next_post_link('%link', '다음 글 →'); ?>
        </div>
        <!-- 상담 신청 버튼 -->
        <a href="<?php echo esc_url(home_url('/contact/')); ?>"
            class="inline-flex items-center gap-2 bg-[#006eff] text-white font-pretendard text-[15px] font-semibold px-7 py-3.5 rounded-xl hover:bg-blue-600 transition-colors shadow-md shadow-[#006eff]/10">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                </path>
            </svg>
            관련 사건 무료 상담
        </a>
    </div>
</section>

<!-- 관련 글 추천 -->
<?php
$current_post_id = get_the_ID();
$categories = get_the_category($current_post_id);
if ($categories):
    $category_ids = wp_list_pluck($categories, 'term_id');
    $related_args = array(
        'category__in' => $category_ids,
        'post__not_in' => array($current_post_id),
        'posts_per_page' => 3,
        'orderby' => 'rand',
    );
    $related_query = new WP_Query($related_args);
    if ($related_query->have_posts()):
        ?>
        <section class="py-16 lg:py-24 bg-[#fafafa] border-t border-gray-100">
            <div class="max-w-[860px] mx-auto px-5 lg:px-10">
                <h2 class="font-pretendard text-[20px] lg:text-[26px] font-bold text-[#1a1a1a] mb-10">관련 글</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <?php while ($related_query->have_posts()):
                        $related_query->the_post(); ?>
                        <a href="<?php the_permalink(); ?>"
                            class="group bg-white rounded-2xl overflow-hidden border border-gray-100 hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                            <div class="h-[140px] overflow-hidden">
                                <?php if (has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail('medium', array('class' => 'w-full h-full object-cover transition-transform duration-500 group-hover:scale-105')); ?>
                                <?php else: ?>
                                    <div class="w-full h-full bg-gray-100"></div>
                                <?php endif; ?>
                            </div>
                            <div class="p-5">
                                <p class="font-pretendard text-[13px] text-gray-400 mb-2"><?php echo get_the_date('Y.m.d'); ?></p>
                                <h3
                                    class="font-pretendard text-[15px] font-semibold text-[#1a1a1a] leading-snug group-hover:text-[#006eff] transition-colors line-clamp-2">
                                    <?php the_title(); ?>
                                </h3>
                            </div>
                        </a>
                    <?php endwhile;
                    wp_reset_postdata(); ?>
                </div>
            </div>
        </section>
    <?php endif; endif; ?>

<?php get_footer(); ?>