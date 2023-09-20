<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/page1', 'App\Http\Controllers\PageController@afficherpage1');
Route::get('/affichage/donnees', 'App\Http\Controllers\PageController@donnees');


Route::get('/category/add', 'App\Http\Controllers\CategoryController@AddCategory');
