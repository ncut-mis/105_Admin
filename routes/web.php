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
    return view('auth.login');
});

// 後台 公告管理
Route::group(['prefix' => 'admin'], function() {
    Route::get('/', ['as' => 'admin.dashboard.index', 'uses' => 'AdminDashboardController@index']);

    Route::get('posts'          , ['as' => 'admin.posts.index' , 'uses' => 'AdminPostsController@index']);
    Route::get('posts/create'   , ['as' => 'admin.posts.create', 'uses' => 'AdminPostsController@create']);
    Route::get('posts/{id}/edit', ['as' => 'admin.posts.edit'  , 'uses' => 'AdminPostsController@edit']);

    Route::post('posts',          ['as' => 'admin.posts.store', 'uses' => 'AdminPostsController@store']);
    Route::patch('posts/{id}',    ['as' => 'admin.posts.update', 'uses' => 'AdminPostsController@update']);
    Route::delete('posts/{id}',    ['as' => 'admin.posts.destroy', 'uses' => 'AdminPostsController@destroy']);

 //.............................................................................................................

 //病患帳戶管理
    Route::get('users'          , ['as' => 'admin.users.index' , 'uses' => 'AdminUsersController@index']);
    Route::get('users/create'   , ['as' => 'admin.users.create', 'uses' => 'AdminUsersController@create']);
    Route::get('clinics/{clinic}/staff/{staff}/edit', ['as' => 'admin.users.edit'  , 'uses' => 'AdminUsersController@edit']);

    Route::post('users',          ['as' => 'admin.users.store', 'uses' => 'AdminUsersController@store']);
    Route::patch('users/{id}',    ['as' => 'admin.users.update', 'uses' => 'AdminUsersController@update']);
    Route::delete('users/{clinic}',    ['as' => 'admin.users.destroy', 'uses' => 'AdminUsersController@destroy']);

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
