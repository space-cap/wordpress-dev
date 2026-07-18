<?php
/**
 * Template Name: News Page
 * The template for displaying the News page.
 */

get_header();
?>

<!-- 히어로 섹션 -->
<section
    class="relative pt-[120px] lg:pt-[200px] pb-[60px] lg:pb-[100px] bg-gradient-to-br from-[#0c1020] via-[#101b3a] to-[#0c1020] text-white overflow-hidden">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(0,110,255,0.1),transparent_50%)]"></div>
    <div class="relative z-10 max-w-[1520px] mx-auto px-5 lg:px-10">
        <div class="max-w-[800px]" data-aos="fade-up" data-aos-duration="1000">
            <span
                class="inline-block text-[#006eff] font-inter text-[14px] lg:text-[16px] font-bold tracking-widest uppercase mb-4">PARADIN
                NEWS</span>
            <h1 class="font-pretendard text-[32px] lg:text-[54px] font-bold leading-tight tracking-tight mb-4">
                파라딘 소식 & 언론 보도
            </h1>
            <p class="font-pretendard text-[16px] lg:text-[19px] font-light text-gray-300 leading-relaxed">
                법무법인 파라딘의 생생한 활동과 사회적 언론 기사, 공지사항을 전해드립니다.
            </p>
        </div>
    </div>
</section>

<!-- 뉴스 그리드 목록 섹션 -->
<section class="py-20 bg-white">
    <div class="max-w-[1520px] mx-auto px-5 lg:px-10">

        <?php
        // 워드프레스 포스트 쿼리 (분류가 있다면 분기 가능)
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 9,
            'category_name' => 'news' // 'news' 카테고리가 있을 경우
        );
        $query = new WP_Query($args);

        // 'news' 카테고리의 실제 포스트가 존재할 경우에만 출력
        if ($query->have_posts()):
            ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10">
                <?php
                while ($query->have_posts()):
                    $query->the_post();
                    ?>
                    <article
                        class="group bg-white border border-gray-100 rounded-3xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300"
                        data-aos="fade-up">
                        <a href="<?php the_permalink(); ?>" class="block h-[240px] overflow-hidden relative bg-gray-100">
                            <?php if (has_post_thumbnail()): ?>
                                <?php the_post_thumbnail('medium_large', array('class' => 'w-full h-full object-cover transition-transform duration-500 group-hover:scale-105')); ?>
                            <?php else: ?>
                                <!-- 기본 이미지 썸네일 -->
                                <img src="https://images.pexels.com/photos/3760067/pexels-photo-3760067.jpeg"
                                    alt="<?php the_title(); ?>" loading="lazy"
                                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                            <?php endif; ?>
                        </a>
                        <div class="p-6 lg:p-8">
                            <div class="flex items-center gap-3 text-gray-400 text-[13px] mb-3">
                                <span class="text-[#006eff] font-semibold">NEWS</span>
                                <span>•</span>
                                <span><?php echo get_the_date('Y.m.d'); ?></span>
                            </div>
                            <h3
                                class="font-pretendard text-[18px] lg:text-[21px] font-bold text-[#1a1a1a] leading-snug mb-3 group-hover:text-[#006eff] transition-colors duration-300 line-clamp-2">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                            <p
                                class="font-pretendard text-gray-500 text-[14px] lg:text-[15px] font-light leading-relaxed mb-4 line-clamp-3">
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
        else:
            // 만약 등록된 포스트가 없는 경우: 고품격 데모 데이터 출력 (포트폴리오 보호)
            $mock_news = array(
                array(
                    'title' => '법무법인 파라딘, 2026 대한민국 소비자 신뢰 대표브랜드 법률서비스 부문 대상 수상',
                    'excerpt' => '법무법인 파라딘이 한경비즈니스 주최 소비자가 직접 투표하고 선정한 법률서비스 부문 종합 대상을 수상했습니다. 한 해 동안 의뢰인을 진정성 있게 대해준 모든 임직원의 노력이 빛을 발했습니다.',
                    'date' => '2026.07.10',
                    'image' => 'https://images.pexels.com/photos/3760067/pexels-photo-3760067.jpeg'
                ),
                array(
                    'title' => '이진혁 대표변호사, SBS 그것이 알고싶다 \'디지털 성범죄의 실상\' 전문가 자문 출연',
                    'excerpt' => '이진혁 대표변호사가 SBS 그것이 알고싶다에 출연하여 피싱 범죄 및 교묘해진 디지털 카메라 이용 촬영 범죄의 처벌 한계와 현행 사법 제도의 허점을 날카롭게 분석하여 법적 자문을 제공했습니다.',
                    'date' => '2026.06.28',
                    'image' => 'https://images.pexels.com/photos/5669614/pexels-photo-5669614.jpeg'
                ),
                array(
                    'title' => '법무법인 파라딘 서초 사옥 확장 이전 안내 (강남역 6번 출구 앞)',
                    'excerpt' => '의뢰인분들께 더 나아진 법률 상담 환경과 철저한 보안 상담실을 제공하기 위해 강남역 도보 1분 거리에 위치한 신축 랜드마크 타워로 주사무소를 이전하였습니다. 주차 및 방문 편의가 한층 강화되었습니다.',
                    'date' => '2026.05.15',
                    'image' => 'https://images.pexels.com/photos/273209/pexels-photo-273209.jpeg?auto=compress&cs=tinysrgb&w=800'
                )
            );
            ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10">
                <?php foreach ($mock_news as $index => $news): ?>
                    <article
                        class="group bg-white border border-gray-100 rounded-3xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300"
                        data-aos="fade-up" data-aos-delay="<?php echo $index * 100; ?>">
                        <div class="h-[240px] overflow-hidden relative bg-gray-100">
                            <img src="<?php echo $news['image']; ?>" alt="<?php echo esc_attr($news['title']); ?>"
                                loading="lazy"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        </div>
                        <div class="p-6 lg:p-8">
                            <div class="flex items-center gap-3 text-gray-400 text-[13px] mb-3">
                                <span class="text-[#006eff] font-semibold">NEWS</span>
                                <span>•</span>
                                <span><?php echo $news['date']; ?></span>
                            </div>
                            <h3
                                class="font-pretendard text-[18px] lg:text-[21px] font-bold text-[#1a1a1a] leading-snug mb-3 group-hover:text-[#006eff] transition-colors duration-300 line-clamp-2">
                                <?php echo $news['title']; ?>
                            </h3>
                            <p
                                class="font-pretendard text-gray-500 text-[14px] lg:text-[15px] font-light leading-relaxed mb-4 line-clamp-3">
                                <?php echo $news['excerpt']; ?>
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
