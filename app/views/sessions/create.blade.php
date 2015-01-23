@extends('layout/default')

@section('header')

    {{ HTML::style('css/loginbox.css'); }}
    {{ HTML::script('js/login.js') }}
@stop


@section('content')
	{{ Form::open(['route' => 'sessions.store',
                    'id' => 'form-login'
    ]) }}

        <div class="loginTitle">
            <p id="loginTitleText">Please Login:</p>
        </div>

        <div class="loginBox">
            
           <div class="loginAttr" id="emailBox">
               {{ Form::label('email', 'Email:', ['id' => 'emailLabel']) }}
               {{ Form::email('email', '', ['id' => 'email']) }}
           </div>		   
           <div class="loginAttr" id="passwordBox">
               {{ Form::label('password', 'Password:', ['id' => 'passwordLabel']) }}
               {{ Form::password('password', '', ['id' => 'password']) }}
           </div>	

            <div id="errorMsg"></div>
            
            {{ Form::submit('Login',  ['id' => 'submitButton']) }} 
            {{ Form::button('Cancel', ['id' => 'lightBoxCloseBtn']) }}

            
        </div>

	{{ Form::close() }}

	

@stop