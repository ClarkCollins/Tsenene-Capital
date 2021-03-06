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
/*
Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', function () {
    return view('home');
});
Route::get('/register', 'RegistrationController@index');

/*
Route::get('/users/{id}/{name}', function ($id, $name) {
    return 'this is user'.$id. 'with a name of'.$name;
});
*/
//Client
Route::get('/login', 'LoginController@login');
Route::post('/password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/dashboard', 'CompaniesController@dashboard');
Route::resource('companies', 'CompaniesController');
Route::resource('banks', 'BanksController');
Route::resource('uploads', 'UploadsController');
Route::resource('tracking', 'TrackingController');

Route::get('/trackings/{id}', 'TrackingController@create');
Route::post('/tracking_d/{id}', 'TrackingController@update');
Route::post('/tracking_/{id}', 'TrackingController@store');

Route::get('/upload/{id}', 'UploadsController@create');
Route::post('/upload_/{id}', 'UploadsController@store');
Route::post('/upload_d/{id}', 'UploadsController@update');

Route::get('/add_company', 'CompaniesController@create');
Route::get('/delete_company/{id}', 'CompaniesController@delete');

Route::get('/profile', 'ProfileController@profile');
Route::post('/profile_update', 'ProfileController@update_user_profile');
Route::get('/delete_photo/{id}', 'ProfileController@delete_user_photo');
Route::post('/update_password', 'ProfileController@update_user_password');

//Admin
Auth::routes();
Route::get('/all_company', 'CompaniesController@view_companies');
Route::get('/all_upload/{id}', 'UploadsController@all_upload');
Route::get('/all_tracking/{id}', 'TrackingController@view_tracking');
Route::get('/all_companies/{id}', 'CompaniesController@view_company');
Route::get('/admin_home', 'HomeController@admin_home')->name('admin_home');
