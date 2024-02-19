<?php

/**
 * Template Name:About Us
 */
get_header()

?>
<!--About Section-->
<section class="about-area">
    <div class="about-left dark-light-overlay wow fadeInUp" data-wow-delay="0.4s" style="background: url('<?php echo get_template_directory_uri() ?>/assets/images/about-2.jpg') no-repeat center / cover;">
        <div class="left-img-wrap">
            <a href="https://www.youtube.com/watch?v=GT6-H4BRyqQ" class="video-popup"><img src="<?php echo get_template_directory_uri() ?>/assets/images/play-button.png" alt=""></a>
        </div>
    </div>
    <div class="about-content mid-bg-gray wow fadeInUp" data-wow-delay="0.4s">
        <div class="about-content-inner">
            <div class="section-title mb-10">
            <h2><?php $aboutus_title_two = biziver_get_option('biziver-aboutus-title-2');
                if(!empty($aboutus_title_two)){echo esc_html($aboutus_title_two);}?></h2>
            </div>
            <p><?php $aboutus_button_content = biziver_get_option('biziver-aboutus-textarea')
            ;if(!empty($aboutus_button_content)){echo wp_kses($aboutus_button_content,biziver_allow_tags());}                                    
                                    ?></p>
            <h5 class="mb-1"><?php $aboutus_member_name = biziver_get_option('biziver-aboutus-ceo_name');
                if(!empty($aboutus_member_name)){echo esc_html($aboutus_member_name);}?></h5>
            <p class="cl-green m-0"><?php $aboutus_position = biziver_get_option('biziver-aboutus-position');
                if(!empty($aboutus_position)){echo esc_html($aboutus_position);}?></p>
        </div>
    </div>
</section><!--/About Section-->

<!--Mission Vission Area-->
<section class="section-padding-2 gray-bg">
    <div class="container">
        <div class="row justify-content-center">
            <?php 
            $mission_section = biziver_get_option('biziver-missions-repeater');
            if(!empty($mission_section)):foreach($mission_section as $mission_area):
            ?>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="single-mission-vission">
                    <h4><?php 
                       echo esc_html($mission_area['biziver-missions-title']);
                    ?></h4>
                    <p><?php 
                       echo esc_html($mission_area['biziver-missions-textarea'])
                    ?></p>
                </div>
            </div>
            <?php endforeach;endif?>           
        </div>
    </div>
</section><!--/Mission Vission Area-->

<!--feature Area-->
<section class="feature-area section-padding-2">
    <div class="container">
        <div class="row justify-content-center">
            <?php $biziver_feature_area = new WP_Query(array( 
                'post_type' => 'biziver-feature',
                'posts_per_page'=> 3,
                'order'=> 'asc',
            ));if( $biziver_feature_area->have_posts()):while( $biziver_feature_area->have_posts()): $biziver_feature_area->the_post();?>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="single-feature">
                    <?php 
                     the_post_thumbnail('biziver-feture-thumb')?>
                    <h4><?php the_title()?></h4>
                    <?php the_content();?>
                </div>
            </div>
            <?php endwhile;endif?>
        </div>
    </div>
</section><!--/feature Area-->


<!-- Team Area -->
<section class="team-area section-padding-2 gray-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 centered wow fadeInUp" data-wow-delay="0.3s">
                <div class="section-title">
                    <h2><?php if (!empty(biziver_get_option('team-textone'))) {
                            echo esc_html(biziver_get_option('team-textone'));
                        } ?></h2>
                    <p><?php if (!empty(biziver_get_option('team-texttwo'))) {
                            echo esc_html(biziver_get_option('team-texttwo'));
                        } ?></p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <?php
            $biziver_teams = new WP_Query(array(
                'post_type'   =>  'biziver_teams',
                'posts_per_page' => 4,               
            ));
            if ($biziver_teams->have_posts()) : while ($biziver_teams->have_posts()) : $biziver_teams->the_post();
                    $team_member_position = get_post_meta(get_the_ID(), 'teams_job_title', true);

            ?>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="single-team">
                            <?php the_post_thumbnail('biziver-team-thumb') ?>
                            <div class="team-content">
                                <h4><?php the_title() ?></h4>
                                <p><?php echo esc_html($team_member_position) ?></p>
                                <div class="social">
                                    <?php $team_social = get_post_meta(get_the_ID(), 'social_repeat_group', true);
                                    if (!empty($team_social)) : foreach ($team_social as $social_team) :
                                            if (isset($social_team['social_icon'])) {
                                                $team_icon = esc_attr($social_team['social_icon']);
                                            };
                                            if (isset($social_team['social_link'])) {
                                                $team_link = esc_url($social_team['social_link']);
                                            };


                                    ?>
                                            <a href="<?php echo $team_link ?>" class="icon_color"><i class="<?php echo $team_icon ?>"></i></a>
                                    <?php endforeach;
                                    endif ?>

                                </div>
                                <?php echo wp_trim_words(get_the_content(), 10, true) ?>
                            </div>
                        </div>
                    </div>

            <?php endwhile;
            endif; ?>

        </div>
    </div>
</section><!-- /Team Area -->


<!--Footer Area-->
<?php get_footer() ?>