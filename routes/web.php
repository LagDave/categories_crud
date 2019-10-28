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
Route::get('/categories', 'CategoriesController@index');
Route::get('/categories/create', 'CategoriesController@create');
Route::post('/categories/store', 'CategoriesController@store');
Route::delete('/categories/delete/{category}', 'CategoriesController@delete');
Route::get('/categories/edit/{category}', 'CategoriesController@edit');
Route::patch('/categories/update/{category}', 'CategoriesController@update');

Route::get('/subcategories/create/{category}', 'SubCategoriesController@create');
Route::post('/subcategories/store/{category}', 'SubCategoriesController@store');
Route::delete('/subcategories/delete/{subcategory}', 'SubCategoriesController@delete');
Route::get('/subcategories/edit/{subcategory}', 'SubCategoriesController@edit');
Route::patch('/subcategories/update/{subcategory}', 'SubCategoriesController@update');