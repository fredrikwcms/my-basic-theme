<!-- this is a post  -->
<div class="col-md-6">
    <?php if(has_post_thumbnail() ) : ?>
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('post-thumbnail', ['class' => 'card-img-top img-fluid']); ?>
        </a>
    <?php endif; ?>

    <h2><a href="<? the_permalink(); ?>"><?php the_title(); ?></a></h2>

    <?php the_excerpt(); ?>

    <span>Post created by: <?php the_author(); ?> at <?php the_time('m/j/y g:i A'); ?></span>
    <div><?php the_category(); ?></div>
</div>  