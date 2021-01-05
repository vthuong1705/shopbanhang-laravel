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
    Route::get('szie/{id}',[
        'as'=>'client.size',
        'uses'=>'clients\ProductDetailController@getSize'
    ]);
});
