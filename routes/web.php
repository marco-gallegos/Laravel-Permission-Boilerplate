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

Route::resource('user', 'UserController');
Route::get('user/role/{id}', 'UserController@role');
Route::post('user/linkrole/{id}', "UserController@linkrole");
Route::get('user/permission/{id}', 'UserController@permission');
Route::post('user/linkpermission/{id}', "UserController@linkpermission");

Route::resource('permission', 'PermissionController');

Route::resource('role', 'RoleController');
//vincular permisos a los roles
Route::get('role/permissions/{id}', 'RoleController@permissions');
Route::post('role/link/{id}', "RoleController@link");