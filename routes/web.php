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

Route::get('/h', function () {
    return view('home');
});
Route::get('/', 'FirstpageController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contactus', 'HomeController@contactus')->name('contactus');
Route::get('/about', 'HomeController@about')->name('about');

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::get('/alluserdatatabels','UserController@alluserdatatabels')->name('users.alluserdatatabels');
    Route::get('/index1','UserController@index1')->name('users.index1');
    Route::resource('/users','UserController',['expect'=>['show','create','store','destroy'] ]);

    Route::get('/home', 'AdminController@index')->name('home');
    Route::get('/dash1', 'AdminController@indexdashboard1')->name('dash1');
    Route::get('/dash2', 'AdminController@indexdashboard2')->name('dash2');
    Route::get('/dash3', 'AdminController@indexdashboard3')->name('dash3');
    Route::get('/contact', 'AdminController@indexcontact')->name('contact');

    Route::get('/table','UserController@index');

        // show edit page
        Route::get('/edit/{id}','UserController@edit');
    
        // after edit
        Route::post('/update/{id}','UserController@update');
    
        // delete
        Route::get('/delete/{id}','UserController@destroy');
   
});



