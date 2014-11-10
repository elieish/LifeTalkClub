<?php

class ServerController extends BaseController {

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
        SSH::into('production')->run(array(
        'cd ~/public_html/LifeTalkClub',
        'git pull origin master'
        ), function($line){

            echo $line.PHP_EOL; // outputs server feedback
        });
    }

}
