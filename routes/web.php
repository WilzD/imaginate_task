<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Cartcontroller;


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

// Route::get('/', function () {
//     return view('welcome');
// });

route::get('/','frontend\FrontendController@index');
route::get('category','frontend\FrontendController@category');
route::get('view-cat-product/{slug}','frontend\FrontendController@cat_product');
route::get('category/{cate_slug}/{prod_slug}','frontend\FrontendController@product_detail');
route::get('/check','frontend\FrontendController@check');
route::post('addtocart','frontend\Cart_controller@addToCart');

route::middleware(['auth'])->group(function(){
route::get('cart','frontend\Cart_controller@show_cart');
   
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
route::middleware(['auth','isAdmin'])->group(function(){
   route::get('/dashboard','Admin\frontendController@index');
  
   route::get('categories','Admin\categoryController@index');
   route::get('add','Admin\categoryController@add');
   route::post('insert-category','Admin\categoryController@insert');
   route::get('edit_category/{id}','Admin\categoryController@edit_product');
   route::put('update-category/{id}','Admin\categoryController@update_product');
   route::get('delete_category/{id}','Admin\categoryController@delete_product');


   route::get('products','Admin\products_controller@show_index');
   route::get('add_products','Admin\products_controller@add_products');
   route::post('insert-products','Admin\products_controller@insert_product');
   route::get('edit_products/{id}','Admin\products_controller@edit_product');
   route::put('update-products/{id}','Admin\products_controller@update_product');
   route::get('delete_products/{id}','Admin\products_controller@delete_product');
});

route::middleware(['auth','isProdManager'])->group(function(){
   route::get('/home','prodManager\ProdController@index');


   route::get('products_manager','prodManager\ProdController@show_index');
   route::get('add_products_manager','prodManager\ProdController@add_products');
   route::post('insert-products_manager','prodManager\ProdController@insert_product');
   route::get('edit_products_manager/{id}','prodManager\ProdController@edit_product');
   route::put('update-products_manager/{id}','prodManager\ProdController@update_product');
   route::get('delete_products_manager/{id}','prodManager\ProdController@delete_product');
});


