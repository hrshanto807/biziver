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
                                if(!empty($social_profiles)):foreach($social_profiles as $social_link):?>
                                <a href="<?php echo esc_url($social_link['biziver-social-link'])?>" class="icon_bg"><i class="<?php echo esc_attr($social_link['biziver-social-icon'])?>"></i></a>
                               <?php endforeach;endif;?>
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

                    <a class="navbar-brand" href="<?php echo esc_url(site_url())?>">
                    <?php $home_logo =  biziver_get_option('biziver-homepage-logo');?><img src="<?php echo esc_url($home_logo['url'])?>" class="d-inline-block align-top" alt="<?php bloginfo('name')?>"></a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu-toggle"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="index.html">Home one</a></li>
                                    <li><a class="dropdown-item" href="index-2.html">Home two</a></li>
                                    <li><a class="dropdown-item" href="index-3.html">Home three</a></li>
                                    <li><a class="dropdown-item" href="index-4.html">Home four</a></li>
                                    <li class="nav-item dropdown"><a class="dropdown-item" href="#">Different Header</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="index.html">Header 1</a></li>
                                            <li><a class="dropdown-item" href="index-4.html">Header 2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About us</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="about.html">About one</a></li>
                                    <li><a class="dropdown-item" href="about-2.html">About two</a></li>
                                    <li><a class="dropdown-item" href="about-3.html">About three</a></li>
                                    <li><a class="dropdown-item" href="about-4.html">About four</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="services-1.html">Services 1</a></li>
                                    <li><a class="dropdown-item" href="services-2.html">Services 2</a></li>
                                    <li><a class="dropdown-item" href="services-3.html">Services 3</a></li>
                                    <li><a class="dropdown-item" href="services-4.html">Services 4</a></li>
                                    <li class="nav-item dropdown"><a class="dropdown-item" href="#">Service Details</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="services-details.html">Service Details 1</a></li>
                                            <li><a class="dropdown-item" href="services-details-2.html">Service Details 2</a></li>
                                            <li><a class="dropdown-item" href="services-details-3.html">Service Details 3</a></li>
                                            <li><a class="dropdown-item" href="services-details-4.html">Service Details 4</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Case Studies</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="case-studies.html">Case Studies 1</a></li>
                                    <li><a class="dropdown-item" href="case-studies-2.html">Case Studies 2</a></li>
                                    <li><a class="dropdown-item" href="case-studies-3.html">Case Studies 3</a></li>
                                    <li><a class="dropdown-item" href="case-studies-4.html">Case Studies 4</a></li>
                                    <li><a class="dropdown-item" href="case-studies-details.html">Case Studies Details</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="contact.html">Contact</a></li>
                                    <li><a class="dropdown-item" href="faq.html">FAQ page</a></li>
                                    <li class="nav-item dropdown"><a class="dropdown-item" href="#">Team</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="team-1.html">Team 1</a></li>
                                            <li><a class="dropdown-item" href="team-2.html">Team 2</a></li>
                                            <li><a class="dropdown-item" href="team-3.html">Team 3</a></li>
                                            <li><a class="dropdown-item" href="team-4.html">Team 4</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="404.html">Error page</a></li>
                                    <li><a class="dropdown-item" href="privacy.html">Privacy</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="blog.html" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="blog.html">All Blogs</a>
                                    <a class="dropdown-item" href="blog-details.html">Blog Details</a>
                                </div>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                        </ul>
                        <div class="header-btn justify-content-end">
                            <button type="button" class="search-btn"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </nav>
        </header><!--/Header Area-->
        <?php // Full Search
        get_template_part('template-part/fullsearch');
