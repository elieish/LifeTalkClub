<?php

class ContactController extends BaseController {

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
        return View::make('contact.index');
    }

    public function postSubmit()
    {
        //Get Form Data
        $data       = Input::all();

        // Flashing Input to the session
        Input::flash();


        //Validation rules
        $rules      = array (
                        'name'      =>  'required',
                        'email'     =>  'required|email',
                        'subject'   =>  'required',
                        'phone'     =>  'required',
                        'message'   =>  'required'
        );

        $emails     = array('elieish@gmail.com','info@lifetalkclub.com');

        //Validate data
        $validator  = Validator::make ($data , $rules);

        if ($validator -> passes()){

            Mail::send('emails.contact', $data, function($message) use ($data,$emails)
            {
                $message->from($data['email'], $data['name']);
                foreach ($emails as $email) {
                   $message->to($email)->subject('Life Talk Club Contact Request');
                }

            });

            // redirect
            Session::flash('message', 'Message Sent Successful');
            return View::make('contact.index');
        }
        else {
             Session::flash('error', 'Errors on forms,please resubmit');
            return Redirect::to('contact')->withErrors($validator)->withInput();
        }

    }

}
