<!-- This is a single movie review -->
<article>
    <h1><?php the_title(); ?></h1>
    <?php if(has_post_thumbnail()) : ?>
        <div class="featured-image-wrapper">
            <?php the_post_thumbnail('featured-image', ['class' => 'img-fluid d-block mx-auto']); ?>
        </div>
    <?php endif; ?>

    <p class="text-muted">
        <em>
            <?php
                printf(
                        __('Movie Review written by %s on %s', 'my-basic-theme'),
                        get_the_author(),
                        get_the_date()
                );

            ?>
        </em>
    </p>

    <div class="movie-metadata-wrapper">
            <p class="mbt-actors">
                <?php _e('Actors:', 'my-basic-theme'); ?> <?php the_terms(get_the_ID(), 'mbt_movie_actor'); ?>
            </p>

            <p class="mbt-genres">
                <?php 
                    the_terms(
                        get_the_ID(),
                        'mbt_movie_genre',
                        __('Genres: ', 'my-basic-theme')
                    );
                ?>
            </p>
    </div>

    <?php the_content(); ?>

</article>
<!-- End of single movie review -->