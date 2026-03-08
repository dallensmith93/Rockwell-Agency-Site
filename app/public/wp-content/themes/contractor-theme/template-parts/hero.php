<?php
/**
 * Hero section template part
 *
 * @package Contractor_Pro
 */

$phone      = contractor_get_phone();
$headline   = get_theme_mod( 'contractor_hero_headline', 'Expert HVAC Service You Can Trust' );
$subheadline = get_theme_mod( 'contractor_hero_subheadline', '24/7 Emergency Service • Licensed & Insured • Same-Day Appointments' );
$hero_image = get_theme_mod( 'contractor_hero_image', '' );
?>
<section class="hero" aria-labelledby="hero-heading">
	<?php if ( $hero_image ) : ?>
		<div class="hero-bg" role="img" aria-label="<?php esc_attr_e( 'Background', 'contractor-pro' ); ?>" style="background-image: url('<?php echo esc_url( $hero_image ); ?>');"></div>
	<?php else : ?>
		<div class="hero-bg hero-bg-default"></div>
	<?php endif; ?>
	<div class="hero-overlay"></div>
	<div class="hero-content">
		<h1 id="hero-heading" class="hero-headline"><?php echo esc_html( $headline ); ?></h1>
		<p class="hero-subheadline"><?php echo esc_html( $subheadline ); ?></p>
		<div class="hero-trust">
			<span>✓ Licensed & Insured</span>
			<span>✓ Same-Day Service</span>
			<span>✓ 5-Star Reviews</span>
		</div>
		<div class="hero-cta">
			<a href="tel:<?php echo esc_attr( $phone['tel'] ); ?>" class="btn btn-primary"><?php esc_html_e( 'Call Now', 'contractor-pro' ); ?></a>
			<a href="#contact" class="btn btn-secondary"><?php esc_html_e( 'Get Free Estimate', 'contractor-pro' ); ?></a>
		</div>
		<p class="hero-phone">
			<a href="tel:<?php echo esc_attr( $phone['tel'] ); ?>"><?php echo esc_html( $phone['display'] ); ?></a>
		</p>
	</div>
</section>

<section class="trust-bar" aria-label="<?php esc_attr_e( 'Trust indicators', 'contractor-pro' ); ?>">
	<div class="trust-bar-inner">
		<span class="trust-item"><?php esc_html_e( 'Licensed & Insured', 'contractor-pro' ); ?></span>
		<span class="trust-item"><?php esc_html_e( 'Same-Day Service', 'contractor-pro' ); ?></span>
		<span class="trust-item"><?php esc_html_e( 'Locally Owned', 'contractor-pro' ); ?></span>
		<span class="trust-item"><?php esc_html_e( '5-Star Reviews', 'contractor-pro' ); ?></span>
	</div>
</section>
