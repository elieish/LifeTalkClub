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
