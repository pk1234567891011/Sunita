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
Route::delete('posts', 'PostController@deleteAll');
// Route::resource('posts','PostController');
Route::resource('product','ProductController');
// Route::delete('product', 'ProductController@deleteAll');
 Route::get('/postsearch','PostController@search');
 Route::get('/productsearch','ProductController@search');

 //named route
Route::resource('category', 'PostController', [
    'names' => [
        'index' => 'posts.index',
        'store' => 'posts.store',
        'show' => 'posts.show',
        'edit'=>'posts.edit',
        'destroy'=>'posts.destroy',
        'create'=>'posts.create',
        'update'=>'posts.update'

    ]
]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
