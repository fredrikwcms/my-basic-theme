<?php
    get_header();
?>
<div class="container">
    <!-- Loop start	 -->
    <?php if ( have_posts() ) : ?>
        <!-- Yay, we have posts  -->
        <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part('template-parts/content-mbt_movie_review', 'single') ?>
        <?php endwhile; ?>
    <?php else: ?>
        <?php get_template_part('template-parts/content', 'none') ?>
    <?php endif; ?>
    <!-- end of posts  -->
</div>
<?php
    get_footer();
?>