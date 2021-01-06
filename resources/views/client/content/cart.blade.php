@extends('client.master')
@section('title','trang client')
@section('name_page','')
@section('content')
<style>
    .not-cart {
        padding: 50px 100px;
        text-align: center;
        font-weight: 500;
    }

    .not-cart p {
        margin-bottom: 50px
    }

    .not-cart a {
        background-color: rgb(253, 216, 53);
        color: rgb(74, 74, 74);
        padding: 10px 55px;
        display: inline-block;
        border-radius: 4px;
    }

    .product-img img {
        width: 70%
    }

    .quantity {
        width: 50%
    }
</style>
<div class="breadcrumb-area bg-gray-2 section-padding-1 pt-200 pb-120">
    <div class="container-fluid">
        <div class="breadcrumb-content text-center">
            <div class="breadcrumb-title">
                <h2>Cart</h2>
            </div>
            <ul>
                <li>
                    <a href="index.html">Home </a>
                </li>
                <li><span> > </span></li>
                <li class="active">Cart</li>
            </ul>
        </div>
    </div>
</div>
<!-- cart start -->
@if (session()->has('cart'))
<div class="wrapper">
    @include('client.component.pages.blade-child.cart-component')
</div>
@else
<div class="not-cart">
    <p>Không có sản phẩm nào trong giỏ hàng của bạn.</p>
    <a href="{{route('client.index')}}">Tiếp tục mua sắm</a>
</div>
@endif

<script src="{{asset('clients/js/vendor/jquery-3.3.1.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    $(function(){
        $('.quantity').on('change',function(event){
            event.preventDefault();
            let quantity = $(this).val();
            let id = $(this).data('id');
            let token = $('input[name="_token"]').val();
            $.ajax({
                type: "POST",
                url: "{{ route('client.update-cart') }}",
                data: {quantity:quantity,id:id,_token:token},
                success: function (data) {
                    $('.wrapper').html(data.content);
                    Swal.fire('Any fool can use a computer')
                }
            });

        });
    });
</script>
@endsection
