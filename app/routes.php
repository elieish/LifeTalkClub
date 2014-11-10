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



/*Route::get('login', array('as' => 'login', 'uses' => 'UserController@login'));*/

Route::controller('about', 'AboutController');

Route::controller('users', 'UserController');

Route::controller('members', 'MemberController');

Route::controller('deploy', 'ServerController');

Route::controller('/', 'HomeController');



