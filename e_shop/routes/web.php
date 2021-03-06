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

/*Route::get('/', function (){
    return view('index');
});*/
Route::get('/', 'Frontend\PagesController@index');
Route::get('/index', 'Frontend\PagesController@index');
Route::get('/indexuser', 'Frontend\PagesController@indexuser');
Route::get('/order', 'Frontend\PagesController@order');
Route::get('/product', 'Frontend\PagesController@product');
Route::get('/category', 'Frontend\PagesController@category');
Route::get('/user', 'Frontend\PagesController@user');

Route::get('/shop', 'Frontend\PagesController@shop');
Route::get('/add-to-cart/{id}',[
    'uses' => 'ProductController@getAddToCart',
    'as' => 'product.AddToCart'
]);
Route::get('/tambahproduct', 'Frontend\PagesController@tambahproduct');
Route::get('/editproduct', 'Frontend\PagesController@editproduct');
Route::get('/registeraccount', 'Frontend\PagesController@registeraccount');
Route::get('/loginaccount', 'Frontend\PagesController@loginaccount');
Route::get('/wishlist', 'Frontend\PagesController@wishlist');
Route::get('/editproduct', 'Frontend\PagesController@editproduct');


//Product page
Route::get('product', 'Backend\ProductController@index');
Route::get('product', 'Backend\ProductController@index');
//Product page
Route::get('/', 'Backend\ProductController@index');
Route::post('product/{id}/delete', 'Backend\ProductController@destroy')->name('deleteProduct');

//Create Page
Route::get('product/new', 'Backend\ProductController@show')->name('product.new');
Route::post('product/new', 'Backend\ProductController@store')->name('product.create');
Route::get('create', 'Backend\ProductController@show');

 //Edit Page
Route::get('product/{id}/edit', 'Backend\ProductController@edit')->name('editProduct');
Route::post('product/{id}/update', 'Backend\ProductController@update')->name('updateProduct');
Route::post('product/{id}/edit/delete', 'Backend\ProductController@deleteImage')->name('deleteImage');

//Category Page
Route::get('categories/new', 'Backend\CategoryController@show')->name('showCategory');
Route::post('categories/new', 'Backend\CategoryController@store')->name('newCategory');

//Users Page
Route::post('/login', 'Backend\UserController@login')->name('loginPage');
Route::post('/signup', 'Backend\UserController@signup')->name('signUp');
