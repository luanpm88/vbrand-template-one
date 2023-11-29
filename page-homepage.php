<?php 
/**
 * Template Name: Homepage
 */
get_header();
?>
<!-- page Start -->
<div class="container">
    <div class="row">
        
        <div class="col-lg-12">
            <h3>
                Load product in system
            <h3>
            <?php
                $args = array(
                    'post_type' => 'product',
                    'posts_per_page' => 3 , // -1; Hiển thị tất cả sản phẩm trong danh mục        	 
                );
                $products = new WP_Query($args);
                if ($products->have_posts()){ 
                    while ($products->have_posts()){
                        $products->the_post();
                        wc_get_template_part('content', 'product'); 
                    }
                }
                wp_reset_postdata(); // Đặt lại truy vấn sản phẩm
            ?> 
        </div> 
        <?php //get_sidebar(); nếu có ?>
    </div> 
</div>
<!-- About End -->
 
<?php
get_footer();
?>