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
                <img src="<?php echo get_theme_file_uri('assets/images/404.jpg') ?>" alt="">
                <p class="mb-30">Quisque cras molestie dictum, aliquam litora. Tempus amet pellentesque vitae ante, consectequat sed vestibulum fringilla dictum, enim a taciti et orci fusce, non suspendisse, nunc at rutrumPellentesque turpis et nonummy eu nulla. Quis gravida ultrices nam back to home</p>
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
                <h2>Subscribe Our newslatter!</h2>
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