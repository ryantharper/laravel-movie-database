<?php


//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', 'TestController@index');

//Route::get('main', 'TestController@main');

Route::get('/', 'RetflixController@movielist');

Route::get('movies/{id}', 'RetflixController@showMov');
Route::get('shows/{id}', 'RetflixController@showTv');
Route::get('shows/{id}/season={season}&episode={episode}', 'RetflixController@showEp');

Route::group(['middleware' => ['web']], function () {
    //
});
