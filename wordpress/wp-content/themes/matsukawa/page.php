<?php get_header(); ?>
<?php get_template_part('parts/global-navigation', 'page'); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; ?>
<?php else : ?>
<p>ページが見つかりませんでした。</p>
<?php endif; ?>
<?php get_footer(); ?>
