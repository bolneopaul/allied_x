<?php
if (!defined('ABSPATH')) exit;
$blogs_title = function_exists('get_query_var') ? get_query_var('blogs_title', 'Check Out Our <span class="highlight">Tips and Resources</span>') : 'Check Out Our <span class="highlight">Tips and Resources</span>';
$blogs_btn_url = function_exists('get_query_var') ? get_query_var('blogs_btn_url', '/blogs') : '/blogs';
$blogs_btn_text = function_exists('get_query_var') ? get_query_var('blogs_btn_text', 'View Blogs') : 'View Blogs';
$blogs_sub = function_exists('get_query_var') ? get_query_var('blogs_sub', 'Keep up to date with our practical resources, information and news') : 'Keep up to date with our practical resources, information and news';
$blog_cards = function_exists('get_query_var') ? get_query_var('blog_cards', [
	[
		'image' => (function_exists('get_template_directory_uri') ? get_template_directory_uri() : '') . '/assets/images/home/blog1.png',
		'alt' => 'Allied X Out on the Field',
		'title' => 'Allied X Out on the Field',
		'desc' => 'As the season comes to a close, we look back on a phenomenal year sponsoring Player 11 of the Canterbury-Bankstown Bulldogs.',
		'url' => '/blogs/allied-x-out-on-the-field'
	],
	[
		'image' => (function_exists('get_template_directory_uri') ? get_template_directory_uri() : '') . '/assets/images/home/blog2.png',
		'alt' => 'Allied X Expands to Melbourne & Adelaide',
		'title' => 'Allied X Expands to Melbourne & Adelaide',
		'desc' => 'We’re excited to announce that our Occupational Therapy services are now available in Melbourne and Adelaide!',
		'url' => '/blogs/allied-x-expands-melbourne-adelaide'
	],
	[
		'image' => (function_exists('get_template_directory_uri') ? get_template_directory_uri() : '') . '/assets/images/home/blog3.png',
		'alt' => 'How Can Physiotherapy Help Your Child Or Teen?',
		'title' => 'How Can Physiotherapy Help Your Child Or Teen?',
		'desc' => 'Our Physiotherapists support children and young people to develop their physical abilities to participate in activities to their...',
		'url' => '/blogs/physiotherapy-help-child-teen'
	],
]) : [
	// fallback array
];
if (!function_exists('esc_html')) { function esc_html($str) { return htmlspecialchars($str, ENT_QUOTES, 'UTF-8'); } }
if (!function_exists('esc_url')) { function esc_url($str) { return htmlspecialchars($str, ENT_QUOTES, 'UTF-8'); } }
if (!function_exists('esc_attr')) { function esc_attr($str) { return htmlspecialchars($str, ENT_QUOTES, 'UTF-8'); } }
?>
<section class="blogs-section">
	<div class="blogs-header">
		<div style="display: flex; flex-direction: row; align-items: center; justify-content: space-between;">
			<h2><?php echo $blogs_title; ?></h2>
				<a href="<?php echo esc_url($blogs_btn_url); ?>" class="view-blogs-btn"><?php echo esc_html($blogs_btn_text); ?></a>
		</div>
		<div class="blogs-sub"><?php echo esc_html($blogs_sub); ?></div>
	</div>
	<div class="blogs-slider-wrapper">
		<div class="blogs-slider">
			<div class="blogs-track">
				<?php foreach ($blog_cards as $card): ?>
				<div class="blog-card">
					<div class="blog-image"><img src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['alt']); ?>"></div>
					<div class="blog-content">
						<h3><?php echo esc_html($card['title']); ?></h3>
						<p><?php echo esc_html($card['desc']); ?></p>
						<a href="<?php echo esc_url($card['url']); ?>" class="blog-read">Read blog <span>&#8594;</span></a>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>
<script>
(function() {
	const track = document.querySelector('.blogs-track');
	let isDown = false;
	let startX;
	let scrollLeft;
	track.addEventListener('mousedown', (e) => {
		isDown = true;
		track.classList.add('dragging');
		startX = e.pageX - track.offsetLeft;
		scrollLeft = track.scrollLeft;
	});
	track.addEventListener('mouseleave', () => {
		isDown = false;
		track.classList.remove('dragging');
	});
	track.addEventListener('mouseup', () => {
		isDown = false;
		track.classList.remove('dragging');
	});
	track.addEventListener('mousemove', (e) => {
		if (!isDown) return;
		e.preventDefault();
		const x = e.pageX - track.offsetLeft;
		const walk = (x - startX) * 1.5;
		track.scrollLeft = scrollLeft - walk;
	});
})();
</script>
