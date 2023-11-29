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
    <!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

            <div class="container">
                <a class="navbar-brand" href="<?php echo home_url('/');?>">Woo vBrand<span>.</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarsFurni">
                    <?php
                        if (has_nav_menu ( 'header-menu' )) {
                            $main_menu_args = array (
                                'menu' => 'nav',
                                'container' => '', 
                                'menu_class' => 'custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0',  // for start menu: <ul class="" 
                                'items_wrap'  => '<ul id="%1$s" class="%2$s" >%3$s</ul>',
                                'walker' => new TN_Walker_Nav_Menus(),
                                'theme_location' => 'header-menu' ,
                                'depth' => 2
                            );
                            wp_nav_menu ( $main_menu_args);
                        }
                    ?>
                    <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                    <?php
                    if (class_exists('WooCommerce')):
                        $cart_count = WC()->cart->get_cart_contents_count();
                        $cart_total = WC()->cart->get_cart_total(); 
                        ?>                        
                        <li><a class="nav-link" href="#"><img src="<?=get_template_directory_uri()?>/images/user.svg"></a></li>
                        <li>
                            <a class="nav-link" href="<?= wc_get_cart_url()?>">
                                <img src="<?=get_template_directory_uri()?>/images/cart.svg">
                                <?php if($cart_count>0):?>
                                <span class="badge bg-dark text-white ms-1 rounded-pill"><?=esc_html($cart_count)?></span>
                                <?php endif ?>
                            </a>
                        </li> 
                        <?php  else:  ?>                     
                        <li><a class="nav-link" href="#"><img src="<?=get_template_directory_uri()?>/images/user.svg"></a></li>
                        <li><a class="nav-link" href="<?= wc_get_cart_url()?>"><img src="<?=get_template_directory_uri()?>/images/cart.svg"></a></li>
                        <?php endif ?>
                    </ul>
                </div>
            </div>                
            </nav>
            <!-- End Header/Navigation -->
 