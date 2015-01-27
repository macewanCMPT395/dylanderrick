<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	protected $fillable = [ 'username', 'email', 'password' ];

	use UserTrait, RemindableTrait;

	public static $rules = [
        'username'  => 'required|unique:users,username',
        'password'  => 'required',
        'email'     => 'required|email|unique:users,email'
	];

	public $messages;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

        public function setPasswordAttribute($pass){
            $this->attributes['password'] = Hash::make($pass);
        }

    
        private function validate($ruleSet) {
                $validation = Validator::make($this->attributes, $ruleSet);
                if($validation->passes()) return true;

                $this->messages = $validation->messages();
                return false;            
        }
    
    
	public function isValid() {
                return $this->validate(static::$rules);
	}

	public function isUpdateValid() {
		$updaterule = static::$rules;
		$updaterule['username'].=','.$this->id;
		$updaterule['email'].=','.$this->id;
                return $this->validate($updaterule);
	}

}
