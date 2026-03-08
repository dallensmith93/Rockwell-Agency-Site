<?php
/**
 * Call to action section template part
 *
 * @package Contractor_Pro
 */

$phone = contractor_get_phone();
?>
<section class="cta" aria-labelledby="cta-heading">
	<div class="section-inner">
		<h2 id="cta-heading" class="cta-headline"><?php esc_html_e( 'Need HVAC Service Today?', 'contractor-pro' ); ?></h2>
		<p class="cta-subheadline"><?php esc_html_e( 'Get fast, reliable service from your local experts. Call now or request a free estimate.', 'contractor-pro' ); ?></p>
		<div class="cta-buttons">
			<a href="tel:<?php echo esc_attr( $phone['tel'] ); ?>" class="btn btn-primary btn-large"><?php esc_html_e( 'Call Now', 'contractor-pro' ); ?></a>
			<a href="#contact" class="btn btn-secondary btn-large"><?php esc_html_e( 'Request Estimate', 'contractor-pro' ); ?></a>
		</div>
		<p class="cta-phone">
			<a href="tel:<?php echo esc_attr( $phone['tel'] ); ?>"><?php echo esc_html( $phone['display'] ); ?></a>
		</p>
	</div>
</section>
