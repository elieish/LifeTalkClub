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

        var_dump($data);die;

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
            $member             = new Member;
            $member->title      = Input::get('title');
            $member->cell       = Input::get('cell');
            $member->tel        = Input::get('tel');
            $member->dob        = Input::get('dob');
            $member->initials   = Input::get('initials');
            $member->firstname  = Input::get('firstname');
            $member->surname    = Input::get('surname');
            $member->idnumber   = Input::get('idnumber');
            $member->introducer = Input::get('introducer');
            $member->bankid     = Input::get('bankid');
            $member->userid     = Input::get('userid');
            $member->save();

            // redirect
            Session::flash('message', 'Successfully saved');
            return Redirect::to('/admin/industries');
        }
        else {

            return Redirect::to('/members/signup/')->withErrors($validator);

        }

    }



}
