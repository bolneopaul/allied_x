<section class="reviews-section">
  <div class="reviews-header">
    <h2>Real <span class="highlight">People</span>, Real <span class="highlight">Outcomes</span></h2>
    <div class="reviews-sub">Real experiences from clients who embraced our approach</div>
  </div>
  <div class="reviews-slider-wrapper">
    <div class="reviews-slider">
      <div class="reviews-track">
        <div class="review-card active">
          <div class="review-content">
            <blockquote>
              <p>"I recently attended your Kingsgrove clinic for my son to complete a functional capacity assessment (FCA). I was really impressed by your facility, clinicians, and customer service."</p>
              <p>Lauren from your Kingsgrove team has gone above and beyond to make me and my family feel that we belong, and that Allied X is a place that can help my son continue progressing in his therapies.</p>
            </blockquote>
            <div class="review-author">-ROB GALVIN, Marketing Manager at Metalogics</div>
            <div class="reviews-nav">
              <button class="reviews-btn prev" aria-label="Previous">&#8592;</button>
              <button class="reviews-btn next" aria-label="Next">&#8594;</button>
            </div>
          </div>
          <div class="review-photo-bg">
            <div class="review-photo-card">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/review1.png" alt="Client photo">
            </div>
          </div>
        </div>
        <div class="review-card">
          <div class="review-content">
            <blockquote>
              <p>"I00 recently attended your Kingsgrove clinic for my son to complete a functional capacity assessment (FCA). I was really impressed by your facility, clinicians, and customer service."</p>
              <p>Lauren from your Kingsgrove team has gone above and beyond to make me and my family feel that we belong, and that Allied X is a place that can help my son continue progressing in his therapies.</p>
            </blockquote>
            <div class="review-author">-ROB GALVIN, Marketing Manager at Metalogics</div>
            <div class="reviews-nav">
              <button class="reviews-btn prev" aria-label="Previous">&#8592;</button>
              <button class="reviews-btn next" aria-label="Next">&#8594;</button>
            </div>
          </div>
          <div class="review-photo-bg">
            <div class="review-photo-card">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/review1.png" alt="Client photo">
            </div>
          </div>
        </div>
         <div class="review-card">
          <div class="review-content">
            <blockquote>
              <p>"I0 recently attended your Kingsgrove clinic for my son to complete a functional capacity assessment (FCA). I was really impressed by your facility, clinicians, and customer service."</p>
              <p>Lauren from your Kingsgrove team has gone above and beyond to make me and my family feel that we belong, and that Allied X is a place that can help my son continue progressing in his therapies.</p>
            </blockquote>
            <div class="review-author">-ROB GALVIN, Marketing Manager at Metalogics</div>
            <div class="reviews-nav">
              <button class="reviews-btn prev" aria-label="Previous">&#8592;</button>
              <button class="reviews-btn next" aria-label="Next">&#8594;</button>
            </div>
          </div>
          <div class="review-photo-bg">
            <div class="review-photo-card">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/review1.png" alt="Client photo">
            </div>
          </div>
        </div>
        <!-- Add more .review-card blocks for more reviews -->
      </div>
    </div>

  </div>
</section>
<script>
document.addEventListener('DOMContentLoaded', function() {
  const cards = document.querySelectorAll('.review-card');
  let current = 0;
  function showCard(idx) {
    cards.forEach((card, i) => card.classList.toggle('active', i === idx));
    current = idx;
  }
  // Use event delegation for all nav buttons
  document.querySelectorAll('.reviews-nav').forEach(function(nav) {
    nav.querySelector('.reviews-btn.next').addEventListener('click', function(e) {
      e.preventDefault();
      showCard((current + 1) % cards.length);
    });
    nav.querySelector('.reviews-btn.prev').addEventListener('click', function(e) {
      e.preventDefault();
      showCard((current - 1 + cards.length) % cards.length);
    });
  });
});
</script>
