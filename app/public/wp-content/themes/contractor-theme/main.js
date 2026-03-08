/**
 * Contractor Pro - Main JavaScript
 * Minimal, lightweight interactions
 */

(function() {
	'use strict';

	// Mobile nav toggle
	const navToggle = document.querySelector('.nav-toggle');
	const primaryNav = document.querySelector('.primary-nav');

	if (navToggle && primaryNav) {
		navToggle.addEventListener('click', function() {
			const expanded = navToggle.getAttribute('aria-expanded') === 'true';
			navToggle.setAttribute('aria-expanded', !expanded);
			primaryNav.classList.toggle('is-open', !expanded);
		});

		// Close nav when clicking a link (mobile)
		primaryNav.querySelectorAll('a').forEach(function(link) {
			link.addEventListener('click', function() {
				navToggle.setAttribute('aria-expanded', 'false');
				primaryNav.classList.remove('is-open');
			});
		});
	}

	// Smooth scroll for anchor links
	document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
		anchor.addEventListener('click', function(e) {
			const targetId = this.getAttribute('href');
			if (targetId === '#') return;
			const target = document.querySelector(targetId);
			if (target) {
				e.preventDefault();
				target.scrollIntoView({ behavior: 'smooth', block: 'start' });
			}
		});
	});

	// Lazy load images (native loading="lazy" handles most cases; this is fallback)
	if ('loading' in HTMLImageElement.prototype) {
		// Browser supports native lazy loading
	} else {
		// Fallback: Intersection Observer for older browsers
		if ('IntersectionObserver' in window) {
			const lazyImages = document.querySelectorAll('img[data-src]');
			const imageObserver = new IntersectionObserver(function(entries) {
				entries.forEach(function(entry) {
					if (entry.isIntersecting) {
						const img = entry.target;
						img.src = img.dataset.src || img.src;
						img.removeAttribute('data-src');
						imageObserver.unobserve(img);
					}
				});
			});
			lazyImages.forEach(function(img) { imageObserver.observe(img); });
		}
	}

	// Contact form basic validation feedback (enhancement)
	const contactForm = document.querySelector('.contact-form');
	if (contactForm) {
		contactForm.addEventListener('submit', function() {
			const submitBtn = contactForm.querySelector('.btn-submit');
			if (submitBtn) {
				submitBtn.disabled = true;
				submitBtn.textContent = 'Sending...';
			}
		});
	}

	// Show contact form success/error message from URL params
	const urlParams = new URLSearchParams(window.location.search);
	const contactStatus = urlParams.get('contact');
	const formSection = document.querySelector('.contact-form-section');
	const formEl = document.querySelector('.contact-form');
	if (contactStatus && formSection && formEl) {
		const msg = document.createElement('p');
		msg.className = contactStatus === 'sent' ? 'form-message form-success' : 'form-message form-error';
		msg.textContent = contactStatus === 'sent' ? 'Thank you! We\'ll be in touch soon.' : 'Something went wrong. Please try again or call us.';
		formSection.querySelector('.section-inner').insertBefore(msg, formEl);
	}
})();
