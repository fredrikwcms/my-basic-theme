<?php
    get_header();
?>
<div class="container">
    <h4 style="color: red;">single.php</h4>
    <!-- Loop start	 -->
    <?php if ( have_posts() ) : ?>
        <!-- Yay, we have posts  -->
        <?php while ( have_posts() ) : the_post(); ?>
            <!-- this is a post  -->
            <h2><a href="<? the_permalink(); ?>"><?php the_title(); ?></a></h2>

            <?php the_content(); ?>
            
            <span>Post created by: <?php the_author(); ?> at <?php the_date(); ?></span>
        <?php endwhile; ?>
    <?php endif; ?>
    <!-- end of posts  -->
</div>
<?php
    get_footer();
?>