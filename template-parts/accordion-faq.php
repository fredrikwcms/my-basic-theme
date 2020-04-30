<div class="accordion" id="accordionFAQ">

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
</div>
    