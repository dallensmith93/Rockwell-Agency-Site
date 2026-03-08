<?php
/**
 * Service area section template part
 *
 * @package Contractor_Pro
 */

$cities = array(
	__( 'Ogden', 'contractor-pro' ),
	__( 'Roy', 'contractor-pro' ),
	__( 'Layton', 'contractor-pro' ),
	__( 'Clearfield', 'contractor-pro' ),
	__( 'Syracuse', 'contractor-pro' ),
	__( 'Kaysville', 'contractor-pro' ),
	__( 'Farmington', 'contractor-pro' ),
);
?>
<section id="service-area" class="service-area" aria-labelledby="area-heading">
	<div class="section-inner">
		<h2 id="area-heading" class="section-title"><?php esc_html_e( 'Areas We Serve', 'contractor-pro' ); ?></h2>
		<p class="section-subtitle"><?php esc_html_e( 'Proudly serving the greater Ogden area', 'contractor-pro' ); ?></p>
		<div class="area-content">
			<div class="area-cities">
				<ul class="cities-list">
					<?php foreach ( $cities as $city ) : ?>
						<li><?php echo esc_html( $city ); ?></li>
					<?php endforeach; ?>
				</ul>
			</div>
			<div class="area-map" aria-label="<?php esc_attr_e( 'Service area map placeholder', 'contractor-pro' ); ?>">
				<div class="map-placeholder">
					<p><?php esc_html_e( 'Map placeholder — Add Google Maps embed or image', 'contractor-pro' ); ?></p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="faq" aria-labelledby="faq-heading">
	<div class="section-inner">
		<h2 id="faq-heading" class="section-title"><?php esc_html_e( 'Frequently Asked Questions', 'contractor-pro' ); ?></h2>
		<div class="faq-list">
			<details class="faq-item">
				<summary><?php esc_html_e( 'Do you offer emergency service?', 'contractor-pro' ); ?></summary>
				<p><?php esc_html_e( 'Yes! We offer 24/7 emergency HVAC service. Call us anytime for urgent heating or cooling issues.', 'contractor-pro' ); ?></p>
			</details>
			<details class="faq-item">
				<summary><?php esc_html_e( 'How quickly can you arrive?', 'contractor-pro' ); ?></summary>
				<p><?php esc_html_e( 'We typically arrive within 1-2 hours for emergency calls. Same-day appointments are available for non-emergency service.', 'contractor-pro' ); ?></p>
			</details>
			<details class="faq-item">
				<summary><?php esc_html_e( 'Do you service all HVAC brands?', 'contractor-pro' ); ?></summary>
				<p><?php esc_html_e( 'Yes, we service all major brands including Carrier, Trane, Lennox, Rheem, and more.', 'contractor-pro' ); ?></p>
			</details>
		</div>
	</div>
</section>
