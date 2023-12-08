<?php 
/**
 * Khai báo và sủ dụng tính năng của plugin WooCommerce
 * 
 * 
 * 
 */
add_theme_support('woocommerce');
 /**
  * Định nghĩa menu cho themes
  */
function register_my_menu() {
    register_nav_menu('primary-menu', __('Primary Menu'));
}
add_action('after_setup_theme', 'register_my_menu');

/**
 * Import data khi swith themes
 * Sử dụng cờ để xác định đã tạo ra các trang cần thiết cho themes chưa, 
 * các bước thực hiện
 * 1. Tạo các trang cần thiết: Trang chủ, Shop, Giới thiệu, Tin tức, Liên hệ
 * 2. Xét trang frontpage cho themes
 * 3. Thêm các trang vào main menu: Trang chủ, Shop, Giới thiệu, Tin tức, Liên hệ
 * 4. Cuối cùng chuyển đổi trạng thái của cờ. ( demo_data_imported : 1 ).
 */
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



$demo_data_imported = get_option('demo_data_imported');
if ($demo_data_imported !== '1') {  
    require_once get_template_directory() . '/demo-data/import-demo-data.php'; 
    update_option('demo_data_imported', '1');
}

function add_additional_class_on_a($classes, $item, $args)
{
    if (isset($args->add_a_class)) {
        $classes['class'] = $args->add_a_class;
    }
    return $classes;
}

add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);

/*
function add_menu_link_class($atts, $item, $args) {
    // Kiểm tra xem menu đang sử dụng là 'primary-menu' và thêm class cho liên kết
    if ($args->theme_location == 'primary-menu') {
        $atts['class'] = 'nav-link';
    }
    return $atts;
}

add_filter('nav_menu_link_attributes', 'add_menu_link_class', 10, 3);
*/

?>