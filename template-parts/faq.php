<?php
if (!defined('ABSPATH')) exit;
$faq_title = function_exists('get_query_var') ? get_query_var('faq_title', 'Frequently Asked <span class="highlight">Questions</span>') : 'Frequently Asked <span class="highlight">Questions</span>';
$faq_sub = function_exists('get_query_var') ? get_query_var('faq_sub', 'Here are some of the most common questions families ask us , answered simply and clearly to help you get started with confidence.') : 'Here are some of the most common questions families ask us , answered simply and clearly to help you get started with confidence.';
$faq_items = function_exists('get_query_var') ? get_query_var('faq_items', [
  [ 'question' => 'What is allied health and how can it help my child?', 'answer' => 'Allied health professionals help people improve their health, wellbeing, and independence through a range of therapies and supports.' ],
  [ 'question' => 'What allied health services do you provide?', 'answer' => 'Allied X provides a full range of allied health services in Australia across the lifespan. Our team includes Occupational Therapists, Speech Pathologists, Psychologists, Behaviour Support Practitioners, Physiotherapists, Exercise Physiologists, and Allied Health Assistants.', 'active' => true ],
  [ 'question' => 'How do I book an appointment or make a referral?', 'answer' => 'You can book or refer by calling us, using our online form, or speaking with your support coordinator.' ],
  [ 'question' => 'Are your services only for people with NDIS plans?', 'answer' => 'No, we support both NDIS participants and private clients of all ages.' ],
  [ 'question' => 'What does a therapy session look like and how long is it?', 'answer' => 'Sessions are tailored to your needs and may last from 30 to 60 minutes, depending on the service and goals.' ],
  [ 'question' => 'Do you provide therapy at home, in school, or in the community?', 'answer' => 'Yes, we offer flexible service delivery in homes, schools, community settings, and at our clinics.' ],
  [ 'question' => 'What is the NDIS, and how does it work?', 'answer' => 'The NDIS (National Disability Insurance Scheme) provides funding for supports and services to people with disability in Australia.' ],
  [ 'question' => 'What ages do you cater to?', 'answer' => 'We support children, teens, adults, and older people across the lifespan.' ],
  [ 'question' => 'What types of NDIS plans do you work with?', 'answer' => 'We work with all NDIS plan types: self-managed, plan-managed, and NDIA-managed.' ],
  [ 'question' => "I'm already working with another therapist — can I still access Allied X services?", 'answer' => 'Yes, we can work alongside your existing supports to help you achieve your goals.' ],
]) : [
  // fallback array
];
$faq_refer_url = function_exists('get_query_var') ? get_query_var('faq_refer_url', '/refer') : '/refer';
$faq_refer_text = function_exists('get_query_var') ? get_query_var('faq_refer_text', 'Refer Now') : 'Refer Now';
if (!function_exists('esc_html')) { function esc_html($str) { return htmlspecialchars($str, ENT_QUOTES, 'UTF-8'); } }
if (!function_exists('esc_url')) { function esc_url($str) { return htmlspecialchars($str, ENT_QUOTES, 'UTF-8'); } }
if (!function_exists('esc_attr')) { function esc_attr($str) { return htmlspecialchars($str, ENT_QUOTES, 'UTF-8'); } }
?>
<section class="faq-section">
  <div class="faq-header">
    <h2><?php echo $faq_title; ?></h2>
    <div class="faq-sub"><?php echo esc_html($faq_sub); ?></div>
  </div>
  <div class="faq-list">
    <?php foreach ($faq_items as $item): ?>
    <div class="faq-item<?php echo !empty($item['active']) ? ' active' : ''; ?>">
      <button class="faq-question"><?php echo esc_html($item['question']); ?><span class="faq-toggle"><?php echo !empty($item['active']) ? '-' : '+'; ?></span></button>
      <div class="faq-answer"><?php echo esc_html($item['answer']); ?></div>
    </div>
    <?php endforeach; ?>
  </div>
  <div class="faq-refer">
    <a href="<?php echo esc_url($faq_refer_url); ?>" class="refer-btn"><?php echo esc_html($faq_refer_text); ?></a>
  </div>
</section>
<script>
(function() {
  const items = document.querySelectorAll('.faq-item');
  items.forEach(item => {
    const btn = item.querySelector('.faq-question');
    btn.addEventListener('click', function() {
      const isActive = item.classList.contains('active');
      items.forEach(i => {
        i.classList.remove('active');
        i.querySelector('.faq-toggle').textContent = '+';
      });
      if (!isActive) {
        item.classList.add('active');
        btn.querySelector('.faq-toggle').textContent = '-';
      }
    });
  });
})();
</script>
