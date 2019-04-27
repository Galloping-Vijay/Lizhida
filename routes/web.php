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

use Illuminate\Support\Facades\Route;

//访问
Route::get('/test', 'Home\IndexController@test');

Route::any('/update', 'Home\UploadController@update');

//首页
Route::get('/', 'Home\IndexController@index');
//产品中心
Route::get('/product', 'Home\ProductController@index');
//产品详情
Route::get('/product/show/{id}', 'Home\ProductController@show');
//新闻中心
Route::get('/news', 'Home\NewsController@index');
//新闻详情
Route::get('/news/show/{id}', 'Home\NewsController@show');
//关于我们
Route::get('/about', 'Home\IndexController@about');
//联系我们
Route::get('/contact', 'Home\IndexController@contact');

Route::get('/blog', 'BlogController@index')->name('blog.home');
Route::get('/blog/{slug}', 'BlogController@showPost')->name('blog.detail');

// 后台路由
Route::namespace('Admin')->group(function () {
    Route::get('admin', 'IndexController@index');
});

Route::middleware('auth')->namespace('Admin')->group(function () {
    Route::any('admin/system', 'SystemController@index');
    Route::any('admin/system/store', 'SystemController@store');

    Route::any('/admin/news', 'NewsController@index');
    Route::any('/admin/news/create', 'NewsController@create');
    Route::post('/admin/store', 'NewsController@store');

    Route::resource('admin/product', 'ProductController', ['except' => 'show']);

    Route::resource('admin/post', 'PostController', ['except' => 'show']);
    Route::resource('admin/tag', 'TagController', ['except' => 'show']);
    Route::get('admin/upload', 'UploadController@index');
    Route::post('admin/upload/file', 'UploadController@uploadFile');
    Route::delete('admin/upload/file', 'UploadController@deleteFile');
    Route::post('admin/upload/folder', 'UploadController@createFolder');
    Route::delete('admin/upload/folder', 'UploadController@deleteFolder');
});


// 登录退出
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
