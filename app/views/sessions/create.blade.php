@extends('layout/default')

@section('header')

    {{ HTML::style('css/loginbox.css'); }}
    {{ HTML::script('js/login.js') }}
@stop


@section('content')
	{{ Form::open(['route' => 'sessions.store',
                    'id' => 'form-login'
    ]) }}


        <div class="loginBox">
            <div id="errorMsg"></div>
           <div class="loginAttr" id="emailBox">
               {{ Form::label('email', 'Email:') }}
               {{ Form::email('email', '', ['id' => 'email']) }}
           </div>		   
           <div class="loginAttr" id="passwordBox">
               {{ Form::label('password', 'Password:') }}
               {{ Form::password('password', '', ['id' => 'password']) }}
           </div>	


            <div class="loginAttr" id="submit"> 
                {{ Form::submit('Login') }} 
            </div>
        </div>

	{{ Form::close() }}

	

@stop