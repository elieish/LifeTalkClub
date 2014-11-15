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

             // save Member Login Details Data
            $user             = new User;
            $user->username   = Input::get('username');
            $user->password   = Input::get('password');
            $user->active     = 1;
            $user->save();

            // save Member Banking Details Data
            $bank             = new Bank;
            $bank->bankname   = Input::get('bankname');
            $bank->branchname = Input::get('branchname');
            $bank->branchcode = Input::get('branchcode');
            $bank->accnumber  = Input::get('accnumber');
            $bank->active     = 1;
            $bank->save();

            // save Member Data
            $member             = new Member;
            $member->title      = Input::get('title');
            $member->cell       = Input::get('cell');
            $member->tel        = Input::get('tel');
            $member->dob        = Input::get('dob');
            $member->initials   = Input::get('initials');
            $member->firstname  = Input::get('firstname');
            $member->surname    = Input::get('surname');
            $member->idnumber   = Input::get('idnumber');
            $member->introducer = Input::get('intronumber');
            $member->bankid     = $bank->id;
            $member->userid     = $user->id;
            $member->active     = 1;
            $member->save();

            // redirect
            Session::flash('message', 'Thank you for your registration');
            return Redirect::to('/members/signup');
        }
        else {

            return Redirect::to('/members/signup/')->withErrors($validator);

        }

    }

    public function getIntroducer()
    {

        $name     = Input::get('q');

        $members  = DB::table('members')->select('id as id',DB::raw('CONCAT(firstname, " ", surname) AS name'))
                    ->where('firstname', 'LIKE', '%' . $name . '%')
                    ->orWhere('surname', 'LIKE', '%' . $name . '%')
                    ->get();
        return json_encode($members);

    }



}
