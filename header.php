<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- title begin -->
    <title><?php if(is_front_page() || is_home()){
        echo get_bloginfo('name');
    } else{
        echo wp_title('');
    }?></title>
    <!-- title end.. -->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel = "stylesheet">
<?php wp_head(); ?>   
</head>

<body<?php body_class(); ?>>

<header>
    <div class="main-navigation">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
                <a class="navbar-brand" href="index.html">

                   <?php if ( function_exists( 'the_custom_logo' ) ) {
                       the_custom_logo();
                   } ?>

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- <div class="collapse navbar-collapse" id="navbar"> -->
                    <!--Main navigation list-->

                   <?php
                    wp_nav_menu( array(
                        'theme_location' => 'header-menu', // Defined when registering the menu
                        'depth'          => 2,
                        'container'      => 'div',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id'    => 'navbar',
                        'menu_class'      => 'navbar-nav ml-auto',
                        'walker'         => new WP_Bootstrap_Navwalker(), // This controls the display of the Bootstrap Navbar
                        'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback', // For menu fallback
                    ) );
                    ?>

            </nav>
            <!--end navbar-->
        </div>
        <!--end container-->
    </div>

</header>