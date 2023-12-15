<?php
get_header('two')

?>

<!--Hero Area-->
<section class="hero-section">
    <div class="hero-area-1">
        <div class="single-hero" style="background: url('<?php $bg_hero = biziver_get_option('biziver-hero-bg');
        if(!empty($bg_hero)){echo esc_url($bg_hero['url']);}?>') no-repeat center / cover;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-sub">
                            <div class="table-cell">
                                <div class="hero-left">
                                    <h4>Financial Planning</h4>
                                    <h1>Made Easy</h1>
                                    <p>Sing long her way size. Waited end mutual <br> missed myself the little sister one</p>
                                    <a href="#" class="bttn-mid btn-fill">About us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--/Hero Area-->


<!--services Area-->
<!--feature Area-->
<section class="feature-area section-padding-2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 centered wow fadeInUp" data-wow-delay="0.3s">
                <div class="section-title">
                    <h2><?php if (!empty(biziver_get_option('service-texthome'))) {
                            echo esc_html(biziver_get_option('service-texthome'));
                        } ?></h2>
                    <p><?php if (!empty(biziver_get_option('service-textarea'))) {
                            echo wp_kses(biziver_get_option('service-textarea'), biziver_allow_tags());
                        } ?></p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <?php
            $biziver_services = new WP_Query(array(
                'post_type' => 'biziver-services',
                'post_per_page' => 6,
                'order'   => 'asc'
            ));
            if ($biziver_services->have_posts()) : while ($biziver_services->have_posts()) : $biziver_services->the_post();
                    $service_icon = get_post_meta(get_the_ID(), 'services_icon', true);
                    $service_text = get_post_meta(get_the_ID(), 'services_text', true);
            ?>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="single-feature-2">
                            <a href="<?php the_permalink() ?>"> <i class="<?php echo esc_attr($service_icon) ?>"></i></a>
                            <a href="<?php the_permalink() ?>">
                                <h4><?php the_title(); ?></h4>
                            </a>
                            <a href="<?php the_permalink() ?>">
                                <p><?php echo esc_html($service_text) ?></p>
                            </a>
                        </div>
                    </div>
            <?php endwhile;
            endif; ?>
        </div>
    </div>
</section><!--/feature Area-->
<!--/services Area-->

<!--About Section-->
<section class="about-area gray-bg">
    <div class="about-left dark-light-overlay wow fadeInUp" data-wow-delay="0.4s" style="background: url('<?php echo get_template_directory_uri()?>/assets/images/about-2.jpg') no-repeat center / cover;">
        <div class="left-img-wrap">
            <a href="https://www.youtube.com/watch?v=GT6-H4BRyqQ" class="video-popup"><img src="<?php echo get_template_directory_uri()?>/assets/images/play-button.png" alt=""></a>
        </div>
    </div>
    <div class="about-content mid-bg-gray wow fadeInUp" data-wow-delay="0.4s">
        <div class="about-content-inner">
            <div class="section-title mb-10">
                <h2>About us</h2>
            </div>
            <p>Lose away off why half led have near bed. At engage simple father of period others except. <br><br>Jennings appetite disposed me an at subjects an. To no indulgence diminution so discovered mr apartments. Are off under folly death wrote cause her way spite. Plan upon yet way get cold spot its week. Almost do am or limits hearts. Resolve parties but why she shewing Are off under folly death wrote cause her way spite. Plan upon yet way get cold spot its week. Almost do am or limits hearts. Resolve parties but why she shewing</p>
            <a href="about.html" class="bttn-mid btn-fill">Read More</a>
        </div>
    </div>
</section><!--/About Section-->


<!--feature Area-->
<section class="feature-area section-padding-2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="single-feature">
                    <i class="flaticon-users cl-primary"></i>
                    <h4>Business Consulting</h4>
                    <p>Lose away off why half led have near bed. At engage simple father of period others except giving do summer</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="single-feature">
                    <i class="flaticon-presentation cl-mint"></i>
                    <h4>Market Research</h4>
                    <p>Lose away off why half led have near bed. At engage simple father of period others except giving do summer</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="single-feature">
                    <i class="flaticon-trophy cl-yellow"></i>
                    <h4>Become Successful</h4>
                    <p>Lose away off why half led have near bed. At engage simple father of period others except giving do summer</p>
                </div>
            </div>
        </div>
    </div>
</section><!--/feature Area-->


