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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::view('/', 'welcome');

Route::get('/about/me', function() {
	return 'About me!';
});

Route::get('/contact', function() {
	return [
		'name' => 'Mohammed',
		'job' => 'Developer',
	];
});

//Route::redirect('/about/me', '/contact');

Route::get('/posts', 'PostsController@index')->name('posts');
Route::get('/posts/{id}', 'PostsController@view')->name('posts.view');
