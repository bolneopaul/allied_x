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
        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12.9937 11.2992C12.471 10.7831 11.8184 10.7831 11.299 11.2992C10.9028 11.692 10.5066 12.0849 10.117 12.4844C10.0105 12.5943 9.92059 12.6176 9.79074 12.5444C9.53438 12.4045 9.26136 12.2913 9.01498 12.1382C7.86632 11.4157 6.90411 10.4868 6.05177 9.44133C5.62893 8.92194 5.25271 8.36592 4.98968 7.73998C4.93641 7.61346 4.9464 7.53023 5.04961 7.42701C5.44581 7.04413 5.83203 6.65125 6.22157 6.25838C6.76428 5.71235 6.76428 5.07309 6.21825 4.52373C5.90861 4.21077 5.59897 3.90446 5.28933 3.59149C4.9697 3.27186 4.6534 2.9489 4.33045 2.63261C3.80772 2.1232 3.15515 2.1232 2.63576 2.63594C2.23622 3.02881 1.85334 3.43167 1.44714 3.81789C1.07092 4.17414 0.881138 4.6103 0.841185 5.11971C0.777926 5.94874 0.981022 6.73116 1.26735 7.4936C1.85334 9.07176 2.74563 10.4735 3.8277 11.7586C5.28933 13.4966 7.03396 14.8717 9.07491 15.8638C9.99384 16.31 10.9461 16.6529 11.9815 16.7095C12.694 16.7495 13.3133 16.5697 13.8094 16.0137C14.149 15.6341 14.5319 15.2878 14.8915 14.9249C15.4242 14.3856 15.4275 13.733 14.8981 13.2003C14.2655 12.5644 13.6296 11.9318 12.9937 11.2992ZM12.3577 8.64559L13.5863 8.43584C13.3932 7.30715 12.8605 6.28501 12.0514 5.47263C11.1958 4.61696 10.1137 4.07759 8.92176 3.91111L8.74863 5.14634C9.67088 5.27619 10.5099 5.69237 11.1725 6.35493C11.7984 6.98087 12.2079 7.77328 12.3577 8.64559ZM14.2788 3.30516C12.8605 1.88681 11.0659 0.991188 9.0849 0.714844L8.91177 1.95007C10.6231 2.18979 12.1746 2.96555 13.3999 4.18746C14.5618 5.34944 15.3243 6.81772 15.6006 8.43251L16.8292 8.22275C16.5062 6.3516 15.6239 4.65358 14.2788 3.30516Z" fill="white"/>
        </svg>
        <span>1300 143 153</span>
      </div>
    </div>
    
    <!-- Main header with logo, navigation, and CTA -->
    <div class="header-main">
      <div class="header-content">
        <!-- Logo -->
        <div class="logo-section">
          <a href="<?php echo home_url(); ?>" class="logo">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/LOGO.png" alt="logo" width="157" height="50">
          </a>
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
            <svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="0.25" y="0.714844" width="54" height="54" rx="27" fill="#EEDDFF"/>
              <g clip-path="url(#clip0_1246_724)">
              <path d="M37.0607 36.6268L31.897 31.5456C33.2492 30.0765 34.0801 28.1335 34.0801 25.9955C34.0794 21.4219 30.3123 17.7148 25.665 17.7148C21.0176 17.7148 17.2505 21.4219 17.2505 25.9955C17.2505 30.5691 21.0176 34.2762 25.665 34.2762C27.6729 34.2762 29.5146 33.5817 30.9612 32.427L36.1449 37.5282C36.3975 37.777 36.8076 37.777 37.0601 37.5282C37.1202 37.4695 37.168 37.3995 37.2006 37.3221C37.2332 37.2447 37.25 37.1616 37.2501 37.0776C37.2501 36.9936 37.2334 36.9105 37.2009 36.8331C37.1684 36.7557 37.1207 36.6855 37.0607 36.6268ZM25.665 33.0022C21.7328 33.0022 18.5452 29.8652 18.5452 25.9955C18.5452 22.1259 21.7328 18.9889 25.665 18.9889C29.5971 18.9889 32.7847 22.1259 32.7847 25.9955C32.7847 29.8652 29.5971 33.0022 25.665 33.0022Z" fill="#250543"/>
              </g>
              <defs>
              <clipPath id="clip0_1246_724">
              <rect width="20" height="20" fill="white" transform="translate(17.25 17.7148)"/>
              </clipPath>
              </defs>
            </svg>

          </button>
          <a href="#" class="refer-btn">Refer Now</a>
        </div>
      </div>
    </div>
  </div>
</header>
