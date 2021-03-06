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

Auth::routes();

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function(){

    Route::group(['prefix' => 'post'], function(){

        Route::get('list', 'PostController@showPostList');
        Route::get('add', 'PostController@showAddPost');
        Route::get('edit/{postId}', 'PostController@showEditPost');

        Route::post('store', 'PostController@storePost');
        Route::post('update', 'PostController@updatePost');
        Route::get('delete/{postId}/{confirm?}', 'PostController@deletePost');
    });

    Route::get('/', 'DashboardController@showDashboard');

});

Route::group(['namespace' => 'Front'], function(){

    Route::get('/', 'IndexController@showPostList');
    Route::get('post/{postId}', 'PostController@showPost');

});