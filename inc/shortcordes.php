<?php
if (!defined('ABSPATH')) {
    exit;
}  //cannot access pages dirtectly

function biziver_social_shortcode()
{
    ob_start(); ?>
    <div class="social-follow">
        <a href="#" class="facebook-bg"><i class="fa fa-facebook"></i>158K</a>
        <a href="#" class="twitter-bg"><i class="fa fa-twitter"></i>588K</a>
        <a href="#" class="instagram-bg"><i class="fa fa-instagram"></i>545K</a>
    </div>

<?php
    return ob_get_clean();
}
add_shortcode('follow-us','biziver_social_shortcode');
