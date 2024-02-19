<?php
/* 
Template Name: Privacy
*/

get_header();

?>
<!--Privacy Section -->
<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="polices-content">
                    <?php if(have_posts()){while(have_posts()){the_post();
                    the_content();};};?>                   
                </div>
            </div>
        </div>
    </div>
</section><!--/package Section-->
<!--Footer Area-->
<?php get_footer()?>