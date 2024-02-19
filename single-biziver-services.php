<?php
get_header();
?>
<!--services Area-->
<section class="services-area section-padding-2">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 wow fadeInUp" data-wow-delay="0.4s">
                <div class="service-details">
                    <?php if (have_posts()) : while (have_posts()) : the_post();
                            the_content();
                        endwhile;
                    endif; ?>
                </div>
            </div>
        </div>
    </div>
</section><!--/services Area-->

<!--Footer Area-->
<?php get_footer() ?>