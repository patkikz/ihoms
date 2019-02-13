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

Route::get('tenants/{tenant}/family-members' , 'TenantsController@familyMember')->middleware('checkuserrole');
Route::post('tenants/{tenant}/family-members' , 'TenantsController@familyMemberStore')->middleware('checkuserrole');
Route::resource('tenants','TenantsController')->middleware('checkuserrole');

Route::resource('expenses', 'ExpensesController')->middleware('checkuserrole');
Route::resource('purposes', 'PurposesController')->middleware('checkuserrole');

Route::get('dues/get-due-details/{id}','DuesController@dueDetails')->middleware('checkuserrole');
Route::get('dues/get-tenant-details/{id}','DuesController@tenantDetails')->middleware('checkuserrole');
Route::get('dues/autocomplete', 'DuesController@autocomplete')->middleware('checkuserrole');
Route::resource('dues', 'DuesController')->middleware('checkuserrole');

Route::get('car-stickers/get-type-details/{id}', 'CarStickersController@typeDetails')->middleware('checkuserrole');
Route::get('car-stickers/autocomplete', 'CarStickersController@autoComplete')->middleware('checkuserrole');
Route::resource('car-stickers', 'CarStickersController')->middleware('checkuserrole')->middleware('checkuserrole');


Route::get('reservations/get-type-details/{id}', 'ReservationsController@typeDetails')->middleware('checkuserrole');
Route::get('reservations/autocomplete', 'ReservationsController@autocomplete')->middleware('checkuserrole');
Route::resource('reservations', 'ReservationsController')->middleware('checkuserrole')->middleware('checkuserrole');

Route::get('arrears/get-arrear-details/{id}', 'ArrearsController@arrearDetails')->middleware('checkuserrole');
Route::get('arrears/autocomplete', 'ArrearsController@autocomplete')->middleware('checkuserrole');
Route::resource('arrears', 'ArrearsController')->middleware('checkuserrole');


Auth::routes(['verify' => true ,'register' => false]);
Route::get('/dashboard/chart','DashboardController@chart');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard')->middleware('verified');

Route::resource('profile', 'ProfilesController')->middleware('auth');
Route::resource('family-members', 'FamilyMembersController')->middleware('auth');
Route::resource('history', 'TransactionHistoriesController')->middleware('auth');

Route::get('/reports/member-dues', 'ReportsController@memberDues')->middleware('checkuserrole');
Route::get('reports/member-dues/pdf', 'ReportsController@pdf')->middleware('checkuserrole');

Route::resource('board-resolutions','BoardResolutionsController')->middleware('checkuserrole');

Route::resource('payment-managements', 'PaymentManagementsController')->middleware('checkuserrole');

Route::resource('reservation-types', 'ReservationTypesController')->middleware('checkuserrole');

Route::resource('relationships', 'RelationshipsController')->middleware('checkuserrole');

Route::resource('vehicle-types', 'VehicleTypesController');
// Route::get('/home', 'HomeController@index')->name('dashboard')->middleware('verified');

// Route::resource('admin/posts', 'Admin\\PostsController');

Route::get('/home', 'HomeController@index')->name('home');
