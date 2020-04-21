<?php
/* Template Name: Fullwidth Page */
get_header();
?>

<div class="container-fluid content">
    <!-- Do we have a page? -->
    <?php if(have_posts()) : ?>
        <!-- Yey, we have a page -->
        <?php while(have_posts()) : the_post(); ?>
            <!-- This is a page -->
            <h1><?php the_title(); ?></h1>

            <?php the_content(); ?>

            <!-- End of page -->
        <?php endwhile; ?>
    <?php endif; ?>
    <!-- End of posts -->
</div> <!-- /.container -->

<?php
get_footer();
?>