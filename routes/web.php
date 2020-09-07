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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::group(['namespace' => 'Auth'],function(){
	Route::get('dang-ky','RegisterController@getRegister')->name('get.register');
	Route::post('dang-ky','RegisterController@postRegister')->name('post.register');

	Route::get('dang-nhap','LoginController@getLogin')->name('get.login');
	Route::post('dang-nhap','LoginController@postLogin')->name('post.login');

	Route::get('dang-xuat','LoginController@getLogout')->name('get.logout');
});

Route::get('/', 'HomeController@index')->name('home');
Route::get('danh-muc/{slug}-{id}','CategoryController@getListProduct')->name('get.list.product');
Route::get('san-pham/{slug}-{id}','ProductDetailController@getProductDeatil')->name('get.detail.product');
 
Route::prefix('shopping')->group(function(){
	Route::get('/add/{id}','ShooppingCartController@addProduct')->name('add.shopping.cart');
	Route::get('/danh-sach','ShooppingCartController@getListShoppingCart')->name('get.list.shopping.cart');
	Route::get('/delete/{id}','ShooppingCartController@getDelete')->name('get.delete.cart');
	Route::get('/update/{id}','ShooppingCartController@getUpdateCart')->name('ajax.get.update.cart');

});

Route::group(['prefix' => 'gio-hang','middleware' => 'CheckLoginUser'],function(){

	Route::get('/thanh-toan','ShooppingCartController@getFormPay')->name('get.form.pay');
	Route::post('/thanh-toan','ShooppingCartController@saveInfoShopping');
});

