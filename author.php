<?php
    get_header();
?>
<div class="container">
    <h1 style="color: red;"><? the_author(); ?>'s content</h1>

    <div class="row">
        <div class="col-md-9 content">
            <!-- Loop start	 -->
            <?php if ( have_posts() ) : ?>
                <!-- Yay, we have posts  -->
                <?php while ( have_posts() ) : the_post(); ?>
                    <!-- this is a post  -->
                    <h2><a href="<? the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    
                    <? the_excerpt();?>
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