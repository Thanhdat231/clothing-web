<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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
    return view('dashboard.index');
});



Route::prefix('categories')->group(function () {
    Route::get('/show-categories', [
        'as' => 'categories.show-categories',
        'uses' => 'CategoriesController@show_categories'
    ]);

    Route::get('/add-categories', [
        'as' => 'categories.add-categories',
        'uses' => 'CategoriesController@add_categories'
    ]);
    Route::post('/store-categories', [
        'as' => 'categories.store-categories',
        'uses' => 'CategoriesController@store_categories'
    ]);
});