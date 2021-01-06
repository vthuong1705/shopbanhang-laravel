@extends('client.master')
@section('title','trang client')
@section('name_page','')
@section('content')
<div class="breadcrumb-area bg-gray-2 section-padding-1 pt-200 pb-120">
    <div class="container-fluid">
        <div class="breadcrumb-content text-center">
            <div class="breadcrumb-title">
                <h2>Cart</h2>
            </div>
            <ul>
                <li>
                    <a href="index.html">Home </a>
                </li>
                <li><span> > </span></li>
                <li class="active">Cart</li>
            </ul>
        </div>
    </div>
</div>
<!-- cart start -->
<div class="cart-main-area pt-95 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <form action="#">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="table-content table-responsive cart-table-content">
                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th>Product</th>
                                            <th> Price</th>
                                            <th>Quantity</th>
                                            <th>total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cart as $item)
                                        <tr>
                                            <td class="product-remove">
                                                <a href="#"><i class=" ti-close"></i></a>
                                            </td>
                                            <td class="product-img">
                                                <a href="#"><img src="assets/images/cart/cart-4.jpg" alt=""></a>
                                            </td>
                                            <td class="product-name"><a href="#">{{$item['name']}}</a></td>
                                            <td class="product-price"><span class="amount">{{number_format($item['price'])}} VND</span></td>
                                            <td class="cart-quality">
                                                <div class="quickview-quality quality-height-dec2">
                                                    <div class="cart-plus-minus">
                                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="{{$item['quantity']}}">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="product-total"><span>$110.00</span></td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <div class="cart-shiping-update-wrapper">
                                <div class="discount-code">
                                    <input type="text" required="" name="name" placeholder="Coupon code">
                                    <button class="coupon-btn" type="submit">Apply coupon</button>
                                </div>
                                <div class="cart-clear">
                                    <a href="#">Clear Cart</a>
                                    <a href="#">Update cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="grand-total-wrap">
                                <h4>Cart totals</h4>
                                <div class="grand-total-content">
                                    <ul>
                                        <li>Subtotal <span> $87.00</span></li>
                                        <li>Total <span>$87.00</span> </li>
                                    </ul>
                                </div>
                                <div class="grand-btn">
                                    <a href="#">Proceed to checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
