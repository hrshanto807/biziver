<?php

/**
 * Template Name: FAQs
 */
get_header();

?>

<!--FAQ Area-->
<section class="section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="0.4s">
                <div class="section-title centered">
                    <h4><?php if (!empty(biziver_get_option('faq-textone'))) {
                            echo esc_html(biziver_get_option('faq-textone'));
                        }; ?></h4>
                    <h2><?php if (!empty(biziver_get_option('faq-texttwo'))) {
                            echo esc_html(biziver_get_option('faq-texttwo'));
                        }; ?></h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 wow fadeInRight " data-wow-delay="0.4s">
                <div class="faq-contents">
                    <ul class="accordion">
                        <?php
                        $current_page = (get_query_var('paged')) ? (get_query_var('paged')) : 1;
                        $biziver_faq = new WP_Query(array(
                            'post_type'    =>  'biziver-faq',
                            'posts_per_page' => 12,
                            'paged'     => $current_page,

                        ));
                        if ($biziver_faq->have_posts()) : while ($biziver_faq->have_posts()) : $biziver_faq->the_post() ?>
                                <li>
                                    <a href="#"><?php the_title() ?></a>
                                    <?php the_content() ?>
                                </li>
                        <?php endwhile;
                        endif ?>
                    </ul>

                </div>
            </div>
            <div class="col-xl-12 blog-area mt-5 pt-5">
                <ul class="styled-pagination centered">
                    <?php echo paginate_links(array(
                        'total'  => $biziver_faq->max_num_pages,
                        'type'   =>  'list',
                        'prev_text' => '<span class="fa fa-angle-left"></span>',
                        'next_text' => '<span class="fa fa-angle-right"></span>',
                    )); ?>
                </ul>
            </div>
        </div>
    </div>
</section><!--/FAQ Area-->

<!-- Footer Area -->
<?php get_footer() ?>