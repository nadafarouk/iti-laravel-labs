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

Route::get('/posts/create', 'PostsController@create') -> name('posts.create');
Route::post('/posts/create','PostsController@store')-> name('posts.store');
Route::get('/posts/edit', 'PostsController@edit') -> name('posts.edit');


