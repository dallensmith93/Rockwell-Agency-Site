<?php
/**
 * Archive template
 *
 * @package Contractor_Pro
 */

get_header();
?>

<div class="content-area">
	<div class="content-inner">
		<header class="archive-header">
			<?php the_archive_title( '<h1 class="archive-title">', '</h1>' ); ?>
			<?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>
		</header>

		<?php if ( have_posts() ) : ?>
			<div class="archive-posts">
				<?php while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'archive-item' ); ?>>
						<?php if ( has_post_thumbnail() ) : ?>
							<a href="<?php the_permalink(); ?>" class="archive-thumbnail">
								<?php the_post_thumbnail( 'medium', array( 'loading' => 'lazy', 'alt' => get_the_title() ) ); ?>
							</a>
						<?php endif; ?>
						<div class="archive-item-content">
							<?php the_title( '<h2 class="archive-item-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' ); ?>
							<div class="archive-excerpt"><?php the_excerpt(); ?></div>
							<a href="<?php the_permalink(); ?>" class="archive-link"><?php esc_html_e( 'Read More', 'contractor-pro' ); ?></a>
						</div>
					</article>
				<?php endwhile; ?>
			</div>
			<?php the_posts_navigation(); ?>
		<?php else : ?>
			<p><?php esc_html_e( 'No posts found.', 'contractor-pro' ); ?></p>
		<?php endif; ?>
	</div>
</div>

<?php get_footer(); ?>
