<?php
/**
 * Template Name: Sản phẩm define
 */
?> 
<?php
	get_header();
?>
<?php $response = vbrandsync_getResponse('/');?>
<div class="hero">
	<div class="container">
		<div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>

                        <?php echo \App\Models\Setting::getThemeOption('banner_title', 'Modern Interior <span clsas="d-block">Design Studio</span>');?>
                    <?php  
                   // $response = vbrandsync_getResponse('/'); 

                    //echo \App\Models\Setting::getThemeOption('banner_title', 'hahaha');
                    ?>
                    </h1>
                    <p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.</p>
                    <p><a href="" class="btn btn-secondary me-2">Shop Now</a><a href="#" class="btn btn-white-outline">Explore</a></p>
                </div>
            </div>
			<div class="col-lg-7">
				<div class="hero-img-wrap">
					<img src="<?=get_template_directory_uri()?>/images/couch.png" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Hero Section -->


 
<!-- Start Product Section -->
<div class="product-section" id="sanpham">
	<div class="container">
		<div class="row">

			<!-- Start Column 1 -->
			<div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
                <h2 class="mb-4 section-title">
                    <?php echo \App\Models\Setting::getThemeOption('product_title', 'SẢN PHẨM MỚI');?>
				</h2>
				<p class="mb-4">
                    <?php echo \App\Models\Setting::getThemeOption('product_description', 'Mẫu sản phẩm mới nhất được chúng tôi cập nhật hàngg ngày');?>	
				</p>  
			</div> 
			<!-- End Column 1 -->
            
            <?php
                $args = array(
                    'post_type' => 'product',
                    'posts_per_page' => 3 , // -1; Hiển thị tất cả sản phẩm trong danh mục        	 
                );
                
                if (\App\Models\Setting::getThemeOption('product_block_type') ){   
                    $case = \App\Models\Setting::getThemeOption('product_block_type');

                    switch ($case) {
                        case "hot":
                            $args = array(
                                'post_type'      => 'product',
                                'posts_per_page' => -1,
                                'meta_query'     => array(
                                    'relation' => 'OR',
                                    array(
                                        'key'   => 'hot_product', // Change this to your hot product custom field
                                        'value' => '1',           // Assuming '1' means it's marked as hot
                                    )
                                ),
                            ); 
                            break;                        
                        case "feature":
                            $args = array(
                                'post_type'      => 'product',
                                'posts_per_page' => -1,
                                'meta_query'     => array(
                                    'relation' => 'OR' ,
                                    array(
                                        'key'   => '_featured',   // WooCommerce uses '_featured' for featured products
                                        'value' => 'yes',
                                    ),
                                ),
                            );
                            break;
                        case "new":
                            $args = array(
                                'post_type'      => 'product',
                                'posts_per_page' => -1,
                                'meta_query'     => array(
                                    'relation' => 'OR',
                                    array(
                                        'key'   => 'new_product', // Change this to your new product custom field
                                        'value' => '1',           // Assuming '1' means it's marked as new
                                    ), 
                                ),
                            );
                            break; 
                    } 
                }   
				$args = array(
                    'post_type' => 'product',
                    'posts_per_page' => 3 , // -1; Hiển thị tất cả sản phẩm trong danh mục        	 
                );
                
				
				$products = new WP_Query($args);
				if ($products->have_posts()){ 
					while ($products->have_posts()){
						$products->the_post();
						 // Ensure visibility.
                        if ( empty( $product ) || ! $product->is_visible() ) {
                            return;
                        }
                        ?>
                        <!-- Start Column 2 -->
                        <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                            <a class="product-item" href="<?=esc_url(get_permalink())?>">
                                <?php the_post_thumbnail('single-post-thumbnail', array('class' => 'img-fluid product-thumbnail')); ?>
                                
                                <h3 class="product-title"><?=the_title()?></h3>
                                <strong class="product-price"><?=wc_price(get_post_meta(get_the_ID(), '_price', true))?></strong>

                                <span class="icon-cross">
                                    <img src="<?=get_template_directory_uri()?>/images/cross.svg" class="img-fluid">
                                </span>
                            </a>
                        </div> 
                        <!-- End Column 2 --> 
				    <?php	
                    }
				}
				wp_reset_postdata(); // Đặt lại truy vấn sản phẩm
			?>

		</div>
	</div>
</div>
 
 



