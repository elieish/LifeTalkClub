<?php

class UserController extends BaseController {

    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |   Route::get('/', 'HomeController@showWelcome');
    |
    */

    public function getIndex()
    {
        return View::make('users.login');
    }

    public function postLogin()
    {
        $username   = Input::get('username');
        $password   = Input::get('password');

        if (Auth::attempt(array('username' => $username, 'password' => $password, 'active' => 1)))
        {
            if(Auth::user()->role == 1)
                return Redirect::intended('dashboard');
            else
                return Redirect::intended('/');
        }
        else {


            return Redirect::to('/admin');
        }
    }

}
