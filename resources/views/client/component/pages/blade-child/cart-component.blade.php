<div class="cart-main-area pt-95 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="table-content table-responsive cart-table-content">
                            <table id="tb">
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
                                <tbody id="body">
                                    @csrf
                                    @foreach ($cart as $item)
                                    <tr>
                                        <td class="product-remove">
                                            <a href="#"><i class=" ti-close"></i></a>
                                        </td>
                                        <td class="product-img">
                                            <a href="#"><img src="{{asset($item['image'])}}" alt=""></a>
                                        </td>
                                        <td class="product-name"><a href="#">{{$item['name']}}</a></td>
                                        <td class="product-price"><span class="amount">{{number_format($item['price'])}}
                                                VND</span></td>
                                        <td class="cart-quality">
                                            <input class="cart-plus-minus-box quantity" type="number" name="qtybutton"
                                                value="{{$item['quantity']}}" data-id="{{$item['id']}}">
                                        </td>
                                        <td class="product-total">
                                            <span>{{number_format($item['price']*$item['quantity'])}} VND</span></td>
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
                                    <li>tổng tiền: <span>{{number_format($cartHelper->total_price)}} VND</span></li>
                                    <li>thuế: <span> {{$cartHelper->tax}}</span></li>
                                    <li>thanh toán: <span>{{number_format($cartHelper->into_money)}} VND</span> </li>
                                </ul>
                            </div>
                            <div class="grand-btn">
                                <a href="#">Proceed to checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
