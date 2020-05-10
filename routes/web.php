<?php

use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
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

Route::get('/', 'HomeController@index')->name('home');
Route::resource('users', 'UserController');

Route::resource('roles', 'RoleController');

Route::resource('permissions', 'PermissionController');


//Route::get('/company1','CompanyController@createstep1');
//Route::post('/ccompany1','CompanyController@CompanycreateStep1');
//Route::get('/company2', 'CompanyController@createstep2');
//Route::post('/company2','CompanyController@CompanycreateStep2');
//Route::get('/company3', 'CompanyController@createstep3');
//Route::post('/company3','CompanyController@CompanycreateStep3');
//Route::post('/store', 'CompanyCOntroller@store');
Route::resource('companies', 'CompanyController');
Route::resource('onchange', 'OnChangeController');

//Route::get('/create_role_permissions',function(){
//    $role = Role::create(['name' => 'Administrator']);
//    $permission = Permission::create(['name' => 'Administrator roles & permissions']);
//
//    Auth()->user()->assignRole('Administrator');
//    Auth()->user()->givePermissionsTo('Administrator roles & permissions');
//});