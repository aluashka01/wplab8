<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ImageController;
use App\Models\Image;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/image', 'App\Http\Controllers\ImageController@index');
Route::post('/addform', 'App\Http\Controllers\ImageController@store')->name('addform');