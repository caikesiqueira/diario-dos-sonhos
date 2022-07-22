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

Route::get('/', 'HomeController@home')->name('home.index');
Route::get('/dia_sonho', 'DiaSonhoController@dia_sonho')->name('dia_sonho.index');
Route::get('/lug_sonho', 'LugarSonhoController@lug_sonho')->name('lug_sonho.index');
Route::get('/rel_lucido', 'RelatoLucidoController@rel_lucido')->name('rel_lucido.index');
Route::get('/obj_lucido', 'ObjetivoController@obj_lucido')->name('obj_lucido.index');
Route::get('/vid_lucido', 'VideoController@vid_lucido')->name('vid_lucido.index');