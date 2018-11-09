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
//后台登录
Route::resource("/adminlogin","Admin\AdminloginController");
//后台主页
Route::resource("/admin","Admin\AdminController");
//后台用户
Route::resource('/user','Admin\UsersController');
//后台商品分类
Route::resource('/admincates','Admin\CateController');
//管理员模块
Route::resource("/adminsuser","Admin\AdminuserController");
//广告模块
Route::resource("/adv","Admin\AdvController");

//前台主页
Route::resource('/home','Home\IndexController');