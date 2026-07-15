<?php
/**
 * The main template file
 */

get_header();
?>

<div class="max-w-[1520px] mx-auto px-5 py-24">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="prose max-w-none">
            <h1 class="text-3xl font-pretendard font-bold mb-5"><?php the_title(); ?></h1>
            <div class="font-pretendard text-[#414040]">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; endif; ?>
</div>

<?php
get_footer();
