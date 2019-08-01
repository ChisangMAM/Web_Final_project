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



Route::get('/' , 'ProductController@all_product');

Auth::routes();


Route::get('/catergories' , 'RentController@catergories');
Route::get('/products' , 'RentController@products');




Route::get('/contact', function(){
	return view('contact_content');
});

Route::get('/payment', function(){
	return view('payment');
});

// Route::get('/summary', function(){
// 	return view('summary');
// });



// Route::get('/login', function(){
// 	return view('login');
// });

// Route::get('/register', function(){
// 	return view('register');
// });

Route::get('/myaccount', function(){
	return view('myaccount');
});

Route::get('/product', function(){
	return view('products_content');
});


Route::get('/cart', 'ProductController@cart');

Route::get('addtocart/{id}', 'ProductController@addtocart');
Route::get('/products', 'ProductController@product');
 


// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/order/{carts}', 'orderController@orderproducts');

Route::patch('update-cart', 'ProductController@update');

Route::delete('remove-from-cart', 'ProductController@remove');

// Route::resource('payment', 'paymentController');

