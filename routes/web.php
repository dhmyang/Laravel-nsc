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


Route::get('/', 'HomeController@home')->name('homepage');
Route::get('/overons', 'OveronsController@overons')->name('overons');
Route::get('/contact', 'ContactController@contact')->name('contact');
Route::get('/menu', 'MenuController@menu')->name('menu');
Route::get('/review', 'ReviewController@list')->name('reviews');
Route::get('/review/{id}', 'ReviewController@details')->name('review.details');
Route::get('/reviews/create', 'ReviewController@create')->name('review.add');
Route::post('/reviews/create', 'ReviewController@store')->name('review.store');


// Route::prefix('admin')->group(function(){
//     Route::get('settings',function() { return 'users'; });
//     Route::get('History', function(){return'users';});
// });
// Route::get('/menu/{id?}', 'MenuController@item')->where('id', '[0-9]+');
// Route::get('/artikel/{id}', 'BlogController@showartikel')->where('artikel', '[A-Za-z]+');
// Route::get('/artikel/{category}/{itemid}', 'BlogController@showcategory')->where(['category' => '[a-z]+', 'itemid' => '[0-9]+']);
Route::get('/artikel/{id}', 'BlogController@showartikel');