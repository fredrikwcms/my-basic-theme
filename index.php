<?php
    get_header();
?>
<div class="container">

    <?php _e('Index.php', 'my-basic-theme'); ?>
    <div class="row">
        <div class="col-md-9 content">
            <!-- Loop start	 -->
            <?php if ( have_posts() ) : ?>
                <!-- Yay, we have posts  -->
                <div class="card-group">
                    <div class="row">
                        <?php while ( have_posts() ) : the_post(); ?>

                            <?php get_template_part('template-parts/content', 'excerpt'); ?>
                            
                        <?php endwhile; ?>
                    </div> <!-- /.row -->
                </div>  <!-- /.card-group -->

                <!-- Pagination -->
                <?php get_template_part('template-parts/posts-pagination'); ?>
                <!-- /pagination -->
            <?php else: ?>
                <?php get_template_part('template-parts/content', 'none'); ?>
            <?php endif; ?>
        </div> <!-- /.col-md-9 -->
        <!-- end of posts  -->

        <?php get_sidebar('sidebar'); ?>
                    
    </div>
</div>
<?php
    get_footer();
?>
