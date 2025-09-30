
<?php
if (!defined('ABSPATH')) exit;
$trusted_label = function_exists('get_query_var') ? get_query_var('trusted_label', 'Trusted Partners') : 'Trusted Partners';
$logos = function_exists('get_query_var') ? get_query_var('trusted_logos', [
  [ 'src' => get_template_directory_uri() . '/assets/images/home/speech-pathology-australia.png', 'alt' => 'Speech Pathology Australia' ],
  [ 'src' => get_template_directory_uri() . '/assets/images/home/ahpra.png', 'alt' => 'Ahpra National Boards' ],
  [ 'src' => get_template_directory_uri() . '/assets/images/home/great-place-to-work.png', 'alt' => 'Great Place To Work' ],
  [ 'src' => get_template_directory_uri() . '/assets/images/home/agosci.png', 'alt' => 'AGOSCI' ],
  [ 'src' => get_template_directory_uri() . '/assets/images/home/atsa.png', 'alt' => 'ATSA' ],
  [ 'src' => get_template_directory_uri() . '/assets/images/home/physio-association.png', 'alt' => 'Australian Physiotherapy Association' ],
  [ 'src' => get_template_directory_uri() . '/assets/images/home/occupational-therapy.png', 'alt' => 'Occupational Therapy Australia' ],
  [ 'src' => get_template_directory_uri() . '/assets/images/home/arata.png', 'alt' => 'ARATA' ],
]) : [
  [ 'src' => (function_exists('get_template_directory_uri') ? get_template_directory_uri() : '') . '/assets/images/home/speech-pathology-australia.png', 'alt' => 'Speech Pathology Australia' ],
  [ 'src' => (function_exists('get_template_directory_uri') ? get_template_directory_uri() : '') . '/assets/images/home/ahpra.png', 'alt' => 'Ahpra National Boards' ],
  [ 'src' => (function_exists('get_template_directory_uri') ? get_template_directory_uri() : '') . '/assets/images/home/great-place-to-work.png', 'alt' => 'Great Place To Work' ],
  [ 'src' => (function_exists('get_template_directory_uri') ? get_template_directory_uri() : '') . '/assets/images/home/agosci.png', 'alt' => 'AGOSCI' ],
  [ 'src' => (function_exists('get_template_directory_uri') ? get_template_directory_uri() : '') . '/assets/images/home/atsa.png', 'alt' => 'ATSA' ],
  [ 'src' => (function_exists('get_template_directory_uri') ? get_template_directory_uri() : '') . '/assets/images/home/physio-association.png', 'alt' => 'Australian Physiotherapy Association' ],
  [ 'src' => (function_exists('get_template_directory_uri') ? get_template_directory_uri() : '') . '/assets/images/home/occupational-therapy.png', 'alt' => 'Occupational Therapy Australia' ],
  [ 'src' => (function_exists('get_template_directory_uri') ? get_template_directory_uri() : '') . '/assets/images/home/arata.png', 'alt' => 'ARATA' ],
];
$team_stats = function_exists('get_query_var') ? get_query_var('team_stats', [
  [ 'value' => '1500+', 'label' => 'Participants and Clients Helped' ],
  [ 'value' => '4.8/5', 'label' => 'Rating on Google' ],
  [ 'value' => '50+', 'label' => 'Dedicated Therapists' ],
]) : [
  [ 'value' => '1500+', 'label' => 'Participants and Clients Helped' ],
  [ 'value' => '4.8/5', 'label' => 'Rating on Google' ],
  [ 'value' => '50+', 'label' => 'Dedicated Therapists' ],
];
$team_image = function_exists('get_query_var') ? get_query_var('team_image', (function_exists('get_template_directory_uri') ? get_template_directory_uri() : '') . '/assets/images/home/Meet Allied X.png') : (function_exists('get_template_directory_uri') ? get_template_directory_uri() : '') . '/assets/images/home/Meet Allied X.png';
$team_image_alt = function_exists('get_query_var') ? get_query_var('team_image_alt', 'Meet Allied X Team') : 'Meet Allied X Team';
$team_title = function_exists('get_query_var') ? get_query_var('team_title', 'Meet <span class="highlight">Allied X</span>') : 'Meet <span class="highlight">Allied X</span>';
$team_description = function_exists('get_query_var') ? get_query_var('team_description', 'We are a team of more than 30 allied health professionals who are passionate about supporting you, from infancy through to older age, to build independence, improve wellbeing, and participate fully in daily life. Our services are guided by the latest evidence-based practice and available to both NDIS participants and private clients.') : 'We are a team of more than 30 allied health professionals who are passionate about supporting you, from infancy through to older age, to build independence, improve wellbeing, and participate fully in daily life. Our services are guided by the latest evidence-based practice and available to both NDIS participants and private clients.';
$team_btn_url = function_exists('get_query_var') ? get_query_var('team_btn_url', '/team') : '/team';
$team_btn_text = function_exists('get_query_var') ? get_query_var('team_btn_text', 'Our Team') : 'Our Team';
if (!function_exists('esc_html')) { function esc_html($str) { return htmlspecialchars($str, ENT_QUOTES, 'UTF-8'); } }
if (!function_exists('esc_url')) { function esc_url($str) { return htmlspecialchars($str, ENT_QUOTES, 'UTF-8'); } }
if (!function_exists('esc_attr')) { function esc_attr($str) { return htmlspecialchars($str, ENT_QUOTES, 'UTF-8'); } }
?>
<section class="team-section">
  <div class="trusted-partners">
    <div class="trusted-label"><?php echo esc_html($trusted_label); ?></div>
    <div class="logos-carousel">
      <div class="logos-track">
        <?php foreach ($logos as $logo): ?>
          <img src="<?php echo esc_url($logo['src']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>">
        <?php endforeach; ?>
        <?php foreach ($logos as $logo): ?>
          <img src="<?php echo esc_url($logo['src']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>">
        <?php endforeach; ?>
      </div>
    </div>
  </div>
  <div class="team-content">
    <div class="team-stats">
      <?php foreach ($team_stats as $stat): ?>
        <div class="stat"><span><?php echo esc_html($stat['value']); ?></span><br><?php echo esc_html($stat['label']); ?></div>
      <?php endforeach; ?>
    </div>
    <div class="team-image">
      <img src="<?php echo esc_url($team_image); ?>" alt="<?php echo esc_attr($team_image_alt); ?>">
    </div>
    <div class="team-info">
      <h2><?php echo $team_title; ?></h2>
      <p><?php echo esc_html($team_description); ?></p>
      <a href="<?php echo esc_url($team_btn_url); ?>" class="team-btn"><?php echo esc_html($team_btn_text); ?></a>
    </div>
  </div>
</section>
