<?php

/**
 * Template Name: Services
 */
get_header();
?>

<!--feature Area-->
<section class="feature-area section-padding-2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 centered wow fadeInUp" data-wow-delay="0.3s">
                <div class="section-title">
                    <h2><?php if (!empty(biziver_get_option('service-textone'))) {
                            echo esc_html(biziver_get_option('service-textone'));
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

<!-- Review Area -->
<section class="review-area section-padding gray-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 centered wow fadeInUp" data-wow-delay="0.3s">
                <div class="section-title">
                    <h4><?php if (!empty(biziver_get_option('testi-textone'))) {
                            echo esc_html(biziver_get_option('testi-textone'));
                        } ?></h4>
                    <h2><?php if (!empty(biziver_get_option('testi-texttwo'))) {
                            echo esc_html(biziver_get_option('testi-texttwo'));
                        } ?></h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 wow fadeInUp" data-wow-delay="0.4s">
                <div class="reviews owl-carousel">
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
                                    <?php if (has_post_thumbnail()) {
                                        the_post_thumbnail('biziver-testimonial-thumb');
                                    } ?>
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


<!--Footer Area-->
<?php get_footer() ?>