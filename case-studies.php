<?php

/**
 * Template Name: Case Studies
 */
get_header()

?>

<!--Portfolio Section -->
<section class="work-area section-padding">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-6 centered wow fadeInUp" data-wow-delay="0.3s">
                <div class="section-title">
                    <h4>Portfolio</h4>
                    <h2>Creating Better Experience</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $bixiver_cases = new WP_Query(array(
                'post_type'     =>  'biziver-cases',
                'posts_per_page' => 4,
                'order'    => 'asc'
            ));
            if ($bixiver_cases->have_posts()) : while ($bixiver_cases->have_posts()) : $bixiver_cases->the_post()
            ?>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 p-0 case-studies-order">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 p-0 case-studies-img">
                                <div class="single-work">
                                    <?php the_post_thumbnail('biziver-case-thumb') ?>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 p-0 case-studies-content">
                                <div class="single-work">
                                    <div class="single-work-content">
                                        <a href="<?php the_permalink() ?>">
                                            <h4><?php the_title() ?></h4>
                                        </a>
                                        <p><?php echo wp_trim_words(
                                                get_the_content(),
                                                20,
                                                ' <a href="' . get_the_permalink() . '">Read More</a>'
                                            ) ?></p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php endwhile;
            endif; ?>
        </div>
    </div>
</section><!--/Portfolio Section-->

<!--Footer Area-->
<?php get_footer() ?>