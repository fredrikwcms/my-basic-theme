<?php

    // Get all posts from category where slug = 'faq'
    $faq_query = new WP_Query([
        'category_name' => 'faq',
        'order'         =>  'asc',
        'orderby'       =>  'title',
        // 'posts_per_page' => 2,
    ]);

    // print("<pre>".print_r($faq_query,true)."</pre>");

    // If $faq_query has posts start accordion
    if($faq_query->have_posts())    :  ?>
        <div class="accordion" id="accordionFAQ">
            <?php while($faq_query->have_posts()) : $faq_query->the_post(); ?>
                <!-- Single FAQ Start -->
                <div class="card">
                    <div class="card-header">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#faq-<?php the_ID(); ?>">
                                <?php the_title(); ?>
                            </button>
                        </h2>
                    </div>

                    <div class="collapse" id="faq-<?php the_ID(); ?>" data-parent="#accordionFAQ">
                        <div class="card-body">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
                <!-- Single FAQ End -->
        <?php endwhile; ?>
        </div> <!-- End of accordion -->
        <?php
        // Reset postdata to main loop
        wp_reset_postdata();
        ?>
    <?php else: ?>
        <?php get_template_part('template-parts/content', 'none'); ?>
    <?php endif; ?>
    
</main> <!-- End of container -->

<?php
get_footer();
?>
    