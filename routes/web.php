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

/*route::get('\home',function(){
    return 'Home';
});*/
Auth::routes(['verify'=>true]);

Route::get('/', function(){
    return 'good';
});




route::resource('/clients','ClientController')->only('show');
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('/', function () {
    return view('welcome');
});


Route::resource('/tours','TourController');

Route::resource('/image','ImgtourController');