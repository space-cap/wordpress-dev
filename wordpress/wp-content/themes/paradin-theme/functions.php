<?php
/**
 * PARADIN Theme functions and definitions
 */

// 페이지별 SEO 메타 description 자동 삽입
function paradin_seo_meta_tags()
{
    global $post;

    $descriptions = array(
        'about' => '법무법인 파라딘의 설립 철학, 전문 변호사 소개, 주요 연혁을 확인하세요. 검사 출신 변호사 팀이 의뢰인의 권익 보호를 위해 함께합니다.',
        'practice-areas' => '성범죄·형사, 피해자 보호, 개인회생·파산, 민사·가사·상속 분쟁 등 법무법인 파라딘의 전문 법률 서비스를 안내합니다.',
        'news' => '법무법인 파라딘의 최신 소식, 언론 보도, 공지사항을 확인하세요.',
        'insight' => '법무법인 파라딘 전문 변호인단이 직접 집필한 법률 인사이트와 판례 분석 칼럼을 만나보세요.',
        'careers' => '법무법인 파라딘과 함께 성장할 인재를 기다립니다. 채용 공고와 복리후생을 확인하세요.',
        'contact' => '법무법인 파라딘에 비밀 보장 1:1 법률 상담을 신청하세요. 모든 상담 내용은 변호사법에 따라 엄격히 보호됩니다.',
    );

    $slug = '';
    if (is_page() && isset($post->post_name)) {
        $slug = $post->post_name;
    }

    $description = '법무법인 파라딘은 검사 출신 성범죄 전문 변호인단이 직접 사건을 수행하며 의뢰인의 일상을 지킵니다.';
    if (isset($descriptions[$slug])) {
        $description = $descriptions[$slug];
    } elseif (is_single()) {
        $description = wp_trim_words(get_the_excerpt(), 30, '...');
    }

    echo '<meta name="description" content="' . esc_attr($description) . '">' . "\n";
    echo '<meta property="og:description" content="' . esc_attr($description) . '">' . "\n";
    echo '<meta property="og:site_name" content="법무법인 파라딘">' . "\n";
    echo '<meta property="og:type" content="website">' . "\n";
    echo '<meta name="robots" content="index, follow">' . "\n";
}
add_action('wp_head', 'paradin_seo_meta_tags', 2);


function paradin_theme_scripts()
{
    // 1. Google Fonts & Pretendard Font
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Noto+Sans+KR:wght@400;500;600;700&display=swap', array(), null);
    wp_enqueue_style('pretendard-font', 'https://cdn.jsdelivr.net/gh/orioncactus/pretendard/dist/web/static/pretendard.css', array(), null);

    // 2. AOS (Animate on Scroll) CSS & JS
    wp_enqueue_style('aos-css', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), '2.3.1');
    wp_enqueue_script('aos-js', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), '2.3.1', true);

    // 3. Theme main style (style.css)
    wp_enqueue_style('paradin-style', get_stylesheet_uri(), array(), '1.0.0');

    // 4. Tailwind CSS (CDN Script)
    // Tailwind는 스크립트 형태이므로 wp_enqueue_script로 주입합니다.
    wp_enqueue_script('tailwind-cdn', 'https://cdn.tailwindcss.com', array(), null, false);
}
add_action('wp_enqueue_scripts', 'paradin_theme_scripts');

// Tailwind config 주입 (head 부분에 추가)
function paradin_tailwind_config()
{
    ?>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        'pretendard': ['Pretendard', 'sans-serif'],
                        'inter': ['Inter', 'sans-serif'],
                        'lora': ['Lora', 'serif'],
                        'noto': ['Noto Sans KR', 'sans-serif'],
                    },
                    colors: {
                        'paradin-gray': '#6d6d6d',
                        'paradin-dark': '#1a1a1a',
                        'paradin-blue': '#006eff',
                    }
                }
            }
        }
    </script>
    <?php
}
add_action('wp_head', 'paradin_tailwind_config', 100);

// 테마 서포트 (제목 태그 자동 지원 등)
function paradin_theme_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'paradin_theme_setup');

