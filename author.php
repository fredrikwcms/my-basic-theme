<?php
    get_header();
?>
<div class="container">
    <h4 style="color: red;"><?php get_the_archive_title(); ?></h4>
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
    <!-- end of posts  -->
</div>
<?php
    get_footer();
?>