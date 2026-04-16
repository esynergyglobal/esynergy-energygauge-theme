document.addEventListener('DOMContentLoaded', function() {
  // Banner dismiss persistence
  if (localStorage.getItem('eg-banner-dismissed') === '1') {
    var banner = document.getElementById('transitionBanner');
    if (banner) banner.style.display = 'none';
  }
  document.addEventListener('click', function(e) {
    if (e.target.closest('.banner-dismiss')) {
      localStorage.setItem('eg-banner-dismissed', '1');
    }
  });

  // FAQ accordion - single open
  document.querySelectorAll('.faq-item').forEach(function(item) {
    item.addEventListener('click', function() {
      var wasOpen = this.classList.contains('open');
      // Close all siblings
      this.parentElement.querySelectorAll('.faq-item').forEach(function(sibling) {
        sibling.classList.remove('open');
      });
      // Toggle clicked item
      if (!wasOpen) this.classList.add('open');
    });
  });

  // KB accordion - multiple open allowed
  document.querySelectorAll('.kb-header').forEach(function(header) {
    header.addEventListener('click', function() {
      this.parentElement.classList.toggle('open');
    });
  });

  // Scroll fade-up animation
  var fadeEls = document.querySelectorAll('.animate-fade-up');
  if (fadeEls.length > 0 && 'IntersectionObserver' in window) {
    var observer = new IntersectionObserver(function(entries) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });
    fadeEls.forEach(function(el) { observer.observe(el); });
  }

  // Close mobile nav on outside click
  document.addEventListener('click', function(e) {
    var navLinks = document.querySelector('.nav-links');
    if (navLinks && navLinks.classList.contains('open')) {
      if (!e.target.closest('.nav-links') && !e.target.closest('.nav-toggle')) {
        navLinks.classList.remove('open');
      }
    }
  });
});
