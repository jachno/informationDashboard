<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['middleware' => 'web'], function () {
Route::get('/', 'DashboardController@index');

Route::get('/postupdate/{id?}', 'DashboardController@postUpdate');

Route::post('/formpostupdate/{id?}', 'DashboardController@formPostUpdate');

Route::get('/addbacklog', 'DashboardController@addBacklog');

Route::get('/editbacklog/{id?}/', 'DashboardController@editBacklog');


Route::post('/formPostBacklog/{id?}/', 'DashboardController@formPostBacklog');

Route::post('/savebacklog', ['as' => 'backlog.save', 'uses' => 'DashboardController@saveBacklog']);

Route::get('/deleteupdate/{id}', 'DashboardController@deleteUpdate');

    
// route to show the login form
Route::get('login', array('uses' => 'HomeController@showLogin'));

// route to process the form
Route::post('login', array('uses' => 'HomeController@doLogin'));
Route::get('logout', array('uses' => 'HomeController@logout'));
});



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

