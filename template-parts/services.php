
<?php
if (!defined('ABSPATH')) exit;
$services_title = function_exists('get_query_var') ? get_query_var('services_title', 'Our Allied Health <span class="highlight">Services</span>') : 'Our Allied Health <span class="highlight">Services</span>';
$services_sub = function_exists('get_query_var') ? get_query_var('services_sub', 'How Can We Help You?') : 'How Can We Help You?';
$service_cards = function_exists('get_query_var') ? get_query_var('service_cards', [
  [
    'logo' => (function_exists('get_template_directory_uri') ? get_template_directory_uri() : '') . '/assets/images/home/Group.png',
    'alt' => 'Occupational Therapy',
    'title' => 'Occupational Therapy',
    'desc' => 'Helping children, teens and adults to build skills for everyday life — from play and learning, to work, routines, recovery and independence.',
    'url' => '/services/occupational-therapy'
  ],
  [
    'logo' => (function_exists('get_template_directory_uri') ? get_template_directory_uri() : '') . '/assets/images/home/speech-pathology.png',
    'alt' => 'Speech Pathology',
    'title' => 'Speech Pathology',
    'desc' => 'Supporting communication, language, speech and swallowing across all ages, so you can be understood with confidence and live comfortably.',
    'url' => '/services/speech-pathology'
  ],
  [
    'logo' => (function_exists('get_template_directory_uri') ? get_template_directory_uri() : '') . '/assets/images/home/behaviour-support.png',
    'alt' => 'Behaviour Support',
    'title' => 'Behaviour Support',
    'desc' => 'Developing positive, practical strategies and individualised Behaviour Support Plans to make your daily life more manageable.',
    'url' => '/services/behaviour-support'
  ],
  [
    'logo' => (function_exists('get_template_directory_uri') ? get_template_directory_uri() : '') . '/assets/images/home/psychology.png',
    'alt' => 'Psychology',
    'title' => 'Psychology',
    'desc' => 'Providing caring, professional support for your emotional wellbeing, resilience and mental health.',
    'url' => '/services/psychology'
  ],
]) : [
  // fallback array
];
$refer_btn_url = function_exists('get_query_var') ? get_query_var('services_refer_btn_url', '/refer') : '/refer';
$refer_btn_text = function_exists('get_query_var') ? get_query_var('services_refer_btn_text', 'Refer Now') : 'Refer Now';
if (!function_exists('esc_html')) { function esc_html($str) { return htmlspecialchars($str, ENT_QUOTES, 'UTF-8'); } }
if (!function_exists('esc_url')) { function esc_url($str) { return htmlspecialchars($str, ENT_QUOTES, 'UTF-8'); } }
if (!function_exists('esc_attr')) { function esc_attr($str) { return htmlspecialchars($str, ENT_QUOTES, 'UTF-8'); } }
?>
<section class="services-section">
  <div class="services-header">
    <div style='display: flex; flex-direction: row; align-items: center; justify-content: space-between;'>
      <h2><?php echo $services_title; ?></h2>
      <div style="position: relative; top: 0; right: 0; z-index: 2; display: flex; gap: 10px;">
        <button class="services-nav prev" aria-label="Previous">&#8592;</button>
        <button class="services-nav next" aria-label="Next">&#8594;</button>
      </div>
    </div>
    <div class="services-sub"><?php echo esc_html($services_sub); ?></div>
  </div>
  <div class="services-slider-wrapper" style="position: relative;">
    <div class="services-slider">
      <div class="services-track">
        <?php foreach ($service_cards as $card): ?>
        <div class="service-card">
          <div class="service-logo"><img src="<?php echo esc_url($card['logo']); ?>" alt="<?php echo esc_attr($card['alt']); ?>"></div>
          <h3><?php echo esc_html($card['title']); ?></h3>
          <p><?php echo esc_html($card['desc']); ?></p>
          <a href="<?php echo esc_url($card['url']); ?>" class="service-arrow" aria-label="Read more">&#8594;</a>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
  <div class="services-refer" style="display: flex; justify-content: center; margin-top: 2.5rem;">
    <a href="<?php echo esc_url($refer_btn_url); ?>" class="refer-btn"><?php echo esc_html($refer_btn_text); ?></a>
  </div>
</section>
<script>
(function() {
  const track = document.querySelector('.services-track');
  const cards = document.querySelectorAll('.service-card');
  const prevBtn = document.querySelector('.services-nav.prev');
  const nextBtn = document.querySelector('.services-nav.next');
  let current = 0;
  function getVisible() {
    // Responsive: estimate visible cards based on container width and card width
    const container = document.querySelector('.services-slider');
    if (!container || cards.length === 0) return 1;
    const cardWidth = cards[0].offsetWidth + 32; // 32px gap
    return Math.max(1, Math.floor(container.offsetWidth / cardWidth));
  }
  function updateSlider() {
    const cardWidth = cards[0].offsetWidth + 32; // 32px gap
    const visible = getVisible();
    // Clamp current so it never goes out of bounds
    current = Math.max(0, Math.min(current, Math.max(0, cards.length - visible)));
    track.style.transform = `translateX(-${current * cardWidth}px)`;
    // Optionally disable buttons if not needed
    prevBtn.disabled = current === 0;
    nextBtn.disabled = current >= cards.length - visible;
  }
  nextBtn.addEventListener('click', () => {
    const visible = getVisible();
    if (current < cards.length - visible) current++;
    updateSlider();
  });
  prevBtn.addEventListener('click', () => {
    if (current > 0) current--;
    updateSlider();
  });
  window.addEventListener('resize', updateSlider);
  updateSlider();
})();
</script>
