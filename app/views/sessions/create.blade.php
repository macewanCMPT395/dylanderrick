@extends('layout/default')

@section('header')

    {{ HTML::style('css/loginbox.css'); }}
@stop


@section('content')
	{{ Form::open(['route' => 'sessions.store']) }}


        <div class="loginBox">

           <div class="loginAttr" id="email">
               {{ Form::label('email', 'Email:') }}
               {{ Form::email('email') }}
           </div>		   
           <div class="loginAttr" id="password">
               {{ Form::label('password', 'Password:') }}
               {{ Form::password('password') }}
           </div>	


            <div class="loginAttr" id="submit"> 
                {{ Form::submit('Login') }} 
            </div>
        </div>

	{{ Form::close() }}

	

@stop