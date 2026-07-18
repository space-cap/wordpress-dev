<?php
/**
 * Template Name: Insight Page
 * The template for displaying the Insight page.
 */

get_header();
?>

<!-- 히어로 섹션 -->
<section class="relative pt-[120px] lg:pt-[200px] pb-[60px] lg:pb-[100px] bg-gradient-to-br from-[#0b132b] via-[#1c2541] to-[#0b132b] text-white overflow-hidden">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(0,110,255,0.1),transparent_50%)]"></div>
    <div class="relative z-10 max-w-[1520px] mx-auto px-5 lg:px-10">
        <div class="max-w-[800px]" data-aos="fade-up" data-aos-duration="1000">
            <span class="inline-block text-[#006eff] font-inter text-[14px] lg:text-[16px] font-bold tracking-widest uppercase mb-4">PARADIN INSIGHT</span>
            <h1 class="font-pretendard text-[32px] lg:text-[54px] font-bold leading-tight tracking-tight mb-4">
                법률 인사이트
            </h1>
            <p class="font-pretendard text-[16px] lg:text-[19px] font-light text-gray-300 leading-relaxed">
                파라딘의 전문 변호인단이 직접 집필한 깊이 있는 판례 분석과 법률 가이드를 제공합니다.
            </p>
        </div>
    </div>
</section>

<!-- 인사이트 칼럼 목록 섹션 -->
<section class="py-20 bg-white">
    <div class="max-w-[1520px] mx-auto px-5 lg:px-10">
        
        <?php
        // 워드프레스 포스트 쿼리
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 9,
            'category_name' => 'insight' // 'insight' 카테고리가 있을 경우
        );
        $query = new WP_Query($args);

        // 실제 등록된 글이 존재할 경우
        if ($query->have_posts() || have_posts()) :
            $display_query = $query->have_posts() ? $query : $wp_query;
            ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10">
                <?php
                while ($display_query->have_posts()) : $display_query->the_post();
                    ?>
                    <article class="group bg-white border border-gray-100 rounded-3xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300" data-aos="fade-up">
                        <a href="<?php the_permalink(); ?>" class="block h-[240px] overflow-hidden relative bg-gray-100">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('medium_large', array('class' => 'w-full h-full object-cover transition-transform duration-500 group-hover:scale-105')); ?>
                            <?php else : ?>
                                <!-- 기본 이미지 썸네일 -->
                                <img src="https://images.pexels.com/photos/5668869/pexels-photo-5668869.jpeg" alt="<?php the_title(); ?>" loading="lazy" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                            <?php endif; ?>
                        </a>
                        <div class="p-6 lg:p-8">
                            <div class="flex items-center gap-3 text-gray-400 text-[13px] mb-3">
                                <span class="text-[#006eff] font-semibold">INSIGHT</span>
                                <span>•</span>
                                <span><?php echo get_the_date('Y.m.d'); ?></span>
                            </div>
                            <h3 class="font-pretendard text-[18px] lg:text-[21px] font-bold text-[#1a1a1a] leading-snug mb-3 group-hover:text-[#006eff] transition-colors duration-300 line-clamp-2">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                            <p class="font-pretendard text-gray-500 text-[14px] lg:text-[15px] font-light leading-relaxed mb-4 line-clamp-3">
                                <?php echo wp_trim_words(get_the_excerpt(), 25); ?>
                            </p>
                        </div>
                    </article>
                    <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
            <?php
        else :
            // 만약 등록된 포스트가 없는 경우: 고품격 데모 칼럼 출력 (포트폴리오용)
            $mock_insights = array(
                array(
                    'title' => '카메라등이용촬영죄 무죄 판결을 이끌어내는 핵심 법리 분석',
                    'author' => '이진혁 대표변호사',
                    'excerpt' => '디지털 성범죄 사건에서 임의제출물 증거의 위법수집 배제 법칙 및 촬영 대상물의 성적 수치심 유발 여부를 조밀하게 가리는 최근 대법원 판례 기준을 세부 분석하여 억울한 혐의를 벗을 수 있는 대응 전략을 제시합니다.',
                    'date' => '2026.07.02',
                    'image' => 'https://images.pexels.com/photos/5668869/pexels-photo-5668869.jpeg'
                ),
                array(
                    'title' => '개인회생 신청 시 가장 자주 하는 실수 3가지와 기각 사유 방지 대책',
                    'author' => '김윤아 파트너변호사',
                    'excerpt' => '최근 폭증하는 회생 신청 절차 속에서, 법원의 보정 명령에 제때 응하지 않거나 재산 목록의 누락으로 개시결정이 지연 또는 폐지되는 실태를 지적하고 성공적인 면책 승인을 얻기 위한 법률 확인법을 상세히 서술합니다.',
                    'date' => '2026.06.18',
                    'image' => 'https://images.pexels.com/photos/5668858/pexels-photo-5668858.jpeg'
                ),
                array(
                    'title' => '임대차 계약 만료 후 전세보증금 미반환 시 임차인이 취해야 할 긴급 대응 3단계',
                    'author' => '박준성 파트너변호사',
                    'excerpt' => '역전세 및 갭투자 실패로 인한 전세 보증금 미반환 사태 발생 시, 이사를 미루고 해야 할 대항력 유지 임차권등기명령 신청, 내용증명 작성, 전세금 반환 청구 소송 제기 시점을 일목요연하게 짚어봅니다.',
                    'date' => '2026.05.30',
                    'image' => 'https://images.pexels.com/photos/3184292/pexels-photo-3184292.jpeg'
                )
            );
            ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10">
                <?php foreach ($mock_insights as $index => $insight) : ?>
                    <article class="group bg-white border border-gray-100 rounded-3xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300" data-aos="fade-up" data-aos-delay="<?php echo $index * 100; ?>">
                        <div class="h-[240px] overflow-hidden relative bg-gray-100">
                            <img src="<?php echo $insight['image']; ?>" alt="<?php echo esc_attr($insight['title']); ?>" loading="lazy" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        </div>
                        <div class="p-6 lg:p-8">
                            <div class="flex items-center gap-3 text-gray-400 text-[13px] mb-3">
                                <span class="text-[#006eff] font-semibold">INSIGHT</span>
                                <span>•</span>
                                <span><?php echo $insight['author']; ?></span>
                                <span>•</span>
                                <span><?php echo $insight['date']; ?></span>
                            </div>
                            <h3 class="font-pretendard text-[18px] lg:text-[21px] font-bold text-[#1a1a1a] leading-snug mb-3 group-hover:text-[#006eff] transition-colors duration-300 line-clamp-2">
                                <?php echo $insight['title']; ?>
                            </h3>
                            <p class="font-pretendard text-gray-500 text-[14px] lg:text-[15px] font-light leading-relaxed mb-4 line-clamp-3">
                                <?php echo $insight['excerpt']; ?>
                            </p>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

    </div>
</section>

<?php
get_footer();
