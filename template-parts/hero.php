<?php
if (!defined('ABSPATH')) exit;
$hero_title = function_exists('get_query_var') ? get_query_var('hero_title', (function_exists('bloginfo') ? bloginfo('name') : '')) : (function_exists('bloginfo') ? bloginfo('name') : '');
$hero_tagline = function_exists('get_query_var') ? get_query_var('hero_tagline', 'Your tagline goes here.') : 'Your tagline goes here.';
$hero_btn_url = function_exists('get_query_var') ? get_query_var('hero_btn_url', '/services') : '/services';
$hero_btn_text = function_exists('get_query_var') ? get_query_var('hero_btn_text', 'View Services') : 'View Services';
if (!function_exists('esc_html')) { function esc_html($str) { return htmlspecialchars($str, ENT_QUOTES, 'UTF-8'); } }
if (!function_exists('esc_url')) { function esc_url($str) { return htmlspecialchars($str, ENT_QUOTES, 'UTF-8'); } }
?>
<section class="hero">
  <div class="container">
    <h1><?php echo esc_html($hero_title); ?></h1>
    <p><?php echo esc_html($hero_tagline); ?></p>
    <a href="<?php echo esc_url($hero_btn_url); ?>" class="btn"><?php echo esc_html($hero_btn_text); ?></a>
  </div>
</section>
