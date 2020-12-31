@extends('admin.master')
@section('content')
@section('title','trang quản trị')
@section('name_page','trang quản trị')
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
                <div class="panel panel-info">
                      <div class="panel-heading">
                            <h3 class="panel-title">thông tin cá nhân</h3>
                      </div>
                      <div class="panel-body">
                          <p>{{$admin->id}}</p>
                            <p>username: {{$admin->name}}</p>
                            <p>email: {{$admin->email}}</p>
                            <p>phone: {{$admin->phone}}</p>
                            <a href="{{route('profile.edit',$admin->id)}}" class="btn btn-success">chỉnh sửa thông tin cá nhân</a>
                      </div>
                </div>

            </div>


        </div>
        <!-- container-fluid -->

    </div>
@endsection
