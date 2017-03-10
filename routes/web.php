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



Route::get('login',['as'=>'getLogin','uses'=>'Auth\LoginController@getLogin']);
Route::post('login',['as'=>'postLogin','uses'=>'Auth\LoginController@postLogin']);
Route::get('logout',['as'=>'getLogout','uses'=>'Auth\LoginController@getLogout']);

Route::get('admin',['as'=>'getAdminLogin','uses'=>'LoginAdminController@getAdminLogin']);
Route::post('admin',['as'=>'postAdminLogin','uses'=>'LoginAdminController@postAdminLogin']);
Route::get('admin/logout',['as'=>'getAdminLogout','uses'=>'LoginAdminController@getAdminLogout']);

Route::get('login/{social}', [
        'as' => 'login.{social}',
        'uses' => 'SocialAccountController@redirectToProvider'
    ]);

Route::get('login/{social}/callback', [
    'as' => 'login.{social}.callback',
    'uses' => 'SocialAccountController@handleProviderCallback'
]);

Route::get('register',['as'=>'getRegister','uses'=>'RegisterController@getRegister']);
Route::post('register',['as'=>'postRegister','uses'=>'RegisterController@postRegister']);


Route::group(['prefix'=>'admin','middleware'=>'login'],function(){

	Route::group(['prefix'=>'cate'],function(){
		Route::get('add',['as'=>'admin.cate.getAdd','uses'=>'CateController@getAdd']);
		Route::post('add',['as'=>'admin.cate.postAdd','uses'=>'CateController@postAdd']);
		Route::get('list',['as'=>'admin.cate.list','uses'=>'CateController@getList']);
		Route::get('delete/{id}',['as'=>'admin.cate.getDelete','uses'=>'CateController@getDelete']);
		Route::get('edit/{id}',['as'=>'admin.cate.getEdit','uses'=>'CateController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.cate.postEdit','uses'=>'CateController@postEdit']);
	});

	Route::group(['prefix'=>'product'],function(){
		Route::get('list',['as'=>'admin.product.list','uses'=>'ProductController@getList']);
		Route::get('add',['as'=>'admin.product.getAdd','uses'=>'ProductController@getAdd']);
		Route::post('add',['as'=>'admin.product.postAdd','uses'=>'ProductController@postAdd']);
		Route::get('delete/{id}',['as'=>'admin.product.getDelete','uses'=>'ProductController@getDelete']);
		Route::get('edit/{id}',['as'=>'admin.product.getEdit','uses'=>'ProductController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.product.postEdit','uses'=>'ProductController@postEdit']);
		Route::get('delimg/{id}',['as'=>'admin.product.getDelImg','uses'=>'ProductController@getDelImg']);
	});

	Route::group(['prefix'=>'user'],function(){
		Route::get('list',['as'=>'admin.user.list','uses'=>'UserController@getList']);
		Route::get('add',['as'=>'admin.user.getAdd','uses'=>'UserController@getAdd']);
		Route::post('add',['as'=>'admin.user.postAdd','uses'=>'UserController@postAdd']);
		Route::get('delete/{id}',['as'=>'admin.user.getDelete','uses'=>'UserController@getDelete']);
		Route::get('edit/{id}',['as'=>'admin.user.getEdit','uses'=>'UserController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.user.postEdit','uses'=>'UserController@postEdit']);
		
	});
});


Route::group(['middleware'=>'frontend'],function(){

	Route::get('thanh-toan',['as'=>'thanhtoan','uses'=>'HomeController@thanhtoan']);

	Route::get('addmoney/paywithpaypal',['as'=>'addmoney.paywithpaypal','uses'=>'HomeController@payWithPaypal']);

	Route::post('addmoney/paypal',['as'=>'addmoney.paypal','uses'=>'PaypalController@postPaymentWithPaypal']);

	Route::get('addmoney/paypal',['as'=>'payment.status','uses'=>'PaypalController@getPaymentStatus']);

	Route::get('addmoney/paymentsuccess',['as'=>'getPaymentSuccess','uses'=>'PaypalController@getPaymentSuccess']);
	
});

Route::group(['middleware'=>'cart'],function(){
	Route::get('/',['as'=>'home','uses'=>'HomeController@index']);
	Route::get('loai-san-pham/{id}',['as'=>'loaisanpham','uses'=>'HomeController@loaisanpham']);
	Route::get('loai-san-pham/{id}',['as'=>'loaisanpham','uses'=>'HomeController@loaisanpham']);
	Route::get('cart',['as'=>'shoppingcart','uses'=>'HomeController@cart']);
	Route::get('lien-he',['as'=>'getLienHe','uses'=>'HomeController@getLienHe']);
	Route::post('lien-he',['as'=>'postLienHe','uses'=>'HomeController@postLienHe']);
	Route::get('gio-hang',['as'=>'giohang','uses'=>'HomeController@giohang']);
	Route::get('xoa-gio-hang/{rowId}',['as'=>'xoagiohang','uses'=>'HomeController@xoagiohang']);
	Route::get('sua-gio-hang/{rowId}/{qty}',['as'=>'suagiohang','uses'=>'HomeController@suagiohang']);
	Route::get('mua-hang/{id}/{alias}',['as'=>'getMuaHang','uses'=>'HomeController@getMuaHang']);
	Route::get('san-pham/{id}',['as'=>'sanpham','uses'=>'HomeController@sanpham']);

});
	

