@extends('admin.master')
@section('content')
@section('title','Quản lý đơn hàng')
@section('name_page','order')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">@yield('name_page')</h4>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">shop bán hàng</a></li>
                            <li class="breadcrumb-item active">@yield('name_page')</li>
                        </ol>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end page-title -->
            <div class="row">
                <table class="table table-hover ">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tên người đặt hàng</th>
                            <th>Mã sản phẩm</th>
                            <th>Giá</th>
                            <th>số lượng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order_detail as $value)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$value->name}}</td>
                            <td>{{$value->sku}}</td>
                            <td>{{number_format($value->price)}} VND</td>
                            <td>{{$value->quantity}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


        </div>
        <!-- container-fluid -->

    </div>

    @endsection
