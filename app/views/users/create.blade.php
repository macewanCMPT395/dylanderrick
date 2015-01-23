@extends('layout/default')


@section('header')
    {{ HTML::script('js/register.js') }}

@section('content')

	<h1>Create New User!!!</h2>

	{{ Form::open(array( 'route' => 'users.store',
                    'id' => 'form-register'
        )) 
    }}

	   <div>
		{{ Form::label('username', 'Username: ') }}
	   	{{ Form::text('username') }}
        <div id="usernameErrMsg"></div>  
           
	   </div>

	   <div>
		{{ Form::label('pass1', 'Password: ') }}
	   	{{ Form::password('pass1') }}
        <div id="passwordErrMsg"></div>  
	   </div>

	   <div>
		{{ Form::label('email', 'Email: ') }}
		{{ Form::email('email') }}
        <div id="emailErrMsg"></div> 
	   </div>

	   <div>
		{{ Form::label('pass2', 'Confirm Password: ') }}
		{{ Form::password('pass2') }}
	   </div>

	   <div> {{ Form::submit('Create User') }}</div>


	{{ Form::close() }}

@stop
