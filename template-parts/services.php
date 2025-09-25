
<section class="services-section">
  <div class="services-header">
    <h2>Our Allied Health <span class="highlight">Services</span></h2>
    <div class="services-sub">How Can We Help You?</div>
  </div>
  <div class="services-slider-wrapper">
    <button class="services-nav prev" aria-label="Previous">&#8592;</button>
    <div class="services-slider">
      <div class="services-track">
        <div class="service-card">
          <div class="service-logo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/occupational-therapy.png" alt="Occupational Therapy"></div>
          <h3>Occupational Therapy</h3>
          <p>Helping children, teens and adults to build skills for everyday life — from play and learning, to work, routines, recovery and independence.</p>
          <a href="/services/occupational-therapy" class="service-arrow" aria-label="Read more">&#8594;</a>
        </div>
        <div class="service-card">
          <div class="service-logo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/speech-pathology.png" alt="Speech Pathology"></div>
          <h3>Speech Pathology</h3>
          <p>Supporting communication, language, speech and swallowing across all ages, so you can be understood with confidence and live comfortably.</p>
          <a href="/services/speech-pathology" class="service-arrow" aria-label="Read more">&#8594;</a>
        </div>
        <div class="service-card">
          <div class="service-logo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/behaviour-support.png" alt="Behaviour Support"></div>
          <h3>Behaviour Support</h3>
          <p>Developing positive, practical strategies and individualised Behaviour Support Plans to make your daily life more manageable.</p>
          <a href="/services/behaviour-support" class="service-arrow" aria-label="Read more">&#8594;</a>
        </div>
        <div class="service-card">
          <div class="service-logo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/psychology.png" alt="Psychology"></div>
          <h3>Psychology</h3>
          <p>Providing caring, professional support for your emotional wellbeing, resilience and mental health.</p>
          <a href="/services/psychology" class="service-arrow" aria-label="Read more">&#8594;</a>
        </div>
        <div class="service-card">
          <div class="service-logo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/psychology.png" alt="Psychology"></div>
          <h3>Psychology</h3>
          <p>Providing caring, professional support for your emotional wellbeing, resilience and mental health.</p>
          <a href="/services/psychology" class="service-arrow" aria-label="Read more">&#8594;</a>
        </div>
        <!-- Add more service cards as needed -->
      </div>
    </div>
    <button class="services-nav next" aria-label="Next">&#8594;</button>
  </div>
  <div class="services-refer">
    <a href="/refer" class="refer-btn">Refer Now</a>
  </div>
</section>
<script>
(function() {
  const track = document.querySelector('.services-track');
  const cards = document.querySelectorAll('.service-card');
  const prevBtn = document.querySelector('.services-nav.prev');
  const nextBtn = document.querySelector('.services-nav.next');
  let current = 0;
  const visible = 4; // Number of visible cards
  function updateSlider() {
    const cardWidth = cards[0].offsetWidth + 32; // 32px gap
    track.style.transform = `translateX(-${current * cardWidth}px)`;
  }
  nextBtn.addEventListener('click', () => {
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
