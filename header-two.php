<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <?php wp_head() ?>
</head>

<body <?php body_class() ?>>
    <div class="red-home">
        <!-- Preloader -->
        <div class="preloader">
            <div class="spinner">
                <span class="spinner-rotate"></span>
            </div>
        </div>
        <!-- /Preloader -->


        <!--Header Top-->
        <div class="header-top white-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                        <div class="single-header-top">
                            <p>
                                <span><i class="fa fa-clock-o"></i>Mon - Fri : 09:00 - 17:00</span>
                                <span><a href="mailto:"><i class="fa fa-envelope"></i>info@bizever.com</a></span>
                                <span><a href="tel:"><i class="fa fa-phone"></i>+0088-123-789</a></span>
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                        <div class="single-header-top last">
                            <div class="social">
                                <?php $social_profiles = biziver_get_option('biziver-social-repeater');
                                if (!empty($social_profiles)) : foreach ($social_profiles as $social_link) : ?>
                                        <a href="<?php echo esc_url($social_link['biziver-social-link']) ?>" class="icon_bg"><i class="<?php echo esc_attr($social_link['biziver-social-icon']) ?>"></i></a>
                                <?php endforeach;
                                endif; ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div><!--/Header Top-->

        <!--Header Area-->
        <header class="header-area black-bg">
            <nav class="navbar navbar-expand-lg main-menu">
                <div class="container">

                    <a class="navbar-brand" href="<?php echo esc_url(site_url()) ?>">
                        <?php $home_logo =  biziver_get_option('biziver-homepage-logo'); ?><img src="<?php echo esc_url($home_logo['url']) ?>" class="d-inline-block align-top" alt="<?php bloginfo('name') ?>"></a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu-toggle"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <?php $main_menu_list = wp_nav_menu(array(
                            'theme_location'  =>  'main-menu',
                            'menu_class'      =>  'navbar-nav ml-auto',
                            "container"       =>  '',
                            // 'echo'           => false,
                            // 'walker'          => new Biziver_Walker_Nav_Menu(),
                            'walker'          => new WP_Bootstrap_Navwalker(),
                        ));

                        // $main_menu = str_replace(
                        //     'menu-item-has-children',
                        //     'menu-item-has-children dropdown',
                        //     $main_menu_list
                        // );                    
                        // echo $main_menu;
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
