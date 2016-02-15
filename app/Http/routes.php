<?php

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
    Route::get('/', ['uses' => 'UrlController@create']);
    Route::resource('url', 'UrlController');
    Route::get('{hash}', ['uses' => 'UrlController@show']);
});
