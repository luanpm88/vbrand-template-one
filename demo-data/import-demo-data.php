<?php 
/**
 * ------ import-demo-data.php
 */

// Kiểm tra xem đã import dữ liệu demo chưa
$demo_data_imported = get_option('demo_data_imported');

if ($demo_data_imported !== '1') { 
    // Tạo trang Home
    $home_page_id = wp_insert_post(array(
        'post_title' => 'Home Page',
        'post_type' => 'page',
        'post_status' => 'publish',
    ));

    // Tạo trang About Us
    $about_page_id = wp_insert_post(array(
        'post_title' => 'About Us',
        'post_type' => 'page',
        'post_status' => 'publish',
    ));

    // Tạo trang Contact
    $contact_page_id = wp_insert_post(array(
        'post_title' => 'Contact',
        'post_type' => 'page',
        'post_status' => 'publish',
    ));


    // Gán template cho trang Home
    $homepage_template = 'page-homepage.php'; // Điều chỉnh tên file template nếu cần
    update_post_meta($home_page_id, '_wp_page_template', $homepage_template);

    // Đặt trang Home làm trang frontpage
    update_option('page_on_front', $home_page_id);
    update_option('show_on_front', 'page');
 

    // Đánh dấu là đã import dữ liệu để không import lần nữa
    update_option('demo_data_imported', '1');
}
// Hook để chạy hàm import khi theme được kích hoạt
add_action('after_switch_theme', 'import_demo_data');

?>