<!-- Start Why Choose Us Section -->
<div class="why-choose-section" id="why">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-6">
				<h2 class="section-title">
                    <?php echo \App\Models\Setting::getThemeOption('about_title', 'Tại sao Chọn Chúng Tôi');?>
                </h2>
				<p>
                    <?php echo \App\Models\Setting::getThemeOption('about_description', 'chúng tôi mang lại sự kết hợp hoàn hảo giữa thiết kế độc đáo và chất lượng xuất sắc. Chúng tôi tôn trọng nguyên liệu tự nhiên và sử dụng chúng để tạo ra những sản phẩm nội thất đẹp mắt và bền bỉ.');?> 				
				</p>

				<div class="row my-5">
					<div class="col-6 col-md-6">
						<div class="feature">

							<div class="icon">
                                <?php if (\App\Models\Setting::getThemeOption('about_icons_one') ){ ?>
                                    <img src="<?php echo \App\Models\Setting::getThemeOption('about_icons_one') ; ?>" />
                                <?php } else { ?>
                                    <img src="<?=get_template_directory_uri()?>/images/truck.svg" alt="Image" class="imf-fluid">
                                <?php } ?> 
							</div>
							<h3><?php echo \App\Models\Setting::getThemeOption('about_title_one', 'Nhanh &amp; Vận chuyển Free');?></h3>
							<p><?php echo \App\Models\Setting::getThemeOption('about_description_one', 'Vận chuyển nhanh chóng, không phát sinh chi phí vì dịch vụ hoàn toàn miễn phí');?></p>

						</div>
					</div>

					<div class="col-6 col-md-6">
						<div class="feature">
							<div class="icon">
                                <?php if (\App\Models\Setting::getThemeOption('about_icons_two') ){ ?>
                                    <img src="<?php echo \App\Models\Setting::getThemeOption('about_icons_two') ; ?>" />
                                <?php } else { ?>
                                    <img src="<?=get_template_directory_uri()?>/images/bag.svg" alt="Image" class="imf-fluid">
                                <?php } ?> 
							</div>
							<h3><?php echo \App\Models\Setting::getThemeOption('about_title_two', 'Nhanh &amp; Vận chuyển Free');?></h3>
							<p><?php echo \App\Models\Setting::getThemeOption('about_description_one', 'Sản phẩm dễ dàng di chuyển và tháo lắp tới vị trí bạn cần đặt');?>.</p>
                            
						</div>
					</div>




					<div class="col-6 col-md-6">
						<div class="feature">
							<div class="icon">
								<img src="<?=get_template_directory_uri()?>/images/support.svg" alt="Image" class="imf-fluid">
							</div>
							<h3>24/7 Hỗ trợ</h3>
							<p> Chúng tôi Luôn luôn ở đây, 24/7. Hãy tin tưởng chúng tôi khi bạn cần gấp. </p>
						</div>
					</div>

					<div class="col-6 col-md-6">
						<div class="feature">
							<div class="icon">
								<img src="<?=get_template_directory_uri()?>/images/return.svg" alt="Image" class="imf-fluid">
							</div>
							<h3>Thiết kế sáng tạo, hiện địa</h3>
							<p>Với nhiều thiết kế đẹp, sáng tạo, luôn mang đến cho bạn sức sống mới.</p>
						</div>
					</div>

				</div>
			</div>

			<div class="col-lg-5">
				<div class="img-wrap">
					<img src="<?=get_template_directory_uri()?>/images/why-choose-us-img.jpg" alt="Image" class="img-fluid">
				</div>
			</div>

		</div>
	</div>
</div>
<!-- End Why Choose Us Section -->

<!-- Start We Help Section -->
<!--div class="we-help-section" id="help">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-7 mb-5 mb-lg-0">
				<div class="imgs-grid">
					<div class="grid grid-1"><img src="<?=get_template_directory_uri()?>/images/img-grid-1.jpg" alt="Untree.co"></div>
					<div class="grid grid-2"><img src="<?=get_template_directory_uri()?>/images/img-grid-2.jpg" alt="Untree.co"></div>
					<div class="grid grid-3"><img src="<?=get_template_directory_uri()?>/images/img-grid-3.jpg" alt="Untree.co"></div>
				</div>
			</div>
			<div class="col-lg-5 ps-lg-5">
				<h2 class="section-title mb-4">KIẾN TẠO NHỮNG KHÔNG GIAN SÁNG TẠO TRÀN ĐẦY SỨC SỐNG</h2>
				<p>
				Với đội ngũ thiết kế chuyên nghiệp và giàu kinh nghiệm, cam kết tạo ra những không gian sáng tạo, độc đáo và tràn đầy sức sống. Bằng sự tận tâm và tài năng, chúng tôi luôn sẵn sàng biến những ý tưởng thành hiện thực, đem lại cho bạn những trải nghiệm không gì sánh bằng trong việc thiết kế và tạo dựng không gian sống hoàn hảo
				</p>

				<ul class="list-unstyled custom-list my-4">
					<li>Thiết kế hoàn hảo</li>
					<li>Màu sắc trẻ trung</li>
					<li>Đa dạng mẫu mã</li>
					<li>Chất liệu tự nhiên</li>
				</ul>
				<p><a herf="#" class="btn">Khám phá ngay</a></p>
			</div>
		</div>
	</div>
</div-->
<!-- End We Help Section -->

