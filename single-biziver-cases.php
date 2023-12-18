<?php
get_header()

?>

<!--Portfolio Section -->
<section class="portfolio-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="portfolio-details">
                <?php if (have_posts()) : while (have_posts()) : the_post();
                            the_content();
                        endwhile;
                    endif; ?>
                    <div class="prev-next">
                        <a href="#" class="prev-btn active">Previous Project</a>
                        <a href="#" class="next-btn">Next Project</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--/Portfolio Section-->

<!--Footer Area-->
<?php
get_footer()

?>