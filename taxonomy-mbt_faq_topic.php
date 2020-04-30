<?php
    get_header();
?>



<main class="container">
    <!-- Loop start	 -->
    <?php if ( have_posts() ) : ?>
        <!-- Yay, we have posts  -->
            <h2><?php get_the_archive_title(); ?></h2>
            <h3>
                <?php
                    $terms = get_the_terms( $post->ID , 'mbt_faq_topic' );
                    foreach($terms as $term) : 
                        echo $term->name;
                    endforeach;
                ?>
            </h3>
                <?php while ( have_posts() ) : the_post(); ?>

                    <!-- Accordion of FAQ's -->
                    <?php get_template_part('template-parts/accordion-faq'); ?>
                    <!-- End of Accordion -->

                <?php endwhile; ?>
        <?php else: ?>
            <?php get_template_part('template-parts/content', 'none'); ?>
    <?php endif; ?>

<!-- end of posts  -->
</main>
<?php
    get_footer();
?>
