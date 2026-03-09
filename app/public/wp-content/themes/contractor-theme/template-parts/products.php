<?php
/**
 * Products grid section template part
 *
 * @package Contractor_Pro
 */

$products = array(
	array(
		'title' => __( 'Product One', 'contractor-pro' ),
		'image' => '92944psku.jpg',
	),
	array(
		'title' => __( 'Product Two', 'contractor-pro' ),
		'image' => 'PIP-120-4150-2.jpg',
	),
	array(
		'title' => __( 'Product Three', 'contractor-pro' ),
		'image' => 'construction-work-gloves-product-image-1.avif',
	),
	array(
		'title' => __( 'Product Four', 'contractor-pro' ),
		'image' => 'us_WSDDZJZH5JT28MMJVV1_goods_img-v1_cordless-tool-combo-kit-m100-1.2.jpg',
	),
	array(
		'title' => __( 'Product Five', 'contractor-pro' ),
		'image' => 'wl12000he-winco-portable-generator-big-dog-on-sale-24012-009_2.jpg',
	),
	array(
		'title' => __( 'Product Six', 'contractor-pro' ),
		'image' => 'nlnlodqtho13z5pvkwhx.jfif',
	),
	array(
		'title' => __( 'Product Seven', 'contractor-pro' ),
		'image' => 'darkskyconstruction.jfif',
	),
	array(
		'title' => __( 'Product Eight', 'contractor-pro' ),
		'image' => 'growthsectionimage.avif',
	),
);
?>
<section id="products" class="products-section" aria-labelledby="products-heading">
	<div class="section-inner">
		<h2 id="products-heading" class="section-title"><?php esc_html_e( 'Our Products', 'contractor-pro' ); ?></h2>
		<div class="products-grid">
			<?php foreach ( $products as $product ) : ?>
				<article class="product-card">
					<div class="product-image">
						<img src="<?php echo esc_url( trailingslashit( CONTRACTOR_THEME_URI ) . 'images/' . $product['image'] ); ?>" alt="<?php echo esc_attr( $product['title'] ); ?>">
					</div>
					<div class="product-content">
						<h3 class="product-title"><?php echo esc_html( $product['title'] ); ?></h3>
						<a href="#contact" class="product-link"><?php esc_html_e( 'View Product', 'contractor-pro' ); ?></a>
					</div>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

