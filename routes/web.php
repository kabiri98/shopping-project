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

// 
Route::get('/', 'FirstpageController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contactus', 'HomeController@contactus')->name('contactus');
Route::get('/about', 'HomeController@about')->name('about');



///profile//////
// Route::get('/profile', 'ProfileController@index')->name('profile');
Route::get('/profile','ProfileController@index');
Route::post('/profile','ProfileController@index');
Route::get('/favorites', 'ProfileController@favorites')->name('favorites');
Route::get('/bought', 'ProfileController@bought')->name('bought');
Route::get('/factors', 'ProfileController@factors')->name('factors');

Route::get('/products/{product}', 'productController@show')->name('product');
//in yani id product i ke mikhaym.                    ^ in show standarde. baraye neshoon dade item bayad show bashe esmesh.
// in kari ke inja anjam dadim ro migan oute model binding. yani too route migim {product}
// bad too method ham vorodi hamino migirim ba typesh

/////admin//////
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    // Route::get('/alluserdatatabels','UserController@alluserdatatabels')->name('users.alluserdatatabels');
    // Route::get('/index1','UserController@index1')->name('users.index1');
    
    Route::get('/home', 'AdminController@index');
    Route::get('/dash1', 'AdminController@indexdashboard1')->name('dash1');
    Route::get('/dash2', 'AdminController@indexdashboard2')->name('dash2');
    Route::get('/dash3', 'AdminController@indexdashboard3')->name('dash3');
    Route::get('/contact', 'AdminController@indexcontact')->name('contact');

//  Route::resource('/users','UserController@show');
/////////CONTROL USERS/////////
Route::get('/users/showusers', 'UserController@showusers')->name('users.showusers');

Route::get('/users/deleteform/{id}', 'Usercontroller@deleteform')->name('users.deleteform');
Route::post('/users/deleteuser/{id}', 'Usercontroller@deleteuser')->name('users.deleteuser');

Route::get('/users/updateform/{id}', 'Usercontroller@updateform')->name('users.updateform');
Route::post('/users/updateuser/{id}', 'Usercontroller@updateuser')->name('users.updateuser');

Route::get('/users/insertform','Usercontroller@insertform')->name('users.insertform'); 
Route::post('/users/insertuser','Usercontroller@insertuser')->name('users.insertuser'); 



    //////////////CONTROL PRODUCT////////

Route::get('/product/showproduct', 'ProductController@showproduct')->name('product.showproduct');

Route::get('/product/deleteform/{id}', 'Productcontroller@deleteform')->name('product.deleteform');
Route::post('/product/delete/product/{id}', 'Productcontroller@deleteproduct')->name('product.deleteproduct');

Route::get('/product/updateform/{id}', 'Productcontroller@updateform')->name('product.updateform');
Route::post('/product/update/product/{id}', 'Productcontroller@updateproduct')->name('product.updateproduct');

Route::get('/product/insertproductform','ProductController@insertform')->name('product.insertform'); 
Route::post('/product/insertproduct','ProductController@insertproduct')->name('product.insertproduct'); 

   
});



