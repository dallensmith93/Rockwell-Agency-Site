<?php
/**
 * Testimonials section template part
 *
 * @package Contractor_Pro
 */

$testimonials = array(
	array(
		'name'   => 'Sarah M.',
		'review' => __( 'Outstanding service! They came same-day when our AC died in July. Professional, honest pricing, and fixed it quickly. Highly recommend!', 'contractor-pro' ),
		'stars'  => 5,
	),
	array(
		'name'   => 'James T.',
		'review' => __( 'Had our furnace installed last winter. The crew was on time, clean, and did excellent work. Our house has never been more comfortable.', 'contractor-pro' ),
		'stars'  => 5,
	),
	array(
		'name'   => 'Linda K.',
		'review' => __( 'We use their maintenance plan and it\'s been worth every penny. They catch small issues before they become big problems. Great company!', 'contractor-pro' ),
		'stars'  => 5,
	),
);
?>
<section id="about" class="testimonials" aria-labelledby="testimonials-heading">
	<div class="section-inner">
		<h2 id="testimonials-heading" class="section-title"><?php esc_html_e( 'Why Choose Us', 'contractor-pro' ); ?></h2>
		<div class="why-choose">
			<ul class="why-list">
				<li><?php esc_html_e( 'Upfront pricing — no hidden fees', 'contractor-pro' ); ?></li>
				<li><?php esc_html_e( 'Certified technicians', 'contractor-pro' ); ?></li>
				<li><?php esc_html_e( 'Fast response times', 'contractor-pro' ); ?></li>
				<li><?php esc_html_e( 'Clean, professional service', 'contractor-pro' ); ?></li>
			</ul>
		</div>
		<h3 class="section-subtitle"><?php esc_html_e( 'What Our Customers Say', 'contractor-pro' ); ?></h3>
		<div class="testimonials-grid">
			<?php foreach ( $testimonials as $t ) : ?>
				<blockquote class="testimonial-card">
					<div class="testimonial-stars" aria-label="<?php echo esc_attr( sprintf( __( '%d out of 5 stars', 'contractor-pro' ), $t['stars'] ) ); ?>">
						<?php for ( $i = 0; $i < $t['stars']; $i++ ) : ?>
							<span aria-hidden="true">★</span>
						<?php endfor; ?>
					</div>
					<p class="testimonial-text">"<?php echo esc_html( $t['review'] ); ?>"</p>
					<cite class="testimonial-author">— <?php echo esc_html( $t['name'] ); ?></cite>
				</blockquote>
			<?php endforeach; ?>
		</div>
	</div>
</section>
