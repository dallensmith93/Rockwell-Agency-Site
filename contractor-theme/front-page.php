<?php
/**
 * Front page template
 *
 * @package Contractor_Pro
 */

get_header();
?>

<?php get_template_part( 'template-parts/hero' ); ?>
<?php get_template_part( 'template-parts/services' ); ?>
<?php get_template_part( 'template-parts/testimonials' ); ?>
<?php get_template_part( 'template-parts/service-area' ); ?>
<?php get_template_part( 'template-parts/cta' ); ?>
<?php get_template_part( 'template-parts/contact-form' ); ?>

<?php
get_footer();
