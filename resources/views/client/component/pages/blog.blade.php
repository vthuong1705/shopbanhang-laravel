@extends('client.master')
@section('title','trang blog')
@section('name_page','')
@section('content')

<div class="breadcrumb-area bg-gray-2 section-padding-1 pt-200 pb-120">
    <div class="container-fluid">
        <div class="breadcrumb-content text-center">
            <div class="breadcrumb-title">
                <h2>Blog</h2>
            </div>
            <ul>
                <li>
                    <a href="index.html">Home </a>
                </li>
                <li><span> > </span></li>
                <li class="active">Blog</li>
            </ul>
        </div>
    </div>
</div>
<!-- cart start -->
@foreach ($blog as $value)
<div class="blog-main-area pt-90 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="blog-wrap mb-20">
                    <div class="blog-img">
                        <a href="blog-details.html"><img src="{{$value->img_blog}}" alt="blog"></a>
                    </div>
                    <div class="blog-content-4 blog-no-sidebar">
                        <div class="blog-tag">
                            <a href="#">Life Style</a>
                        </div>
                        <h3><a href="blog-details.html">{{$value->name}}</a></h3>
                        <div class="blog-meta-4">
                            <ul>
                                <li><a href="#">{{$value->created_at}}</a></li>
                                <li>By <a href="#">{{$value->AdminName}}</a></li>
                            </ul>
                        </div>
                        <p>{{$value->title}}</p>
                        <div class="blog-btn-3">
                            <a href="{{route('client.blog-detail',[$value->slug,$value->id])}}">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
{{$blog->links()}}
@endsection
