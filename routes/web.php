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

Route::get('protected',['middleware'=>['stormpath.auth'],function(){
    return 'These are all the secrets!';
}]);

Route::get('guests',['middleware'=>['stormpath.guest'],function(){
    return 'You are a Guest!';
}]);