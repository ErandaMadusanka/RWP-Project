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
        return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Admin Panel
|--------------------------------------------------------------------------
|
*/
    // Show Register Page & Login Page
    Route::get('admin/login', 'LoginController@show')->name('login')->middleware('guest');
    Route::get('admin/register', 'RegistrationController@show')->name('register')->middleware('guest');

    // Register & Login User
    Route::post('admin/login', 'LoginController@authenticate');
    Route::post('admin/register', 'RegistrationController@register');

    // Protected Routes - allows only logged in users
    Route::middleware('auth')->group(function () {
        
        Route::prefix('admin')->group(function(){
            Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

            Route::get('/activities', 'ActivitiesController@activities');

            // BEACH
            // <!--=========================================================================-->
            Route::get('/beach', 'BeachesController@index');
            Route::get('/beach/create', 'BeachesController@createView');
            Route::post('/beach/create', 'BeachesController@create')->name('admin.beach.create');
            Route::get('/beach/edit/{id}', 'BeachesController@editView');
            Route::post('/beach/edit/{id}', 'BeachesController@edit')->name('admin.beach.edit');
            Route::get('/beach/details/{id}', 'BeachesController@detailsView');
            Route::get('/beach/delete/{id}', 'BeachesController@deleteView');
            Route::get('/beach/deleteconfirm/{id}', 'BeachesController@delete')->name('admin.beach.delete');
            
            // Beach Activity
            // <!----------------------------------------------------------------------------->
            Route::get('/beach/ba/', 'BeachActivityController@index');
            Route::get('/beach/ba/create', 'BeachActivityController@createView');
            Route::post('/beach/ba/create', 'BeachActivityController@create')->name('admin.beachActivity.create');
            Route::get('/beach/ba/edit{id}', 'BeachActivityController@editView');
            Route::post('/beach/ba/edit{id}', 'BeachActivityController@edit')->name('admin.beachActivity.edit');
            Route::get('/beach/ba/details{id}', 'BeachActivityController@detailsView');
            Route::get('/beach/ba/delete{id}', 'BeachActivityController@deleteView');
            Route::post('/beach/ba/delete{id}', 'BeachActivityController@delete')->name('admin.beachActivity.delete');
            // <!--=========================================================================-->


            //places
            // <!--=========================================================================-->
            // Route::get('/places', 'PlacesController@places');
            Route::get('/places', 'PlacesController@index');
            Route::get('/places/create', 'PlacesController@createView');
            Route::post('/places/create', 'PlacesController@create')->name('admin.place.create');
            Route::get('/places/edit/{id}', 'PlacesController@editView');
            Route::post('/places/edit/{id}', 'PlacesController@edit')->name('admin.place.edit');
            Route::get('/places/details/{id}', 'PlacesController@detailsView');
            Route::get('/places/delete/{id}', 'PlacesController@deleteView');
            Route::get('/places/deleteconfirm/{id}', 'PlacesController@delete')->name('admin.place.delete');
            // <!--=========================================================================-->

            Route::get('/events', 'EventsController@events');

            Route::get('/tourpackages', 'TourPackagesController@tourpackages');
            Route::get('/nationalPark', 'NationalParkController@index');
        });
        Route::post('/logout', 'LoginController@logout')->name('logout');
    });

    /*
|--------------------------------------------------------------------------
| pages
|--------------------------------------------------------------------------
|
*/
    Route::get('/beaches', 'BeachesController@beaches');
    Route::get('/places', 'PlacesController@places');
    Route::get('/nationalParks', 'NationalParkController@nationalPark');
    Route::get('/events', 'EventsController@index');
    Route::get('/tourpackages', 'TourPackagesController@index');
    Route::get('/activities', 'ActivitiesController@index');
    
    Route::get('/udawalwe', function () {
        return view('single-blog');
    });

    Route::post('/saveNationalParkData',"NationalParkController@storeData");
    Route::post('nationalPark/fetch', 'NationalParkController@fetch')->name('dynamicdependent.fetch');