
<?php
if (!defined('ABSPATH')) exit;
$refer_title = function_exists('get_query_var') ? get_query_var('refer_title', 'Supporting <span class="refer-highlight">You</span>,<br>Every Day') : 'Supporting <span class="refer-highlight">You</span>,<br>Every Day';
$refer_desc = function_exists('get_query_var') ? get_query_var('refer_desc', 'Join the thousands of people already experiencing the benefits of evidence-based therapy and supportive care.') : 'Join the thousands of people already experiencing the benefits of evidence-based therapy and supportive care.';
$refer_btn_url = function_exists('get_query_var') ? get_query_var('refer_btn_url', '#') : '#';
$refer_btn_text = function_exists('get_query_var') ? get_query_var('refer_btn_text', 'Refer Now') : 'Refer Now';
if (!function_exists('esc_html')) { function esc_html($str) { return htmlspecialchars($str, ENT_QUOTES, 'UTF-8'); } }
if (!function_exists('esc_url')) { function esc_url($str) { return htmlspecialchars($str, ENT_QUOTES, 'UTF-8'); } }
?>
<section class="refer-section">
	<div class="refer-container">
		<div class="refer-content">
			<h2 class="refer-title"><?php echo $refer_title; ?></h2>
			<p class="refer-desc"><?php echo esc_html($refer_desc); ?></p>
			<a href="<?php echo esc_url($refer_btn_url); ?>" class="refer-btn_2"><?php echo esc_html($refer_btn_text); ?></a>
		</div>
	</div>
</section>
