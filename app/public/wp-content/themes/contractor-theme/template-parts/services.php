<?php
/**
 * Services section template part
 *
 * @package Contractor_Pro
 */

$services = array(
	array(
		'icon'  => 'ac',
		'title' => __( 'AC Repair', 'contractor-pro' ),
		'desc'  => __( 'Fast, reliable air conditioning repair for all makes and models.', 'contractor-pro' ),
	),
	array(
		'icon'  => 'install',
		'title' => __( 'HVAC Installation', 'contractor-pro' ),
		'desc'  => __( 'Professional installation of new heating and cooling systems.', 'contractor-pro' ),
	),
	array(
		'icon'  => 'furnace',
		'title' => __( 'Furnace Repair', 'contractor-pro' ),
		'desc'  => __( 'Expert furnace diagnostics and repair to keep you warm.', 'contractor-pro' ),
	),
	array(
		'icon'  => 'maintenance',
		'title' => __( 'Maintenance Plans', 'contractor-pro' ),
		'desc'  => __( 'Annual tune-ups to extend the life of your HVAC system.', 'contractor-pro' ),
	),
	array(
		'icon'  => 'emergency',
		'title' => __( 'Emergency Service', 'contractor-pro' ),
		'desc'  => __( '24/7 emergency HVAC service when you need it most.', 'contractor-pro' ),
	),
);
?>
<section id="services" class="services" aria-labelledby="services-heading">
	<div class="section-inner">
		<h2 id="services-heading" class="section-title"><?php esc_html_e( 'Our Services', 'contractor-pro' ); ?></h2>
		<p class="section-subtitle"><?php esc_html_e( 'Professional HVAC solutions for your home or business', 'contractor-pro' ); ?></p>
		<div class="services-grid">
			<?php foreach ( $services as $service ) : ?>
				<article class="service-card">
					<div class="service-icon" aria-hidden="true">
						<?php echo contractor_get_service_icon( $service['icon'] ); ?>
					</div>
					<h3 class="service-title"><?php echo esc_html( $service['title'] ); ?></h3>
					<p class="service-desc"><?php echo esc_html( $service['desc'] ); ?></p>
					<a href="#contact" class="service-link"><?php esc_html_e( 'Learn More', 'contractor-pro' ); ?></a>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>
