@extends('client.master')
@section('content')

<div class="breadcrumb-area bg-gray-2 section-padding-1 pt-200 pb-120">
    <div class="container-fluid">
        <div class="breadcrumb-content text-center">
            <div class="breadcrumb-title">
                <h2>Wishlist</h2>
            </div>
            <ul>
                <li>
                    <a href="index.html">Home </a>
                </li>
                <li><span> > </span></li>
                <li class="active">Wishlist</li>
            </ul>
        </div>
    </div>
</div>
<!-- cart start -->
<div class="cart-main-area pt-95 pb-100">
    <div class="container">
        <div class="row">
            <div class="ml-auto mr-auto col-lg-8 col-md-12 col-sm-12 col-12">
                <form action="#">
                    <div class="table-content table-responsive cart-table-content">
                        <table>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th>Product</th>
                                    <th> Price</th>
                                    <th>Quantity</th>
                                    <th>Add To Cart</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="product-remove">
                                        <a href="#"><i class=" ti-close"></i></a>
                                    </td>
                                    <td class="product-img">
                                        <a href="#"><img src="assets/images/cart/cart-3.jpg" alt=""></a>
                                    </td>
                                    <td class="product-name"><a href="#">High Collar Jacket</a></td>
                                    <td class="product-price"><span class="amount">$26.00</span></td>
                                    <td class="cart-quality">
                                        <div class="quickview-quality quality-height-dec2">
                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product-wishlist-cart"><a href="#">add to cart</a></td>
                                </tr>
                                <tr>
                                    <td class="product-remove">
                                        <a href="#"><i class=" ti-close"></i></a>
                                    </td>
                                    <td class="product-img">
                                        <a href="#"><img src="assets/images/cart/cart-4.jpg" alt=""></a>
                                    </td>
                                    <td class="product-name"><a href="#">High Collar Jacket</a></td>
                                    <td class="product-price"><span class="amount">$26.00</span></td>
                                    <td class="cart-quality">
                                        <div class="quickview-quality quality-height-dec2">
                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product-wishlist-cart"><a href="#">add to cart</a></td>
                                </tr>
                                <tr>
                                    <td class="product-remove">
                                        <a href="#"><i class=" ti-close"></i></a>
                                    </td>
                                    <td class="product-img">
                                        <a href="#"><img src="assets/images/cart/cart-3.jpg" alt=""></a>
                                    </td>
                                    <td class="product-name"><a href="#">High Collar Jacket</a></td>
                                    <td class="product-price"><span class="amount">$26.00</span></td>
                                    <td class="cart-quality">
                                        <div class="quickview-quality quality-height-dec2">
                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product-wishlist-cart"><a href="#">add to cart</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- cart end -->
<footer class="footer-area section-padding-1 bg-black pt-70">
    <div class="container-fluid">
        <div class="row">
            <div class="footer-column footer-width-32">
                <div class="footer-widget mb-40">
                    <div class="footer-about">
                        <div class="footer-logo">
                            <a href="index.html"><img src="assets/images/logo/logo-white.png" alt="logo"></a>
                        </div>
                        <div class="footer-info">
                            <ul>
                                <li><a href="#"> info@example.com </a></li>
                                <li> +54.854.854.6666 </li>
                                <li> 035 Virginia Plaza Suite 331 </li>
                            </ul>
                        </div>
                        <div class="footer-social">
                            <ul>
                                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="youtube" href="#"><i class="fa fa-youtube"></i></a></li>
                                <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-column footer-width-12">
                <div class="footer-widget mb-40">
                    <div class="footer-title">
                        <h3>COMPANY</h3>
                    </div>
                    <div class="footer-list">
                        <ul>
                            <li><a href="#">Help</a></li>
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">Gift voucher</a></li>
                            <li><a href="#">Affiliate</a></li>
                            <li><a href="#">Work for Payna</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-column footer-width-12">
                <div class="footer-widget mb-40">
                    <div class="footer-title">
                        <h3>USERFUL</h3>
                    </div>
                    <div class="footer-list">
                        <ul>
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Press</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-column footer-width-12">
                <div class="footer-widget mb-40">
                    <div class="footer-title">
                        <h3>QUICKLINKS</h3>
                    </div>
                    <div class="footer-list">
                        <ul>
                            <li><a href="#">The Collections</a></li>
                            <li><a href="#">Size Guide</a></li>
                            <li><a href="compare.html">Compare</a></li>
                            <li><a href="my-account.html">My Account</a></li>
                            <li><a href="wishlist.html">My Account</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-column footer-width-31">
                <div class="footer-widget subscribe-right mb-40">
                    <div class="footer-title">
                        <h3>JOIN OUR NEWSLETTER</h3>
                    </div>
                    <div id="mc_embed_signup" class="subscribe-form mt-20">
                        <form id="mc-embedded-subscribe-form" class="validate subscribe-form-style" novalidate="" target="_blank" name="mc-embedded-subscribe-form" method="post" action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef">
                            <div id="mc_embed_signup_scroll" class="mc-form">
                                <input class="email" type="email" required="" placeholder="Enter your email address..." name="EMAIL" value="">
                                <div class="mc-news" aria-hidden="true">
                                    <input type="text" value="" tabindex="-1" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef">
                                </div>
                                <div class="clear">
                                    <input id="mc-embedded-subscribe" class="button" type="submit" name="subscribe" value="Subscribe">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright text-center pt-25 pb-10">
            <p>© Payna Store All rights reserved </p>
        </div>
    </div>
