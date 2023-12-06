<?php $response = vbrandsync_getResponse('/');?>

<!doctype html>
<html lang="vi">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
       
        <!-- fonts google-->
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

        <!-- Woo themes CSS -->
        <link href="<?=get_template_directory_uri()?>/css/tiny-slider.css" rel="stylesheet">
        <link href="<?=get_template_directory_uri()?>/css/style.css" rel="stylesheet">   
        <title></title> 
        <?php  wp_head(); ?>
    </head>
    <body>
        <!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

            <div class="container">
                <a class="navbar-brand" href="<?php echo home_url('/');?>">
                    <?php if (\App\Models\Setting::getThemeOption('site_logo')) { ?>
                        <img src="<?php echo \App\Models\Setting::getThemeOption('site_logo'); ?>" width="150" alt="">
                    <?php } else { ?>
                        Woo vBrand<span>.</span>
                    <?php } ?>

                   
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarsFurni"> 

                    
                    <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo get_home_url(); ?>#">Trang Chính</a>
                        </li>
                        <?php if (\App\Models\Setting::getThemeOption('why_us_module_show')) { ?>
                            <li><a class="nav-link" href="<?php echo get_home_url(); ?>#product">Sản Phẩm Mới</a></li>
                        <?php } ?>
                        <?php if (\App\Models\Setting::getThemeOption('why_us_module_show')) { ?>
                            <li><a class="nav-link" href="<?php echo get_home_url(); ?>#why-us">Về Chúng Tối</a></li>
                        <?php } ?>
                        <?php if (\App\Models\Setting::getThemeOption('articles_module_show')) : ?>
                            <li><a class="nav-link" href="<?php echo get_home_url(); ?>#news">Tin Tức</a></li>
                        <?php endif ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo get_home_url(); ?>?post_type=product">Gian Hàng</a>
                        </li>
                    </ul>

                    <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                    <?php
                    /**
                     * Show cart in menu
                     */
                    if (class_exists('WooCommerce')):
                        $cart_count = WC()->cart->get_cart_contents_count();
                        $cart_total = WC()->cart->get_cart_total(); 
                        ?>
                        <li>
                            <a class="nav-link" href="<?= wc_get_cart_url()?>">
                                <img src="<?=get_template_directory_uri()?>/images/cart.svg">
                                
                            </a>
                        </li> 
                        <?php  else:  ?>  
                        <li>
                            <a class="nav-link" href="<?= wc_get_cart_url()?>">
                                <img src="<?=get_template_directory_uri()?>/images/cart.svg">
                                <?php if($cart_count>0):?>
                                <span class="badge bg-dark text-white ms-1 rounded-pill"><?=esc_html($cart_count)?></span>
                                <?php endif ?>
                            </a>
                        </li>
                        <?php endif ?>
                    </ul>
                </div>
            </div>                
        </nav>
        <!-- End Header/Navigation -->
 