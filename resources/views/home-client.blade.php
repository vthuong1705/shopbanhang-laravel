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
                    <div class="shop-top-bar-right">
                        <div class="shop-filter">
                            <a class="shop-filter-active" href="#">Filters <i class="fa fa-angle-down angle-down"></i>
                                <i class="fa fa-angle-up angle-up"></i></a>
                        </div>
                        <div class="shop-short-by ml-30">
                            <span>Sort by <i class="fa fa-angle-down angle-down"></i> <i
                                    class="fa fa-angle-up angle-up"></i></span>
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
                        <!-- Product Filter -->
                        <div class="col-md-3 col-sm-6 col-xs-12 mb-20">
                            <div class="product-filter">
                                <h5>product size</h5>
                                <div class="fliter-size">
                                    <ul>
                                        @foreach ($size as $value)
                                        <li><a href="">{{$value->name}}</a></li>
                                        @endforeach

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
                            @foreach($product as $value)
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img default-overlay mb-20">
                                        <a href="product-details.html">
                                            <img class="default-img"
                                                src="{{asset($value->avatar)}}" alt="">
                                            <img class="hover-img"
                                                src="{{asset('clients/images/product/hm-4-pro-1-2.jpg')}}" alt="">
                                        </a>
                                        <div class="product-action">
                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View"
                                                href="#"><i class=" ti-zoom-in"></i><span>Quick Shop</span></a>
                                            <a title="Wishlist" href=""><i class=" ti-heart "></i><span>Add to
                                                    Wishlist</span></a>
                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to
                                                    Compare</span></a>
                                        </div>
                                        <div class="product-action-2">
                                            <a title="Buy on Themeforest" href="#">Buy on Themeforest</a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="product-details.html">{{$value->name}}</a></h3>
                                        <div class="product-price">
                                            <span>$29.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    {{$product->links()}}
                </div>
            </div>
            {{-- sidebar --}}
            @include('client.component.sidebar')
        </div>
    </div>
</div>
@endsection
