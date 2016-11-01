<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
$config = \Illuminate\Support\Facades\Config::get("jack-calendar");

if (!$config['auth']) {
    Route::group(['prefix' => $config['prefix'], 'namespace' => 'Jacklaravel\Calendar'], function () {
        Route::get('/', 'CalendarController@index');
        Route::post('add', 'CalendarController@createEvent');
        Route::post('change', 'CalendarController@setEvent');
        Route::post('remove', 'CalendarController@removeEvent');
    });
} else {
    Route::group(['middleware' => $config['middleware'], 'prefix' => $config['prefix'], 'namespace' => 'Jacklaravel\Calendar'], function () {
        Route::get('/', 'CalendarController@index');
        Route::post('add', 'CalendarController@createEvent');
        Route::post('change', 'CalendarController@setEvent');
        Route::post('remove', 'CalendarController@removeEvent');
    });
}
