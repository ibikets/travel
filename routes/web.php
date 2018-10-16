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

    Route::resource('admin/users', 'AdminUsersController', ['names' =>[
        'index'=>'admin.users.index',
        'create'=>'admin.users.create',
        'update'=>'admin.users.update',
        'show'=>'admin.users.show',
        'edit'=>'admin.users.edit',
    ]]);

    Route::resource('admin/clients', 'ClientController', ['names' =>[
        'index'=>'admin.clients.index',
        'create'=>'admin.clients.create',
        'edit'=>'admin.clients.edit',
        'show'=>'admin.clients.show'
    ]]);

});