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
Route::get('/company', 'PagesController@company');
Route::get('/contact', 'PagesController@contact');

Route::resource('posts','PostsController');

Route::get('tenants/{tenant}/family-members' , 'TenantsController@familyMember');
Route::post('tenants/{tenant}/family-members' , 'TenantsController@familyMemberStore');
Route::resource('tenants','TenantsController')->middleware('checkuserrole');

Route::resource('expenses', 'ExpensesController')->middleware('checkuserrole');
Route::resource('purposes', 'PurposesController')->middleware('checkuserrole');

Route::get('dues/get-tenant-details/{id}','DuesController@tenantDetails');
Route::resource('dues', 'DuesController')->middleware('checkuserrole');

Route::resource('car-stickers', 'CarStickersController')->middleware('checkuserrole');
Route::resource('reservations', 'ReservationsController')->middleware('checkuserrole');


Auth::routes(['verify' => true ,'register' => false]);

Route::get('/dashboard', 'DashboardController@index')->name('dashboard')->middleware('verified');

// Route::get('/home', 'HomeController@index')->name('dashboard')->middleware('verified');

// Route::resource('admin/posts', 'Admin\\PostsController');

Route::get('/home', 'HomeController@index')->name('home');
