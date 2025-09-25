// Theme initialization
document.addEventListener('DOMContentLoaded', function() {
  console.log("Allied Healthcare Theme loaded successfully.");
  
  // Header functionality
  initializeHeader();
});

function initializeHeader() {
  // Search button functionality
  const searchBtn = document.querySelector('.search-btn');
  if (searchBtn) {
    searchBtn.addEventListener('click', function(e) {
      e.preventDefault();
      // Add search modal or dropdown functionality here
      console.log('Search button clicked');
      // For now, you could redirect to a search page or open a search modal
    });
  }
  
  // Mobile menu toggle
  const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
  if (mobileMenuToggle) {
    mobileMenuToggle.addEventListener('click', function() {
      const mainNavigation = document.querySelector('.main-navigation');
      if (mainNavigation) {
        mainNavigation.classList.toggle('mobile-open');
        this.classList.toggle('active');
      }
    });
  }
  
  // Add smooth scrolling for anchor links
  const anchorLinks = document.querySelectorAll('a[href^="#"]');
  anchorLinks.forEach(link => {
    link.addEventListener('click', function(e) {
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        e.preventDefault();
        target.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }
    });
  });
}
