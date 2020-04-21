<?php
    /* Template Name: FAQ Page */
    get_header();
?>
<main class="container">
    <!-- Loop start	 -->
    <?php if ( have_posts() ) : ?>
        <!-- Yay, we have posts  -->
                <?php while ( have_posts() ) : the_post(); ?>

                    <h1><?php the_title(); ?></h1>
                    
                    <?php the_content(); ?>

                    <!-- Accordion of FAQ's -->
                    <?php get_template_part('template-parts/accordion-faq'); ?>
                    <!-- End of Accordion -->

                <?php endwhile; ?>
    <?php endif; ?>
<!-- end of posts  -->
</main>
<?php
    get_footer();
?>