<!-- Review Area -->
<section class="review-area section-padding" style="background: url('<?php $bg_testimonial = biziver_get_option('biziver-testimonial-bg');
        if(!empty($bg_testimonial)){echo esc_url($bg_testimonial['url']);}?>') no-repeat center / cover;">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 wow fadeInUp" data-wow-delay="0.4s">
                <div class="section-title">
                    <h4><?php if (!empty(biziver_get_option('testi-textone'))) {
                            echo esc_html(biziver_get_option('testi-textone'));
                        } ?></h4>
                    <h2><?php if (!empty(biziver_get_option('testi-texttwo'))) {
                            echo esc_html(biziver_get_option('testi-texttwo'));
                        } ?></h2>
                </div>
                <div class="testimonials owl-carousel">

                    <?php $biziver_testimonial = new WP_Query(array(
                        'post_type' => 'biziver-testimonial',
                        'post_per_page' => 5,
                        'order'     => 'asc'
                    ));
                    if ($biziver_testimonial->have_posts()) : while ($biziver_testimonial->have_posts()) : $biziver_testimonial->the_post();
                            $client_job_title = get_post_meta(get_the_ID(), 'testimonail_job_title', true);
                            $client_name = get_post_meta(get_the_ID(), 'testimonail_name_title', true);
                    ?>
                            <div class="single-review">
                                <div class="reviewer-thumb">
                                    <h3><?php echo esc_html($client_name); ?></h3>
                                    <span><?php echo esc_html($client_job_title); ?></span>
                                </div>
                                <?php the_content() ?>
                            </div>
                    <?php endwhile;
                    endif; ?>
                </div>
            </div>
        </div>
    </div>
</section><!-- /Review Area -->

<!--Portfolio Section -->
<section class="portfolio-area section-padding gray-bg">

    <div class="container">

        <div class="row justify-content-center">
            <div class="col-xl-6 centered wow fadeInUp" data-wow-delay="0.3s">
                <div class="section-title">
                    <h2>Finance Portfolio</h2>
                </div>
            </div>
        </div>

        <div class="text-center mb-40 wow fadeInUp" data-wow-delay="0.4s">
            <ul class="portfolio-filter">
                <li class="active"><a href="#" data-filter="*"> All</a></li>
                <li><a href="#" data-filter=".cat1">Business</a></li>
                <li><a href="#" data-filter=".cat2">Financial</a></li>
                <li><a href="#" data-filter=".cat3">Investment</a></li>
                <li><a href="#" data-filter=".cat4">Creative</a></li>
            </ul>
        </div>

        <div class="row portfolio portfolio-gallery column-3 gutter wow fadeInUp" data-wow-delay="0.5s">

            <div class="portfolio-item cat1 cat3 ">
                <a href="<?php echo get_template_directory_uri()?>/assets/images/portfolios/7.jpg" class="thumb popup-gallery" title="">
                    <img src="<?php echo get_template_directory_uri()?>/assets/images/portfolios/7.jpg" alt="">
                    <div class="portfolio-hover">
                        <div class="portfolio-description">
                            <p><i class="fa fa-search"></i></p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="portfolio-item cat2 cat4 ">
                <a href="portfolio-details.html" class="thumb" title="">
                    <img src="<?php echo get_template_directory_uri()?>/assets/images/portfolios/8.jpg" alt="">
                    <div class="portfolio-hover">
                        <div class="portfolio-description">
                            <h4>Repeated of <br> Endeavor Mr Position </h4>
                        </div>
                    </div>
                </a>
            </div>

            <div class="portfolio-item cat1 cat5 ">
                <a href="portfolio-details.html" class="thumb" title="">
                    <img src="<?php echo get_template_directory_uri()?>/assets/images/portfolios/9.jpg" alt="">
                    <div class="portfolio-hover">
                        <div class="portfolio-description">
                            <h4>Repeated of <br> Endeavor Mr Position </h4>
                        </div>
                    </div>
                </a>
            </div>

            <div class="portfolio-item cat3 ">
                <a href="https://www.youtube.com/watch?v=GT6-H4BRyqQ" class="thumb video-popup" title="">
                    <img src="<?php echo get_template_directory_uri()?>/assets/images/portfolios/11.jpg" alt="">
                    <div class="portfolio-hover">
                        <div class="portfolio-description">
                            <p><i class="fa fa-play"></i></p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="portfolio-item cat1 cat2 ">
                <a href="<?php echo get_template_directory_uri()?>/assets/images/portfolios/10.jpg" class="thumb popup-gallery" title="">
                    <img src="<?php echo get_template_directory_uri()?>/assets/images/portfolios/10.jpg" alt="">
                    <div class="portfolio-hover">
                        <div class="portfolio-description">
                            <p><i class="fa fa-search"></i></p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="portfolio-item cat3 cat4 ">
                <a href="portfolio-details.html" class="thumb" title="">
                    <img src="<?php echo get_template_directory_uri()?>/assets/images/portfolios/12.jpg" alt="">
                    <div class="portfolio-hover">
                        <div class="portfolio-description">
                            <h4>Repeated of <br> Endeavor Mr Position </h4>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section><!--/Portfolio Section-->

