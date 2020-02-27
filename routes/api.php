<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'slides'], function(){

    Route::get('/detail/{id}', 'Api\SlidesController@show')->name('slide_show_api');
    Route::get('/', 'Api\SlidesController@index')->name('slide_list_api');

});


Route::group(['prefix' => 'articles'], function(){

    Route::get('/detail/{id}', 'Api\ArticleController@show')->name('article_show_api');
    Route::get('/', 'Api\ArticleController@index')->name('article_list_api');

});

Route::group(['prefix' => 'settings'], function(){

    Route::get('/{name}', 'Api\SettingsController@show')->name('settings_show_api');

});
