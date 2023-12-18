<?php
if (!defined('ABSPATH')) {
    exit;
}  //cannot access pages dirtectly

// footer social icon
function biziver_footer_social_markup($atts,$content = NULL) {
    ob_start();?>
    <div class="social">
        <?php echo do_shortcode($content)?>
    </div>
    
<?php return ob_get_clean();}

add_shortcode('social-markup','biziver_footer_social_markup');


// footer social icon

function biziver_footer_social_icon($atts,$content = NULL){
    ob_start();
    extract(shortcode_atts(array(
        "url" => '#',
        'class'=> 'facebook',
        'iclass' => 'facebook-f'
    ),$atts));
?>
<a href="<?php echo esc_url($url)?>" class='cl-<?php echo esc_attr($class)?>'>
<i class= 'fa-brands fa-<?php echo esc_attr($iclass)?>'></i>
</a>

<?php return ob_get_clean();};
add_shortcode('social-footer-icon','biziver_footer_social_icon');


// sidebar widget shortcode
function biziver_social_shortcode()
{
    ob_start(); ?>
    <div class="social-follow">
        <a href="#" class="facebook-bg"><i class="fa-brands fa-facebook-f"></i>158K</a>
        <a href="#" class="twitter-bg"><i class="fa-brands fa-twitter"></i>588K</a>
        <a href="#" class="instragram_bg"><i class="fa-brands fa-instagram"></i></i>545K</a>
    </div>

<?php
    return ob_get_clean();
}
add_shortcode('follow-us','biziver_social_shortcode');

