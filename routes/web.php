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
//展示登录页面
Route::get('admin/public/login','Admin\PublicController@login')->name('login');//登录页面
Route::post('admin/public/check','Admin\PublicController@check')->name('admin_check_login');//用户检测



// Route::group(['prefix' => 'admin','middleware'=>'auth:admin'],function(){
    //后台首页路由
    Route::get('admin/index/index', 'Admin\IndexController@index')->name('dashboard');//后台首页
    Route::get('admin/index/welcome', 'Admin\IndexController@welcome')->name('welcome');//后台欢迎页
    //退出路由
    Route::get('admin/index/logout','Admin\IndexController@logout') -> name('logout');
    //运动员管理
    Route::get('admin/user/index','Admin\UserController@index')-> name('user_index');// 人员列表展示
    Route::any('admin/user/add','Admin\UserController@add')->name('user_add');//人员添加
    Route::get('admin/user/delete', 'Admin\UserController@delete')->name('user_delete');//实现人员删除
    Route::any('admin/user/edit','Admin\UserController@edit')->name('user_edit');//人员编辑
    Route::post('admin/uploader/webuploader','Admin\UploaderController@webuploader')->name('webuploader');//头像上传
    Route::any('admin/user/import','Admin\UserController@import')->name('user_import');
    //实现matchs比赛数据表
    Route::get('admin/matchs/index','Admin\MatchsController@index')->name('matchs_index');//比赛数据列表展示
    Route::get('admin/matchs/delete','Admin\MatchsController@delete')->name('matchs_delete');//比赛删除
    Route::any('admin/matchs/add','Admin\MatchsController@add')->name('matchs_add');//比赛添加
    Route::any('admin/matchs/edit','Admin\MatchsController@edit')->name('matchs_edit');//比赛修改
    // });

//前台的数据展示(datashow) 
Route::get('front/list/index','Front\ListController@list')->name('index_list');//比赛信息列表
Route::get('point','Front\ListController@point')->name('list_point');//接口

//后台管理员管理页面 ByPliaf
Route::get('admin/manager','Admin\ManagerController@index')-> name('manager_index'); //管理员视图列表
Route::any('admin/manager/add','Admin\ManagerController@add') -> name('manager_add'); //添加管理员
Route::get('admin/manager/delete','Admin\ManagerController@delete') -> name('manager_delete'); //删除管理员
Route::any('admin/manager/edit','Admin\ManagerController@edit') -> name('manager_edit'); //编辑管理员

//后台赛事页面 ByPliaf
Route::get('admin/competitions','Admin\CompetitionsController@index') -> name('competitions_index'); //赛事视图列表
Route::any('admin/competitions/add','Admin\CompetitionsController@add') -> name('competitions_add'); //添加赛事
Route::get('admin/competitions/delete','Admin\CompetitionsController@delete') -> name('competitions_delete'); //删除赛事
Route::any('admin/competitions/edit','Admin\CompetitionsController@edit') -> name('competitions_edit'); //编辑赛事

//后台比赛详情页面 ByPliaf
Route::get('admin/matchdetails','Admin\MatchdetailsController@index') -> name('matchdetails_index'); //比赛详情视图列表
Route::any('admin/matchdetails/add','Admin\MatchdetailsController@add') -> name('matchdetails_add'); //添加比赛详情
Route::get('admin/matchdetails/delete','Admin\MatchdetailsController@delete') -> name('matchdetails_delete'); //删除比赛详情
Route::any('admin/matchdetails/edit','Admin\MatchdetailsController@edit') -> name('matchdetails_edit'); //编辑比赛详情


//前台路由 ByPliaf 
Route::get('/','Home\IndexController@index') -> name('index'); //首页

Route::get('getdate','Home\IndexController@getDate')->name('getdate');