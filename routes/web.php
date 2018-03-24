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
//why not keep this
Route::get('/laravelwelcome', function () {
    return view('welcome');
});

//Homepage
Route::get('/', 'MainController@index');

//about
Route::get('/about', function () {
    return view('main/aboutPage');
});

//Products
Route::get('/products', 'InventoryController@index');
Route::get('/product/{id}' , 'InventoryController@product');
Route::get('/products/category/{category}', 'InventoryController@categoryList');
Route::get('/products/subcategory/{subcategory}', 'InventoryController@subcategoryList');
Route::get('/products/search', 'InventoryController@search');

//CMS
//products
Route::get('/cms/product/new', 'ProductController@newProduct');
Route::get('/cms/products', 'ProductController@index');
Route::get('/cms/orders', 'OrderController@cmsIndex');
Route::get('/cms/product/destroy/{id}', 'ProductController@destroy');
Route::get('/cms/product/activate/{id}', 'ProductController@activate');
Route::post('/cms/product/save', 'ProductController@add');
//users
Route::get('/cms/users', 'UserController@index');
Route::get('/cms/user/destroy/{id}', 'UserController@destroy');
Route::get('/cms/user/changeAdmin/{id}', 'UserController@changeAdmin');

//orders
Route::get('/checkout', 'OrderController@checkout');
Route::get('order/{orderId}', 'OrderController@viewOrder');
Route::get('orders', 'OrderController@index');

//User Authentication
Route::get('auth/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('auth/login', 'Auth\LoginController@login');
Route::get('auth/logout', 'Auth\LoginController@logout');

Route::get('auth/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('auth/register', 'Auth\RegisterController@register');

//shoppingcart
Route::get('/addProduct/{productId}', 'CartController@addItem');
Route::get('/removeItem/{productId}', 'CartController@removeItem');
Route::get('/shoppingcart', 'CartController@showCart');
Route::get('/shoppingcart/refresh', 'CartController@refreshCart');
