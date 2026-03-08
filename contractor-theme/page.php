<?php
/**
 * Page template
 *
 * @package Contractor_Pro
 */

get_header();
?>

<div class="content-area">
	<div class="content-inner">
		<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
			</article>
		<?php endwhile; ?>
	</div>
</div>

<?php get_footer(); ?>
