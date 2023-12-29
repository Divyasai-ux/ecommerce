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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'WebController@index')->name('index');
Route::get('test', function(){
	return view('test');
});

// Route::get('products', function () {
//     return view('products');
// });
// Route::get('test',function(){
// 	$cats= App\Categories::with('catproduct')->get();
// 	// dd($cats);
// 	return view('test',compact('cats'));
// });
Route::get('faqs', 'WebController@faqshow')->name('faqs');
Route::get('user/login', 'WebController@login')->name('login');
Route::post('user/login/post','WebController@loginpost')->name('post_login');
Route::get('user/signup', 'WebController@signup')->name('signup');
Route::post('user/signup/post','WebController@SignupPost')->name('signup_post');


Route::get('about', 'WebController@aboutus')->name('aboutus');
Route::get('contactus', 'WebController@contactus')->name('contactus');
Route::post('contactus/post','WebController@postcontactus')->name('post.contactus');
Route::get('product/{id}', 'WebController@product')->name('product');
Route::get('cart', 'WebController@cart')->name('show_cart');
// Route::get('add/cart/{id}','WebController@addToCart')->name('addtocart');

Route::get('add/cart/{id}','WebController@addProductToCart')->name('addtocart');

Route::get('categories/{id}','WebController@ProductByCategory')->name('categories.product');
Route::get('types/{id}','WebController@ProductByType')->name('types.product');
Route::get('searchproduct','WebController@searchproduct')->name('search.product');
Route::patch('update-cart', 'WebController@update')->name('update-cart');

Route::any('remove-from-cart/{cart_id}', 'WebController@remove')->name('remove-from-cart');

Route::post('subscribe/newsletter','WebController@newslettersubscribe')->name('newsletter.subscribe');
Route::post('search','WebController@search')->name('search');
Route::get('checkout','WebController@checkout')->name('checkout');
Route::post('state/submit','WebController@submitState')->name('submitState');




Route::middleware(['auth'])->group(function(){
	Route::get('profile','WebController@profile')->name('user.profile');
	Route::post('add/address','WebController@addAddress')->name('add.address');
	Route::any('delete/address','WebController@DeleteAddress')->name('delete.address');
	Route::post('update/profile','WebController@updateProfile')->name('update.user.profile');
	Route::post('cart/product/increment','WebController@ProductIncrement')->name('product.increment');
	Route::post('cart/product/decrement','WebController@ProductDecrement')->name('product.decrement');
});
Route::any('user/logout','WebController@logout')->name('user.logout');




	Route::get('admin/login','AdminController@login')->name('admin.login');
	Route::any('login/post','AdminController@loginpost')->name('admin.postlogin');

	Route::middleware(['auth'])->group(function(){
	Route::prefix('admin')->group(function(){
	Route::get('home','AdminController@index')->name('admin.index');
	Route::get('categories','AdminController@categories')->name('admin.categories');
	Route::get('types','AdminController@types')->name('admin.types');
	Route::get('products','AdminController@products')->name('admin.products');
	Route::get('faqs','AdminController@faqs')->name('admin.faqs');
	Route::post('post/faq','AdminController@postfaq')->name('admin.postfaq');
	Route::any('delete/faq/{id}','AdminController@deletefaq')->name('admin.deletefaq');
	Route::post('categories','AdminController@storecategory')->name('category.store');
	Route::delete('{id}/delete/category','AdminController@deletecategory')->name('category.delete');
	Route::post('product/types','AdminController@storetype')->name('product_type.store');
	Route::delete('{id}/delete/type','AdminController@deletetype')->name('product_type.delete');
	Route::post('products','AdminController@storeproduct')->name('store.products');
	Route::get('contactus','AdminController@contactus')->name('admin.contactus');
	Route::get('orders','AdminController@orderslist')->name('orders.list');
	Route::get('order/single/{id}','AdminController@ordersingle')->name('order.byid');
	Route::get('products/list','AdminController@productlist')->name('product.list');
	Route::get('product/single/{id}','AdminController@productsingle')->name('single.product');
	Route::any('product/delete/{id}','AdminController@deleteproduct')->name('delete.product');
	Route::get('product/edit/{id}','AdminController@editproduct')->name('edit.product');
	Route::post('product/update/{id}','AdminController@updateproduct')->name('update.product');
	Route::get('change/password','AdminController@changepassword')->name('admin.changepassword');
	Route::post('change/password/post','AdminController@changepasswordpost')->name('admin.changepasswordpost');
	Route::get('subscribers/list','AdminController@subscribers')->name('admin.subscribers');
	Route::get('states','AdminController@states')->name('admin.states');
	Route::post('state/post','AdminController@statepost')->name('admin.statepost');
	Route::get('contact/information','AdminController@contactinfo')->name('admin.contactinfo');
	Route::post('company/info/post','AdminController@companyinfopost')->name('admin.companyinfopost');
	Route::any('company/info/delete/{id}','AdminController@deletecompanyinfo')->name('admin.companyinfodelete');
	Route::get('logout','AdminController@logout')->name('admin.logout');
	Route::get('slider/images','AdminController@sliderimages')->name('admin.sliderimages');
	Route::post('slider/images/post','AdminController@sliderimagespost')->name('admin.sliderimagespost');
	Route::any('slider/images/delete/{id}','AdminController@deleteslider')->name('admin.deleteslider');

	});
});








