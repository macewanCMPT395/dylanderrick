<?php

class UsersController extends \BaseController {
      protected $user;


      public function __construct(User $user) {
      	     $this->user = $user;

      }

      public function index () {
      	     $users = $this->user->all();
     	     return View::make('users/index')->withUsers($users);
      }     


      public function show ($username) {
          
      }

      public function create () {
      	     return View::make('users.create');
      }


      public function store () {
          if(!Request::ajax()) return Redirect::route('/');
          
	     $input = Input::all();
      	 if (!$this->user->fill($input)->isValid()) {
             
                $response = array(
                    'status' => 1,
                    'errors' => $this->user->messages
                );
             
    	     	return Response::json($response);      
                //Redirect::back()->withInput()->withErrors($this->user->messages);
	     }


	     $this->user->save();
          
          #Redirect::route('users.index');
          $response = array(
              'status' => 0,
              'redirect' => 'users'
          );
	     return Response::json($response);
      }


      public function edit ($username) {

	if(!Auth::check() || Auth::user()->username != $username)
		return Redirect::to('/');

	$user = $this->user->whereUsername($username)->first();
	return View::make('users/edit', ['user' => $user]);

      }



	public function update (/*$username*/) {

		$user = Auth::user();
//$this->user->whereUsername(Auth::user()->username)->first();

		$newpass = Input::get('passchange');
		$confirmpass = Input::get('passchangeconf');
		$moduname = Input::get('namechange');

		if($newpass != '')
		{
			if($newpass != $confirmpass)
			{

				return Redirect::back()->withErrors(['password'=>'Mismatched Passwords']);

			}

			echo $user;

			$user->password = $newpass;

		}

		if($moduname == '')
		{
			$moduname = (Auth::user()->username);
		}

		$user->username = $moduname;

		if(!$uses->isValid())
		{

			return Redirect::back()->withErrors($user->$messages);

		}

		$user->save();

		return Redirect::route('users.edit', $user->username);

	}


      
}
