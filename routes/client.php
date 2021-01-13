<?php

use Illuminate\Support\Facades\Route;

Route::prefix('client')->group(function(){
    Route::get('',[
        'as'=>'client.index',
        'uses'=>'clients\ClientController@index'
    ]);
    Route::get('category/{slug}/{id}.html',[
        'as'=>'client.category',
        'uses'=> 'clients\ProductController@get_cate'
    ]);
    Route::get('brand/{slug}/{id}.html',[
        'as'=>'client.brand',
        'uses'=> 'clients\ProductController@get_brand'
    ]);
    Route::get('sort-date',[
        'as'=>'client.sort_date',
        'uses'=> 'clients\ProductController@sort_date'
    ]);
    Route::get('sort-low-to-high',[
        'as'=>'client.sort_low',
        'uses'=> 'clients\ProductController@sort_low_to_high'
    ]);
    Route::get('sort-high-to-low',[
        'as'=>'client.sort_high',
        'uses'=> 'clients\ProductController@sort_high'
    ]);
    Route::get('product-detail/{slug}/{id}.html',[
        'as'=>'client.product-detail',
        'uses'=> 'clients\ProductDetailController@index'
    ]);
    Route::get('cart/{id}.html',[
        'as'=>'client.cart',
        'uses'=>'clients\CartController@addCart'
    ]);
    Route::get('show-cart',[
        'as'=>'client.show_cart',
        'uses'=>'clients\CartController@showCart'
    ]);
    Route::Post('update-quantity',[
        'as'=>'client.update-quantity',
        'uses'=>'clients\CartController@updateQuantity'
    ]);
    Route::get('update-cart',[
        'as'=>'client.update-cart',
        'uses'=>'clients\CartController@updateCart'
    ]);
    Route::get('delete-cart',[
        'as'=>'client.delete-cart',
        'uses'=>'clients\CartController@deleteCart'
    ]);
    Route::get('delete-cart-all',[
        'as'=>'client.delete-all',
        'uses'=>'clients\CartController@deleteAll'
    ]);

    Route::get('login',[
        'as'=>'client.login',
        'uses'=>'clients\ClientController@login'
    ]);
    Route::post('client-login', [
        'as'=> 'client.signin',
        'uses'=>'clients\ClientController@signin'
    ]);
    Route::get('register',[
        'as'=>'client.register',
        'uses'=>'clients\ClientController@register'
    ]);
    Route::post('client-dang-ky',[
        'as'=>'client.dang_ky',
        'uses'=>'clients\ClientController@dang_ky'
    ]);
    Route::get('info-client',[
        'as'=>'client.info',
        'uses'=>'clients\ClientController@infoClient'
    ]);
    Route::get('order-detail/{id}',[
        'as'=>'client.order_detail',
        'uses'=>'clients\ClientController@order_detail'
    ]);
    Route::post('change-info/{id}',[
        'as'=>'client.change_info_client',
        'uses'=>'clients\ClientController@change_info'
    ]);
    Route::post('change-password',[
        'as'=>'client.change_info',
        'uses'=>'clients\ClientController@change_Password'
    ]);
    Route::get('client-logout',[
        'as'=>'client.logout',
        'uses'=>'clients\ClientController@logout'
    ]);
    Route::get('checkout',[
        'as'=>'client.checkout',
        'uses'=>'clients\CheckoutController@index'
    ]);
    Route::post('order',[
        'as'=>'client.order',
        'uses'=>'clients\CheckoutController@order'
    ]);
    Route::get('blog',[
        'as'=>'client.blog',
        'uses'=>'clients\BlogController@index'
    ]);
    Route::get('blog-detail/{slug}/{id}.html',[
        'as'=>'client.blog-detail',
        'uses'=>'clients\BlogController@show'
    ]);
    Route::get('wishlist',[
        'as'=>'client.wishlist',
        'uses'=>'clients\WishlistController@index'
    ]);
    Route::get('add-wishlist/{id}',[
        'as'=>'client.wishlist_add',
        'uses'=>'clients\WishlistController@add'
    ]);
    Route::get('delete-wishlist/{id}',[
        'as'=>'client.delete-wishlist',
        'uses'=>'clients\WishlistController@remove'
    ]);
    Route::post('feedback/{id}',[
        'as'=>'client.feedback',
        'uses'=>'clients\FeedbackController@index'
    ]);
});