</footer>
<div class="support-lists">
    <ul>
        <li><a href="#"><i class=" ti-comments "></i></a></li>
        <li><a href="#"><i class=" ti-headphone-alt "></i></a></li>
        <li><a href="#"><i class=" ti-email "></i></a></li>
    </ul>
</div>
<div class="view-demo-area">
    <a class="view-demo-btn-active" href="#">More Demos</a>
    <div class="view-demo-aside-active">
        <div class="view-demo-wrap">
            <div class="view-demo-tab-list nav">
                <a class="active" href="#view-demo-1" data-toggle="tab">
                    Demo Group 01
                </a>
                <a href="#view-demo-2" data-toggle="tab">
                    Demo Group 02
                </a>
            </div>
            <div class="tab-content jump-2">
                <div id="view-demo-1" class="tab-pane active">
                    <div class="row">
                        <div class="col-md-6 col-12 col-sm-6">
                            <div class="demo-item mb-40">
                                <div class="demo-item-img">
                                    <a href="index.html">
                                        <img src="assets/images/view-demo/h-1.jpg" alt="demo-img">
                                        <span>View Demo</span>
                                    </a>
                                </div>
                                <div class="demo-item-content">
                                    <h4><a href="index.html">Home Demo 01</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 col-sm-6">
                            <div class="demo-item mb-40">
                                <div class="demo-item-img">
                                    <a href="index-2.html">
                                        <img src="assets/images/view-demo/h-2.jpg" alt="demo-img">
                                        <span>View Demo</span>
                                    </a>
                                </div>
                                <div class="demo-item-content">
                                    <h4><a href="index-2.html">Home Demo 02</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 col-sm-6">
                            <div class="demo-item mb-40">
                                <div class="demo-item-img">
                                    <a href="index-3.html">
                                        <img src="assets/images/view-demo/h-3.jpg" alt="demo-img">
                                        <span>View Demo</span>
                                    </a>
                                </div>
                                <div class="demo-item-content">
                                    <h4><a href="index-3.html">Home Demo 03</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 col-sm-6">
                            <div class="demo-item mb-40">
                                <div class="demo-item-img">
                                    <a href="index-4.html">
                                        <img src="assets/images/view-demo/h-4.jpg" alt="demo-img">
                                        <span>View Demo</span>
                                    </a>
                                </div>
                                <div class="demo-item-content">
                                    <h4><a href="index-4.html">Home Demo 04</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 col-sm-6">
                            <div class="demo-item mb-40">
                                <div class="demo-item-img">
                                    <a href="index-5.html">
                                        <img src="assets/images/view-demo/h-5.jpg" alt="demo-img">
                                        <span>View Demo</span>
                                    </a>
                                </div>
                                <div class="demo-item-content">
                                    <h4><a href="index-5.html">Home Demo 05</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 col-sm-6">
                            <div class="demo-item mb-40">
                                <div class="demo-item-img">
                                    <a href="index-6.html">
                                        <img src="assets/images/view-demo/h-6.jpg" alt="demo-img">
                                        <span>View Demo</span>
                                    </a>
                                </div>
                                <div class="demo-item-content">
                                    <h4><a href="index-6.html">Home Demo 06</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 col-sm-6">
                            <div class="demo-item mb-40">
                                <div class="demo-item-img">
                                    <a href="index-7.html">
                                        <img src="assets/images/view-demo/h-7.jpg" alt="demo-img">
                                        <span>View Demo</span>
                                    </a>
                                </div>
                                <div class="demo-item-content">
                                    <h4><a href="index-7.html">Home Demo 07</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 col-sm-6">
                            <div class="demo-item mb-40">
                                <div class="demo-item-img">
                                    <a href="index-8.html">
                                        <img src="assets/images/view-demo/h-8.jpg" alt="demo-img">
                                        <span>View Demo</span>
                                    </a>
                                </div>
                                <div class="demo-item-content">
                                    <h4><a href="index-8.html">Home Demo 08</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 col-sm-6">
                            <div class="demo-item mb-40">
                                <div class="demo-item-img">
                                    <a href="index-9.html">
                                        <img src="assets/images/view-demo/h-9.jpg" alt="demo-img">
                                        <span>View Demo</span>
                                    </a>
                                </div>
                                <div class="demo-item-content">
                                    <h4><a href="index-9.html">Home Demo 09</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 col-sm-6">
                            <div class="demo-item mb-40">
                                <div class="demo-item-img">
                                    <a href="index-10.html">
                                        <img src="assets/images/view-demo/h-10.jpg" alt="demo-img">
                                        <span>View Demo</span>
                                    </a>
                                </div>
                                <div class="demo-item-content">
                                    <h4><a href="index-10.html">Home Demo 10</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="discover-more-btn">
                        <a href="#">Discover More</a>
                    </div>
                </div>
                <div id="view-demo-2" class="tab-pane">
                    <div class="row">
                        <div class="col-md-6 col-12 col-sm-6">
                            <div class="demo-item mb-40">
                                <div class="demo-item-img">
                                    <a href="index-11.html">
                                        <img src="assets/images/view-demo/h-11.jpg" alt="demo-img">
                                        <span>View Demo</span>
                                    </a>
                                </div>
                                <div class="demo-item-content">
                                    <h4><a href="index-11.html">Home Demo 11</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 col-sm-6">
                            <div class="demo-item mb-40">
                                <div class="demo-item-img">
                                    <a href="index-12.html">
                                        <img src="assets/images/view-demo/h-12.jpg" alt="demo-img">
                                        <span>View Demo</span>
                                    </a>
                                </div>
                                <div class="demo-item-content">
                                    <h4><a href="index-12.html">Home Demo 12</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 col-sm-6">
                            <div class="demo-item mb-40">
                                <div class="demo-item-img">
                                    <a href="index-13.html">
                                        <img src="assets/images/view-demo/h-13.jpg" alt="demo-img">
                                        <span>View Demo</span>
                                    </a>
                                </div>
                                <div class="demo-item-content">
                                    <h4><a href="index-13.html">Home Demo 13</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 col-sm-6">
                            <div class="demo-item mb-40">
                                <div class="demo-item-img">
                                    <a href="index-14.html">
                                        <img src="assets/images/view-demo/h-14.jpg" alt="demo-img">
                                        <span>View Demo</span>
                                    </a>
                                </div>
                                <div class="demo-item-content">
                                    <h4><a href="index-14.html">Home Demo 14</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 col-sm-6">
                            <div class="demo-item mb-40">
                                <div class="demo-item-img">
                                    <a href="index-15.html">
                                        <img src="assets/images/view-demo/h-15.jpg" alt="demo-img">
                                        <span>View Demo</span>
                                    </a>
                                </div>
                                <div class="demo-item-content">
                                    <h4><a href="index-15.html">Home Demo 15</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 col-sm-6">
                            <div class="demo-item mb-40">
                                <div class="demo-item-img">
                                    <a href="index-16.html">
                                        <img src="assets/images/view-demo/h-16.jpg" alt="demo-img">
                                        <span>View Demo</span>
                                    </a>
                                </div>
                                <div class="demo-item-content">
                                    <h4><a href="index-16.html">Home Demo 16</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 col-sm-6">
                            <div class="demo-item mb-40">
                                <div class="demo-item-img">
                                    <a href="index-17.html">
                                        <img src="assets/images/view-demo/h-17.jpg" alt="demo-img">
                                        <span>View Demo</span>
                                    </a>
                                </div>
                                <div class="demo-item-content">
                                    <h4><a href="index-17.html">Home Demo 17</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 col-sm-6">
                            <div class="demo-item mb-40">
                                <div class="demo-item-img">
                                    <a href="index-18.html">
                                        <img src="assets/images/view-demo/h-18.jpg" alt="demo-img">
                                        <span>View Demo</span>
                                    </a>
                                </div>
                                <div class="demo-item-content">
                                    <h4><a href="index-18.html">Home Demo 18</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="discover-more-btn">
                        <a href="#">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
