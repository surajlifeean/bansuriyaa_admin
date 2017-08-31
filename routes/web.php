<?php

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

Route::group(['middleware' => ['web']], function () {
   

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create', function () {
    return view('Product.create');
});
Route::resource('product', 'ProductController');


Route::resource('color', 'ColorController');

Route::resource('size', 'SizeController');

Route::resource('category', 'CategoryController');

Route::resource('subproduct', 'SubproductController');


Route::resource('subcategory', 'SubcategoryController');

Route::resource('ajaxreq', 'AjaxsecondController');

   
});
