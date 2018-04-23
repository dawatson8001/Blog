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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/post/{id}', ['as'=>'home.post', 'uses'=>'PostCommentController@post']);


Route::get('/user', function(){

    return view('/user.index');

});
Route::group(['middleware'=>'admin'], function(){
    Route::get('/admin', function(){

        return view('/admin.index');

    });

    Route::get('/user', function(){

        return view('/user.index');

    });

Route::resource('/admin/users', 'AdminUsersController');

Route::resource('user/posts', 'UserPostsController');

Route::resource('admin/posts', 'UserPostsController');

Route::resource('admin/comments','PostCommentController');

Route::resource('admin/comment/replies','CommentRepliesController');

});

Route::group(['middleware'=>'auth'], function(){


    Route::post('comment/reply', 'CommentRepliesController@createReply');


});

