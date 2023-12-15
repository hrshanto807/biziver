<?php
get_header();
?>
<!--services Area-->
<section class="services-area section-padding-2">
    <div class="container">
        <div class="row">

            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 wow fadeInUp" data-wow-delay="0.4s">
                <div class="service-details">
                    <?php if (have_posts()) : while (have_posts()) : the_post();
                            the_content();
                        endwhile;
                    endif; ?>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 wow fadeInUp" data-wow-delay="0.4s">
                <?php get_sidebar() ?>
            </div>
        </div>
    </div>
</section><!--/services Area-->

<!--Footer Area-->
<?php get_footer() ?>