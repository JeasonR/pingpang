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

<<<<<<< HEAD
=======
<<<<<<< HEAD
//后台首页路由
Route::get('admin/index/index', 'Admin\IndexController@index')->name('dashboard');//
Route::get('admin/index/welcome', 'Admin\IndexController@welcome')->name('welcome');//
=======
<<<<<<< Updated upstream
>>>>>>> 1ce61ce2692f2153dcba43350133df9a8fb953cc
>>>>>>> 0fd2e1f411b23e758e4a85805b25177173dba08c

Route::get('/', function () {
    return view('welcome');
});
//运动员管理
// 人员列表展示
Route::get('user/index'.'Admin\UserController@index')-> name('user_index');
//人员添加
Route::any('user/add'.'Admin\UserController@add')->name('user_add');
//头像上传
Route::post('uploader/webuploader','Admin\UploadController@webuploader');


//后台管理页面 ByPliaf
Route::get('admin/manager','Admin\ManagerController@index')-> name('manager_index'); //管理员试图列表
Route::any('admin/manager/add','Admin\ManagerController@add') -> name('manager_add'); //添加管理员
Route::get('admin/manager/delete','Admin\ManagerController@delete') -> name('manager_delete'); //删除管理员
Route::any('admin/manager/edit','Admin\ManagerController@edit') -> name('manager_edit'); //编辑管理员