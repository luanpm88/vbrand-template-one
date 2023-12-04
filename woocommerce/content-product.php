<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>



<div class="col-12 col-md-4 col-lg-3 mb-5">  

	<a class="product-item" href="<?=esc_url(get_permalink())?>">
		<?=the_post_thumbnail('single-post-thumbnail', ['class' => 'img-fluid product-thumbnail'] );?> 
		<h3 class="product-title"><?=the_title()?></h3> 
		<strong class="product-price">
			<?php if($product_sale_price):?>
				<?=number_format($product_sale_price, 0, ',', '.')?><sup>đ</sup>
			<?php else: ?>
				<?=number_format($product_regular_price, 0, ',', '.')?>
			<?php endif ?>
		</strong>	

		<span class="icon-cross">
			<img src="<?=get_template_directory_uri()?>/images/cross.svg" class="img-fluid">
		</span>
	</a>
	</div>
		

