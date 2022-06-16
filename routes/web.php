<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\formController;

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
    return view('layouts.form');
});


Route::any('/register','formController@create')->name('register');
Route::any('/loginn','formController@index')->name('loginn');
Route::any('/dashboard', 'formController@dashboard')->middleware('formauth');
Route::any('/logout','formController@logout')->name('logout');

