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

Auth::routes();




Route::group(['middleware'=>'admin'], function (){

    Route::get('/home', 'AdminController@index')->name('home');

    Route::resource('admin', 'AdminController');

    Route::get('/admin/users/index', 'AdminUsersController@index')->name('admin.users.index');

    Route::get('/admin/clients/index', 'ClientController@index')->name('admin.clients.index');

    Route::get('/admin/status/index', 'StatusController@index')->name('admin.status.index');

    Route::get('/admin/roles/index', 'RoleController@index')->name('admin.roles.index');

    Route::get('/admin/airline/index', 'AirlineController@index')->name('admin.airline.index');

    Route::get('admin/setting/index', 'SettingController@index')->name('admin.setting.index');

    Route::resource('admin/users', 'AdminUsersController', ['names' =>[
        'create'=>'admin.users.create',
        'update'=>'admin.users.update',
        'show'=>'admin.users.show',
        'edit'=>'admin.users.edit',
    ]]);

    Route::resource('admin/clients', 'ClientController', ['names' =>[
        'create'=>'admin.clients.create',
        'edit'=>'admin.clients.edit',
        'show'=>'admin.clients.show',
        'update'=>'admin.clients.update',
    ]]);

    Route::resource('admin/roles', 'RoleController', ['names' =>[
        'create'=>'admin.roles.create',
        'edit'=>'admin.roles.edit',
        'show'=>'admin.roles.show',
        'update'=>'admin.roles.update',
    ]]);

    Route::resource('admin/status', 'StatusController', ['names' =>[
        'create'=>'admin.status.create',
        'edit'=>'admin.status.edit',
        'show'=>'admin.status.show',
        'update'=>'admin.status.update',
    ]]);

    Route::resource('admin/airline', 'AirlineController', ['names' =>[
        'create'=>'admin.airline.create',
        'edit'=>'admin.airline.edit',
        'show'=>'admin.airline.show',
        'update'=>'admin.airline.update',
    ]]);

});