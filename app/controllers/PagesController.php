<?php 


class PagesController extends BaseController {
     
      public function home () {

      	     return View::make('hello');
	     

      }


      public function users () {
      	     
	     return View::make('users');

      }

}