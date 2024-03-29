<?php
get_header('two')

?>

<!--Hero Area-->
<section class="hero-section">
    <div class="hero-area-1">
        <div class="single-hero" style="background: url('<?php $bg_hero = biziver_get_option('biziver-hero-bg');
                                                            if (!empty($bg_hero)) {
                                                                echo esc_url($bg_hero['url']);
                                                            } ?>') no-repeat center / cover;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-sub">
                            <div class="table-cell">
                                <div class="hero-left">
                                    <h4><?php $hero_button_subtitle = biziver_get_option('biziver-hero-subtitle');
                                        if (!empty($hero_button_subtitle)) {
                                            echo esc_html($hero_button_subtitle);
                                        }
                                        ?></h4>
                                    <h1><?php $hero_button_title = biziver_get_option('biziver-hero-title');
                                        if (!empty($hero_button_title)) {
                                            echo esc_html($hero_button_title);
                                        }
                                        ?></h1>
                                    <p><?php $hero_button_content = biziver_get_option('biziver-hero-textarea');
                                        if (!empty($hero_button_content)) {
                                            echo wp_kses($hero_button_content, biziver_allow_tags());
                                        }
                                        ?></p>
                                    <a class="btn bttn-mid <?php $hero_button = biziver_get_option('biziver-hero-button');
                                                            if (!empty($hero_button)) {
                                                                echo esc_html($hero_button);
                                                            }
                                                            ?>" href="<?php the_permalink() ?>" role="button"><?php $hero_button_name = biziver_get_option('biziver-hero-button_name');
                                                                                        if (!empty($hero_button_name)) {
                                                                                            echo esc_html($hero_button_name);
                                                                                        }
                                                                                        ?></a>
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
    <div class="about-left dark-light-overlay wow fadeInUp" data-wow-delay="0.4s" style="background: url('<?php $bg_aboutus = biziver_get_option('biziver-aboutus-bg');
                                                                                                            if (!empty($bg_aboutus)) {
                                                                                                                echo esc_url($bg_aboutus['url']);
                                                                                                            } ?>') no-repeat center / cover;">
        <div class="left-img-wrap">
            <a href="<?php $aboutus_link = biziver_get_option('biziver-aboutus-link');
                        if (!empty($aboutus_link)) {
                            echo esc_url($aboutus_link);
                        } ?>" class="video-popup"><img src="<?php $aboutus_link_img = biziver_get_option('biziver-aboutus-buttonimg');
                                                                                                        if (!empty($aboutus_link_img)) {
                                                                                                            echo ($aboutus_link_img['url']);
                                                                                                        } ?>" alt=""></a>
        </div>
    </div>
    <div class="about-content mid-bg-gray wow fadeInUp" data-wow-delay="0.4s">
        <div class="about-content-inner">
            <div class="section-title mb-10">
                <h2><?php $aboutus_title = biziver_get_option('biziver-aboutus-title');
                    if (!empty($aboutus_title)) {
                        echo esc_html($aboutus_title);
                    } ?></h2>
                <p><?php $aboutus_button_content = biziver_get_option('biziver-aboutus-textarea');
                    if (!empty($aboutus_button_content)) {
                        echo wp_kses($aboutus_button_content, biziver_allow_tags());
                    }
                    ?></p>
                <a class="btn bttn-mid <?php $aboutus_button = biziver_get_option('biziver-aboutus-button');
                                        if (!empty($aboutus_button)) {
                                            echo esc_html($aboutus_button);
                                        }
                                        ?>" href="<?php the_permalink() ?>" role="button"><?php $aboutus_button_name = biziver_get_option('biziver-aboutus-button_name');
                                                                                        if (!empty($aboutus_button_name)) {
                                                                                            echo esc_html($aboutus_button_name);
                                                                                        }
                                                                                        ?></a>
            </div>
        </div>
</section><!--/About Section-->


