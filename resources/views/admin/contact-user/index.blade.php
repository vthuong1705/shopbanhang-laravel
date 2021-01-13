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
                @foreach ($contact_user as $item)

                <div class="panel panel-info">
                      <div class="panel-heading">
                            <h5 class="panel-title">{{$item->name}}</h5>
                      </div>
                      <div class="panel-body">
                            {{$item->content}}
                      </div>
                </div>

                @endforeach
            </div>


        </div>
        <!-- container-fluid -->

    </div>
@endsection
