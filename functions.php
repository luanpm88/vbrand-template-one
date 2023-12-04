<?php 
/**
 * Khai báo và sủ dụng tính năng của plugin WooCommerce
 * 
 */
add_theme_support('woocommerce');

/**
 *  ----- import data
 */

$demo_data_imported = get_option('demo_data_imported');

if ($demo_data_imported !== '1') {  
    require_once get_template_directory() . '/demo-data/import-demo-data.php'; 
    update_option('demo_data_imported', '1');
}




?>