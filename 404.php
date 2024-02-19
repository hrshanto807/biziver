<?php

/**
 * Template Name: 404
 */
get_header() ?>

<!--Not Found Section -->
<section class="section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 centered">
                <?php if (have_posts()) :
                    while (have_posts()) :
                        the_post();
                        the_post_thumbnail('biziver-404-thumb');
                        the_content();
                    endwhile;
                endif;
                ?>
                <a href="<?php echo esc_url(home_url()) ?>" class="bttn-mid btn-fill">Take me home</a>
            </div>
        </div>
    </div>
</section><!--/Not Found Section-->

<!--newslatter Area-->
<section class="newslatter section-padding gray-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                <h2><?php $newsetler_404 = biziver_get_option('biziver-newslatter-title');
                    if (!empty($newsetler_404)) {
                        echo esc_html($newsetler_404);
                    } ?></h2>
                <form action="#">
                    <input type="email" placeholder="Email Address" required>
                    <button type="submit"><i class="flaticon-cursor"></i></button>
                </form>
            </div>
        </div>
    </div>
</section><!--/newslatter Area-->


<!--Footer Area-->
<?php get_footer() ?>