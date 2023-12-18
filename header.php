<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <?php wp_head() ?>
</head>

<body <?php body_class() ?>>
    <div class="green-home">
        <!-- Preloader -->
        <div class="preloader">
            <div class="spinner">
                <span class="spinner-rotate"></span>
            </div>
        </div>
        <!-- /Preloader -->


        <!--Header Area-->
        <header class="header-area fixed-header transparent-bg">
            <nav class="navbar navbar-expand-lg main-menu">
                <div class="<?php echo get_theme_mod('header_option_area') ?> container">

                    <a class="navbar-brand" href="<?php echo esc_url(home_url()) ?>">
                    <?php $blog_page = biziver_get_option('biziver-blogpage-logo')?>
                    <img src="<?php echo esc_url($blog_page['url']); ?>" class="d-inline-block align-top" alt=""></a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu-toggle"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <?php wp_nav_menu(array(
                            'theme_location'  =>  'main-menu',
                            'menu_class'      =>  'navbar-nav ml-auto',
                            "container"       =>  '',
                            'walker'          => new WP_Bootstrap_Navwalker(),

                        ));
                        ?>                       
                        <div class="header-btn justify-content-end">
                            <button type="button" class="search-btn"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </nav>
        </header><!--/Header Area-->

        <?php // Full Search
        get_template_part('template-part/fullsearch');
        // breadcrumb area
        get_template_part('template-part/breadcrump') ?>