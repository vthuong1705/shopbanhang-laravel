<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function(){
    Route::get('',[
        'as'=>'admin.dashboard',
        'uses'=> 'admins\HomeController@index'
    ]);

    Route::get('login-admin',[
        'as'=>'admin.login',
        'uses'=>'admins\HomeController@login'
    ]);

    Route::post('signin-admin',[
        'as'=>'admin.signin',
        'uses'=>'admins\HomeController@signin'
    ]);

    Route::get('logout',[
        'as'=>'admin.logout',
        'uses'=>'admins\HomeController@logout'
    ]);

    Route::prefix('category')->middleware('logged')->group(function(){
        Route::get('',[
            'as'=>'category.index',
            'uses'=>'admins\CategoryController@index'
        ]);
        Route::get('create',[
            'as'=>'category.create',
            'uses'=>'admins\CategoryController@create'
        ]);
        Route::post('store',[
            'as'=>'category.store',
            'uses'=>'admins\CategoryController@store'
        ]);
        Route::get('edit/{id}',[
            'as'=>'category.edit',
            'uses'=>'admins\CategoryController@edit'
        ]);
        Route::post('update/{id}',[
            'as'=>'category.update',
            'uses'=>'admins\CategoryController@update'
        ]);
        Route::get('delete/{id}',[
            'as'=>'category.delete',
            'uses'=>'admins\CategoryController@delete'
        ]);
    });

    Route::prefix('brand')->middleware('logged')->group(function(){
        Route::get('',[
            'as'=>'brand.index',
            'uses'=>'admins\BrandController@index'
        ]);
        Route::get('create',[
            'as'=>'brand.create',
            'uses'=>'admins\BrandController@create'
        ]);
        Route::post('store',[
            'as'=>'brand.store',
            'uses'=>'admins\BrandController@store'
        ]);
        Route::get('edit/{id}',[
            'as'=>'brand.edit',
            'uses'=>'admins\BrandController@edit'
        ]);
        Route::post('update/{id}',[
            'as'=>'brand.update',
            'uses'=>'admins\BrandController@update'
        ]);
        Route::get('delete/{id}',[
            'as'=>'brand.delete',
            'uses'=>'admins\BrandController@delete'
        ]);
    });

    Route::prefix('product')->middleware('logged')->group(function(){
        Route::get('',[
            'as'=>'product.index',
            'uses'=>'admins\ProductController@index'
        ]);
        Route::get('create',[
            'as'=>'product.create',
            'uses'=>'admins\ProductController@create'
        ]);
        Route::post('store',[
            'as'=>'product.store',
            'uses'=>'admins\ProductController@store'
        ]);
        Route::get('edit/{id}',[
            'as'=>'product.edit',
            'uses'=>'admins\ProductController@edit'
        ]);
        Route::post('update/{id}',[
            'as'=>'product.update',
            'uses'=> 'admins\ProductController@update'
        ]);
        Route::get('delete/{id}',[
            'as'=>'product.update',
            'uses'=> 'admins\ProductController@delete'
        ]);
    });
});
