<?php
/**
 * The template for displaying product price filter widget.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-widget-price-filter.php
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

defined( 'ABSPATH' ) || exit;

?>
<?php do_action( 'woocommerce_widget_price_filter_start', $args ); ?>

<form method="get" action="<?php echo esc_url( $form_action ); ?>" onsubmit="combineCategories()">
	<div class="price_slider_wrapper">
		<div class="price_slider" style="display:none;"></div>
		<div class="price_slider_amount" data-step="<?php echo esc_attr( $step ); ?>">
			<label class="screen-reader-text" for="min_price"><?php esc_html_e( 'Min price', 'woocommerce' ); ?></label>
			<input type="text" id="min_price" name="min_price" value="<?php echo esc_attr( $current_min_price ); ?>" data-min="<?php echo esc_attr( $min_price ); ?>" placeholder="<?php echo esc_attr__( 'Min price', 'woocommerce' ); ?>" />
			<label class="screen-reader-text" for="max_price"><?php esc_html_e( 'Max price', 'woocommerce' ); ?></label>
			<input type="text" id="max_price" name="max_price" value="<?php echo esc_attr( $current_max_price ); ?>" data-max="<?php echo esc_attr( $max_price ); ?>" placeholder="<?php echo esc_attr__( 'Max price', 'woocommerce' ); ?>" />
			<?php /* translators: Filter: verb "to filter" */ ?>
			
			<div class="price_label" style="display:none;">
				<?php echo esc_html__( 'Price:', 'woocommerce' ); ?> <span class="from"></span> &mdash; <span class="to"></span>
			</div>
			<?php echo wc_query_string_form_fields( null, array( 'min_price', 'max_price', 'paged' ), '', true ); ?>
			<div class="clear"></div>
		</div>
	</div>

	<div class="widget_category_filter">
		<h2 class="widgettitle">DANH MỤC SẢN PHẨM</h2>
		<?php
			$product_categories = get_terms(array(
				'taxonomy'   => 'product_cat',
				'hide_empty' => false,
			)); 
			$in_categories = [];

			 if(isset($_GET['productcategories'])){
				$in_categories = explode( ',',  $_GET['productcategories'] );
			}
			// Display a checkbox for each category
			foreach ($product_categories as $category) {
				echo '<input type="checkbox" name="product_categorie[]" value="' . esc_attr($category->slug) . '" id="' . esc_attr($category->slug) . '"';
				// Check if the category is selected
				if ( in_array($category->slug, $in_categories) ) {
					echo ' checked';
				}   
				echo '>';
				echo '<label for="' . esc_attr($category->slug) . '">' . esc_html($category->name) . '</label><br>';
			} 
			echo '<input type="hidden" name="productcategories" value="'. ( isset($_GET['productcategories'])?  $_GET['productcategories'] : '' ).'"  id="productcategories" >'; 
		?>
	</div>


 

	<button type="submit" class="button<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>"><?php echo esc_html__( 'Filter', 'woocommerce' ); ?></button>
	
	<script>
	function combineCategories() { 

		var checkboxes = document.getElementsByName('product_categorie[]');
		var combinedCategories = [];

		checkboxes.forEach(function(checkbox) {
			if (checkbox.checked) {
				combinedCategories.push(checkbox.value);
			}
		});
		document.getElementById('productcategories').value = combinedCategories.join(',');  
		//var catform = document.querySelector('form[name="catfilter"]');
		//catform.submit(); 
	}
	</script>
 
</form>

<?php do_action( 'woocommerce_widget_price_filter_end', $args ); ?>
