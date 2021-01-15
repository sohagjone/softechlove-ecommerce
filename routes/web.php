<?php

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
//--------------Front-Interface--------------------------------------//

Route::get('/', 'FrontendController@index');
Route::get('/product/details/{id}', 'FrontendController@product_details_view')->name('product_details');
Route::get('/shop/view', 'FrontendController@shop_page_view')->name('shop_page_view');
Route::get('/category/product/view/{id}', 'FrontendController@show_product_category')->name('show_product_category');
//cart Routes
Route::post('/cart/add/product', 'CartController@add_to_cart')->name('add_to_cart');
Route::get('/cart/remove/product/{product_id}', 'CartController@cart_item_revove')->name('cart_item_revove');
Route::post('/cart/update', 'CartController@cart_update')->name('cart_update');
//Checkout Routes
Route::get('/checkout/customer', 'CheckoutController@customer_form')->name('customer_form')->middleware('CustomerLoginCheck');
Route::post('/checkout/customer', 'CheckoutController@customer_signup')->name('customer_signup');
Route::get('/checkout/shipping', 'CheckoutController@shipping_form')->name('shipping_form')->middleware('CustomerNotLoginCheck');
Route::post('/checkout/shipping', 'CheckoutController@shipping_info_save')->name('shipping_info_save');
Route::get('/checkout/payment', 'CheckoutController@payment_form')->name('payment_form')->middleware('CustomerNotLoginCheck', 'ShippingIdCheck');
Route::post('/checkout/order', 'CheckoutController@order_save')->name('order_save')->middleware('CartValueCheck', 'ShippingIdCheck');
Route::get('/order/history/', 'CheckoutController@order_history')->name('order_history');
Route::get('/logout/customer', 'CheckoutController@logout_customer')->name('logout_customer');
Route::post('/invoice/print/', 'CheckoutController@customer_order_print')->name('customer_order_print')->middleware('CartValueCheck', 'ShippingIdCheck');
//Customer Routes
Route::post('/login/customer', 'CustomerController@login_customer')->name('login_customer');

//----------Dashboard Route------------\\
Route::group(['middleware'=>['AuthCheck']], function(){
	//Category Routes
	Route::get('category/form', 'CategoryController@category_form')->name('category_form');

	Route::post('category/form', 'CategoryController@category_save')->name('category_save');

	Route::get('/category/manage',
		[
		'uses'=> 'CategoryController@manage_category',
		'as' => 'manage_category',
		]);
	Route::get('/unpublished/category/{id}',
		[
		'uses' => 'CategoryController@category_unpublish',
		'as' => 'category_unpublish',
		]);
	Route::get('/published/category/{id}',
		[
		'uses' => 'CategoryController@category_publish',
		'as' => 'category_publish',
		]);
	Route::get('/delete/category/{id}',
		[
		'uses' => 'CategoryController@category_delete',
		'as' => 'category_delete',
		]);
	Route::get('/category/edit/{id}',
		[
		'uses' => 'CategoryController@category_edit_form',
		'as' => 'edit_category'
		]);
	Route::post('/category/update',
		[
		'uses' => 'CategoryController@category_update',
		'as' => 'category_update'
		]);
//product routes
	Route::get('product/add', [
		'uses' => 'ProductController@product_form_show', 
		'as' => 'product_form'
	]);
	Route::post('product/add', [
		'uses' => 'ProductController@productSave', 
		'as' => 'product_save'
	]);
	Route::get('product/manage', [
		'uses' => 'ProductController@product_manage_view', 
		'as' => 'product_manage'
		]);
	Route::get('product/deleted', [
		'uses' => 'ProductController@delete_product_manage_view', 
		'as' => 'delete_product_manage'
		]);
	Route::get('product/restored/{id}', [
		'uses' => 'ProductController@restore_product_manage_view', 
		'as' => 'restore_product'
		]);
	Route::get('force-delete/product/{id}', [
		'uses' => 'ProductController@force_delete_product', 
		'as' => 'force_delete_product'
		]);
	Route::get('/unpublished/product/{id}',
		[
		'uses' => 'ProductController@product_unpublish',
		'as' => 'product_unpublish',
		]);
	Route::get('/published/product/{id}',
		[
		'uses' => 'ProductController@product_publish',
		'as' => 'product_publish',
		]);
	Route::get('/delete/product/{id}',
		[
		'uses' => 'ProductController@product_delete',
		'as' => 'product_delete',
		]);
	Route::get('/product/edit/{id}',
		[
		'uses' => 'ProductController@product_edit_form',
		'as' => 'edit_product'
		]);
	Route::post('/product/update',
		[
		'uses' => 'ProductController@product_update',
		'as' => 'product_update'
		]);
//Order Routes
	Route::get('/order/manage', 'OrderController@order_manage')->name('order_manage');
	Route::get('/order/details/{order_id}', 'OrderController@order_details')->name('order_details');
	Route::get('/order/invoice/{order_id}', 'OrderController@order_invoice')->name('order_invoice');
});

Route::get('/order/invoice/pdf/{order_id}', 'OrderController@order_invoice_pdf')->name('order_invoice_pdf');

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');

