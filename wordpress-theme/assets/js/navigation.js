/**
 * YesMoreBet Navigation Script
 */

(function() {
  'use strict';

  // Mobile menu toggle
  const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
  const mobileNavMenu = document.querySelector('.mobile-nav-menu');

  if (mobileMenuToggle && mobileNavMenu) {
    mobileMenuToggle.addEventListener('click', function() {
      const isExpanded = this.getAttribute('aria-expanded') === 'true';

      // Toggle aria-expanded attribute
      this.setAttribute('aria-expanded', !isExpanded);

      // Toggle menu visibility
      if (mobileNavMenu.style.display === 'none' || !mobileNavMenu.style.display) {
        mobileNavMenu.style.display = 'flex';
      } else {
        mobileNavMenu.style.display = 'none';
      }

      // Animate menu icon
      const menuIcon = this.querySelector('.menu-icon');
      if (menuIcon) {
        menuIcon.classList.toggle('open');
      }
    });
  }

  // Close mobile menu when clicking on a link
  if (mobileNavMenu) {
    const mobileLinks = mobileNavMenu.querySelectorAll('a');
    mobileLinks.forEach(function(link) {
      link.addEventListener('click', function() {
        mobileNavMenu.style.display = 'none';
        if (mobileMenuToggle) {
          mobileMenuToggle.setAttribute('aria-expanded', 'false');
        }
      });
    });
  }

  // Highlight active nav link based on current page
  const currentPath = window.location.pathname;
  const navLinks = document.querySelectorAll('.nav-link, .mobile-nav-link');

  navLinks.forEach(function(link) {
    const linkPath = new URL(link.href).pathname;

    if (linkPath === currentPath ||
        (currentPath === '/' && link.textContent.includes('Accueil'))) {
      link.style.background = 'linear-gradient(to right, #FDC700, #D08700)';
      link.style.webkitBackgroundClip = 'text';
      link.style.webkitTextFillColor = 'transparent';
      link.style.backgroundClip = 'text';
      link.style.fontWeight = '600';
    }
  });

  // Add scroll effect to header
  let lastScroll = 0;
  const header = document.querySelector('.site-header');

  if (header) {
    window.addEventListener('scroll', function() {
      const currentScroll = window.pageYOffset;

      if (currentScroll > lastScroll && currentScroll > 100) {
        // Scrolling down
        header.style.transform = 'translateY(-100%)';
      } else {
        // Scrolling up
        header.style.transform = 'translateY(0)';
      }

      // Add background when scrolled
      if (currentScroll > 50) {
        header.style.backgroundColor = 'rgba(0, 0, 0, 0.95)';
      } else {
        header.style.backgroundColor = 'rgba(0, 0, 0, 0.08)';
      }

      lastScroll = currentScroll;
    });

    // Add transition to header
    header.style.transition = 'transform 0.3s ease, background-color 0.3s ease';
  }

})();
