<?php
    get_header();
?>
<div class="container">
    <h2><?php _e('Archive', 'my-basic-theme'); ?></h2>

    <div class="row">
        <div class="col-md-9 content">
            <!-- Loop start	 -->
            <?php if ( have_posts() ) : ?>
                <!-- Yay, we have posts  -->
                <div class="row">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php get_template_part('template-parts/content', 'archive'); ?>
                    <?php endwhile; ?>
                </div> <!-- End of posts row -->
            <?php endif; ?>
        </div>
        <!-- end of posts  -->

        <?php get_sidebar('primary-sidebar'); ?>

    </div>
</div>
<?php
    get_footer();
?>