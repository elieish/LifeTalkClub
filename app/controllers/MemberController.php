<?php

class MemberController extends BaseController {

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
        return View::make('member.index');
    }

     public function getSignup()
    {
        return View::make('member.signup');
    }

      public function postSave()
    {
        // Get  Form Data
        $data       = Input::all();

        // Validation rules
        $rules      = array (
                        'title'      =>  'required',
                        'cell'       =>  'required',
                        'tel'        =>  'required',
                        'dob'        =>  'required'

        );

        //Validate data
        $validator  = Validator::make ($data , $rules);

        if ($validator -> passes()) {
            // save
            $industry         = new Member;
            $industry->name   = Input::get('name');
            $industry->save();

            // redirect
            Session::flash('message', 'Successfully saved');
            return Redirect::to('/admin/industries');
        }
        else {

            return Redirect::to('/members/signup/')->withErrors($validator);

        }

    }



}
