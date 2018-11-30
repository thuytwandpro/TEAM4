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
// trang bán hàng
Route::get('/', ['uses' => 'HomeController@index']);
Route::get('/shoes', ['uses' => 'HomeController@index', 'as' => 'shoes.index']);



Route::get('/shoes/contacts', ['uses' => 'HomeController@contact']);

Route::get('/shoes/single/{id}', ['uses' => 'HomeController@single']);

Route::get('/shoes/category/{id}', ['uses' => 'HomeController@category']);

Route::get('/shoes/discount/{id}', ['uses' => 'HomeController@discount']);

Route::get('/shoes/register', ['uses' => 'HomeController@getRegister']);
Route::post('/shoes/register', ['uses' => 'HomeController@postRegister']);

Route::get('/shoes/timkiem', 'HomeController@getSearch');

Route::get('/shoes/login', ['uses' => 'HomeController@getLogin']);
Route::post('/shoes/login', ['uses' => 'HomeController@postLogin']);

Route::get('/shoes/about', ['uses' => 'HomeController@about']);

Route::get('/shoes/updateCart',['uses'=>'HomeController@updateCart', 'as' => 'updateCart']);
Route::get('/shoes/checkout', ['uses' => 'HomeController@checkout','as' => 'checkout']);
Route::get('/shoes/addCart/{id}',['uses' => 'HomeController@addToCart', 'as' => 'addToCart']);
Route::get('/shoe/removeCart/{rowId}',['uses' => 'HomeController@removeCart', 'as' => 'removeCart']);

Route::get('/shoes/logout', ['uses' => 'HomeController@logout']);

// Trang quan tri Admin

Route::get('admin/login', 'AdminController@getlogin')->name('login');
Route::post('admin/login', 'AdminController@postlogin');
Route::get('admin/logout', ['uses' => 'AdminController@logoutAdmin']);
Route::post('timkiem', 'AdminController@timkiem');
Route::group(['prefix' => '/shoes/admin', 'middleware' => ['admin']], function () {
    Route::group(['prefix' => 'home'], function () {
        Route::get('index', function () {
            return view('admin.home.index');
        });
        Route::resource('home', 'AdminController');
    });

    Route::group(['prefix' => 'categories'], function () {
        Route::get('danhsach', 'CategoryController@getDanhSach')->name('category.danhsach');

        Route::get('them', 'CategoryController@getThem')->name('category.them');
        Route::post('them', 'CategoryController@postThem');

        Route::get('sua/{id}', 'CategoryController@getSua');
        Route::post('sua/{id}', 'CategoryController@postSua');

        Route::get('xoa/{id}', 'CategoryController@getXoa');
    });

    Route::group(['prefix' => 'products'], function () {
        Route::get('danhsach', 'ProductController@getDanhSach')->name('products.danhsach');

        Route::get('them', 'ProductController@getThem')->name('products.them');
        Route::post('them', 'ProductController@postThem');
    });

    Route::group(['prefix' => 'bills'], function () {
        Route::get('', ['as' => 'getbill', 'uses' => 'BillController@getList']);
        Route::get('/del/{id}', ['as' => 'getdelbill', 'uses' => 'BillController@getDel'])->where('id', '[0-9]+');

        Route::get('/detail/{id}', ['as' => 'getdetail', 'uses' => 'BillController@getDetail'])->where('id', '[0-9]+');
        Route::post('/detail/{id}', ['as' => 'postdetail', 'uses' => 'BillController@postDetail'])->where('id', '[0-9]+');

        Route::get('/deltetail/{id}', ['as' => 'getdeldetail', 'uses' => 'BillController@getDetailBill'])->where('id', '[0-9]+');

        Route::get('/timkiem', ['as' => 'timkiem', 'uses' => 'BillController@getSearch']);
    });

    Route::group(['prefix' => 'news'], function () {
        Route::get('danhsach', 'NewsController@getDanhSach')->name('news.danhsach');

        Route::get('them', 'NewsController@getThem')->name('news.them');
        Route::post('them', 'NewsController@postThem');

        Route::get('sua/{id}', 'NewsController@getSua');
        Route::post('sua/{id}', 'NewsController@postSua');

        Route::get('xoa/{id}', 'NewsController@getXoa');

        Route::get('/timkiem', 'NewsController@getSearch');
    });

    Route::group(['prefix' => 'users'], function () {
        Route::get('danhsach', 'UserController@getDanhSach')->name('users.danhsach');

        Route::get('sua/{id}', 'UserController@getSua');
        Route::post('sua/{id}', 'UserController@postSua');

        Route::get('them', 'UserController@getThem')->name('users.them');
        Route::post('them', 'UserController@postThem');

        Route::get('xoa/{id}', 'UserController@getXoa');

        Route::get('/timkiem', 'UserController@getSearch');
    });

    Route::group(['prefix' => 'statistics'], function () {
        Route::get('statistics', function () {
            return redirect('statistics');
        });
        Route::resource('statistics', 'StatisticsController');
        Route::get('/thongke', 'StatisticsController@getThongke');
    });
});

Route::group(['prefix' => '/shoes/admin/sales', 'middleware' => ['sale']], function () {
    Route::get('', ['as' => 'getsale', 'uses' => 'SaleController@index']);

    Route::get('/create', ['as' => 'getcreate', 'uses' => 'SaleController@create']);
    Route::post('/create', ['as' => 'postcreate', 'uses' => 'SaleController@store']);

    Route::get('/edit/{id}', ['as' => 'getedit', 'uses' => 'SaleController@edit']);
    Route::put('/edit/{id}', ['as' => 'putedit', 'uses' => 'SaleController@update']);

    Route::delete('/destroy/{id}', ['as' => 'getdelete', 'uses' => 'SaleController@destroy']);
    Route::get('/timkiem', ['as' => 'timkiem', 'uses' => 'SaleController@getSearch']);
});
