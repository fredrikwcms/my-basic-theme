<!-- Custom Header Image -->
<?php if(get_header_image()) : ?>
    <div id="site-header">
        <img src="<?php header_image(); ?>" class="img-fluid" width="<?php absint(get_custom_header()->width); ?>" height="<?php absint(get_custom_header()->height); ?>" alt="<?php esc_attr(get_bloginfo('name', 'display')); ?>">
    </div>
<?php endif; ?>
<!-- End Custom Header Image -->