<?php
    get_header();
?>
<div class="container">
    <h4 style="color: red;">single.php</h4>
    <!-- Loop start	 -->
    <?php if ( have_posts() ) : ?>
        <!-- Yay, we have posts  -->
        <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part('template-parts/content', 'single') ?>
            <?php get_template_part('template-parts/latest-posts') ?>
        <?php endwhile; ?>
    <?php else: ?>
        <?php get_template_part('template-parts/content', 'none') ?>
    <?php endif; ?>
    <!-- end of posts  -->
</div>
<?php
    get_footer();
?>