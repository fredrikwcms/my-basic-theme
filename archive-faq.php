<?php 
get_header();
?>

<main class="container">
    <h1>Frequently Asked Questions</h1>

    <!-- Do we have posts? -->
    <?php if(have_posts()) : ?>
        <div class="accordion" id="accordionFAQ">
            <?php while(have_posts()) : the_post(); ?>
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

    <?php else: ?>
        <?php get_template_part('template-parts/content', 'none'); ?>
    <?php endif; ?>
    
</main> <!-- End of container -->

<?php
get_footer();
?>