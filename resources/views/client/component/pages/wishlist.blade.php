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
                                @foreach ($wishlist as $value)
                        {{-- @dd($value) --}}
                                @foreach ($product as $a)
                                {{-- @dd($a->name) --}}
                                <tr>
                                    <td class="product-remove">
                                        <a href="{{route('client.delete-wishlist',$value->id)}}"><i class=" ti-close"></i></a>
                                    </td>
                                    <td>{{$loop->index+1}}</td>
                                    <td class="product-name"><a href="#">{{$value->proName}}</a></td>
                                    <td class="product-img">
                                        <a href="#"><img src="" width="100px" alt=""></a>
                                    </td>
                                    <td class="product-price"><span class="amount"></span></td>
                                    <td class="cart-quality">
                                        <div class="quickview-quality quality-height-dec2">
                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box" type="text" name="qtybutton" value="">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product-wishlist-cart"><a href="{{route('client.cart',$a->id_detail)}}">add to cart</a></td>
                                </tr>
                                @endforeach
                                @endforeach
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
