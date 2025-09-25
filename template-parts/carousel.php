<?php
// Carousel with 2 screens, auto-slide, custom CTA buttons
?>
<div class="custom-carousel">
  <div class="carousel-slide active" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/slide1.jpg');">
    <div class="carousel-content">
      <h2>Welcome to Our Services</h2>
      <p>Discover our wide range of solutions designed to help you succeed.</p>
      <a href="/services" class="carousel-btn">View Services</a>
      <a href="/contact" class="carousel-btn secondary">Contact Us</a>
    </div>
  </div>
  <div class="carousel-slide" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/slide2.jpg');">
    <div class="carousel-content">
      <h2>Join Our Team</h2>
      <p>Be a part of a dynamic and innovative company. Explore career opportunities now.</p>
      <a href="/careers" class="carousel-btn">See Careers</a>
      <a href="/about" class="carousel-btn secondary">About Us</a>
    </div>
  </div>
  <button class="carousel-nav prev">&#10094;</button>
  <button class="carousel-nav next">&#10095;</button>
</div>
<script>
(function() {
  const slides = document.querySelectorAll('.custom-carousel .carousel-slide');
  const nextBtn = document.querySelector('.custom-carousel .carousel-nav.next');
  const prevBtn = document.querySelector('.custom-carousel .carousel-nav.prev');
  let current = 0;
  let interval = setInterval(nextSlide, 5000);

  function showSlide(idx) {
    slides.forEach((slide, i) => {
      slide.classList.toggle('active', i === idx);
    });
    current = idx;
  }
  function nextSlide() {
    showSlide((current + 1) % slides.length);
  }
  function prevSlide() {
    showSlide((current - 1 + slides.length) % slides.length);
  }
  nextBtn.addEventListener('click', () => { nextSlide(); resetInterval(); });
  prevBtn.addEventListener('click', () => { prevSlide(); resetInterval(); });
  function resetInterval() {
    clearInterval(interval);
    interval = setInterval(nextSlide, 5000);
  }
})();
</script>
