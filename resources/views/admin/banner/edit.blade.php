@extends('admin.master')
@section('content')
@section('title','sửa banner')
@section('name_page','edit banner')
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
                    <form action="{{route('banner.update',$banner->id)}}" method="POST" role="form" enctype="multipart/form-data">
                        @csrf
                        <legend>thêm mới banner</legend>

                        <div class="form-group">
                            <label for="">tên banner</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                value="{{$banner->name}}">
                            @error('name')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">tiêu đề</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                            value="{{$banner->title}}">
                            @error('title')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">nội dung</label>
                            <textarea type="text" class="form-control @error('content') is-invalid @enderror" name="content"
                                rows="4">{{$banner->content}}</textarea>
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
                        <img src="{{asset($banner->img_banner)}}" style="width: 300px" alt="">
                        <div class="radio">
                            <label>
                                <input type="radio" name="status" id="input" value="{{$banner->status}}" {{$banner->status==1?'checked':''}}>
                                hiện
                            </label>
                            <label>
                                <input type="radio" name="status" id="input" value="{{$banner->status}}" {{$banner->status==0?'checked':''}}>
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
