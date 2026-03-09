<?php
/**
 * Hero section template part
 *
 * @package Contractor_Pro
 */

$phone       = contractor_get_phone();
$headline    = get_theme_mod( 'contractor_hero_headline', 'Rockwell Agency' );
$subheadline = get_theme_mod( 'contractor_hero_subheadline', 'Results-Driven Sales Partner for Manufacturers and Distributors' );
$hero_image  = get_theme_mod(
	'contractor_hero_image',
	trailingslashit( CONTRACTOR_THEME_URI ) . 'images/constructionheroimage.webp'
);
?>
<section class="hero" aria-labelledby="hero-heading">
	<?php if ( $hero_image ) : ?>
		<div class="hero-bg" role="img" aria-label="<?php esc_attr_e( 'Construction professionals on jobsite', 'contractor-pro' ); ?>" style="background-image: url('<?php echo esc_url( $hero_image ); ?>');"></div>
	<?php else : ?>
		<div class="hero-bg hero-bg-default"></div>
	<?php endif; ?>
	<div class="hero-overlay"></div>
	<div class="hero-content">
		<h1 id="hero-heading" class="hero-headline"><?php echo esc_html( $headline ); ?></h1>
		<p class="hero-subheadline"><?php echo esc_html( $subheadline ); ?></p>
		<div class="hero-trust">
			<span>✓ National distribution reach</span>
			<span>✓ Strategic product positioning</span>
			<span>✓ Dedicated sales support</span>
		</div>
		<div class="hero-cta">
			<a href="#products" class="btn btn-primary"><?php esc_html_e( 'View Products', 'contractor-pro' ); ?></a>
			<a href="#partner" class="btn btn-secondary"><?php esc_html_e( 'Partner With Us', 'contractor-pro' ); ?></a>
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
