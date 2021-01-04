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
    Route::get('/{slug}/{id}.html',[
        'as'=>'client.brand',
        'uses'=> 'clients\ProductController@get_brand'
    ]);
});
