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
Route::get("/admin", "CategoryAdminController@index")->name("categoryadminindex");
Route::get("/admin/category/create", "CategoryAdminController@create")->name("categoryadmincreate");
Route::post("/admin/category/store", "CategoryAdminController@store")->name("categoryadminstore");
Route::get("/admin/category/show", "CategoryAdminController@show")->name("categoryadminshow");
Route::post("/admin/category/update", "CategoryAdminController@update")->name("categoryadminupdate");
Route::post("/admin/category/delete", "CategoryAdminController@destroy")->name("categoryadmindelete");

