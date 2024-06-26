<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');

Route::get('/about', function () {
    $data1 = 'About us - Online Store';
    $data2 = 'About us';
    $description = 'This is an about page ...';
    $author = 'Developed by: Santiago Neusa';

    return view('home.about')->with('title', $data1)
        ->with('subtitle', $data2)
        ->with('description', $description)
        ->with('author', $author);
})->name('home.about');

Route::get('/contact', 'App\Http\Controllers\HomeController@contact')->name('home.contact');

Route::get('/products', 'App\Http\Controllers\ProductController@index')->name('product.index');
Route::get('/products/create', 'App\Http\Controllers\ProductController@create')->name('product.create');
Route::post('/products/save', 'App\Http\Controllers\ProductController@save')->name('product.save');
Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name('product.show');

Auth::routes();

Route::get('api/products', 'App\Http\Controllers\Api\ProductApiController@index')->name('api.product.index');
Route::get('api/products/{id}', 'App\Http\Controllers\Api\ProductApiController@show')->name('api.product.show');

Route::get('api/v2/products', 'App\Http\Controllers\Api\ProductApiControllerV2@index')->name('api.v2.product.index');
Route::get('api/v2/products/{id}', 'App\Http\Controllers\Api\ProductApiControllerV2@show')->name('api.v2.product.show');

Route::get('api/v3/products', 'App\Http\Controllers\Api\ProductApiControllerV3@index')->name('api.v3.product.index');
Route::get('api/v3/products/paginate', 'App\Http\Controllers\Api\ProductApiControllerV3@paginate')->name('api.v3.product.paginate');
