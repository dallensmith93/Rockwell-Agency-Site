<?php
/**
 * Contact form section template part
 *
 * @package Contractor_Pro
 */
?>
<section id="contact" class="contact-form-section" aria-labelledby="contact-heading">
	<div class="section-inner">
		<h2 id="contact-heading" class="section-title"><?php esc_html_e( 'Get a Free Estimate', 'contractor-pro' ); ?></h2>
		<p class="section-subtitle"><?php esc_html_e( 'Fill out the form below and we\'ll get back to you shortly.', 'contractor-pro' ); ?></p>
		<form class="contact-form" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="post">
			<input type="hidden" name="action" value="contractor_contact_form">
			<?php wp_nonce_field( 'contractor_contact', 'contractor_nonce' ); ?>
			<div class="form-row">
				<label for="contact-name"><?php esc_html_e( 'Name', 'contractor-pro' ); ?> <span class="required">*</span></label>
				<input type="text" id="contact-name" name="contact_name" required autocomplete="name">
			</div>
			<div class="form-row">
				<label for="contact-phone"><?php esc_html_e( 'Phone', 'contractor-pro' ); ?> <span class="required">*</span></label>
				<input type="tel" id="contact-phone" name="contact_phone" required autocomplete="tel">
			</div>
			<div class="form-row">
				<label for="contact-email"><?php esc_html_e( 'Email', 'contractor-pro' ); ?> <span class="required">*</span></label>
				<input type="email" id="contact-email" name="contact_email" required autocomplete="email">
			</div>
			<div class="form-row">
				<label for="contact-service"><?php esc_html_e( 'Service Needed', 'contractor-pro' ); ?></label>
				<select id="contact-service" name="contact_service">
					<option value=""><?php esc_html_e( 'Select a service', 'contractor-pro' ); ?></option>
					<option value="ac-repair"><?php esc_html_e( 'AC Repair', 'contractor-pro' ); ?></option>
					<option value="hvac-installation"><?php esc_html_e( 'HVAC Installation', 'contractor-pro' ); ?></option>
					<option value="furnace-repair"><?php esc_html_e( 'Furnace Repair', 'contractor-pro' ); ?></option>
					<option value="maintenance"><?php esc_html_e( 'Maintenance', 'contractor-pro' ); ?></option>
					<option value="emergency"><?php esc_html_e( 'Emergency Service', 'contractor-pro' ); ?></option>
					<option value="other"><?php esc_html_e( 'Other', 'contractor-pro' ); ?></option>
				</select>
			</div>
			<div class="form-row">
				<label for="contact-message"><?php esc_html_e( 'Message', 'contractor-pro' ); ?></label>
				<textarea id="contact-message" name="contact_message" rows="4"></textarea>
			</div>
			<button type="submit" class="btn btn-primary btn-submit"><?php esc_html_e( 'Submit', 'contractor-pro' ); ?></button>
		</form>
	</div>
</section>
