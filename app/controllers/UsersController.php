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

	     /*encrypt user password*/
	     //$this->user->password = Hash::make($this->user->password);
	     $this->user->save();

          #Redirect::route('users.index');
          $response = array(
              'status' => 0,
              'redirect' => 'users'
          );
          
	     return Response::json($response);
      }


      public function edit ($user) {


      }



      public function update ($user) {
      

      }

      
}
