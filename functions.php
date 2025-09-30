<?php
// Theme setup
function mytheme_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('html5', ['search-form','comment-form','gallery','caption']);
  register_nav_menus(['primary' => 'Primary Menu']);
}
add_action('after_setup_theme', 'mytheme_setup');

// Fallback menu for header
function mytheme_fallback_menu() {
  echo '<ul class="nav-menu">';
  echo '<li><a href="/services">Services <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M3.25 6.21484L7.25 10.2148L11.25 6.21484" stroke="#250543" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
      </a></li>';
  echo '<li><a href="#">Locations</a></li>';
  echo '<li><a href="#">Programs <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M3.25 6.21484L7.25 10.2148L11.25 6.21484" stroke="#250543" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
      </a></li>';
  echo '<li><a href="#">Team</a></li>';
  echo '<li><a href="#">Career</a></li>';
  echo '<li><a href="#">Blogs</a></li>';
  echo '<li><a href="#">Contact Us</a></li>';
  echo '</ul>';
}

// Enqueue CSS/JS
function mytheme_enqueue_assets() {
  wp_enqueue_style('mytheme-main', get_template_directory_uri() . '/assets/css/main.css');
  wp_enqueue_style('mytheme-footer', get_template_directory_uri() . '/assets/css/footer.css');
  wp_enqueue_script('mytheme-main', get_template_directory_uri() . '/assets/js/main.js', [], false, true);

  if (is_front_page()) {
    wp_enqueue_style('mytheme-home', get_template_directory_uri() . '/assets/css/home.css');
  }
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_assets');
