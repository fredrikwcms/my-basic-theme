<!-- this is a post  -->
<div class="col-md-6">
    <?php if(has_post_thumbnail() ) : ?>
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('post-thumbnail', ['class' => 'card-img-top img-fluid']); ?>
        </a>
    <?php endif; ?>

    <h2><a href="<? the_permalink(); ?>"><?php the_title(); ?></a></h2>

    <?php the_excerpt(); ?>

    <span><?php _e('Post created by: ', 'my-basic-theme'); ?> <?php the_author(); ?> <?php _e('at', 'my-basic-theme'); ?> <?php the_time('m/j/y g:i A'); ?></span>
    <div><?php the_category(); ?></div>
</div>  