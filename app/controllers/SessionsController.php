<?php




class SessionsController extends BaseController {

      public function create() {
      	     if (Auth::check()) return Redirect::to('/settings');
      	     return View::make('sessions.create');

      }

      public function store() {
          
      	 if (Auth::attempt(Input::only('email', 'password'))) {
             $response = array(
                 "status" => 0,
                 "redirect" => "/users/".Auth::user()->username
             );
             
             return Response::json($response);
	     }
          
          $response = array(
                "status" => 1,
                "error" => "Invalid Username or Password"
          );
	     return Response::json($response);
      }

      public function destroy () {
      	 Auth::logout();
	     return Redirect::route('sessions.create');
      }


}