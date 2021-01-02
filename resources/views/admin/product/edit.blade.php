@extends('admin.master')
@section('content')
@section('title','sửa sản phẩm')
@section('name_page','edit product')
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
                            <input type="text" value="{{$product->name}}"
                                class="form-control @error('name') is-invalid @enderror" name="name"
                                placeholder="nhập tên sản phẩm"> @error('name')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">giá sản phẩm</label>
                            <input type="number" min="1" class="form-control @error('price') is-invalid @enderror"
                                name="price" placeholder="nhập giá sản phẩm" value="{{$product_detail->price}}"> @error('price')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">discount (~%)</label>
                            <input type="number" min="0" max="100"
                                class="form-control @error('discount') is-invalid @enderror" name="discount"
                                placeholder="nhập giá khuyến mại" value="{{$product_detail->discount}}"> @error('discount')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">số lượng</label>
                            <input type="number" min="1" class="form-control @error('quantity') is-invalid @enderror"
                                name="quantity" placeholder="nhập số lượng sản phẩm" value="{{$product_detail->quantity}}"> @error('quantity')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">danh mục sản phẩm</label>
                            <select name="cat_id" id="input" class="form-control">
                                @foreach ($cate as $value)
                                <option value="{{$value->id}}" {{($value->id==$product->cat_id)?'checked':''}}>
                                    {{$value->name}}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="">thương hiệu</label>
                            <select name="brand_id" id="input" class="form-control">
                                @foreach ($brand as $value)
                                <option value="{{$value->id}}" {{($value->id==$product->brand_id)?'checked':''}}>
                                    {{$value->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">ảnh đại diện</label>
                            <input type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar">
                            @error('avatar')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <img src="{{asset($product->avatar)}}" alt="">
                        <div class="form-group">
                            <label for="">ảnh mô tả</label>
                            <input type="file" multiple class="form-control @error('image') is-invalid @enderror"
                                name="image[]"> @error('image')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            @foreach ($img_pro as $value)
                                <img src="{{asset($value->image)}}" alt="">
                            @endforeach
                        </div>

                        <div class="form-group">
                            <label for="">mô tả</label>
                            <textarea type="text" class="form-control @error('desc') is-invalid @enderror" name="desc"
                                placeholder="mô tả" rows="4">{{$product->desc}}</textarea> @error('desc')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>trạng thái</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="status" id="input" value="1" {{$product->status==1?'checked':''}}>
                                        hiện
                                    </label>
                                    <label>
                                        <input type="radio" name="status" id="input" value="0" {{$product->status==0?'checked':''}}>
                                        ẩn
                                    </label>
                                </div>
                            </div>


                            <button type="submit" class="btn btn-primary">thêm mới</button>
                    </form>
                </div>
            </div>


        </div>


    </div>
    <!-- container-fluid -->

</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $('.checkbox_wrapper').on('click', function() {
            $(this).parents('.card').find('.checkbox_childrent').prop('checked', $(this).prop('checked'));
        });
</script>
@endsection
