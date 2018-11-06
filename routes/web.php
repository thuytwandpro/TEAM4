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
//Trang giao dien
Route::get('/', function () {
    return redirect('shoes');
});
Route::get('/shoes', ['uses' => 'HomeController@index']);

Route::get('/shoes/contacts', ['uses' => 'HomeController@contact']);

Route::get('/shoes/single', ['uses' => 'HomeController@single']);

Route::get('/shoes/register', ['uses' => 'HomeController@register']);

Route::get('/shoes/login', ['uses' => 'HomeController@login']);

Route::get('/shoes/about', ['uses' => 'HomeController@about']);

Route::get('/shoes/checkout', ['uses' => 'HomeController@checkout']);


//Trang quan tri Admin
Route::group(['prefix' => '/shoes/admin'], function () {
	Route::group(['prefix' => 'home'], function() {
		Route::get('home', function() {
			return redirect('home');
		});
		Route::resource('home', 'AdminController');
		Route::get('/login',['uses' => 'AdminController@login']);
	});

	Route::group(['prefix' => 'products'], function() {
		Route::get('products', function() {
			return redirect('products');
		});
		Route::resource('products', 'ProductController'); 
	});

	Route::group(['prefix' => 'categories'], function() {
		Route::get('categories', function() {
			return redirect('categories');
		});
		Route::resource('categories', 'CategoryController');
	});

	Route::group(['prefix' => 'sales'], function() {
		Route::get('sales', function() {
			return redirect('sales');
		});
		Route::resource('sales', 'SaleController');
	});

	Route::group(['prefix' => 'bills'], function() {
		Route::get('bills', function() {
			return redirect('bills');
		});
		Route::resource('bills', 'BillController');
	});

	Route::group(['prefix' => 'news'], function() {
		Route::get('news', function() {
			return redirect('news');
		});
		Route::resource('news', 'NewsController');
	});

	Route::group(['prefix' => 'users'], function() {
		Route::get('users', function() {
			return redirect('users');
		});
		Route::resource('users', 'UserController');
	});

	Route::group(['prefix' => 'statistics'], function() {
		Route::get('statistics', function() {
			return redirect('statistics');
		});
		Route::resource('statistics', 'StatisticsController');
	});

});