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
Route::get('/', ['as'=>'home.posts', 'uses'=>'AdminPostsController@show']);
//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();


Route::get('/logout', 'Auth\LoginController@logout');
Route::group(['middleware'=>'admin'], function(){

    Route::get('/admin', function(){

        return view('admin.index');
    });

    Route::resource('admin/users', 'AdminUsersController',['names'=>[

        'index'=>'admin.users.index',
        'create'=>'admin.users.create',
        'store'=>'admin.users.store',
        'edit'=>'admin.users.edit'
    ]]);

    Route::get('/post/{id}', ['as'=>'home.post', 'uses'=>'AdminPostsController@post']);
    Route::get('/posts', ['as'=>'home.posts', 'uses'=>'AdminPostsController@show']);


    Route::resource('admin/posts', 'AdminPostsController',['names'=>[

        'index'=>'admin.posts.index',
        'create'=>'admin.posts.create',
        'store'=>'admin.posts.store',
        'update'=>'admin.posts.update',
        'edit'=>'admin.posts.edit',
        'post'=>'admin.posts.post'
    ]]);

    Route::resource('admin/comments', 'PostCommentController',['names'=>[

        'index'=>'admin.comments.index',
        'create'=>'admin.comments.create',
        'store'=>'admin.comments.store',
        'edit'=>'admin.comments.edit',
        'show'=>'admin.comments.show'
    ]]);
});