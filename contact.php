<?php
/*
* Template Name: Contact Page
*/
get_header();
?>

<!-- Contact Area -->
<section class="section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 centered wow fadeInUp" data-wow-delay="0.3s">
                <div class="section-title">
                    <h2><?php if(!empty(biziver_get_option('biziver-contact-title'))){
                       echo esc_html( biziver_get_option('biziver-contact-title'));
                    }
                    ?></h2>
                    <p><?php if(!empty(biziver_get_option('biziver-contact-textarea'))){
                       echo esc_html( biziver_get_option('biziver-contact-textarea'));
                    }
                    ?></p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 wow fadeInUp" data-wow-delay="0.4s">
                <div class="contact-form">
                    <?php the_content()?>                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 wow fadeInUp" data-wow-delay="0.4s">
                <div class="contact-info">
                    <ul>
                        <li><i class="fa fa-home"></i>38 S. Glenlake Street <br>Beaver Falls, PA 15010</li>
                        <li><i class="fa fa-phone"></i>+01-123-456-789 <br>+01-123-456-789</li>
                        <li><i class="fa fa-envelope"></i>Infomail01@demomail.com <br>Infomail01@demomail.com</li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 wow fadeInUp" data-wow-delay="0.4s">
                <div id="map"></div>
            </div>
        </div>
    </div>
</section><!-- /Contact Area -->


<!--Footer Area-->
<?php get_footer()?>