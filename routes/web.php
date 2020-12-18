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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/overons', 'OveronsController@overons');
Route::get('/contact', 'ContactController@contact');

Route::get('/menu', 'MenuController@menu');

Route::prefix('admin')->group(function(){
    Route::get('settings',function() { return 'users'; });
    Route::get('History', function(){return'users';});
});


Route::get('/overons', 'OveronsController@overons');
Route::get('/contact', 'ContactController@contact');

Route::get('/menu', 'MenuController@menu');
Route::get('/menu/{id?}', 'MenuController@item')->where('id', '[0-9]+');
Route::get('/artikel/{artikel}', 'BlogController@showArtikel')->where('artikel', '[A-Za-z]+');
Route::get('/artikel/{category}/{itemid}', 'BlogController@showcatorgy')->where(['category' => '[a-z]+', 'itemid' => '[0-9]+']);
