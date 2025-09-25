<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
  <div class="header-container">
    <!-- Top bar with phone number -->
    <div class="header-top">
      <div class="phone-number">
        <span class="phone-icon">📞</span>
        <span>1300 143 153</span>
      </div>
    </div>
    
    <!-- Main header with logo, navigation, and CTA -->
    <div class="header-main">
      <div class="header-content">
        <!-- Logo -->
        <div class="logo-section">
          <a href="<?php echo home_url(); ?>" class="logo">
            <span class="logo-text">allied</span>
            <span class="logo-icon">X</span>
          </a>
          <div class="logo-tagline">HEALTHCARE CENTERS</div>
        </div>
        
        <!-- Mobile Menu Toggle -->
        <button class="mobile-menu-toggle" aria-label="Toggle Menu">
          <span></span>
          <span></span>
          <span></span>
        </button>
        
        <!-- Navigation Menu -->
        <nav class="main-navigation">
          <?php 
          wp_nav_menu([
            'theme_location' => 'primary',
            'menu_class' => 'nav-menu',
            'container' => false,
            'fallback_cb' => 'mytheme_fallback_menu'
          ]); 
          ?>
        </nav>
        
        <!-- Header Actions -->
        <div class="header-actions">
          <button class="search-btn" aria-label="Search">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M21 21L16.514 16.506L21 21ZM19 10.5C19 15.194 15.194 19 10.5 19C5.806 19 2 15.194 2 10.5C2 5.806 5.806 2 10.5 2C15.194 2 19 5.806 19 10.5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </button>
          <a href="#" class="refer-btn">Refer Now</a>
        </div>
      </div>
    </div>
  </div>
</header>
