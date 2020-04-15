<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a href="/" class="navbar-brand">
            <!-- Add support for custom logo -->
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle Navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <?php 
            if(has_nav_menu('main-menu')) {
                wp_nav_menu([
                    'theme_location'    => 'main-menu',
                    'container_class'   => 'collapse navbar-collapse',  // wrapping div class
                    'container_id'      => 'navbarNav',                 // wrapping div id
                    'menu_class'        => 'navbar-nav ml-auto',        // ul class
                    'walker'            => new bs4Navwalker(),
                ]);
            }
        ?>
    </div>

</nav>