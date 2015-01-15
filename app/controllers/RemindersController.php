<?php

class RemindersController extends Controller {

	/**
	 * Display the password reminder view.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		return View::make('password_remind');
	}

	/**
	 * Handle a POST request to remind a user of their password.
	 *
	 * @return Response
	 */
	public function postIndex()
	{

		/
		$formdata 	= Input::all();
		$response 	= Password::remind(Input::only("email"),function($message){
			$message->subject('Life Talk Club Password Reset');
		});
		switch ($response)
		{

			case Password::INVALID_USER:
				Session::flash('error', Lang::get($response));
				return Redirect::back()->with('error', Lang::get($response));

			case Password::REMINDER_SENT:

				Session::flash('success', 'Please check your email for a password reset link.');
				return Redirect::back()->with('status', Lang::get($response));
		}
	}

	/**
	 * Display the password reset view for the given token.
	 *
	 * @param  string  $token
	 * @return Response
	 */
	public function getReset($token = null)
	{
		if (is_null($token)) App::abort(404);

		return View::make('password_reset')->with('token', $token);
	}

	/**
	 * Handle a POST request to reset a user's password.
	 *
	 * @return Response
	 */
	public function postReset()
	{

		$credentials = Input::only(
			'email', 'password', 'password_confirmation', 'token'
		);

		$response = Password::reset($credentials, function($user, $password)
		{
			$user->password = Hash::make($password);
			$user->save();
		});
		switch ($response)
		{
			case Password::INVALID_PASSWORD:
			case Password::INVALID_TOKEN:
			case Password::INVALID_USER:
				Session::flash('error', Lang::get($response));
				return Redirect::to('/password/reset/' . Input::get('token'))->with('token', Input::get('token'));

			case Password::PASSWORD_RESET:
				$user = User::where('email', '=', Input::get('email'))->first();
				Auth::login($user);
				return Redirect::to('/');
		}
	}

}
