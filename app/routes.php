<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::controller('about', 'AboutController');

Route::controller('users', 'UserController');

Route::controller('members', 'MemberController');

Route::controller('deploy', 'ServerController');

Route::controller('admin', 'AdminLoginController');

Route::controller('dashboard', 'AdminDashboardController');

Route::get('logout', function () {
    Auth::logout();
    return Redirect::to('/');
});

Route::controller('/', 'HomeController');



