/**
 * Main JavaScript file for Worzen theme
 * 
 * Handles mobile menu toggle, smooth scrolling, and other interactive features
 * 
 * @package Worzen
 * @since 1.0.0
 */

(function() {
    'use strict';

    /**
     * Mobile Menu Toggle
     */
    function initMobileMenu() {
        const menuToggle = document.getElementById('mobile-menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        if (menuToggle && mobileMenu) {
            menuToggle.addEventListener('click', function() {
                const isExpanded = this.getAttribute('aria-expanded') === 'true';
                
                // Toggle menu visibility
                mobileMenu.classList.toggle('hidden');
                
                // Update aria-expanded attribute
                this.setAttribute('aria-expanded', !isExpanded);
                
                // Toggle icon (optional - you can add different icons for open/close)
                const icon = this.querySelector('svg');
                if (icon) {
                    if (mobileMenu.classList.contains('hidden')) {
                        // Menu is closed - show hamburger icon
                        icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>';
                    } else {
                        // Menu is open - show close icon
                        icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>';
                    }
                }
            });

            // Close mobile menu when clicking outside
            document.addEventListener('click', function(event) {
                const isClickInsideMenu = mobileMenu.contains(event.target);
                const isClickOnToggle = menuToggle.contains(event.target);

                if (!isClickInsideMenu && !isClickOnToggle && !mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.add('hidden');
                    menuToggle.setAttribute('aria-expanded', 'false');
                    
                    // Reset icon
                    const icon = menuToggle.querySelector('svg');
                    if (icon) {
                        icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>';
                    }
                }
            });

            // Close mobile menu when window is resized to desktop size
            window.addEventListener('resize', function() {
                if (window.innerWidth >= 768 && !mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.add('hidden');
                    menuToggle.setAttribute('aria-expanded', 'false');
                }
            });
        }
    }

    /**
     * Smooth Scrolling for Anchor Links
     */
    function initSmoothScroll() {
        const links = document.querySelectorAll('a[href^="#"]');
        
        links.forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                
                // Skip if it's just "#"
                if (href === '#') {
                    e.preventDefault();
                    return;
                }
                
                const target = document.querySelector(href);
                
                if (target) {
                    e.preventDefault();
                    
                    // Close mobile menu if open
                    const mobileMenu = document.getElementById('mobile-menu');
                    if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('hidden');
                        const menuToggle = document.getElementById('mobile-menu-toggle');
                        if (menuToggle) {
                            menuToggle.setAttribute('aria-expanded', 'false');
                        }
                    }
                    
                    // Smooth scroll to target
                    const headerOffset = 80; // Height of sticky header
                    const elementPosition = target.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });
    }

    /**
     * Add scroll-based header shadow
     */
    function initHeaderShadow() {
        const header = document.getElementById('masthead');
        
        if (header) {
            window.addEventListener('scroll', function() {
                if (window.scrollY > 10) {
                    header.classList.add('shadow-lg');
                } else {
                    header.classList.remove('shadow-lg');
                    header.classList.add('shadow-sm');
                }
            });
        }
    }

    /**
     * Lazy Load Images (if not using native lazy loading)
     */
    function initLazyLoad() {
        const images = document.querySelectorAll('img[data-src]');
        
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.removeAttribute('data-src');
                    observer.unobserve(img);
                }
            });
        });

        images.forEach(img => imageObserver.observe(img));
    }

    /**
     * Form Validation Enhancement
     */
    function initFormValidation() {
        const forms = document.querySelectorAll('form');
        
        forms.forEach(form => {
            form.addEventListener('submit', function(e) {
                const requiredFields = form.querySelectorAll('[required]');
                let isValid = true;

                requiredFields.forEach(field => {
                    if (!field.value.trim()) {
                        isValid = false;
                        field.classList.add('border-red-500');
                        
                        // Remove error class on input
                        field.addEventListener('input', function() {
                            this.classList.remove('border-red-500');
                        });
                    }
                });

                if (!isValid) {
                    e.preventDefault();
                    
                    // Scroll to first error
                    const firstError = form.querySelector('.border-red-500');
                    if (firstError) {
                        firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
                        firstError.focus();
                    }
                }
            });
        });
    }

    /**
     * Back to Top Button (Optional)
     */
    function initBackToTop() {
        // Create back to top button
        const backToTopBtn = document.createElement('button');
        backToTopBtn.innerHTML = `
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
            </svg>
        `;
        backToTopBtn.className = 'fixed bottom-8 right-8 bg-primary text-white p-4 rounded-full shadow-lg hover:bg-secondary transition duration-300 opacity-0 pointer-events-none z-50';
        backToTopBtn.setAttribute('aria-label', 'Back to top');
        document.body.appendChild(backToTopBtn);

        // Show/hide button based on scroll position
        window.addEventListener('scroll', function() {
            if (window.scrollY > 300) {
                backToTopBtn.classList.remove('opacity-0', 'pointer-events-none');
            } else {
                backToTopBtn.classList.add('opacity-0', 'pointer-events-none');
            }
        });

        // Scroll to top on click
        backToTopBtn.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    /**
     * Initialize all functions when DOM is ready
     */
    function init() {
        initMobileMenu();
        initSmoothScroll();
        initHeaderShadow();
        initFormValidation();
        initBackToTop();
        
        // Only init lazy load if IntersectionObserver is supported
        if ('IntersectionObserver' in window) {
            initLazyLoad();
        }
    }

    // Run init when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

})();

