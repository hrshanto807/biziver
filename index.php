<?php
get_header();
// Full Search
get_template_part('template-part/fullsearch.php');
// breadcrumb area
get_template_part('template-part/breadcrump')
?>

<!--Blog Area-->
<section class="blog-area section-padding-2">
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
            <?php if (have_posts()) : while (have_posts()) : the_post() ?>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="single-blog-2">
                            <div class="single-blog-img">
                                <?php if (has_post_thumbnail()) {
                                    the_post_thumbnail('biziver-blog-thumb');
                                } else echo '<img src="' . get_theme_file_uri('/assets/images/blog/thumbnail-default.jpg') . '"/>'; ?>
                                <a href="<?php echo get_the_permalink() ?>"><i class="flaticon-settings-1"></i></a>
                            </div>
                            <div class="single-blog-content">
                                <div class="blog-meta">
                                    <span><a href="<?php echo get_day_link(
                                        get_the_time('y'),get_the_time('m'),get_the_time('d')); ?>"><i class="flaticon-calendar"></i><?php echo get_the_date(); ?></a></span>

                                    <span><a href="<?php echo get_the_permalink() ?>"><?php //if (function_exists('wpfp_link')) { wpfp_link(); } 
                                                                                        ?> </a></span>

                                    <span><a href="<?php echo get_the_permalink() ?>"><i class="flaticon-chat"></i><?php echo get_comments_number(); ?></a></span>
                                </div>
                                <h3><a href="<?php echo get_the_permalink() ?>"><?php the_title() ?></a></h3>
                                <?php echo wp_trim_words(get_the_content(), 20, ' <a href="' .  get_the_permalink() . '">View More</a>'); ?>
                            </div>
                        </div>
                    </div>


            <?php endwhile;
            endif; ?>
            <div class="col-xl-12 ">
                <ul class="styled-pagination centered">
                    <?php echo paginate_links(array(
                        'type'   =>  'list',
                        'prev_text' => '<span class="fa fa-angle-left"></span>',
                        'next_text' => '<span class="fa fa-angle-right"></span>',
                    )); ?>
                </ul>
            </div>
        </div>
    </div>

</section><!--/Blog Area-->

<?php get_footer() ?>