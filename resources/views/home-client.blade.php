@extends('client.master')
@section('content')

        <div class="breadcrumb-area breadcrumb-bg-3 section-padding-1 pt-200 pb-120">
            <div class="container-fluid">
                <div class="breadcrumb-content text-center">
                    <div class="breadcrumb-title">
                        <h2>Shop Sidebar</h2>
                    </div>
                    <ul>
                        <li>
                            <a href="index.html">Home </a>
                        </li>
                        <li><span> > </span></li>
                        <li class="active"> shop page</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="shop-area section-padding-1 pt-25 pb-80">
            <div class="container-fluid">
                <div class="row flex-row-reverse">
                    <div class="col-lg-9">
                        <div class="shop-top-bar">
                            <div class="shop-top-bar-left">
                                <div class="shop-top-show">
                                    <span>Showing 1–12 of 39 results</span>
                                </div>
                                <div class="shop-page-list">
                                    <ul>
                                        <li>Show</li>
                                        <li class="active"><a href="#">12</a></li>
                                        <li><a href="#">15</a></li>
                                        <li><a href="#">30</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="shop-top-bar-right">
                                <div class="shop-filter">
                                    <a class="shop-filter-active" href="#">Filters <i class="fa fa-angle-down angle-down"></i> <i class="fa fa-angle-up angle-up"></i></a>
                                </div>
                                <div class="shop-short-by ml-30">
                                    <span>Sort by <i class="fa fa-angle-down angle-down"></i> <i class="fa fa-angle-up angle-up"></i></span>
                                    <ul>
                                        <li class="active"><a href="#">Default sorting</a></li>
                                        <li><a href="#">Sort by popularity</a></li>
                                        <li><a href="#">Sort by average rating</a></li>
                                        <li><a href="#">Sort by latest</a></li>
                                        <li><a href="#">Sort by price: low to high</a></li>
                                        <li><a href="#">Sort by price: high to low</a></li>
                                    </ul>
                                </div>
                                <div class="shop-tab nav ml-30">
                                    <a href="#shop-1" class="active" data-toggle="tab"><i class=" ti-view-grid "></i></a>
                                    <a href="#shop-2" data-toggle="tab"><i class=" ti-view-list-alt "></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-filter-wrapper">
                            <div class="row">
                                <!-- Product Filter -->
                                <div class="col-md-3 col-sm-6 col-xs-12 mb-20">
                                    <div class="product-filter">
                                        <h5>Price</h5>
                                        <div class="price-filter">
                                            <ul>
                                                <li><a href="#">$0.00 - $20.00</a></li>
                                                <li><a href="#">$20.00 - $40.00</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Filter -->
                                <div class="col-md-3 col-sm-6 col-xs-12 mb-20">
                                    <div class="product-filter">
                                        <h5>color filters</h5>
                                        <div class="color-filter">
                                            <ul>
                                                <li><a href="#">Blue</a></li>
                                                <li><a href="#">Brown</a></li>
                                                <li><a href="#">Green</a></li>
                                                <li><a href="#">Pink</a></li>
                                                <li><a href="#">Violet</a></li>
                                                <li><a href="#">White</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Filter -->
                                <div class="col-md-3 col-sm-6 col-xs-12 mb-20">
                                    <div class="product-filter">
                                        <h5>product tags</h5>
                                        <div class="product-tags">
                                            <ul>
                                                <li><a href="#">Airi</a></li>
                                                <li><a href="#">Helas</a></li>
                                                <li><a href="#">Mango</a></li>
                                                <li><a href="#">Payna</a></li>
                                                <li><a href="#">Toro</a></li>
                                                <li><a href="#">Valention</a></li>
                                                <li><a href="#">Veera</a></li>
                                                <li><a href="#">Zara</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Filter -->
                                <div class="col-md-3 col-sm-6 col-xs-12 mb-20">
                                    <div class="product-filter">
                                        <h5>product size</h5>
                                        <div class="fliter-size">
                                            <ul>
                                                <li><a href="#">L</a></li>
                                                <li><a href="#">M</a></li>
                                                <li><a href="#">S</a></li>
                                                <li><a href="#">XL</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="filter-close-wrap text-center">
                                        <a class="filter-close" href="#"><i class="ti-close"></i> Clear All Filter</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content jump">
                            <div id="shop-1" class="tab-pane active">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                        <div class="product-wrap mb-40">
                                            <div class="product-img default-overlay mb-20">
                                                <a href="product-details.html">
                                                    <img class="default-img" src="{{asset('clients/images/product/hm-4-pro-1.jpg')}}" alt="">
                                                    <img class="hover-img" src="{{asset('clients/images/product/hm-4-pro-1-2.jpg')}}" alt="">
                                                </a>
                                                <div class="product-action">
                                                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-zoom-in"></i><span>Quick Shop</span></a>
                                                    <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                    <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                </div>
                                                <div class="product-action-2">
                                                    <a title="Buy on Themeforest" href="#">Buy on Themeforest</a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="product-details.html">Wrap soft fabric blouse</a></h3>
                                                <div class="product-price">
                                                    <span>$29.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                        <div class="product-wrap mb-40">
                                            <div class="product-img default-overlay mb-20">
                                                <a href="product-details.html">
                                                    <img class="default-img" src="{{asset('clients/images/product/hm-4-pro-2.jpg')}}" alt="">
                                                    <img class="hover-img" src="{{asset('clients/images/product/hm-4-pro-2-2.jpg')}}" alt="">
                                                </a>
                                                <div class="product-action">
                                                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-zoom-in"></i><span>Quick Shop</span></a>
                                                    <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                    <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                </div>
                                                <div class="product-action-2">
                                                    <a title="Select options" href="#">Select options</a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="product-details.html">Satin floral dress</a></h3>
                                                <div class="product-price">
                                                    <span>$75.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                        <div class="product-wrap mb-40">
                                            <div class="product-img default-overlay mb-20">
                                                <a href="product-details.html">
                                                    <img class="default-img" src="{{asset('clients/images/product/hm-4-pro-3.jpg')}}" alt="">
                                                    <img class="hover-img" src="{{asset('clients/images/product/hm-4-pro-3-2.jpg')}}" alt="">
                                                </a>
                                                <div class="product-action">
                                                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-zoom-in"></i><span>Quick Shop</span></a>
                                                    <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                    <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                </div>
                                                <div class="product-action-2">
                                                    <a title="Add To Cart" href="#">Add to cart</a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="product-details.html">Slim-fit dark wash Patrick</a></h3>
                                                <div class="product-price">
                                                    <span>$65.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                        <div class="product-wrap mb-40">
                                            <div class="product-img default-overlay mb-20">
                                                <a href="product-details.html">
                                                    <img class="default-img" src="{{asset('clients/images/product/hm-1-pro-1.jpg')}}" alt="">
                                                    <img class="hover-img" src="{{asset('clients/images/product/hm-1-pro-1-2.jpg')}}" alt="">
                                                </a>
                                                <div class="product-action">
                                                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-zoom-in"></i><span>Quick Shop</span></a>
                                                    <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                    <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                </div>
                                                <div class="product-action-2">
                                                    <a title="Add To Cart" href="#">Add to cart</a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="product-details.html">Slim-fit cotton shirt</a></h3>
                                                <div class="product-price">
                                                    <span>$41.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                        <div class="product-wrap mb-40">
                                            <div class="product-img default-overlay mb-20">
                                                <a href="product-details.html">
                                                    <img class="default-img" src="{{asset('clients/images/product/hm-1-pro-2.jpg')}}" alt="">
                                                    <img class="hover-img" src="{{asset('clients/images/product/hm-1-pro-2-2.jpg')}}" alt="">
                                                    <span class="price-dec">-17.9%</span>
                                                </a>
                                                <div class="product-action">
                                                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-zoom-in"></i><span>Quick Shop</span></a>
                                                    <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                    <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                </div>
                                                <div class="product-action-2">
                                                    <a title="Read more" href="product-details.html">Read more</a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="product-details.html">Long shirt dress</a></h3>
                                                <div class="product-price">
                                                    <span class="old">$60.00</span>
                                                    <span>$50.00</span>
                                                </div>
                                                <div class="product-rating">
                                                    <i class="yellow fa fa-star"></i>
                                                    <i class="yellow fa fa-star"></i>
                                                    <i class="yellow fa fa-star"></i>
                                                    <i class="yellow fa fa-star"></i>
                                                    <i class=" fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                        <div class="product-wrap mb-40">
                                            <div class="product-img default-overlay mb-20">
                                                <a href="product-details.html">
                                                    <img class="default-img" src="{{asset('clients/images/product/hm-1-pro-3.jpg')}}" alt="">
                                                    <img class="hover-img" src="{{asset('clients/images/product/hm-1-pro-3-2.jpg')}}" alt="">
                                                </a>
                                                <div class="product-action">
                                                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-zoom-in"></i><span>Quick Shop</span></a>
                                                    <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                    <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                </div>
                                                <div class="product-action-2">
                                                    <a title="Add To Cart" href="#">Add to cart</a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="product-details.html">High Collar Jacket</a></h3>
                                                <div class="product-price">
                                                    <span>$60.00</span>
                                                </div>
                                                <div class="product-rating">
                                                    <i class="yellow fa fa-star"></i>
                                                    <i class="yellow fa fa-star"></i>
                                                    <i class="yellow fa fa-star"></i>
                                                    <i class="yellow fa fa-star"></i>
                                                    <i class=" fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                        <div class="product-wrap mb-40">
                                            <div class="product-img default-overlay mb-20">
                                                <a href="product-details.html">
                                                    <img class="default-img" src="{{asset('clients/images/product/hm-1-pro-4.jpg')}}" alt="">
                                                    <img class="hover-img" src="{{asset('clients/images/product/hm-1-pro-4-2.jpg')}}" alt="">
                                                </a>
                                                <div class="product-action">
                                                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-zoom-in"></i><span>Quick Shop</span></a>
                                                    <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                    <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                </div>
                                                <div class="product-action-2">
                                                    <a title="View products" href="product-details.html">View products</a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="product-details.html">Off-shoulder striped dress</a></h3>
                                                <div class="product-price">
                                                    <span class="old">$70.00</span>
                                                    <span>$40.00</span>
                                                </div>
                                                <div class="product-rating">
                                                    <i class="yellow fa fa-star"></i>
                                                    <i class="yellow fa fa-star"></i>
                                                    <i class="yellow fa fa-star"></i>
                                                    <i class="yellow fa fa-star"></i>
                                                    <i class="yellow fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                        <div class="product-wrap mb-40">
                                            <div class="product-img default-overlay mb-20">
                                                <a href="product-details.html">
                                                    <img class="default-img" src="{{asset('clients/images/product/hm-1-pro-5.jpg')}}" alt="">
                                                    <img class="hover-img" src="{{asset('clients/images/product/hm-1-pro-5-2.jpg')}}" alt="">
                                                    <span class="out-of-stock">Out of stock</span>
                                                </a>
                                                <div class="product-action">
                                                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-zoom-in"></i><span>Quick Shop</span></a>
                                                    <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                    <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                </div>
                                                <div class="product-action-2">
                                                    <a title="Add To Cart" href="#">Add to cart</a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="product-details.html">Fine-knit cardigan</a></h3>
                                                <div class="product-price">
                                                    <span>$80.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                        <div class="product-wrap mb-40">
                                            <div class="product-img default-overlay mb-20">
                                                <a href="product-details.html">
                                                    <img class="default-img" src="{{asset('clients/images/product/hm-4-pro-5.jpg')}}" alt="">
                                                    <img class="hover-img" src="{{asset('clients/images/product/hm-4-pro-5-2.jpg')}}" alt="">
                                                </a>
                                                <div class="product-action">
                                                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-zoom-in"></i><span>Quick Shop</span></a>
                                                    <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                    <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                </div>
                                                <div class="product-action-2">
                                                    <a title="Buy on Themeforest" href="#">Buy on Themeforest</a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="product-details.html">Wrap soft fabric blouse</a></h3>
                                                <div class="product-price">
                                                    <span>$29.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                        <div class="product-wrap mb-40">
                                            <div class="product-img default-overlay mb-20">
                                                <a href="product-details.html">
                                                    <img class="default-img" src="{{asset('clients/images/product/hm-4-pro-6.jpg')}}" alt="">
                                                    <img class="hover-img" src="{{asset('clients/images/product/hm-4-pro-6-2.jpg')}}" alt="">
                                                    <span class="price-dec">-20.0%</span>
                                                </a>
                                                <div class="product-action">
                                                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-zoom-in"></i><span>Quick Shop</span></a>
                                                    <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                    <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                </div>
                                                <div class="product-action-2">
                                                    <a title="Select options" href="#">Select options</a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="product-details.html">Satin floral dress</a></h3>
                                                <div class="product-price">
                                                    <span>$75.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                        <div class="product-wrap mb-40">
                                            <div class="product-img default-overlay mb-20">
                                                <a href="product-details.html">
                                                    <img class="default-img" src="{{asset('clients/images/product/hm-4-pro-7.jpg')}}" alt="">
                                                    <img class="hover-img" src="{{asset('clients/images/product/hm-4-pro-7-2.jpg')}}" alt="">
                                                </a>
                                                <div class="product-action">
                                                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-zoom-in"></i><span>Quick Shop</span></a>
                                                    <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                    <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                </div>
                                                <div class="product-action-2">
                                                    <a title="Add To Cart" href="#">Add to cart</a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="product-details.html">Slim-fit dark wash Patrick</a></h3>
                                                <div class="product-price">
                                                    <span>$65.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                        <div class="product-wrap mb-40">
                                            <div class="product-img default-overlay mb-20">
                                                <a href="product-details.html">
                                                    <img class="default-img" src="{{asset('clients/images/product/hm-1-pro-8.jpg')}}" alt="">
                                                    <img class="hover-img" src="{{asset('clients/images/product/hm-1-pro-8-2.jpg')}}" alt="">
                                                </a>
                                                <div class="product-action">
                                                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-zoom-in"></i><span>Quick Shop</span></a>
                                                    <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                    <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                </div>
                                                <div class="product-action-2">
                                                    <a title="Add To Cart" href="#">Add to cart</a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="product-details.html">Slim-fit cotton shirt</a></h3>
                                                <div class="product-price">
                                                    <span>$41.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="shop-2" class="tab-pane ">
                                <div class="shop-list-wrap mb-70">
                                    <div class="row">
                                        <div class="col-32">
                                            <div class="product-wrap">
                                                <div class="product-img default-overlay">
                                                    <a href="product-details.html">
                                                        <img class="default-img" src="{{asset('clients/images/product/hm-1-pro-1.jpg')}}" alt="">
                                                        <img class="hover-img" src="{{asset('clients/images/product/hm-1-pro-1-2.jpg')}}" alt="">
                                                    </a>
                                                    <div class="shop-list-quickview">
                                                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-zoom-in"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-68">
                                            <div class="shop-list-content ml-20">
                                                <h3><a href="#">Long shirt dress</a></h3>
                                                <div class="pro-list-rating">
                                                    <i class="yellow fa fa-star"></i>
                                                    <i class="yellow fa fa-star"></i>
                                                    <i class="yellow fa fa-star"></i>
                                                    <i class="yellow fa fa-star"></i>
                                                    <i class="yellow fa fa-star"></i>
                                                </div>
                                                <div class="pro-list-price">
                                                    <span>$50.00</span>
                                                </div>
                                                <p>Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices…</p>
                                                <div class="product-list-action">
                                                    <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i></a>
                                                    <a title="Add to Compare" href="#"><i class="fa fa-files-o"></i></a>
                                                    <div class="pro-list-actioncart">
                                                        <a title="Add to cart" href="#">Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-list-wrap mb-70">
                                    <div class="row">
                                        <div class="col-32">
                                            <div class="product-wrap">
                                                <div class="product-img default-overlay">
                                                    <a href="product-details.html">
                                                        <img class="default-img" src="{{asset('clients/images/product/hm-1-pro-2.jpg')}}" alt="">
                                                        <img class="hover-img" src="{{asset('clients/images/product/hm-1-pro-2-2.jpg')}}" alt="">
                                                    </a>
                                                    <div class="shop-list-quickview">
                                                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-zoom-in"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-68">
                                            <div class="shop-list-content ml-20">
                                                <h3><a href="#">Wrap soft fabric blouse</a></h3>
                                                <div class="pro-list-rating">
                                                    <i class="yellow fa fa-star"></i>
                                                    <i class="yellow fa fa-star"></i>
                                                    <i class="yellow fa fa-star"></i>
                                                    <i class="yellow fa fa-star"></i>
                                                    <i class=" fa fa-star"></i>
                                                </div>
                                                <div class="pro-list-price">
                                                    <span class="old">$60.00</span>
                                                    <span>$50.00</span>
                                                </div>
                                                <p>Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices…</p>
                                                <div class="product-list-action">
                                                    <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i></a>
                                                    <a title="Add to Compare" href="#"><i class="fa fa-files-o"></i></a>
                                                    <div class="pro-list-actioncart">
                                                        <a title="Add to cart" href="#">Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-list-wrap mb-70">
                                    <div class="row">
                                        <div class="col-32">
                                            <div class="product-wrap">
                                                <div class="product-img default-overlay">
                                                    <a href="product-details.html">
                                                        <img class="default-img" src="{{asset('clients/images/product/hm-1-pro-3.jpg')}}" alt="">
                                                        <img class="hover-img" src="{{asset('clients/images/product/hm-1-pro-3-2.jpg')}}" alt="">
                                                    </a>
                                                    <div class="shop-list-quickview">
                                                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-zoom-in"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-68">
                                            <div class="shop-list-content ml-20">
                                                <h3><a href="#">Camp-collar blouse</a></h3>
                                                <div class="pro-list-rating">
                                                    <i class="yellow fa fa-star"></i>
                                                    <i class="yellow fa fa-star"></i>
                                                    <i class="yellow fa fa-star"></i>
                                                    <i class="yellow fa fa-star"></i>
                                                    <i class="yellow fa fa-star"></i>
                                                </div>
                                                <div class="pro-list-price">
                                                    <span>$70.00</span>
                                                </div>
                                                <p>Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices…</p>
                                                <div class="product-list-action">
                                                    <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i></a>
                                                    <a title="Add to Compare" href="#"><i class="fa fa-files-o"></i></a>
                                                    <div class="pro-list-actioncart">
                                                        <a title="Add to cart" href="#">Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-list-wrap mb-70">
                                    <div class="row">
                                        <div class="col-32">
                                            <div class="product-wrap">
                                                <div class="product-img default-overlay">
                                                    <a href="product-details.html">
                                                        <img class="default-img" src="{{asset('clients/images/product/hm-1-pro-1.jpg')}}" alt="">
                                                        <img class="hover-img" src="{{asset('clients/images/product/hm-1-pro-1-2.jpg')}}" alt="">
                                                    </a>
                                                    <div class="shop-list-quickview">
                                                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-zoom-in"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-68">
                                            <div class="shop-list-content ml-20">
                                                <h3><a href="#">Soho skinny jeans</a></h3>
                                                <div class="pro-list-rating">
                                                    <i class="yellow fa fa-star"></i>
                                                    <i class="yellow fa fa-star"></i>
                                                    <i class="yellow fa fa-star"></i>
                                                    <i class="yellow fa fa-star"></i>
                                                    <i class=" fa fa-star"></i>
                                                </div>
                                                <div class="pro-list-price">
                                                    <span class="old">$40.00</span>
                                                    <span>$30.00</span>
                                                </div>
                                                <p>Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices…</p>
                                                <div class="product-list-action">
                                                    <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i></a>
                                                    <a title="Add to Compare" href="#"><i class="fa fa-files-o"></i></a>
                                                    <div class="pro-list-actioncart">
                                                        <a title="Add to cart" href="#">Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-list-wrap mb-70">
                                    <div class="row">
                                        <div class="col-32">
                                            <div class="product-wrap">
                                                <div class="product-img default-overlay">
                                                    <a href="product-details.html">
                                                        <img class="default-img" src="{{asset('clients/images/product/hm-1-pro-4.jpg')}}" alt="">
                                                        <img class="hover-img" src="{{asset('clients/images/product/hm-1-pro-4-2.jpg')}}" alt="">
                                                    </a>
                                                    <div class="shop-list-quickview">
                                                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-zoom-in"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-68">
                                            <div class="shop-list-content ml-20">
                                                <h3><a href="#">Satin floral dress</a></h3>
                                                <div class="pro-list-rating">
                                                    <i class="yellow fa fa-star"></i>
                                                    <i class="yellow fa fa-star"></i>
                                                    <i class="yellow fa fa-star"></i>
                                                    <i class="yellow fa fa-star"></i>
                                                    <i class="yellow fa fa-star"></i>
                                                </div>
                                                <div class="pro-list-price">
                                                    <span>$50.00</span>
                                                </div>
                                                <p>Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices…</p>
                                                <div class="product-list-action">
                                                    <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i></a>
                                                    <a title="Add to Compare" href="#"><i class="fa fa-files-o"></i></a>
                                                    <div class="pro-list-actioncart">
                                                        <a title="Add to cart" href="#">Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pro-pagination-style text-center">
                                <ul>
                                    <li><a class="active" href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#"><i class=" ti-arrow-right "></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    {{-- sidebar --}}
                    @include('client.component.sidebar')
                </div>
            </div>
        </div>
@endsection
