<?php
/**
 * Footer template
 *
 * @package Contractor_Pro
 */

$phone = contractor_get_phone();
?>
</main><!-- #main -->

<footer class="site-footer" role="contentinfo">
	<div class="footer-inner">
		<div class="footer-grid">
			<div class="footer-brand">
				<?php if ( has_custom_logo() ) : ?>
					<?php the_custom_logo(); ?>
				<?php else : ?>
					<span class="footer-site-name"><?php bloginfo( 'name' ); ?></span>
				<?php endif; ?>
				<p class="footer-tagline"><?php bloginfo( 'description' ); ?></p>
			</div>

			<div class="footer-nav">
				<h3 class="footer-heading"><?php esc_html_e( 'Quick Links', 'contractor-pro' ); ?></h3>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'footer',
					'menu_class'     => 'footer-menu',
					'container'      => false,
					'fallback_cb'    => function() {
						echo '<ul class="footer-menu">';
						echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'Home', 'contractor-pro' ) . '</a></li>';
						echo '<li><a href="' . esc_url( home_url( '/#services' ) ) . '">' . esc_html__( 'Services', 'contractor-pro' ) . '</a></li>';
						echo '<li><a href="' . esc_url( home_url( '/#contact' ) ) . '">' . esc_html__( 'Contact', 'contractor-pro' ) . '</a></li>';
						echo '</ul>';
					},
				) );
				?>
			</div>

			<div class="footer-areas">
				<h3 class="footer-heading"><?php esc_html_e( 'Service Areas', 'contractor-pro' ); ?></h3>
				<p class="footer-cities">Ogden • Roy • Layton • Clearfield • Syracuse • Kaysville • Farmington</p>
			</div>

			<div class="footer-contact">
				<h3 class="footer-heading"><?php esc_html_e( 'Contact', 'contractor-pro' ); ?></h3>
				<a href="tel:<?php echo esc_attr( $phone['tel'] ); ?>" class="footer-phone"><?php echo esc_html( $phone['display'] ); ?></a>
			</div>
		</div>

		<div class="footer-bottom">
			<p class="copyright">&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All rights reserved.', 'contractor-pro' ); ?></p>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
