<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/testimonial', function(){
    echo 'testimonial here';
});

Route::post('/post', function(){
    echo 'Method post';
});

Route::put('/put', function(){
    echo 'Method put';
});
Route::get('user/{name?}', function($name = 'John'){
    return $name;
});
Route::group(['prefix'=> 'admin'], function(){
    Route::resource('users', App\Http\Controllers\Admin\UserController::class, ['names' => 'admin.users']);
});
Route::group(['prefix'=> 'admin'], function(){
    Route::resource('products', App\Http\Controllers\Admin\ProductController::class, ['names' => 'admin.products']);
});
Route::group(['prefix'=> 'admin'], function(){
    Route::resource('orders', App\Http\Controllers\Admin\OrderController::class, ['names' => 'admin.orders']);
});

Route::resource('users', UserController::class);
Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);
Route::resource('orders', OrderController::class);
Route::resource('orderitems', OrderItemController::class);
