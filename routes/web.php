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

Route::get('/resume', function(){ return view('resume');});
Route::get('/interview', function(){ return view('interview');});

//Route::get('/', 'WelcomeController@work');
//Route::get('/work', 'WelcomeController@work');
//Route::get('/resume', 'WelcomeController@resume');
//Route::get('/interview', 'WelcomeController@interview');
//// Route::get('/interview', ['middleware' => 'auth', 'uses' => 'WelcomeController@interview']);
//Route::get('/switchbuilder',function(){
//    return View::make('switchbuilder');
//});
//
//Route::post('/sgsp','SilentPostController@processSgsp');
//Route::get('home', 'HomeController@index');

