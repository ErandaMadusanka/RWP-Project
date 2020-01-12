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
    Route::get('admin/login', 'AdminController@login');
    Route::get('admin/home', 'AdminController@index');
    Route::get('admin/activities', 'ActivitiesController@activities');
    Route::get('admin/beaches', 'BeachesController@beaches');
    Route::get('admin/events', 'EventsController@events');
    Route::get('admin/places', 'PlacesController@places');
    Route::get('admin/tourpackages', 'TourPackagesController@tourpackages');

    /*
|--------------------------------------------------------------------------
| pages
|--------------------------------------------------------------------------
|
*/
    Route::get('/activities', 'ActivitiesController@index');
    Route::get('/beaches', 'BeachesController@index');
    Route::get('/events', 'EventsController@index');
    Route::get('/places', 'PlacesController@index');
    Route::get('/tourpackages', 'TourPackagesController@index');