<!-- Team Area -->
<section class="team-area section-padding-2 dark-light-overlay" style="background: url('<?php $bg_team = biziver_get_option('biziver-team-bg');
        if(!empty($bg_team)){echo esc_url($bg_team['url']);}?>') no-repeat center / cover;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 centered wow fadeInUp" data-wow-delay="0.3s">
                <div class="section-title cl-white">
                    <h2><?php if (!empty(biziver_get_option('team-textone'))) {
                            echo esc_html(biziver_get_option('team-textone'));
                        } ?></h2>
                    <p><?php if (!empty(biziver_get_option('team-texttwo'))) {
                            echo esc_html(biziver_get_option('team-texttwo'));
                        } ?></p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">

            <?php
            $biziver_teams = new WP_Query(array(
                'post_type'   =>  'biziver_teams',
                'posts_per_page' => 4,
                //'order'      => 'asc'
            ));
            if ($biziver_teams->have_posts()) : while ($biziver_teams->have_posts()) : $biziver_teams->the_post();
                    $team_member_position = get_post_meta(get_the_ID(), 'teams_job_title', true);

            ?>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="single-team">
                            <?php the_post_thumbnail('biziver-team-thumb') ?>
                            <div class="team-content">
                                <h4><?php the_title() ?></h4>
                                <p><?php echo esc_html($team_member_position) ?></p>
                                <div class="social">
                                            <?php $team_social = get_post_meta(get_the_ID(),'social_repeat_group',true);
                                            if(!empty($team_social)):foreach($team_social as $social_team):
                                                if ( isset( $social_team['social_icon'] ) ) {
                                                    $team_icon = esc_attr( $social_team['social_icon'] );
                                                };
                                                if ( isset( $social_team['social_link'] ) ) {
                                                    $team_link = esc_url( $social_team['social_link'] );
                                                };
                                            
                                            
                                            ?>
                                                <a href="<?php echo $team_link?>"class="icon_color"><i class="<?php echo $team_icon?>"></i></a>
                                            <?php endforeach;endif?>                                           
                                           
                                        </div>
                                <?php echo wp_trim_words(get_the_content(), 10, true) ?>
                            </div>
                        </div>
                    </div>

            <?php endwhile;
            endif; ?>

        </div>
    </div>
</section><!-- /Team Area -->

<!--Blog Area-->
<section class="blog-area section-padding-2 gray-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 centered wow fadeInUp" data-wow-delay="0.3s">
                <div class="section-title">
                    <h4><?php if (!empty(biziver_get_option('opt-text'))) {
                            echo esc_html(biziver_get_option('opt-text'));
                        }; ?></h4>
                    <h2><?php if (!empty(biziver_get_option('opt-texttwo'))) {
                            echo esc_html(biziver_get_option('opt-texttwo'));
                        }; ?></h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
        <?php
            $biziver_blog = new WP_Query(array(
                'post_type'   =>  'post',
                'posts_per_page' => 3,              
            ));

             if ($biziver_blog->have_posts()) : while ($biziver_blog->have_posts()) : $biziver_blog->the_post() ?>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="single-blog-2">
                            <div class="single-blog-img">
                                <?php if (has_post_thumbnail()) {
                                    the_post_thumbnail('biziver-blog-thumb');
                                } else echo '<img src="' . get_theme_file_uri('/<?php echo get_template_directory_uri()?>/assets/images/blog/thumbnail-default.jpg') . '"/>'; ?>
                                <a href="<?php echo get_the_permalink() ?>"><i class="flaticon-settings-1"></i></a>
                            </div>
                            <div class="single-blog-content">
                                <div class="blog-meta">
                                <span><a href="<?php echo get_day_link(
                                        get_the_time('y'),get_the_time('m'),get_the_time('d')); ?>"><i class="flaticon-calendar"></i><?php echo get_the_date(); ?></a></span>

                                    <span><a href="<?php echo get_the_permalink() ?>"><?php // if (function_exists('wpfp_link')) { wpfp_link(); } 
                                                                                        ?> </a></span>

                                    <span><a href="<?php echo get_the_permalink() ?>"><i class="flaticon-chat"></i><?php echo get_comments_number(); ?></a></span>
                                </div>
                                <h3><a href="<?php echo get_the_permalink() ?>"><?php the_title() ?></a></h3>
                                <?php echo wp_trim_words(get_the_content(), 20,true) ?>
                            </div>
                        </div>
                    </div>                   
            <?php endwhile;
            endif; ?>
        </div>
    </div>
</section><!--/Blog Area-->

<!--Brands Area-->
<section class="section-padding-2">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="brands owl-carousel">
                    <?php $brand_img = biziver_get_option('biziver-brands-repeater');
                    if(!empty($brand_img)):foreach($brand_img as $img_brand):?>                
                    <div class="single-brands">                                         
                    <img src="<?php echo esc_url($img_brand['biziver-brands-logo']['url'])?>" class="d-inline-block align-top" alt=""></a>
                    </div>
                    <?php endforeach;endif;?>
                    
                </div>
            </div>
        </div>
    </div>
</section><!--/Brands Area-->

<!--Footer Area-->
<?php get_footer() ?>