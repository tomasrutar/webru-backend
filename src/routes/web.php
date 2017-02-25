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

Route::get('/backend', function () {
    return view('WebruBackendViews::pages.dashboard');
});

Route::get('/backend/login', function () {
    return view('WebruBackendViews::pages.login');
});

Route::post('/backend/login', array(
    'uses' => 'TomasRutar\WebruBackend\Controllers\UserController@Login'
));