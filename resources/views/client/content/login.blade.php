@extends('client.master')
@section('title','trang client')
@section('name_page','')
@section('content')
<style>
    .login{
        margin:  0 auto
    }
    .login h3{
        text-align: center
    }
</style>
<div class="breadcrumb-area bg-gray-2 section-padding-1 pt-200 pb-120">
    <div class="container-fluid">
        <div class="breadcrumb-content text-center">
            <div class="breadcrumb-title">
                <h2>Login / Register</h2>
            </div>
            <ul>
                <li>
                    <a href="index.html">Home </a>
                </li>
                <li><span> > </span></li>
                <li class="active">Login / Register</li>
            </ul>
        </div>
    </div>
</div>
<div class="login-register-area section-padding-1 pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 login">
                <div class="login-register-wrap mr-70">
                    <h3><i class="fa fa-user-o"></i> Đăng nhập</h3>
                    <div class="login-register-form">
                        <form action="{{route('client.signin')}}" method="POST">
                            @csrf
                            <div class="sin-login-register">
                                <label>Email <span>*</span></label>
                                <input type="text" name="email" placeholder="nhập email">
                                @if (session()->has('err_email'))
                                    <p class="text-danger">{{session('err_email')}}</p>
                                @endif
                            </div>
                            <div class="sin-login-register">
                                <label>Password <span>*</span></label>
                                <input type="password" name="password" placeholder="nhập mật khẩu">
                                @if (session()->has('err_password'))
                                    <p class="text-danger">{{session('err_password')}}</p>
                                @endif
                            </div>
                            <div class="login-register-btn-remember">
                                <div class="login-register-btn">
                                    <button type="submit">Đăng nhập</button>
                                </div>
                                <div class="login-register-remember">
                                    <input type="checkbox" name="remember">
                                    <label>Remember me</label>
                                </div>
                            </div>
                            <a href="#">Đăng ký</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
