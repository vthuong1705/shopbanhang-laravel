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
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- cart end -->
@endsection
