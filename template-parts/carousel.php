<?php
// Carousel with 2 screens, auto-slide, custom CTA buttons
?>
<div class="custom-carousel">
  <div class="carousel-slide active" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/slide2.jpg');">
    <div class="refer-container" style="position: relative;">
      <div class="refer-content">
        <h1 class="refer-title">
          Supporting Your <span class="refer-highlight">Growth</span><br />Every Day
        </h1>
        <div class="refer-desc">
           We are a trusted national team of allied health professionals providing personalised care through the NDIS and private services.
        </div>
        <div style="display: flex; gap: 32px; margin-bottom: 32px;">
          <div style="display: flex; align-items: center; gap: 10px;">
            <svg width="26" height="27" viewBox="0 0 26 27" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M23.8341 13.714C23.8341 7.73095 18.9839 2.8807 13.0008 2.8807C7.01773 2.8807 2.16748 7.73095 2.16748 13.714C2.16748 19.6971 7.01773 24.5474 13.0008 24.5474C18.9839 24.5474 23.8341 19.6971 23.8341 13.714Z" fill="#F4C941"/>
            <path d="M8.66748 14.5269C8.66748 14.5269 10.4008 15.5155 11.2675 16.9644C11.2675 16.9644 13.8675 11.2769 17.3341 9.3811" stroke="#250543" stroke-width="1.625" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>NDIS Registered</span>
          </div>
          <div style="display: flex; align-items: center; gap: 10px;">
            <svg width="26" height="27" viewBox="0 0 26 27" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M23.8341 13.714C23.8341 7.73095 18.9839 2.8807 13.0008 2.8807C7.01773 2.8807 2.16748 7.73095 2.16748 13.714C2.16748 19.6971 7.01773 24.5474 13.0008 24.5474C18.9839 24.5474 23.8341 19.6971 23.8341 13.714Z" fill="#F4C941"/>
              <path d="M8.66748 14.5269C8.66748 14.5269 10.4008 15.5155 11.2675 16.9644C11.2675 16.9644 13.8675 11.2769 17.3341 9.3811" stroke="#250543" stroke-width="1.625" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            <span>Expert Therapists</span>
          </div>
        </div>
        <div style="display: flex; gap: 24px;">
          <a href="#" class="refer-btn" style="background: #232B3A;">Refer Now</a>
          <a href="#" class="refer-btn" style="background: transparent; border: 1.5px solid #fff; color: #fff;">Our Services</a>
        </div>
      </div>
      <!-- <div class="refer-image">
        <img src="assets/images/home/slide1.jpg" alt="Supporting Growth" />
      </div> -->

    </div>
      <div class="carousel-dots" style="display: flex; justify-content: center; gap: 12px; margin-top: 40px; position: absolute; left: 48%; bottom: 20px; z-index: 3;">
        <span class="carousel-dot active" style="width: 14px; height: 14px; border-radius: 50%; background: #fff; display: inline-block; cursor: pointer; opacity: 1;"></span>
        <span class="carousel-dot" style="width: 14px; height: 14px; border-radius: 50%; background: #fff; display: inline-block; cursor: pointer; opacity: 0.5;"></span>
      </div>
  </div>
  <div class="carousel-slide" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/slide2.jpg');">
    <div class="carousel-content">
      <h2>Join Our Team</h2>
      <p>Be a part of a dynamic and innovative company. Explore career opportunities now.</p>
      <a href="/careers" class="carousel-btn">See Careers</a>
      <a href="/about" class="carousel-btn secondary">About Us</a>
    </div>
  </div>

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
