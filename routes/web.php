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



Auth::routes();

Route::post('/follow/{user}',('App\Http\Controllers\FollowsController@store'));

Route::get('/','App\Http\Controllers\postsController@index');
Route::get('/p/create','App\Http\Controllers\postsController@create');
Route::post('/p','App\Http\Controllers\postsController@store');
Route::get('/p/{post}','App\Http\Controllers\postsController@show');

Route::get('/profile/{user}', [App\Http\Controllers\profilecontroller::class, 'index'])->name('profile.show');
Route::get('/profile/{user}/edit', [App\Http\Controllers\profilecontroller::class, 'edit'])->name('profile.edit');
Route::patch('/profile/{user}', [App\Http\Controllers\profilecontroller::class, 'update'])->name('profile.update');
