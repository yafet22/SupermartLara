<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('barangs','BarangController');

Route::resource('users','UserController');
Route::post('profile/{id}','UserController@updateProfile');

Route::resource('topups','TopupController');

Route::resource('transaksis','TransaksiController');

Route::resource('cartshops','CartshopController');

Route::post('add/{id}/{idbarang}','CartshopController@add');
Route::get('cart/{id}','CartshopController@showbytransaksi');
Route::get('usercart/{id}','CartshopController@showbyuser');
Route::patch('editcart/{id}','CartshopController@editcart');

Route::post('start/{id}','TransaksiController@beli');
Route::get('finish/{id}','TransaksiController@finish');
Route::get('show/{id}','TransaksiController@showbyuser');

Route::post('topup/{id}','TopupController@topup');
Route::get('usertopup/{id}','TopupController@showbyuser');
Route::post('sendconfirm/{id}','TopupController@sendconfirm');
Route::patch('confirm/{id}','TopupController@confirm');

Route::get('kategori/{kategori}','BarangController@findbykategori');

Route::post('login','UserController@login');

Route::post('auth/login', 'AuthController@login');

Route::group(['middleware' => 'jwt.auth'], function(){
  Route::get('auth/user', 'AuthController@user');
  Route::post('auth/logout', 'AuthController@logout');
});

Route::group(['middleware' => 'jwt.refresh'], function(){
  Route::get('auth/refresh', 'AuthController@refresh');
});

