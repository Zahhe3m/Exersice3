<?php

use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
    return view('welcome');
});

*/
/*
Route::get('/{name}/{id}', function ($name, $id) {
    return view('Home', ['name'=>$name, 'id'=>$id]);   
});

Route::get('/appointment', function () {
    return view('appointment');
});

Route::get('/contact', function () {
    return view('contact');
});

*/

Route::get('/contact', 'App\Http\Controllers\ContactController@show');
Route::post('/contact', 'App\Http\Controllers\ContactController@mailContactForm');

use App\Http\Controllers\bookController; 

Route::get('/about', 'App\Http\Controllers\bookController@about'); 
Route::get('/list', 'App\Http\Controllers\bookController@list'); 