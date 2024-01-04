<?php
add_theme_support('woocommerce');
 /**
  * Định nghĩa menu cho themes
  */
function register_my_menu() {
    register_nav_menu('primary-menu', __('Primary Menu'));
}
add_action('after_setup_theme', 'register_my_menu');
 /**
 * design for widget for footer 
 */
function vbrand_widget_filter() {
	register_sidebar(array(
    	'name' => 'filter Widget Area',
    	'id' => 'filter-widget-area',
    	'description' => __( 'filter of product'),
    	'before_widget' => '<div class="widget">',
    	'after_widget' => '</div>',
    	'before_title' => '<h3 class="widget-title">',
    	'after_title' => '</h3>',
	));
}
add_action('widgets_init', 'vbrand_widget_filter');


/*
$demo_data_imported = get_option('demo_data_imported');
if ($demo_data_imported !== '1') {  
    require_once get_template_directory() . '/demo-data/import-demo-data.php'; 
    update_option('demo_data_imported', '1');
}

$vbrand_one_menu_setup = get_option('vbrand_one_menu_setup');

if (!$vbrand_one_menu_setup){
  
    $menu_exists = wp_get_nav_menu_object('Primary vBrand One Menu');  
   // echo "<pre>"; print_r($menu_exists);echo "</pre>";

    $menu_id = ''; 
    if (!$menu_exists) {
        // Nếu menu chưa tồn tại, hãy tạo nó
        $menu_id = wp_create_nav_menu('Primary vBrand One Menu');
    
        // Đăng ký menu với theme
        $locations = get_theme_mod('nav_menu_locations');
        $locations['primary-menu'] = $menu_id;
        set_theme_mod('nav_menu_locations', $locations); 
    }else {
        // Nếu menu đã tồn tại, lấy ID của nó
       
        $menu_id = $menu_exists->term_id;  
        $locations = get_theme_mod('nav_menu_locations');
        $locations['primary-menu'] = $menu_id;
        set_theme_mod('nav_menu_locations', $locations);

       $update = get_theme_mod('nav_menu_locations');  echo "<pre>"; print_r($update); echo "</pre>";
       
    }
    update_option('vbrand_one_menu_setup', true);
    update_option('vbrand_logitech_menu_setup', false); 
}

function add_additional_class_on_a($classes, $item, $args)
{
    if (isset($args->add_a_class)) {
        $classes['class'] = $args->add_a_class;
    }
    return $classes;
}

add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);


 
function add_menu_link_class($atts, $item, $args) {
    // Kiểm tra xem menu đang sử dụng là 'primary-menu' và thêm class cho liên kết
    if ($args->theme_location == 'primary-menu') {
        $atts['class'] = 'nav-link';
    }
    return $atts;
}

add_filter('nav_menu_link_attributes', 'add_menu_link_class', 10, 3);


function link_shop_page(){ 
    if (class_exists('WooCommerce')) {
        // Get the shop page ID from the options table
        $shop_page_id = get_option('woocommerce_shop_page_id');

        // Check if the shop page ID is valid
        if ($shop_page_id) {
            // Get the permalink of the shop page
            $shop_page_link = get_permalink($shop_page_id);
            return esc_url($shop_page_link);
        }
    }
    return '';
}*/


/**
 * use hook of woocommerce
 */
add_action( 'filter_price', 'vbrand_filter_price' );
function vbrand_filter_price() {
// Your code
}


/**
 * Menu vBrand Synch
 */

function vbrand_logitech_activate()
{
    $themeData = vbrand_load_theme_data();
    $menus = $themeData->get('menus'); 

    // tao pages tu menu
    foreach($menus as $menu){ 
        $page = vbrand_getOrCreatePageByTemplate($menu['type'], $menu['title']);  
        if($menu['type']=='shop'){
            update_option('woocommerce_shop_page_id', $page->ID);
        }     
    } 
    //--- set frontpage 
    vbrand_setfrontPageByTemplate('page-homepage.php');
}

// vbrand_logitech_activate();

$vbrand_one_menu_setup = get_option('vbrand_one_menu_setup'); 
if (!$vbrand_one_menu_setup){
    vbrand_logitech_activate();
    update_option('vbrand_one_menu_setup', true);
    update_option('vbrand_logitech_menu_setup', false); 
}


//---- product fiter
add_filter ('woocommerce_variation_prices_price', 'custom_variation_price', 99, 3);
add_filter ('woocommerce_variation_prices_regular_price', 'custom_variation_price', 99, 3);

function custom_variation_price ($price, $variation, $product) {
    wc_delete_product_transients ($variation->get_id ());
    $product_id = $product->is_type ('variation') ? $product->get_parent_id () : $product->get_id ();
    if (has_term ('option 4', 'pa_choose_options', $product_id)) {
        return $price * 1.5;
    } else {
        return $price;
    }
}

//--------- ajax 

 
	
add_action( 'wp_ajax_productbycat', 'productbycat_init' );
add_action( 'wp_ajax_nopriv_productbycat', 'productbycat_init' );
function productbycat_init() { 
    $category_ids = (isset($_POST['category_ids']))?esc_attr($_POST['category_ids']) : '';
    if ($category_ids) {
		$result = '';
        $args = array(
            'post_type' => 'product',
            'tax_query' => array(
                array(
                    'taxonomy' => 'product_cat',
                    'field' => 'term_id',
                    'terms' => $category_ids,
                    'operator' => 'IN',
                ),
            ),
        ); 
        $query = new WP_Query($args);

        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                // Hiển thị thông tin sản phẩm theo nhu cầu của bạn
                $result .= get_the_title();
            }
            wp_reset_postdata();
        }
        echo $result;
        wp_send_json_success($result);
    }
    die();  //---- bắt buộc phải có khi kết thúc
}





 
?>