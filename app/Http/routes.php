<?php
use App\User;
use App\Rol;
use App\RolUser;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::resource('user', 'UserController');
Route::resource('rol_user', 'RolUserController');
Route::resource('rol', 'RolController');

Route::get('/', ['middleware' => ['auth', 'rolVerificate:editor'], function () {
    return view('welcome');
}]);

Route::auth();

Route::get('/home', 'HomeController@index');
