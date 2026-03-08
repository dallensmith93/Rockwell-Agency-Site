<?php
/**
 * Header template
 *
 * @package Contractor_Pro
 */

$phone = contractor_get_phone();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header" role="banner">
	<div class="header-inner">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo" rel="home">
			<?php if ( has_custom_logo() ) : ?>
				<?php the_custom_logo(); ?>
			<?php else : ?>
				<span class="site-name"><?php bloginfo( 'name' ); ?></span>
			<?php endif; ?>
		</a>

		<button class="nav-toggle" aria-label="<?php esc_attr_e( 'Toggle menu', 'contractor-pro' ); ?>" aria-expanded="false" aria-controls="primary-nav">
			<span class="nav-toggle-bar"></span>
			<span class="nav-toggle-bar"></span>
			<span class="nav-toggle-bar"></span>
		</button>

		<nav id="primary-nav" class="primary-nav" aria-label="<?php esc_attr_e( 'Primary navigation', 'contractor-pro' ); ?>">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'primary',
				'menu_class'     => 'nav-menu',
				'container'      => false,
				'fallback_cb'    => function() {
					echo '<ul class="nav-menu">';
					echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'Home', 'contractor-pro' ) . '</a></li>';
					echo '<li><a href="' . esc_url( home_url( '/#services' ) ) . '">' . esc_html__( 'Services', 'contractor-pro' ) . '</a></li>';
					echo '<li><a href="' . esc_url( home_url( '/#about' ) ) . '">' . esc_html__( 'About', 'contractor-pro' ) . '</a></li>';
					echo '<li><a href="' . esc_url( home_url( '/#contact' ) ) . '">' . esc_html__( 'Contact', 'contractor-pro' ) . '</a></li>';
					echo '</ul>';
				},
			) );
			?>
			<a href="tel:<?php echo esc_attr( $phone['tel'] ); ?>" class="header-cta"><?php esc_html_e( 'Call Now', 'contractor-pro' ); ?></a>
		</nav>
	</div>
</header>

<main id="main" class="site-main" role="main">
