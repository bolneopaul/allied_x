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
  echo '<li><a href="#">Services <span class="dropdown-arrow">▼</span></a></li>';
  echo '<li><a href="#">Locations</a></li>';
  echo '<li><a href="#">Programs <span class="dropdown-arrow">▼</span></a></li>';
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
