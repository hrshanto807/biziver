<?php

/**
 * Template Name: Portfollio
 */
get_header();
?>

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
    </div>
</section><!--/Portfolio Section-->


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
                                    <div class="feeddback-profile">
                                    <?php if (has_post_thumbnail()) {
                                        the_post_thumbnail('biziver-testimonial-thumb');
                                    } ?>
                                    <h3><?php echo esc_html($client_name); ?></h3>
                                    <span><?php echo esc_html($client_job_title); ?></span>
                                    </div>
                                    <div class="feedback-rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    </div>
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