<!--feature Area-->
<section class="feature-area section-padding-2">
    <div class="container">
        <div class="row justify-content-center">
            <?php $biziver_feature_area = new WP_Query(array(
                'post_type' => 'biziver-feature',
                'posts_per_page' => 3,
                'order' => 'asc',
            ));
            if ($biziver_feature_area->have_posts()) : while ($biziver_feature_area->have_posts()) : $biziver_feature_area->the_post(); ?>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="single-feature">
                            <?php
                            the_post_thumbnail('biziver-feture-thumb') ?>
                            <h4><?php the_title() ?></h4>
                            <?php the_content(); ?>
                        </div>
                    </div>
            <?php endwhile;
            endif ?>
        </div>
    </div>
</section><!--/feature Area-->


<!-- Review Area -->
<section class="review-area section-padding" style="background: url('<?php $bg_testimonial = biziver_get_option('biziver-testimonial-bg');
                                                                        if (!empty($bg_testimonial)) {
                                                                            echo esc_url($bg_testimonial['url']);
                                                                        } ?>') no-repeat center / cover;">
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
<section class="portfolio-area section-padding gray-bg text-center">

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
                <?php
                $biziver_port_cat = get_terms('portifolio-cat');
                if (!empty($biziver_port_cat)) : foreach ($biziver_port_cat as $port_cat) :
                ?>
                        <li><a href="#" data-filter=".<?php echo esc_attr($port_cat->slug) ?>"><?php echo esc_html($port_cat->name) ?></a></li>
                <?php endforeach;
                endif ?>
            </ul>
        </div>

        <div class="row portfolio portfolio-gallery column-3 gutter wow fadeInUp" data-wow-delay="0.5s">
            <?php
            $biziver_portfolio = new WP_Query(array(
                'post_type'   =>  'biziver-portfolio',
                'posts_per-page' => 6,
                'order' => 'asc'
            ));

            if ($biziver_portfolio->have_posts()) : while ($biziver_portfolio->have_posts()) : $biziver_portfolio->the_post();
                    $portfollio_video = get_post_meta(get_the_ID(), 'project-video', true)
            ?>

                    <div class="portfolio-item
                    <?php
                    $biziver_port_the_cat = get_the_terms(get_the_ID(), 'portifolio-cat');

                    if (!empty($biziver_port_the_cat)) : foreach ($biziver_port_the_cat as $the_port_cat) :
                            echo $the_port_cat->slug . " ";
                        endforeach;
                    endif; ?>">

                        <?php
                        $thumbmail_url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()), 'full');
                        $portfolio_url =  $portfollio_video ? $portfollio_video : $thumbmail_url;
                        ?>
                        <a href="<?php echo esc_url($portfolio_url); ?>" class="thumb <?php if (!empty($portfollio_video)) : ?>video-popup<?php else : ?>  popup-gallery<?php endif; ?>" title="">
                            <?php the_post_thumbnail('biziver-portifolio-thumb') ?>
                            <div class="portfolio-hover">
                                <div class="portfolio-description">
                                    <?php if (empty($portfollio_video)) : ?>
                                        <p><i class="fa fa-search"></i></p>
                                        <h4><?php the_title() ?></h4>
                                    <?php else : ?><p><i class="fa fa-play"></i></p>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </a>
                    </div>

            <?php endwhile;
            endif ?>

        </div>
        <a class="mt-5 btn bttn-mid <?php $aboutus_button = biziver_get_option('biziver-aboutus-button');
                                if (!empty($aboutus_button)) {
                                    echo esc_html($aboutus_button);
                                }
                                ?>" href="<?php the_permalink() ?>" role="button"><?php $aboutus_button_name = biziver_get_option('biziver-aboutus-button_name');
                                                                                        if (!empty($aboutus_button_name)) {
                                                                                            echo esc_html($aboutus_button_name);
                                                                                        }
                                                                                        ?></a>
    </div>
</section><!--/Portfolio Section-->

