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
// ** Subpages  ** //
Route::get('/treatments/traditional-chinese-medicine', ['as' => 'Traditional Chinese Medicine', 'uses' => 'TreatmentPagesController@getTraditionalChineseMedicinePage']);
Route::get('/treatments/sacred-crystal-healing', ['as' => 'Sacred Crystal Healing', 'uses' => 'TreatmentPagesController@getSacredCrystalHealing']);
Route::get('/treatments/massage', ['as' => 'Massage', 'uses' => 'TreatmentPagesController@getMassagePage']);
Route::get('/treatments/reiki', ['as' => 'Reiki', 'uses' => 'TreatmentPagesController@getReikiPage']);
Route::get('/treatments/inka-shamanic-healing', ['as' => 'Inka Shamanic Healing', 'uses' => 'TreatmentPagesController@getInkaShamanicHealingPage']);

// ** Courses ** //
Route::get('/courses',  ['as' => 'Courses', 'uses' => 'PagesController@getCoursesPage']);
// ** Subpages  ** //
Route::get('/courses/acupressure-workshop', ['as' => 'Acupressure Workshop', 'uses' => 'CoursesPagesController@getAcupressureWorkshopPage']);
Route::get('/courses/herbal-medicine-workshop', ['as' => 'Herbal Medicine Workshop', 'uses' => 'CoursesPagesController@getHerbalMedicineWorkshop']);
Route::get('/courses/spiritual-awakening-workshop', ['as' => 'Spiritual Awakening Workshop', 'uses' => 'CoursesPagesController@getSpiritualAwakeningWorkshopPage']);

// ** Testimonials ** //
Route::get('/testimonials',  ['as' => 'Testimonials', 'uses' => 'PagesController@getTestimonialsPage']);

// ** Contact ** //
Route::get('/contact',  ['as' => 'Contact us', 'uses' => 'PagesController@getContactPage']);

// ** Book Now ** //
Route::get('/book-now',  ['as' => 'Book Now', 'uses' => 'PagesController@getBookNowPage']);

// ** POST Routes ** //

Route::post('/contact', 'FormsController@postContact');
Route::post('/book-now', 'FormsController@postBookNow');

// ** Admin** //
Route::group(['middleware' => 'auth'], function () {
    Route::get('admin/user-panel', 'AdminUserControlPanel@getUserPanelPage');
});




Auth::routes(['verify' => true]);

Route::get('/home', 'BackendController@index')->name('Settings');
Route::get('/services', 'BackendController@services')->name('Services');
Route::get('/services/post', 'BackendController@services_post')->name('Post Service');
