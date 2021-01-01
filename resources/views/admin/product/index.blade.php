@extends('admin.master')
@section('content')
@section('title','danh sách sản phẩm')
@section('name_page','product')
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
            @if (session()->has('success'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>{{session('success')}}</strong>
            </div>
            @endif
            <div class="row">

                <a href="{{route('product.create')}}" class="btn btn-success m-2">thêm danh mục</a>
                <table class="table table-hover ">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>tên sản phẩm</th>
                            <th>danh mục</th>
                            <th>thương hiệu</th>
                            <th>giá sản phẩm</th>
                            <th>giá khuyễn mãi</th>
                            <th>số lượng</th>
                            <th>ảnh đại diện</th>
                            <th>mô tả</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($product as $value)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$value->name}}</td>
                            <td>{{$value->cateName}}</td>
                            <td>{{$value->brandName}}</td>
                            <td>{{number_format($value->price)}} VND</td>
                            <td>{{$value->discount}}%</td>
                            <td>{{$value->quantity}}</td>
                            <td><img src="{{asset($value->avatar)}}" alt="" style="width:50px"></td>
                            <td>{{$value->desc}}</td>
                            <td>
                                <a href="{{route('product.edit',$value->id)}}" class="btn btn-success">sửa</a>
                                <a href="" data-url="{{route('product.delete',$value->id)}}" class="btn btn-danger action_delete">xóa</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
            <div class="d-felx justify-content-center">

                {{-- {{ $cate->links() }} --}}

            </div>

        </div>
        <!-- container-fluid -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script src="{{asset('admins/query/delete.js')}}"></script>
    </div>
    @endsection
