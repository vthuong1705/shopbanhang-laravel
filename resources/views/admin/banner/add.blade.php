@extends('admin.master')
@section('content')
@section('title','thêm banner')
@section('name_page','add banner')
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
                    <form action="{{route('banner.store')}}" method="POST" role="form" enctype="multipart/form-data">
                        @csrf
                        <legend>thêm mới banner</legend>

                        <div class="form-group">
                            <label for="">tên banner</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                placeholder="nhập tên banner">
                            @error('name')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">tiêu đề</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                                placeholder="nhập tiêu đề banner">
                            @error('title')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">nội dung</label>
                            <input type="text" class="form-control @error('content') is-invalid @enderror" name="content"
                                placeholder="nhập nội dung banner">
                            @error('content')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">ảnh</label>
                            <input type="file" class="form-control @error('img_banner') is-invalid @enderror" name="img_banner"> @error('img_banner')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="status" id="input" value="1" checked="checked">
                                hiện
                            </label>
                            <label>
                                <input type="radio" name="status" id="input" value="0">
                                ẩn
                            </label>
                        </div>

                        <button type="submit" class="btn btn-primary">thêm mới</button>
                    </form>
                </div>

            </div>


        </div>
        <!-- container-fluid -->

    </div>
    @endsection
