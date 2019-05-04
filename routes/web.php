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
    Route::any('/admin/news/index', 'NewsController@index');
    Route::any('/admin/news/create', 'NewsController@create');
    Route::post('/admin/news/store', 'NewsController@store');
    Route::any('/admin/news/destroy', 'NewsController@destroy');
    Route::any('/admin/news/edit', 'NewsController@edit');
    Route::any('/admin/news/update', 'NewsController@update');

    Route::any('/admin/article', 'ArticleController@index');
    Route::any('/admin/article/index', 'ArticleController@index');
    Route::any('/admin/article/create', 'ArticleController@create');
    Route::post('/admin/article/store', 'ArticleController@store');
    Route::any('/admin/article/destroy', 'ArticleController@destroy');
    Route::any('/admin/article/edit', 'ArticleController@edit');
    Route::any('/admin/article/update', 'ArticleController@update');

    Route::any('/admin/tractate', 'TractateController@index');
    Route::any('/admin/tractate/index', 'TractateController@index');
    Route::any('/admin/tractate/create', 'TractateController@create');
    Route::post('/admin/tractate/store', 'TractateController@store');
    Route::any('/admin/tractate/destroy', 'TractateController@destroy');
    Route::any('/admin/tractate/edit', 'TractateController@edit');
    Route::any('/admin/tractate/update', 'TractateController@update');

    Route::any('/admin/product', 'ProductController@index');
    Route::any('/admin/product/index', 'ProductController@index');
    Route::any('/admin/product/create', 'ProductController@create');
    Route::post('/admin/product/store', 'ProductController@store');
    Route::any('/admin/product/destroy', 'ProductController@destroy');
    Route::any('/admin/product/edit', 'ProductController@edit');
    Route::any('/admin/product/update', 'ProductController@update');

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