// 필요한 고유 페이지 자동 생성 로직
function paradin_create_default_pages()
{
    $pages = array(
        'about' => array(
            'title' => '법인 소개',
            'template' => 'page-about.php'
        ),
        'practice-areas' => array(
            'title' => '법률 서비스',
            'template' => 'page-practice-areas.php'
        ),
        'news' => array(
            'title' => '뉴스',
            'template' => 'page-news.php'
        ),
        'insight' => array(
            'title' => '인사이트',
            'template' => 'page-insight.php'
        ),
        'careers' => array(
            'title' => '인재 채용',
            'template' => 'page-careers.php'
        ),
        'contact' => array(
            'title' => '상담 신청',
            'template' => 'page-contact.php'
        ),
        // 개발자 노트 — 채용 담당자 포트폴리오 전용 페이지
        'developer-note' => array(
            'title' => '개발자 노트',
            'template' => 'page-developer-note.php'
        )

    );

    $needs_flush = false;

    foreach ($pages as $slug => $data) {
        $page_check = get_page_by_path($slug);
        if (!isset($page_check->ID)) {
            $page_id = wp_insert_post(array(
                'post_type' => 'page',
                'post_title' => $data['title'],
                'post_name' => $slug,
                'post_status' => 'publish',
            ));
            if ($page_id) {
                if (!empty($data['template'])) {
                    update_post_meta($page_id, '_wp_page_template', $data['template']);
                }
                $needs_flush = true;
            }
        } else {
            // 이미 존재하는 페이지의 템플릿이 우리가 원하는 템플릿으로 설정되어 있는지 확인 및 업데이트
            $current_template = get_post_meta($page_check->ID, '_wp_page_template', true);
            if ($current_template !== $data['template']) {
                update_post_meta($page_check->ID, '_wp_page_template', $data['template']);
                $needs_flush = true;
            }
        }
    }

    if (get_option('permalink_structure') !== '/%postname%/') {
        update_option('permalink_structure', '/%postname%/');
        $needs_flush = true;
    }

    if ($needs_flush) {
        flush_rewrite_rules();
    }
}
add_action('init', 'paradin_create_default_pages');

/**
 * ============================================
 * 성능 최적화: 이미지 업로드 시 차세대 포맷 WebP 자동 변환 필터
 * ============================================
 */
function paradin_convert_upload_to_webp($uploads)
{
    // 파일 타입 체크
    if ($uploads['type'] == 'image/jpeg' || $uploads['type'] == 'image/png') {
        $file_path = $uploads['file'];

        // PHP GD 라이브러리 존재 여부 검사
        if (function_exists('imagecreatefromjpeg') && function_exists('imagewebp')) {
            $image = null;
            if ($uploads['type'] == 'image/jpeg') {
                $image = @imagecreatefromjpeg($file_path);
            } elseif ($uploads['type'] == 'image/png') {
                $image = @imagecreatefrompng($file_path);
                if ($image) {
                    imagepalettetotruecolor($image);
                    imagealphablending($image, true);
                    imagesavealpha($image, true);
                }
            }

            if ($image) {
                // 확장자를 .webp로 변경한 새 파일 경로 생성
                $new_file_path = preg_replace('/\.(jpg|jpeg|png)$/i', '.webp', $file_path);

                // WebP 압축 및 저장 (최적 퀄리티 82%)
                if (imagewebp($image, $new_file_path, 82)) {
                    // 원래 이미지(JPEG/PNG) 제거하여 디스크 용량 절약
                    unlink($file_path);

                    // 워드프레스 업로드 결과 변수 업데이트
                    $uploads['file'] = $new_file_path;
                    $uploads['url'] = preg_replace('/\.(jpg|jpeg|png)$/i', '.webp', $uploads['url']);
                    $uploads['type'] = 'image/webp';
                }
                imagedestroy($image);
            }
        }
    }
    return $uploads;
}
add_filter('wp_handle_upload', 'paradin_convert_upload_to_webp');


/**
 * 뉴스 카테고리(news)의 글에 대해 전용 템플릿(single-news.php) 사용하도록 설정
 */
function paradin_single_template_for_news($template)
{
    if (is_single() && in_category('news')) {
        $new_template = locate_template(array('single-news.php'));
        if (!empty($new_template)) {
            return $new_template;
        }
    }
    return $template;
}
add_filter('single_template', 'paradin_single_template_for_news');




