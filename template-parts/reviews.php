<?php
$reviews_title = isset($reviews_title) ? $reviews_title : 'Real <span class="highlight">People</span>, Real <span class="highlight">Outcomes</span>';
$reviews_sub = isset($reviews_sub) ? $reviews_sub : 'Real experiences from clients who embraced our approach';
$reviews_list = isset($reviews_list) ? $reviews_list : [
  [
    'quotes' => [
      '"I recently attended your Kingsgrove clinic for my son to complete a functional capacity assessment (FCA). I was really impressed by your facility, clinicians, and customer service."',
      'Lauren from your Kingsgrove team has gone above and beyond to make me and my family feel that we belong, and that Allied X is a place that can help my son continue progressing in his therapies.'
    ],
    'author' => '-ROB GALVIN, Marketing Manager at Metalogics',
    'image' => esc_url(get_template_directory_uri()) . '/assets/images/home/review1.png'
  ],
  // Add more reviews as needed
];
?>
<section class="reviews-section">
  <div class="reviews-header">
    <h2><?php echo $reviews_title; ?></h2>
    <div class="reviews-sub"><?php echo $reviews_sub; ?></div>
  </div>
  <div class="reviews-slider-wrapper">
    <div class="reviews-slider">
      <div class="reviews-track">
        <?php foreach ($reviews_list as $i => $review) : ?>
        <div class="review-card<?php echo $i === 0 ? ' active' : ''; ?>">
          <div class="review-content">
            <blockquote>
              <?php foreach ($review['quotes'] as $quote) : ?>
                <p><?php echo $quote; ?></p>
              <?php endforeach; ?>
            </blockquote>
            <div class="review-author"><?php echo $review['author']; ?></div>
            <div class="reviews-nav">
              <button class="reviews-btn prev" aria-label="Previous">&#8592;</button>
              <button class="reviews-btn next" aria-label="Next">&#8594;</button>
            </div>
          </div>
          <div class="review-photo-bg">
            <div class="review-photo-card">
              <img src="<?php echo $review['image']; ?>" alt="Client photo">
            </div>
          </div>
        </div>
        <?php endforeach; ?>
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
