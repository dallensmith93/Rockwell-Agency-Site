<?php
/**
 * Contractor Pro Theme Functions
 *
 * @package Contractor_Pro
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'CONTRACTOR_THEME_VERSION', '1.0.0' );
define( 'CONTRACTOR_THEME_DIR', get_template_directory() );
define( 'CONTRACTOR_THEME_URI', get_template_directory_uri() );

/**
 * Theme setup
 */
function contractor_theme_setup() {
	load_theme_textdomain( 'contractor-pro', CONTRACTOR_THEME_DIR . '/languages' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'custom-logo', array(
		'height'      => 80,
		'width'       => 250,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
	) );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'wp-block-styles' );

	register_nav_menus( array(
		'primary'   => __( 'Primary Menu', 'contractor-pro' ),
		'footer'    => __( 'Footer Menu', 'contractor-pro' ),
	) );
}
add_action( 'after_setup_theme', 'contractor_theme_setup' );

/**
 * Enqueue scripts and styles
 */
function contractor_enqueue_assets() {
	wp_enqueue_style(
		'contractor-main',
		CONTRACTOR_THEME_URI . '/main.css',
		array(),
		CONTRACTOR_THEME_VERSION
	);

	wp_enqueue_script(
		'contractor-main',
		CONTRACTOR_THEME_URI . '/main.js',
		array(),
		CONTRACTOR_THEME_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'contractor_enqueue_assets' );

/**
 * Add lazy loading to content images
 */
function contractor_add_lazy_loading( $content ) {
	if ( is_admin() || is_feed() ) {
		return $content;
	}
	return preg_replace_callback( '/<img([^>]+)>/', function( $matches ) {
		$img = $matches[1];
		if ( strpos( $img, 'loading=' ) === false ) {
			$img .= ' loading="lazy"';
		}
		return '<img' . $img . '>';
	}, $content );
}
add_filter( 'the_content', 'contractor_add_lazy_loading' );

/**
 * Customizer settings for phone number and CTA
 */
function contractor_customize_register( $wp_customize ) {
	$wp_customize->add_section( 'contractor_contact', array(
		'title'    => __( 'Contact & CTA', 'contractor-pro' ),
		'priority' => 30,
	) );

	$wp_customize->add_setting( 'contractor_phone', array(
		'default'           => '(801) 555-1234',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'contractor_phone', array(
		'label'   => __( 'Phone Number', 'contractor-pro' ),
		'section' => 'contractor_contact',
		'type'    => 'text',
	) );

	$wp_customize->add_setting( 'contractor_hero_headline', array(
		'default'           => 'Expert HVAC Service You Can Trust',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'contractor_hero_headline', array(
		'label'   => __( 'Hero Headline', 'contractor-pro' ),
		'section' => 'contractor_contact',
		'type'    => 'text',
	) );

	$wp_customize->add_setting( 'contractor_hero_subheadline', array(
		'default'           => '24/7 Emergency Service • Licensed & Insured • Same-Day Appointments',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'contractor_hero_subheadline', array(
		'label'   => __( 'Hero Subheadline', 'contractor-pro' ),
		'section' => 'contractor_contact',
		'type'    => 'textarea',
	) );

	$wp_customize->add_setting( 'contractor_hero_image', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'contractor_hero_image', array(
		'label'   => __( 'Hero Background Image', 'contractor-pro' ),
		'section' => 'contractor_contact',
	) ) );
}
add_action( 'customize_register', 'contractor_customize_register' );

/**
 * Helper: Get phone number (clickable)
 */
function contractor_get_phone() {
	$phone = get_theme_mod( 'contractor_phone', '(801) 555-1234' );
	$tel   = preg_replace( '/[^0-9+]/', '', $phone );
	return array( 'display' => $phone, 'tel' => $tel );
}

/**
 * Helper: Get SVG icon for services
 */
function contractor_get_service_icon( $icon ) {
	$icons = array(
		'ac'         => '<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83M19.07 19.07l-2.83-2.83M7.76 7.76L4.93 4.93"/><circle cx="12" cy="12" r="4"/></svg>',
		'install'    => '<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M12 8v8M8 12h8"/></svg>',
		'furnace'    => '<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83"/><circle cx="12" cy="12" r="4"/><path d="M12 8v8M8 12h8"/></svg>',
		'maintenance'=> '<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>',
		'emergency'  => '<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>',
	);
	return isset( $icons[ $icon ] ) ? $icons[ $icon ] : $icons['ac'];
}

/**
 * Contact form handler (basic - extend with email sending)
 */
function contractor_handle_contact_form() {
	if ( ! isset( $_POST['contractor_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['contractor_nonce'] ) ), 'contractor_contact' ) ) {
		wp_safe_redirect( add_query_arg( 'contact', 'error', wp_get_referer() ) );
		exit;
	}
	// TODO: Add email sending (wp_mail) or integrate with form plugin
	wp_safe_redirect( add_query_arg( 'contact', 'sent', wp_get_referer() ) );
	exit;
}
add_action( 'admin_post_contractor_contact_form', 'contractor_handle_contact_form' );
add_action( 'admin_post_nopriv_contractor_contact_form', 'contractor_handle_contact_form' );
