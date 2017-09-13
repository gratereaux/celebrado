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
    //temporal
    return view('soon.regist');
});

Route::get('/pre-register', function(){ return view('soon.regist'); })->name('preregister.index');

Route::post('/pre-register', 'UserController@storepreregist')->name('preregister.store');


Auth::routes();

Route::get('/home', 'HomeController@index');


//Blog
Route::get('/blog', 'BlogController@index');
Route::get('blog/{slug}', 'BlogController@show');



Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'isAdmin']], function(){
    Route::get('/', 'AdminController@index');

    Route::resource('suplidor', 'SuplidorController');
    Route::resource('usuario', 'UserController');

    Route::get('categoria','CategoriaController@index')->name('categoria.index');
    Route::post('categoria', 'CategoriaController@store')->name('categoria.store');
    Route::delete('categoria/{id}', 'CategoriaController@remove')->name('categoria.destroy');


    Route::resource('servicio', 'ServicioController');
    Route::get('servicio/add/{suplidor_id}', 'ServicioController@add')->name('servicio.add');


    Route::resource('blog', 'BlogAdminController');



});