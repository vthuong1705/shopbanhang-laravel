<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from demo.hasthemes.com/payna-preview/payna/shop-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Nov 2020 08:23:57 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Payna - Minimal eCommerce HTML Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('clients/images/favicon.png')}}">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('clients/css/vendor/bootstrap.min.css')}}">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{asset('clients/css/vendor/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('clients/css/vendor/themify.css')}}">
    <!-- othres CSS -->
    <link rel="stylesheet" href="{{asset('clients/css/plugins/animate.css')}}">
    <link rel="stylesheet" href="{{asset('clients/css/plugins/owl-carousel.css')}}">
    <link rel="stylesheet" href="{{asset('clients/css/plugins/slick.css')}}">
    <link rel="stylesheet" href="{{asset('clients/css/plugins/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('clients/css/plugins/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('clients/css/plugins/easyzoom.css')}}">
    <link rel="stylesheet" href="{{asset('clients/css/plugins/select2.min.css')}}">
    <!-- Revolution Slider CSS -->
    <link rel="stylesheet" href="{{asset('clients/js/revolution/css/settings.css')}}">
    <link rel="stylesheet" href="{{asset('clients/js/revolution/css/navigation.css')}}">
    <link rel="stylesheet" href="{{asset('clients/js/revolution/custom-setting.css')}}">

    <link rel="stylesheet" href="{{asset('clients/css/style.css')}}">

</head>

<body>

    <div class="main-wrapper main-wrapper-2">
        {{-- header --}}
        <header class="header-area header-padding-1">
            <div class="main-header-wrap transparent-bar">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <div class="logo-header-about-wrap">
                                <div class="logo logo-width">
                                    <a href="index.html"><img src="{{asset('clients/images/logo/logo.png')}}" alt="logo"></a>
                                </div>
                                <div class="header-about-icon ml-35">
                                    <a class="quickinfo-button-active" href="#"><i class=" ti-align-left "></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex justify-content-center">
                            <div class="main-menu menu-lh-1">
                                <nav>
                                    <ul>
                                        <li><a class="active" href="index.html">Home</a>
                                        </li>
                                        <li><a href="#">Shop <i class="fa fa-angle-down"></i></a>
                                            <ul class="mega-menu mega-menu-width2 menu-negative-mrg2">
                                                {{-- CAI CU LIN NAY LA TRANG LAYOUT DAY KO PHAI CATEGORY DAU, CATEGORY MINH DUYET TREN SIDEBAR THOI OK K --}}
                                                {{-- <li class="mega-menu-sub-width20"><a class="menu-title" href="#">Shop Layout</a>
                                                    <ul>
                                                        <li><a href="shop-fullwide.html">Shop Fullwidth</a></li>
                                                        <li><a href="shop-sidebar.html">Shop Sidebar</a></li>
                                                        <li><a href="shop-3col.html">Shop 03 Column</a></li>
                                                        <li><a href="shop-4col.html">Shop 04 Column</a></li>
                                                        <li><a href="shop-masonry.html">Shop Mansory</a></li>
                                                        <li><a href="shop-metro.html">Shop Metro Layout</a></li>
                                                        <li><a href="shop-instagram.html">Shop Instagram</a></li>
                                                        <li><a href="shop-collection-classic.html">Collection Classic</a></li>
                                                        <li><a href="shop-collection-modern.html">Collection Modern</a></li>
                                                    </ul>
                                                </li> --}}
                                                {{-- <li class="mega-menu-sub-width20"><a class="menu-title" href="#">Product Layout</a>
                                                    <ul>
                                                        <li><a href="product-details.html">Simple 01</a></li>  CHỖ NÀY LÀ PRODUCT DETAIL NHÉ
                                                        <li><a href="product-details-2.html">Simple 02</a></li>
                                                        <li><a href="product-details-3.html">Simple 03</a></li>
                                                        <li><a href="product-details-carousel.html">Product Carousel</a></li>
                                                        <li><a href="product-details-grouped.html">Product Grouped</a></li>
                                                        <li><a href="product-details-affiliate.html">Product Affiliate</a></li>
                                                        <li><a href="product-details-configurable.html">Product Configurable</a></li>
                                                    </ul>
                                                </li> --}}
                                                <li class="mega-menu-sub-width20"><a class="menu-title" href="#">Shop Page</a>
                                                    <ul>
                                                        <li><a href="cart.html">Shopping Cart</a></li>
                                                        <li><a href="checkout.html">Check Out</a></li>
                                                        <li><a href="my-account.html">My Account</a></li>
                                                        <li><a href="wishlist.html">Wishlist</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Pages <i class="fa fa-angle-down"></i></a>
                                            <ul class="sub-menu-width">
                                                <li><a href="about-us.html">About Us</a></li>
                                                <li><a href="contact-us.html">Contact Us</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="blog.html">Blog <i class="fa fa-angle-down"></i></a>
                                            <ul class="sub-menu-width">
                                                <li><a href="blog.html">Blog Sidebar</a></li>
                                                <li><a href="blog-no-sidebar.html">Blog No Sidebar</a></li>
                                                <li><a href="blog-3col.html">Blog 03 Columns</a></li>
                                                <li><a href="blog-masonry.html">Blog Mansory</a></li>
                                                <li><a href="#">Single Post <i class="fa fa-angle-right"></i></a>
                                                    <ul class="lavel-menu">
                                                        <li><a href="blog-details.html">Single Post 01</a></li>
                                                        <li><a href="blog-details-2.html">Single Post 02</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="lang-cart-search-wrap">
                                <div class="language mr-55">
                                    <ul>
                                        <li><a class="active" href="#">English</a></li>
                                        <li><a href="#">Italy</a></li>
                                    </ul>
                                </div>
                                <div class="same-style header-search">
                                    <a class="search-active" href="#"><i class="ti-search"></i></a>
                                </div>
                                <div class="same-style cart-wrap ml-20">
                                    <a href="#" class="cart-active">
                                        <i class=" ti-shopping-cart "></i>
                                        <span class="count-style">2</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-small-mobile header-small-mobile-ptb">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="mobile-logo logo-width">
                                <a href="index.html">
                                    <img alt="" src="{{asset('clients/images/logo/logo.png')}}">
                                </a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mobile-header-right-wrap">
                                <div class="same-style cart-wrap">
                                    <a href="#" class="cart-active">
                                        <i class=" ti-shopping-cart "></i>
                                        <span class="count-style">2</span>
                                    </a>
                                </div>
                                <div class="mobile-off-canvas">
                                    <a class="mobile-aside-button" href="#"><i class=" ti-align-left "></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
