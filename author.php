<?php
    get_header();
?>
<div class="container">
    <h4 style="color: red;"><?php get_the_archive_title(); ?></h4>

    <div class="row">
        <div class="col-md-9 content">
            <!-- Loop start	 -->
            <?php if ( have_posts() ) : ?>
                <!-- Yay, we have posts  -->
                <ul>
                <?php while ( have_posts() ) : the_post(); ?>
                    <!-- this is a post  -->
                    <li><h2><?php the_author(); ?></h2></li>
                <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>  
        <!-- end of posts  -->

        <?php get_sidebar('primary-sidebar'); ?>
    </div>
</div>
<?php
    get_footer();
?>