<section class="blogs-section">
	<div class="blogs-header">
		<h2>Check Out Our <span class="highlight">Tips and Resources</span></h2>
		<div class="blogs-sub">Keep up to date with our practical resources, information and news</div>
		<a href="/blogs" class="view-blogs-btn">View Blogs</a>
	</div>
	<div class="blogs-slider-wrapper">
		<div class="blogs-slider">
			<div class="blogs-track">
				<div class="blog-card">
					<div class="blog-image"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/blog1.png" alt="Allied X Out on the Field"></div>
					<div class="blog-content">
						<h3>Allied X Out on the Field</h3>
						<p>As the season comes to a close, we look back on a phenomenal year sponsoring Player 11 of the Canterbury-Bankstown Bulldogs.</p>
						<a href="/blogs/allied-x-out-on-the-field" class="blog-read">Read blog <span>&#8594;</span></a>
					</div>
				</div>
				<div class="blog-card">
					<div class="blog-image"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/blog2.png" alt="Allied X Expands to Melbourne & Adelaide"></div>
					<div class="blog-content">
						<h3>Allied X Expands to Melbourne & Adelaide</h3>
						<p>We’re excited to announce that our Occupational Therapy services are now available in Melbourne and Adelaide!</p>
						<a href="/blogs/allied-x-expands-melbourne-adelaide" class="blog-read">Read blog <span>&#8594;</span></a>
					</div>
				</div>
				<div class="blog-card">
					<div class="blog-image"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/blog3.png" alt="How Can Physiotherapy Help Your Child Or Teen?"></div>
					<div class="blog-content">
						<h3>How Can Physiotherapy Help Your Child Or Teen?</h3>
						<p>Our Physiotherapists support children and young people to develop their physical abilities to participate in activities to their...</p>
						<a href="/blogs/physiotherapy-help-child-teen" class="blog-read">Read blog <span>&#8594;</span></a>
					</div>
				</div>
				<!-- Add more blog-card blocks as needed -->
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
