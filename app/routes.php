<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
 */

Route::get('/', 'HomeController@initialLoad');

//Procesa el formulario e identifica al usuario

Route::get('/login', ['before' => 'check_guest', function () {
    return View::make('login');
}]);

Route::post('/logon', ['uses' => 'AuthController@doLogin', 'before' => 'check_guest']);
//Desconecta al usuario
Route::get('/logout', ['uses' => 'AuthController@doLogout', 'before' => 'check_auth']);

/*Route::get('/login', function(){
return View::make('login');
});
 */

Route::group(['prefix' => 'admin', 'before' => 'check_auth'], function () {
    Route::get('/', function () {
        return View::make('admin.user');
    });

    Route::get('/ad', function () {
        return View::make('admin.ad');
    });

    Route::get('/budget', function () {
        return View::make('admin.budget');
    });

    Route::get('/doctor', function () {
        return View::make('admin.doctor');
    });

    Route::get('/nav_menu', function () {
        return View::make('admin.nav_menu');
    });

    Route::get('/promo', function () {
        return View::make('admin.promo');
    });

    Route::get('/service', function () {
        return View::make('admin.service');
    });
    Route::get('/slider', function () {
        return View::make('admin.slider');
    });
    Route::get('/speciality', function () {
        return View::make('admin.speciality');
    });
    Route::get('/user', function () {
        return View::make('admin.user');
    });

    Route::group(['prefix' => 'user'], function () {
        Route::post('/save', 'UsersController@store');
        Route::post('/update', 'UsersController@update');
        Route::post('/edit', 'UsersController@edit');
        Route::post('/delete', 'UsersController@destroy');
    });

/*
Route::get('/clientes/{cliente}/{reporte}', 'FilesController@getFileNames');

Route::get('/clientes', function(){
return View::make('clientes');
});

Route::post('/upload-file/{cliente}/{reporte}','FilesController@uploadFile');

Route::get('/delete_file','FilesController@deleteFile');

Route::get('/send-email/{cliente}/{reporte}','HomeController@sendEmail');
 */

});

App::missing(function ($exception) {
    return Response::view('errors.404');
});
