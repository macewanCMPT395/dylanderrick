@extends('layout/default')


@section('header')
    {{ HTML::script('js/register.js') }}

@section('content')

	<h1>Create New User</h2>



	{{ Form::open(array( 'route' => 'users.store',
                    'id' => 'form-register'
        )) 
    }}

	   <div>
		{{ Form::label('username', 'Username: ') }}
	   	{{ Form::text('username', '', array(
            'id' => 'username'
           )) }}
		<!--{{ $errors->first('username', '<span class=error>:message</span>') }}-->
            <div id="usernameErrMsg"></div>  
           
	   </div>

	   <div>
		{{ Form::label('password', 'Password: ') }}
	   	{{ Form::password('password', '', array(
            'id' => 'password'
           )) }}
		<!--{{ $errors->first('password') }}-->
           <div id="passwordErrMsg"></div>  
	   </div>

	   <div>
		{{ Form::label('email', 'Email: ') }}
		{{ Form::email('email', '', array(
            'id' => 'email'
           )) }}
		<!--{{ $errors->first('email') }}-->
        <div id="emailErrMsg"></div> 
	   </div>

	   <div> {{ Form::submit('Create User') }}</div>

	{{ Form::close() }}

@stop