<!-- Team Area -->
<section class="team-area section-padding-2 dark-light-overlay" style="background: url('<?php $bg_team = biziver_get_option('biziver-team-bg');
                                                                                        if (!empty($bg_team)) {
                                                                                            echo esc_url($bg_team['url']);
                                                                                        } ?>') no-repeat center / cover;">
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
                                    <?php $team_social = get_post_meta(get_the_ID(), 'social_repeat_group', true);
                                    if (!empty($team_social)) : foreach ($team_social as $social_team) :
                                            if (isset($social_team['social_icon'])) {
                                                $team_icon = esc_attr($social_team['social_icon']);
                                            };
                                            if (isset($social_team['social_link'])) {
                                                $team_link = esc_url($social_team['social_link']);
                                            };


                                    ?>
                                            <a href="<?php echo $team_link ?>" class="icon_color"><i class="<?php echo $team_icon ?>"></i></a>
                                    <?php endforeach;
                                    endif ?>

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
            $count = 0;


            if ($biziver_blog->have_posts()) : while ($biziver_blog->have_posts()) : $biziver_blog->the_post();
                    $count++ ?>
                    <?php if ($count == 2) : ?>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="single-blog-2">
                                <div class="single-blog-content">
                                    <div class="blog-meta">
                                        <span><a href="<?php echo get_day_link(
                                                            get_the_time('y'),
                                                            get_the_time('m'),
                                                            get_the_time('d')
                                                        ); ?>"><i class="flaticon-calendar"></i><?php echo get_the_date(); ?></a></span>

                                        <span><a href="<?php echo get_the_permalink() ?>"><?php // if (function_exists('wpfp_link')) { wpfp_link(); } 
                                                                                            ?> </a></span>

                                        <span><a href="<?php echo get_the_permalink() ?>"><i class="flaticon-chat"></i><?php echo get_comments_number(); ?></a></span>
                                    </div>
                                    <h3><a href="<?php echo get_the_permalink() ?>"><?php the_title() ?></a></h3>
                                    <?php echo wp_trim_words(get_the_content(), 20, true) ?>
                                </div>
                                <div class="single-blog-img ">
                                    <?php if (has_post_thumbnail()) {
                                        the_post_thumbnail('biziver-blog-thumb');
                                    } else echo '<img src="' . get_theme_file_uri('/<?php echo get_template_directory_uri()?>/assets/images/blog/thumbnail-default.jpg') . '"/>'; ?>
                                    <a href="<?php echo get_the_permalink() ?>"><i class="flaticon-settings-1"></i></a>
                                </div>
                            </div>
                        </div><?php else :  ?>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="single-blog-2 single-blog-order">
                                <div class="single-blog-img">
                                    <?php if (has_post_thumbnail()) {
                                        the_post_thumbnail('biziver-blog-thumb');
                                    } else echo '<img src="' . get_theme_file_uri('/<?php echo get_template_directory_uri()?>/assets/images/blog/thumbnail-default.jpg') . '"/>'; ?>
                                    <a href="<?php echo get_the_permalink() ?>"><i class="flaticon-settings-1"></i></a>
                                </div>
                                <div class="single-blog-content blog-order-content">
                                    <div class="blog-meta">
                                        <span><a href="<?php echo get_day_link(
                                                            get_the_time('y'),
                                                            get_the_time('m'),
                                                            get_the_time('d')
                                                        ); ?>"><i class="flaticon-calendar"></i><?php echo get_the_date(); ?></a></span>

                                        <span><a href="<?php echo get_the_permalink() ?>"><?php // if (function_exists('wpfp_link')) { wpfp_link(); } 
                                                                                            ?> </a></span>

                                        <span><a href="<?php echo get_the_permalink() ?>"><i class="flaticon-chat"></i><?php echo get_comments_number(); ?></a></span>
                                    </div>
                                    <h3><a href="<?php echo get_the_permalink() ?>"><?php the_title() ?></a></h3>
                                    <?php echo wp_trim_words(get_the_content(), 20, true) ?>
                                </div>
                            </div>
                        </div>

            <?php endif;
                        endwhile;
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
                    if (!empty($brand_img)) : foreach ($brand_img as $img_brand) : ?>
                            <div class="single-brands">
                                <img src="<?php echo esc_url($img_brand['biziver-brands-logo']['url']) ?>" class="d-inline-block align-top" alt=""></a>
                            </div>
                    <?php endforeach;
                    endif; ?>

                </div>
            </div>
        </div>
    </div>
</section><!--/Brands Area-->

<!--Footer Area-->
<?php get_footer() ?>