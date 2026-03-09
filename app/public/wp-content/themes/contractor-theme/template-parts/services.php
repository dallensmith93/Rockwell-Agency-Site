<?php
/**
 * Services / solution categories section template part
 *
 * @package Contractor_Pro
 */

$services = array(
	array(
		'slug'  => 'construction',
		'title' => __( 'Construction', 'contractor-pro' ),
	),
	array(
		'slug'  => 'janitorial',
		'title' => __( 'Janitorial', 'contractor-pro' ),
	),
	array(
		'slug'  => 'infrastructure',
		'title' => __( 'Infrastructure', 'contractor-pro' ),
	),
);
?>
<section id="services" class="services" aria-labelledby="services-heading">
	<div class="section-inner">
		<h2 id="services-heading" class="section-title"><?php esc_html_e( 'Our Products', 'contractor-pro' ); ?></h2>
		<p class="section-subtitle"><?php esc_html_e( 'Targeted product solutions for the markets you serve', 'contractor-pro' ); ?></p>
		<div class="services-grid services-grid-categories">
			<?php foreach ( $services as $service ) : ?>
				<article class="service-card service-card-category service-card-<?php echo esc_attr( $service['slug'] ); ?>">
					<h3 class="service-title"><?php echo esc_html( $service['title'] ); ?></h3>
					<a href="#products" class="service-link"><?php esc_html_e( 'View Product', 'contractor-pro' ); ?></a>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>
