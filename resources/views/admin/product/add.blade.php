@extends('admin.master')
@section('content')
@section('title','thêm danh mục')
@section('name_page','add category')
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

                <div class="col-md-6">
                    <form action="{{route('product.store')}}" method="POST" role="form" enctype="multipart/form-data">
                        @csrf
                        <legend>thêm mới sản phẩm</legend>

                        <div class="form-group">
                            <label for="">tên sản phẩm</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                placeholder="nhập tên danh mục">
                            @error('name')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">giá sản phẩm</label>
                            <input type="number" min="1" class="form-control @error('price') is-invalid @enderror" name="price"
                                placeholder="nhập giá sản phẩm">
                            @error('price')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">giá khuyến mại</label>
                            <input type="number" min="0" max="100" class="form-control @error('sale_price') is-invalid @enderror"
                                name="sale_price" placeholder="nhập giá khuyến mại">
                            @error('sale_price')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">danh mục sản phẩm</label>
                            <select name="cat_id" id="input" class="form-control" required="required">
                                @foreach ($cate as $value)
                                <option value="{{$value->id}}">{{$value->name}}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="">thương hiệu</label>
                            <select name="brand_id" id="input" class="form-control" required="required">
                                @foreach ($brand as $value)
                                <option value="{{$value->id}}">{{$value->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">ảnh đại diện</label>
                            <input type="file" class="form-control @error('avatar') is-invalid @enderror"
                                name="avatar">
                            @error('avatar')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">ảnh mô tả</label>
                            <input type="file" multiple class="form-control @error('image') is-invalid @enderror"
                                name="image[]">
                            @error('image')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">mô tả</label>
                            <textarea type="text" class="form-control @error('desc') is-invalid @enderror" name="desc"
                                placeholder="mô tả" rows="4"></textarea>
                            @error('desc')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">thêm mới</button>
                    </form>
                </div>

            </div>


        </div>
        <!-- container-fluid -->

    </div>
    @endsection
