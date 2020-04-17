<?php
    get_header();
?>
<div class="container">
    <h4 style="color: red;">archive.php</h4>

    <div class="row">
        <div class="col-md-9 content">
            <!-- Loop start	 -->
            <?php if ( have_posts() ) : ?>
                <!-- Yay, we have posts  -->
                <?php while ( have_posts() ) : the_post(); ?>
                    <!-- this is a post  -->
                    <h2><a href="<? the_permalink(); ?>"><?php the_title(); ?></a></h2>

                    <?php the_excerpt(); ?>

                    <span>Post created by: <?php the_author(); ?> at <?php the_time('m/j/y g:i A'); ?></span>
                    <div><?php the_category(); ?></div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <!-- end of posts  -->

        <?php get_sidebar('primary-sidebar'); ?>

    </div>
</div>
<?php
    get_footer();
?>