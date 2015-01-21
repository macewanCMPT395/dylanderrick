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
        $user = $this->user->whereUsername($username)->first();//select * from users where username = USERNAME limit 1

        return View::make('users/show', ['user' => $user]);
      }

      public function create () {
      	     return View::make('users.create');
      }


      public function store () {

      	     $input = Input::all();


      	     if (! $this->user->fill($input)->isValid()) {
    	     	return  Redirect::back()->withInput()->withErrors($this->user->messages);
	     }
      
	     $this->user->save();

	     return Redirect::route('users.index');
      }


      public function edit ($user) {


      }



      public function update ($user) {
      

      }

      
}
