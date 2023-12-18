<?php
get_header();
?>

<!--Blog Area-->
<section class="blog-area section-padding-2">
    <div class="container">
        <div class="row">
            <?php if (have_posts()) : while (have_posts()) : the_post() ?>
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="blog-details">
                            <?php if (has_post_thumbnail()) {
                                the_post_thumbnail('biziver-single-thumb');
                            } else echo '<img src="' . get_theme_file_uri('/assets/images/blog/thumbnail-default.jpg') . '"/>'; ?>

                            <div class="single-blog-content">
                                <div class="blog-meta">
                                    <span><a href="<?php echo get_day_link(
                                                        get_the_time('y'),
                                                        get_the_time('m'),
                                                        get_the_time('d')
                                                    ); ?>"><i class="flaticon-calendar"></i><?php echo get_the_date(); ?></a></span>

                                    <span><a href="<?php echo get_the_permalink() ?>"><?php //if (function_exists('wpfp_link')) { wpfp_link(); }  
                                                                                        ?> </a></span>

                                    <span><a href="<?php echo get_the_permalink() ?>"><i class="flaticon-chat"></i><?php echo get_comments_number(); ?></a></span>
                                </div>
                                <h2><?php the_title() ?></h2>
                                <?php echo get_the_content() ?>
                            </div>
                        </div>

                        <div class="post-share-and-tag row">
                            <div class="col-xl-7 col-lg-7 col-md-6">
                                <div class="tags">
                                    <span><i class="fa fa-tags"></i></span>
                                    <?php the_tags('', ',', '') ?>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-5 col-md-6">
                                <div class="social">
                                    <span><i class="fa fa-share-alt"></i></span>
                                    <a href="#" class="cl-facebook"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="cl-twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="cl-youtube"><i class="fa fa-youtube-play"></i></a>
                                    <a href="#" class="cl-pinterest"><i class="fa fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                         <?php if (comments_open() || get_comments_number()) :
                                    comments_template();
                                endif; ?>
                    </div>
            <?php endwhile;
            endif; ?>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.4s">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</section><!--/Blog Area-->
<?php get_footer(); ?>