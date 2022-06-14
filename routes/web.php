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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kalab', 'App\Http\Controllers\praktikumCont@kalabAslab');
Route::get('/user/add', 'App\Http\Controllers\praktikumCont@adduser');
Route::get('/aslab', 'App\Http\Controllers\praktikumCont@aslab');
Route::get('/dosbim', 'App\Http\Controllers\praktikumCont@dosbim');
Route::get('/', 'App\Http\Controllers\praktikumCont@login');
Route::get('/edit/user/{$nbi}', 'App\Http\Controllers\praktikumCont@edituser');
// Route::get('/edit/user/{$nbi}','App\Http\Controllers\praktikumCont@edituser');

Route::get('/login/logic','App\Http\Controllers\generalController@login_logic');