<!-- Start Popular Product -->
<!--div class="popular-product">
	<div class="container">
		<div class="row">

			<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
				<div class="product-item-sm d-flex">
					<div class="thumbnail">
						<img src="<?=get_template_directory_uri()?>/images/product-1.png" alt="Image" class="img-fluid">
					</div>
					<div class="pt-3">
						<h3>Ghế nội thất</h3>
						<p>
							Thời trang, phong cách thời thượng kết hợp với gam màu đày quyến rũ	cho không gian của bạn
						</p>
						<p><a href="#">Xem thêm</a></p>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
				<div class="product-item-sm d-flex">
					<div class="thumbnail">
						<img src="<?=get_template_directory_uri()?>/images/product-2.png" alt="Image" class="img-fluid">
					</div>
					<div class="pt-3">
						<h3>Bàn làm việc</h3>
						<p>
							Không gian làm việc sáng tạo, tràn đầy sức sống giúp bạn tiếp tục có thêm nhũng ý tưởng mới cho công việc hàng ngày
						</p>
						<p><a href="#">xem thêm</a></p>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
				<div class="product-item-sm d-flex">
					<div class="thumbnail">
						<img src="<?=get_template_directory_uri()?>/images/product-3.png" alt="Image" class="img-fluid">
					</div>
					<div class="pt-3">
						<h3>Bàn học cho bé</h3>
						<p>
							Mẫu bàn với thiết kế sáng tạo giúp bế có thêm không gian sáng tạo cho mỗi ngày học tập
						</p>
						<p><a href="#">xem thêm</a></p>
					</div>
				</div>
			</div>

		</div>
	</div>
</div-->
<!-- End Popular Product -->

<!-- Start Popular Product -->
<!--div class="popular-product">
	<div class="container">
		<div class="row">

			<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
				<div class="product-item-sm d-flex">
					<div class="thumbnail">
						<img src="<?=get_template_directory_uri()?>/images/product-1.png" alt="Image" class="img-fluid">
					</div>
					<div class="pt-3">
						<h3>Ghế nội thất</h3>
						<p>
							Thời trang, phong cách thời thượng kết hợp với gam màu đày quyến rũ	cho không gian của bạn
						</p>
						<p><a href="#">Xem thêm</a></p>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
				<div class="product-item-sm d-flex">
					<div class="thumbnail">
						<img src="<?=get_template_directory_uri()?>/images/product-2.png" alt="Image" class="img-fluid">
					</div>
					<div class="pt-3">
						<h3>Bàn làm việc</h3>
						<p>
							Không gian làm việc sáng tạo, tràn đầy sức sống giúp bạn tiếp tục có thêm nhũng ý tưởng mới cho công việc hàng ngày
						</p>
						<p><a href="#">xem thêm</a></p>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
				<div class="product-item-sm d-flex">
					<div class="thumbnail">
						<img src="<?=get_template_directory_uri()?>/images/product-3.png" alt="Image" class="img-fluid">
					</div>
					<div class="pt-3">
						<h3>Bàn học cho bé</h3>
						<p>
							Mẫu bàn với thiết kế sáng tạo giúp bế có thêm không gian sáng tạo cho mỗi ngày học tập
						</p>
						<p><a href="#">xem thêm</a></p>
					</div>
				</div>
			</div>

		</div>
	</div>
</div-->
<!-- End Popular Product -->

<?php

/**
 * Hiển thị bài viết mới nhất
 */

$number_of_posts = 8;

// Truy vấn các bài viết mới nhất
$args = array(
    'post_type' => 'post', // Loại bài viết
    'posts_per_page' => $number_of_posts, // Số lượng bài viết muốn hiển thị
    'orderby' => 'date', // Sắp xếp theo ngày đăng
    'order' => 'DESC', // Thứ tự giảm dần (mới nhất trước)
);

$query = new WP_Query($args);

// Kiểm tra xem có bài viết nào không
if ($query->have_posts()) : ?>
<!-- Start Blog Section -->
<div class="blog-section" id="blog">
	<div class="container">
		<div class="row mb-5">
			<div class="col-md-6">
				<h2 class="section-title">TIN MỚI</h2>
			</div>
			<div class="col-md-6 text-start text-md-end">
				<a href="<?=home_url('/')?>tin-tuc" class="more">Xem thêm</a>
			</div>
		</div>

		<div class="row">
	<?php	
    	// Bắt đầu vòng lặp để hiển thị bài viết
    	while ($query->have_posts()):
        	$query->the_post();
        	// Hiển thị tiêu đề bài viết và liên kết đến bài viết
        	$thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'medium'); // 'thumbnail' là kích thước hình ảnh nhỏ
			?> 
			<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
				<div class="post-entry">
					<a href="<?=get_permalink()?>" class="post-thumbnail">

						<?php if ($thumbnail_url): ?>
							<img src="<?=esc_url($thumbnail_url)?>" alt="<?=get_the_title()?>" />
						<?php else: ?> 
                			<img src="<?=get_template_directory_uri()?>images/no-photo.jpg" alt="<?=get_the_title()?>" />   
        				<?php endif ?>

					</a>
					<div class="post-content-entry">
						<h3><?=get_the_title()?></h3> 
						<div class="meta">
							<span>by <a href="#"><?=the_author()?></a></span> <span>on <a href="#"><?=get_the_date()?></a></span>
						</div>
					</div>
				</div>
			</div>
   
      		<?php endwhile ?> 
   			<?php  wp_reset_postdata();?>

		</div>
	</div>
</div>
<!-- End Blog Section --> 
 
<?php endif ?> 

<?php
	get_footer();
?>