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
                        'title'                 =>  'required',
                        'cell'                  =>  'required|unique:members',
                        'idnumber'              =>  'required|max:13|unique:members',
                        'username'              =>  'required|email|unique:users,username',
                        'password'              =>  'required|confirmed',
                        'password_confirmation' =>  'required',
                        'tel'                   =>  'required',
                        'dob'                   =>  'required',
                        'bankname'              =>  'required',
                        'branchname'            =>  'required',
                        'branchcode'            =>  'required',
                        'gender'                =>  'required',
                        'accnumber'             =>  'required'

        );

        // Flashing Input to the session
        Input::flash();

        // Exclude passwords
        Input::flashExcept('password');

        //Validate data
        $validator  = Validator::make ($data , $rules);

        if ($validator -> passes()) {

             // save Member Login Details Data
            $user             = new User;
            $user->username   = Input::get('username');
            $user->firstname  = Input::get('firstname');
            $user->surname    = Input::get('surname');
            $user->password   = Hash::make(Input::get('password'));
            $user->email      = Input::get('username');
            $user->role       = 2;
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
            $member->gender     = Input::get('gender');
            $member->bankid     = $bank->id;
            $member->userid     = $user->id;
            $member->membershipno   = str_pad($user->id, 5, '0', STR_PAD_LEFT);
            $member->active     = 1;
            $member->save();

            $data['membershipno'] = $member->membershipno;


            // Send Email
            Mail::send('emails.registration', $data, function($message) use ($data)
            {
                $message->from('info@lifetalkclub.com', $data['firstname']);
                $message->to($data['username'])->subject('Life Talk Club Membership Confirmation');

            });

            // redirect
            Session::flash('success', 'Thank you for your registration');
            return Redirect::to('/members/signup');

            // redirect
            Auth::loginUsingId($user->id);
        }
        else {

            Session::flash('fail', 'Errors on the form,Please resubmit the form');
            return Redirect::to('/members/signup/')->withErrors($validator)->withInput(Input::except('password'));

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

    public function getListing()
    {
        $members = Member::join('users', function($join)
                {
                    $join->on('members.userid', '=', 'users.id');
                })
                ->select('members.membershipno','members.created_at','members.firstname','members.surname', 'members.idnumber')
                ->where('members.active', '=', 1)
                ->paginate(15);

        return View::make('admin.member')->with('members',$members);
    }

}
