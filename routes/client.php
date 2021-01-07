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
    Route::get('checkout',[
        'as'=>'client.checkout',
        'uses'=>'clients\CheckoutController@index'
    ]);
});
