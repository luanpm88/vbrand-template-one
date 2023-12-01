<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="<?=get_template_directory_uri()?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="<?=get_template_directory_uri()?>/css/tiny-slider.css" rel="stylesheet">
    <link href="<?=get_template_directory_uri()?>/css/style.css" rel="stylesheet"> 
    <title>Woo vBrand</title>
  </head>
  <body>
     
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

            <div class="container">
                <a class="navbar-brand" href="index.html">Furni<span>.</span></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsFurni">
                    <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                        <li class="nav-item active"> <a class="nav-link" href="index.html">Trang chủ</a></li>
                        <li><a class="nav-link" href="#why">Giới thiệu</a></li>
                        <li><a class="nav-link" href="#sanpham">Sản phẩm</a></li> 
                        <li><a class="nav-link" href="#blog">Blog</a></li>
                        <li><a class="nav-link" href="#lienhe">Liên hệ</a></li>
                    </ul> 
                    <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                        <li><a class="nav-link" href="#"><img src="<?=get_template_directory_uri()?>/images/user.svg"></a></li>
                        <li><a class="nav-link" href="cart.html"><img src="<?=get_template_directory_uri()?>/images/cart.svg"></a></li>
                    </ul>
                </div>
            </div>
                
            </nav>
            <!-- End Header/Navigation -->
 
<!-- Start Hero Section -->
<div class="hero">
	<div class="container">
		<div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>Modern Interior <span clsas="d-block">Design Studio</span></h1>
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
				<h2 class="mb-4 section-title">SẢN PHẨM MỚI</h2>
				<p class="mb-4">
					Những mâu sản phẩm luôn đem lại cho bạn những cảm hứng tuyệt vời, sáng tạo trong cuộc sống.
				 </p>
				 <p class="mb-4">
					Rất nhiều mẫu ghế nội thất phù hợp với bạn đang sẵn sàng chơ bạn ghé coi	
				</p>
				<p class="mb-4">
					Hân hạnh trào đón bạn
				</P>
				<p>
					<a href="shop.html" class="btn btn-primary">Khám phá thêm</a>
				</p>
			</div> 
			<!-- End Column 1 -->

			<?php
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
				<h2 class="section-title">Tại sao Chọn Chúng Tôi</h2>
				<p>
				chúng tôi mang lại sự kết hợp hoàn hảo giữa thiết kế độc đáo và chất lượng xuất sắc. Chúng tôi tôn trọng nguyên liệu tự nhiên và sử dụng chúng để tạo ra những sản phẩm nội thất đẹp mắt và bền bỉ.
				</p>
				<div class="row my-5">
					<div class="col-6 col-md-6">
						<div class="feature">
							<div class="icon">
								<img src="<?=get_template_directory_uri()?>/images/truck.svg" alt="Image" class="imf-fluid">
							</div>
							<h3>Nhanh &amp; Vận chuyển Free</h3>
							<p>Vận chuyển nhanh chóng, không phát sinh chi phí vì dịch vụ hoàn toàn miễn phí</p>
						</div>
					</div>

					<div class="col-6 col-md-6">
						<div class="feature">
							<div class="icon">
								<img src="<?=get_template_directory_uri()?>/images/bag.svg" alt="Image" class="imf-fluid">
							</div>
							<h3>Dễ dàng di chuyển, tháo lắp</h3>
							<p>Sản phẩm dễ dàng di chuyển và tháo lắp tới vị trí bạn cần đặt.</p>
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
<div class="we-help-section" id="help">
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
</div>
<!-- End We Help Section -->

<!-- Start Popular Product -->
<div class="popular-product">
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
</div>
<!-- End Popular Product -->

<!-- Start Popular Product -->
<div class="popular-product">
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
</div>
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

   <!-- Start Footer Section -->
   <footer class="footer-section">
			<div class="container relative" id="lienhe">

				<div class="sofa-img">
					<img src="<?=get_template_directory_uri()?>/images/sofa.png" alt="Image" class="img-fluid">
				</div>

				<div class="row">
					<div class="col-lg-8">
						<div class="subscription-form">
							<h3 class="d-flex align-items-center">
								<span class="me-1"><img src="<?=get_template_directory_uri()?>/images/envelope-outline.svg" alt="Image" class="img-fluid"></span>
								<span>Đăng ký nhận báo giá mới</span>
							</h3>

							<form action="#" class="row g-3">
								<div class="col-auto">
									<input type="text" class="form-control" placeholder="Tên của bạn">
								</div>
								<div class="col-auto">
									<input type="email" class="form-control" placeholder="Email của bạn">
								</div>
								<div class="col-auto">
									<button class="btn btn-primary">
										Đăng ký
										<span class="fa fa-paper-plane"></span>
									</button>
								</div>
							</form>

						</div>
					</div>
				</div>

				<div class="row g-5 mb-5">
					<div class="col-lg-4">
						<div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">Woo vBrand<span>.</span></a></div>
						<p class="mb-4">  
							Thương hiệu hàng đầu về nội thất và các thiết bị nội thất dành cho bạn.
						</p>
						<p class="mb-4"> 
							Thương hiệu được bình chọn là một trong 10 thương hiệu hàng đầu tại Việt Nam năm 2023
						</p>

						<ul class="list-unstyled custom-social">
							<li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
						</ul>
					</div>

					<div class="col-lg-8">
						<div class="row links-wrap">
							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">Giới thiệu</a></li>
									<li><a href="#">Về chúng tôi</a></li>
									<li><a href="#">Tầm nhìn & sứ mệnh</a></li>
									<li><a href="#">giá trị cốt lõi</a></li>
								</ul>
							</div>

							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">Hỗ trợ</a></li>
									<li><a href="#">Hotline</a></li>
									<li><a href="#">Online SMS</a></li>
									<li><a href="#">Gửi liên hệ</a></li>
								</ul>
							</div>

							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">Đại lý, của hàng</a></li> 
									<li><a href="#">Địa chỉ Đại lý</a></li>
									<li><a href="#">Địa chỉ Cửa hàng</a></li>
									<li><a href="#">Đăng ký</a></li>
								</ul>
							</div>

							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">Dịch vụ</a></li>
									<li><a href="#">Tư vấn thiết kế</a></li>
									<li><a href="#">Hoàn thiện công trình</a></li>
									<li><a href="#">Phụ kiện nội thất</a></li>
								</ul>
							</div>
						</div>
					</div>

				</div>

				<div class="border-top copyright">
					<div class="row pt-4">
						<div class="col-lg-6">
							<p class="mb-2 text-center text-lg-start">
								Bản quyền &copy;<script>document.write(new Date().getFullYear());</script>. 
								Woo vBrand.
            				</p>
						</div>

						<div class="col-lg-6 text-center text-lg-end">
							<ul class="list-unstyled d-inline-flex ms-auto">
								<li class="me-4"><a href="#">Điều khoản</a></li>
								<li class="me-4"><a href="#">Hỗ trợ</a></li>
								<li><a href="#">Bảo trì</a></li>
							</ul>
						</div>

					</div>
				</div>
        
			</div>
		</footer>
		<!-- End Footer Section -->
    	<script src="<?=get_template_directory_uri()?>/js/bootstrap.bundle.min.js"></script>
		<script src="<?=get_template_directory_uri()?>/js/tiny-slider.js"></script>
		<script src="<?=get_template_directory_uri()?>/js/custom.js"></script>
  </body>
</html>