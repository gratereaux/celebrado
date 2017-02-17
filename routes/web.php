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

Route::get('/', function () {
    return view('soon.index');
});

Route::get('/pre-register', function(){
    return view('soon.regist');
})->name('preregister');

Auth::routes();

Route::get('/home', 'HomeController@index');



Route::get('/admin', 'AdminController@index');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){

    Route::resource('suplidor', 'SuplidorController');
    Route::resource('usuario', 'UserController');

    Route::get('categoria','CategoriaController@index')->name('categoria.index');
    Route::post('categoria', 'CategoriaController@store')->name('categoria.store');
    Route::delete('categoria/{id}', 'CategoriaController@remove')->name('categoria.destroy');

});

