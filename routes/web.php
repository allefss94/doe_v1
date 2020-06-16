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

Route::get('/', 'DonorController@index');
Route::get('create', 'DonorController@create');
Route::get('login','DonorController@login');
Route::get('list', 'DonorController@list');

Route::post('store', 'DonorController@store');
Route::post('list', 'DonorController@list');
Route::post('filter', 'DonorController@list');

Route::get('/obrigado', function(){
    return view('obrigado');
});
