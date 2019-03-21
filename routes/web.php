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


// ** GET Routes ** //

// ** Home ** //
Route::get('/', ['as' => 'Home', 'uses' => 'PagesController@getHomepage']);

// ** Who We Are ** //
Route::get('/who-are-we',  ['as' => 'Who Are We', 'uses' => 'PagesController@getWhoAreWePage']);
// ** Treatments ** //
Route::get('/treatments',  ['as' => 'Treatments', 'uses' => 'PagesController@getTreatmentsPage']);

// ** Testimonials ** //
Route::get('/testimonials',  ['as' => 'Testimonials', 'uses' => 'PagesController@getTestimonialsPage']);

// ** Contact ** //
Route::get('/contact',  ['as' => 'Contact', 'uses' => 'PagesController@getContactPage']);

// ** Book Now ** //
Route::get('/book-now',  ['as' => 'Book Now', 'uses' => 'PagesController@getBookNowPage']);

// ** POST Routes ** //

Route::post('/contact', 'FormsController@postContact');
Route::post('/book-now', 'FormsController@postBookNow');

// ** Admin** //
Route::group(['middleware' => 'auth'], function () {
    Route::get('admin/user-panel', 'AdminUserControlPanel@getUserPanelPage');
});



/** Backend **/

    Auth::routes(['verify' => true]);

    /** Home **/
    Route:: get('/home', 'BackendController@index')->name('Welcome');


    /** Users **/
    Route::get('/users', [
        'uses' => 'Backend\UsersController@index',
        'as' => 'Users',
        'middleware' => ['verified', 'roles'],
        'roles' => ['Admin']
    ]);

    Route::get('/users/{id}', [
        'uses' => 'Backend\UsersController@edit',
        'as' => 'Edit User',
        'middleware' => ['verified', 'roles'],
        'roles' => ['Admin']
    ]);


    Route::post('/user', 'Backend\UsersController@store');
    Route::put('/users/{id}', 'Backend\UsersController@update');
    Route::delete('/users/{id}', 'Backend\UsersController@destroy');
    Route::get('/create_user', 'Backend\UsersController@create')->name('Add User')->middleware('verified');

    /** Settings **/
    Route::get('/settings', [
        'uses' => 'SettingsController@index',
        'as' => 'Settings',
        'middleware' => ['verified', 'roles'],
        'roles' => ['Admin', 'User']
    ]);

    Route::put('/settings', 'SettingsController@update');


    /** Services **/
    Route::get('/services', 'Backend\ServicesController@index')->name('Services')->middleware('verified');
    Route::get('/services/{id}', 'Backend\ServicesController@edit')->name('Edit Service')->middleware('verified');
    Route::get('/post_service', 'Backend\ServicesController@create')->name('Post Service')->middleware('verified');
    Route::post('/services', 'Backend\ServicesController@store');
    Route::put('/services/{id}', 'Backend\ServicesController@update');
    Route::delete('/services/{id}', 'Backend\ServicesController@destroy')->name('Delete');



    /** Reviews **/

    Route::get('/reviews', 'Backend\ReviewsController@index')->name('Reviews')->middleware('verified');
    Route::get('/reviews/{id}', 'Backend\ReviewsController@edit')->name('Edit Review')->middleware('verified');
    Route::get('/post_review', 'Backend\ReviewsController@create')->name('Post Review')->middleware('verified');

    Route::post('/reviews', 'Backend\ReviewsController@store');
    Route::put('/reviews/{id}', 'Backend\ReviewsController@update');
    Route::delete('/reviews/{id}', 'Backend\ReviewsController@destroy');

