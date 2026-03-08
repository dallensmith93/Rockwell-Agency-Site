# Contractor Pro WordPress Theme

A lightweight, conversion-focused WordPress theme for home service contractors (HVAC, plumbing, electrical, roofing, cleaning).

## Features

- **Mobile-first design** — Optimized for phones and tablets
- **Lead generation** — Prominent phone CTAs and contact form
- **Fast performance** — Minimal CSS/JS, no heavy frameworks
- **SEO-ready** — Semantic HTML, proper heading hierarchy
- **Accessible** — ARIA labels, keyboard navigation, good contrast
- **Customizable** — Phone number, hero text, and background via Customizer

## Installation

1. Copy the `contractor-theme` folder to `wp-content/themes/`
2. In WordPress Admin, go to **Appearance → Themes**
3. Activate **Contractor Pro**
4. Go to **Appearance → Customize → Contact & CTA** to set:
   - Phone number
   - Hero headline and subheadline
   - Hero background image (optional)

## Front Page Setup

1. Go to **Settings → Reading**
2. Set "Your homepage displays" to **A static page**
3. Select your front page (create one if needed)
4. The front page will automatically show all conversion sections

## Menu Setup

1. Go to **Appearance → Menus**
2. Create a menu and assign it to **Primary Menu**
3. Add links: Home, Services (#services), About (#about), Contact (#contact)

## Contact Form

The contact form submits to WordPress. To send emails:

1. Edit `functions.php` and add `wp_mail()` in `contractor_handle_contact_form()`
2. Or install a form plugin (Contact Form 7, WPForms) and replace the form shortcode in `template-parts/contact-form.php`

## File Structure

```
contractor-theme/
├── style.css
├── functions.php
├── main.css
├── main.js
├── header.php
├── footer.php
├── index.php
├── front-page.php
├── page.php
├── single.php
├── archive.php
├── template-parts/
│   ├── hero.php
│   ├── services.php
│   ├── testimonials.php
│   ├── service-area.php
│   ├── cta.php
│   └── contact-form.php
└── images/
```

## Customization

- **Colors**: Edit CSS variables in `main.css` (`:root`)
- **Services**: Edit the `$services` array in `template-parts/services.php`
- **Testimonials**: Edit the `$testimonials` array in `template-parts/testimonials.php`
- **Cities**: Edit the `$cities` array in `template-parts/service-area.php`
- **FAQ**: Edit the `<details>` blocks in `template-parts/service-area.php`

## Requirements

- WordPress 5.0+
- PHP 7.4+
