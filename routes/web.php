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




/*Route::get('/hello', function () {

     return 'Hello World!';
 });

 Route::get('/users/{id}/{name}', function ($id, $name) {
    return 'This is user '.$name. ' with an id '. $id;
});

*/

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route::resource('posts','PostsController');
Route::resource('tenants','TenantsController');


Auth::routes(['verify' => true, 'register' => false]);

Route::get('/dashboard', 'DashboardController@index')->name('dashboard')->middleware('verified');

// Route::get('/home', 'HomeController@index')->name('dashboard')->middleware('verified');

// Route::resource('admin/posts', 'Admin\\PostsController');

Route::get('/home', 'HomeController@index')->name('home');
