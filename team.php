<?php

/**
 * Template Name: Teams
 */
get_header();

?>

<!-- Team Area -->
<section class="team-area section-padding-2">
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
                'posts_per_page' => 8,
                //'order'      => 'asc'
            ));
            if ($biziver_teams->have_posts()) : while ($biziver_teams->have_posts()) : $biziver_teams->the_post();
                    $team_member_position = get_post_meta(get_the_ID(), 'teams_job_title', true);

            ?>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="single-team-3">
                            <div class="row">
                                <div class="col-lg-4 col-md-5 col-sm-5">
                                    <?php the_post_thumbnail('biziver-team-thumb'); ?>
                                </div>
                                <div class="col-lg-8 col-md-7 col-sm-7">
                                    <div class="team-content">
                                        <h4><?php the_title() ?></h4>
                                        <span><?php echo esc_html($team_member_position) ?></span>
                                        <div class="social">
                                            <?php $team_social = get_post_meta(get_the_ID(),'social_repeat_group',true);
                                            if(!empty($team_social)):foreach($team_social as $social_team):
                                                if ( isset( $social_team['social_icon'] ) ) {
                                                    $team_icon = esc_attr( $social_team['social_icon'] );
                                                };
                                                if ( isset( $social_team['social_link'] ) ) {
                                                    $team_link = esc_url( $social_team['social_link'] );
                                                };
                                            
                                            
                                            ?>
                                                <a href="<?php echo $team_link?>"class="icon_color"><i class="<?php echo $team_icon?>"></i></a>
                                            <?php endforeach;endif?>                                           
                                           
                                        </div>

                                        <?php echo wp_trim_words(get_the_content(), 10, true) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php endwhile;
            endif; ?>


        </div>
    </div>
</section><!-- /Team Area -->


<!--Footer Area-->
<?php get_footer(); ?>