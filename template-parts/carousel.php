<?php
if (!defined('ABSPATH')) exit;
$carousel_slides = function_exists('get_query_var') ? get_query_var('carousel_slides', [
  [
    'active' => true,
    'background' => (function_exists('get_template_directory_uri') ? get_template_directory_uri() : '') . '/assets/images/home/slide2.jpg',
    'content' => '<div class="refer-container" style="position: relative;">
      <div class="refer-content">
        <h1 class="refer-title">Supporting Your <span class="refer-highlight">Growth</span><br />Every Day</h1>
        <div class="refer-desc">We are a trusted national team of allied health professionals providing personalised care through the NDIS and private services.</div>
        <div style="display: flex; gap: 32px; margin-bottom: 32px;">
          <div style="display: flex; align-items: center; gap: 10px;">[SVG1]<span>NDIS Registered</span></div>
          <div style="display: flex; align-items: center; gap: 10px;">[SVG2]<span>Expert Therapists</span></div>
        </div>
        <div style="display: flex; gap: 24px;">
          <a href="#" class="refer-btn" style="background: #232B3A;">Refer Now</a>
          <a href="#" class="refer-btn" style="background: transparent; border: 1.5px solid #fff; color: #fff;">Our Services</a>
        </div>
      </div>
    </div>'
  ],
  [
    'active' => false,
    'background' => (function_exists('get_template_directory_uri') ? get_template_directory_uri() : '') . '/assets/images/home/slide2.jpg',
    'content' => '<div class="carousel-content">
      <h2>Join Our Team</h2>
      <p>Be a part of a dynamic and innovative company. Explore career opportunities now.</p>
      <a href="/careers" class="carousel-btn">See Careers</a>
      <a href="/about" class="carousel-btn secondary">About Us</a>
    </div>'
  ]
]) : [
  // fallback array
];
if (!function_exists('esc_url')) { function esc_url($str) { return htmlspecialchars($str, ENT_QUOTES, 'UTF-8'); } }
?>
<div class="custom-carousel">
  <?php foreach ($carousel_slides as $idx => $slide): ?>
    <div class="carousel-slide<?php echo !empty($slide['active']) ? ' active' : ''; ?>" style="background-image: url('<?php echo esc_url($slide['background']); ?>');">
      <?php echo $slide['content']; ?>
      <?php if ($idx === 0): ?>
      <div class="carousel-dots" style="display: flex; justify-content: center; gap: 12px; margin-top: 40px; position: absolute; left: 48%; bottom: 20px; z-index: 3;">
        <span class="carousel-dot active" style="width: 14px; height: 14px; border-radius: 50%; background: #fff; display: inline-block; cursor: pointer; opacity: 1;"></span>
        <span class="carousel-dot" style="width: 14px; height: 14px; border-radius: 50%; background: #fff; display: inline-block; cursor: pointer; opacity: 0.5;"></span>
      </div>
      <?php endif; ?>
    </div>
  <?php endforeach; ?>
</div>
<script>
document.addEventListener('DOMContentLoaded', function() {
  const slides = document.querySelectorAll('.custom-carousel .carousel-slide');
  const dots = document.querySelectorAll('.custom-carousel .carousel-dot');
  let current = 0;
  let interval = setInterval(nextSlide, 5000);

  function showSlide(idx) {
    slides.forEach((slide, i) => {
      slide.classList.toggle('active', i === idx);
    });
    dots.forEach((dot, i) => {
      dot.classList.toggle('active', i === idx);
      dot.style.opacity = (i === idx) ? '1' : '0.5';
    });
    current = idx;
  }
  function nextSlide() {
    showSlide((current + 1) % slides.length);
  }
  function goToSlide(idx) {
    showSlide(idx);
    resetInterval();
  }
  dots.forEach((dot, i) => {
    dot.addEventListener('click', () => goToSlide(i));
  });
  function resetInterval() {
    clearInterval(interval);
    interval = setInterval(nextSlide, 5000);
  }
});
</script>
</script>
