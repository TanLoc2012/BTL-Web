<?php
    require_once "mvc/utility/utility.php";
    $user = getUserToken();
    if($user != null) {
        $fullname = $user["fullname"];
    }
    $cart = [];
    if(isset($_COOKIE['cart'])) {
        $json = $_COOKIE['cart'];
        $cart = json_decode($json, true);
    }
    $count = 0;
    $totalPrice = 0;
    foreach ($cart as $item) {
        $count += $item['num'];
        $totalPrice +=$item['num']*$item['priceProduct'];
    }
?>

<!doctype html>
<html class="no-js" lang="zxx">
    
<!-- index28:48-->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>PhoneStore</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="http://localhost/Laptrinhweb/public/images/favicon.png">
        <!-- Material Design Iconic Font-V2.2.0 -->
        <link rel="stylesheet" href="http://localhost/Laptrinhweb/public/css/material-design-iconic-font.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="http://localhost/Laptrinhweb/public/css/font-awesome.min.css">
        <!-- Font Awesome Stars-->
        <link rel="stylesheet" href="http://localhost/Laptrinhweb/public/css/fontawesome-stars.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="http://localhost/Laptrinhweb/public/css/meanmenu.css">
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href="http://localhost/Laptrinhweb/public/css/owl.carousel.min.css">
        <!-- Slick Carousel CSS -->
        <link rel="stylesheet" href="http://localhost/Laptrinhweb/public/css/slick.css">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="http://localhost/Laptrinhweb/public/css/animate.css">
        <!-- Jquery-ui CSS -->
        <link rel="stylesheet" href="http://localhost/Laptrinhweb/public/css/jquery-ui.min.css">
        <!-- Venobox CSS -->
        <link rel="stylesheet" href="http://localhost/Laptrinhweb/public/css/venobox.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="http://localhost/Laptrinhweb/public/css/nice-select.css">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="http://localhost/Laptrinhweb/public/css/magnific-popup.css">
        <!-- Bootstrap V4.1.3 Fremwork CSS -->
        <link rel="stylesheet" href="http://localhost/Laptrinhweb/public/css/bootstrap.min.css">
        <!-- Helper CSS -->
        <link rel="stylesheet" href="http://localhost/Laptrinhweb/public/css/helper.css">
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="http://localhost/Laptrinhweb/public/css/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="http://localhost/Laptrinhweb/public/css/responsive.css">
        <!-- Modernizr js -->
        <script src="http://localhost/Laptrinhweb/public/js/vendor/modernizr-2.8.3.min.js"></script>
        <script
            src="https://code.jquery.com/jquery-3.5.1.js"
            integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
            crossorigin="anonymous"></script>
    </head>
    <body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
        <!-- Begin Body Wrapper -->
        <div class="body-wrapper">
            <!-- Begin Header Area -->
            <header>
                <!-- Begin Header Top Area -->
                <div class="header-top">
                    <div class="container">
                        <div class="row">
                            <!-- Begin Header Top Left Area -->
                            <div class="col-lg-3 col-md-4">
                                <div class="header-top-left">
                                    <ul class="phone-wrap">
                                        <li><span>Liên hệ qua số điện thoại:</span>(+84)12 543 6789</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Header Top Left Area End Here -->
                            <!-- Begin Header Top Right Area -->
                            <div class="col-lg-9 col-md-8">
                                <div class="header-top-right">
                                    <ul class="ht-menu">
                                        <!-- Begin Setting Area -->
                                        <li>
                                            <div class="ht-setting-trigger"><span>
                                            <?php 
                                                if(isset($fullname))
                                                    echo $fullname;
                                                else echo 'Quản lý tài khoản';
                                            ?></span></div>
                                            <div class="setting ht-setting">
                                                <ul class="ht-setting-list">
                                                    <li><a href="http://localhost/Laptrinhweb/Login">Đăng nhập</a></li>
                                                    <li><a href="http://localhost/Laptrinhweb/Register">Đăng ký</a></li>
                                                    <li><a href="http://localhost/Laptrinhweb/Login/UserLogout">Đăng xuất</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Currency Area End Here -->
                                        <li>
                                            <span class="language-selector-wrapper">Ngôn ngữ :</span>
                                            <div class="ht-language-trigger"><span>Tiếng Việt</span></div>
                                            <div class="language ht-language">
                                                <ul class="ht-setting-list">
                                                    <li class="active"><img src="images/menu/flag-icon/1.jpg" alt="">Tiếng Việt</li>
                                                    <li><img src="images/menu/flag-icon/2.jpg" alt="">Tiếng Anh</li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Language Area End Here -->
                                    </ul>
                                </div>
                            </div>
                            <!-- Header Top Right Area End Here -->
                        </div>
                    </div>
                </div>
                <!-- Header Top Area End Here -->
                <!-- Begin Header Middle Area -->
                <div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
                    <div class="container">
                        <div class="row">
                            <!-- Begin Header Logo Area -->
                            <div class="col-lg-3">
                                <div class="logo pb-sm-30 pb-xs-30">
                                    <a href="http://localhost/Laptrinhweb/Home">
                                        <img src="http://localhost/Laptrinhweb/public/images/logophonestore.png" style="width:75%;height:45px" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- Header Logo Area End Here -->
                            <!-- Begin Header Middle Right Area -->
                            <div class="col-lg-9 pl-0 ml-sm-15 ml-xs-15">
                                <!-- Begin Header Middle Searchbox Area -->
                                <form action="#" class="hm-searchbox">
                                    
                                    <input type="text" placeholder="Enter your search key ...">
                                    <button class="li-btn" type="submit"><i class="fa fa-search"></i></button>
                                </form>
                                <!-- Header Middle Searchbox Area End Here -->
                                <!-- Begin Header Middle Right Area -->
                                <div class="header-middle-right">
                                    <ul class="hm-menu">
                                        <!-- Begin Header Middle Wishlist Area -->
                                       
                                        <!-- Header Middle Wishlist Area End Here -->
                                        <!-- Begin Header Mini Cart Area -->
                                        <li class="hm-minicart">
                                            <div class="hm-minicart-trigger">
                                                <span class="item-icon"></span>
                                                <span class="item-text"><?=number_format($totalPrice)?> VNĐ
                                                <span class="cart-item-count" ><?=$count?></span>
                                                </span>
                                            </div>
                                            <span></span>
                                            <div class="minicart">
                                                <div class="minicart-button">
                                                    <a href="http://localhost/Laptrinhweb/Home/card" class="li-button li-button-fullwidth li-button-dark">
                                                        <span>Xem giỏ hàng</span>
                                                    </a>
                                                    <a href="checkout.html" class="li-button li-button-fullwidth">
                                                        <span>Thanh Toán</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Header Mini Cart Area End Here -->
                                    </ul>
                                </div>
                                <!-- Header Middle Right Area End Here -->
                            </div>
                            <!-- Header Middle Right Area End Here -->
                        </div>
                    </div>
                </div>
                <!-- Header Middle Area End Here -->
                <!-- Begin Header Bottom Area -->
                <div class="header-bottom header-sticky d-none d-lg-block d-xl-block">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Begin Header Bottom Menu Area -->
                                <div class="hb-menu">
                                    <nav>
                                        <ul>
                                            <li class="dropdown-holder"><a href="http://localhost/Laptrinhweb/Home">Trang chủ</a>
                                            </li>
                                            <li class="megamenu-holder"><a href="http://localhost/Laptrinhweb/Home/productList">Sản phẩm</a>
                                                <ul class="megamenu hb-megamenu">
                                                    <li><a href="shop-left-sidebar.html">Điện thoại</a>
                                                        <ul>
                                            <?php
                                                $countCategory = count($data["allCategory"]);
                                                    for($i=0;$i<$countCategory;$i++){
                                                        echo   '<li><a href="http://localhost/Laptrinhweb/Home/productList/'.$data["allCategory"][$i]["id"].'">'.$data["allCategory"][$i]["name"].'</a></li>';
                                                    }
                                                        
                                            ?>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-holder"><a href="http://localhost/Laptrinhweb/Home/tintuc">TIN TỨC</a>
                                            </li>
                                            <li><a href="http://localhost/Laptrinhweb/Home/contact">Liện hệ</a></li>
                                            <li><a href="http://localhost/Laptrinhweb/Home/gioithieu">Giới thiệu</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- Header Bottom Menu Area End Here -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Header Bottom Area End Here -->
                <!-- Begin Mobile Menu Area -->
                <!-- Mobile Menu Area End Here -->
            </header>
   
