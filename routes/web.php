<?php

use App\Http\Controllers\IndexController;

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

Route::get('/','IndexController@index');
Route::get('/login','IndexController@index');
Route::get('/register','IndexController@index');
Route::get('/{any}',function(){
    return view('index');
})->where('any','[\/\w\.-]*');

