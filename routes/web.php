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

    Route::get('/admin/status/index', 'StatusController@index')->name('admin.status.index');

    Route::get('/admin/users/index', 'AdminUsersController@index')->name('admin.users.index');

    Route::get('/admin/clients/index', 'ClientController@index')->name('admin.clients.index');

    Route::resource('admin/users', 'AdminUsersController', ['names' =>[
        'create'=>'admin.users.create',
        'update'=>'admin.users.update',
        'show'=>'admin.users.show',
        'edit'=>'admin.users.edit',
    ]]);

    Route::resource('admin/clients', 'ClientController', ['names' =>[
        'create'=>'admin.clients.create',
        'edit'=>'admin.clients.edit',
        'show'=>'admin.clients.show'
    ]]);

    Route::resource('admin/roles', 'RoleController', ['names' =>[
        'index'=>'admin.roles.index',
        'create'=>'admin.roles.create',
        'edit'=>'admin.roles.edit',
        'show'=>'admin.roles.show'
    ]]);

    Route::resource('admin/status', 'StatusController', ['names' =>[
        'create'=>'admin.status.create',
        'edit'=>'admin.status.edit',
        'show'=>'admin.status.show'
    ]]);

    Route::resource('admin/airline', 'AirlineController', ['names' =>[
        'index'=>'admin.airline.index',
        'create'=>'admin.airline.create',
        'edit'=>'admin.airline.edit',
        'show'=>'admin.airline.show'
    ]]);

});