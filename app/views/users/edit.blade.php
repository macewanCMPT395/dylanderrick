@extends('layout/default')

@section('header')
        {{ HTML::script('js/lightbox.js') }}
        {{ HTML::style('css/lightbox.css'); }}
        {{ HTML::style('css/popupbox.css'); }}

        {{ HTML::script('js/usersettings.js') }}
	{{ HTML::style('css/usersettings.css'); }}

        {{ HTML::style('css/titleBanner.css'); }}
@stop

@section('content')
        @include('users/userBanner')


	<h1> Hello, {{ $user->username }} </h2>

	{{ Form::open(array( 'route' => 'users.update',
		'id' => 'form-usersettings',
		'method' => 'PUT'
		))
	}}

	<div>
		{{ Form::label('screenamelabel', 'Username: ') }}
		{{ Form::label('screenname', $user->username) }}
		<span id="uname">{{ Form::text('namechange') }}</span>
	</div>

	<div>
		{{ Form::label('emaillabel', 'Email: ') }}
		{{ Form::label('email', $user->email) }}
	</div>

	<div>
		{{ Form::label('passwordlabel', 'Password: ') }}
		{{ Form::label('passworddummy', '**********', array( 'id' => 'dummypass')) }}
		{{ Form::button('Change Password', array( 'id' => 'passbtn')) }}

		<div id="upass">

			{{ Form::label('newpasslabel', 'New: ') }}
			{{ Form::password('passchange', '', ['id' => 'npass']) }}

			{{ Form::label('confpasslabel', 'Confirm: ') }}
			{{ Form::password('passchangeconf', '', ['id' => 'ncpass']) }}

		</div>

	</div>
	<div> {{ Form::submit('Edit Username and Password', array( 'id' => 'editbtn' )) }} </div>

	
	<div id="passwdErr">{{ $errors->first('password') }}</div>
        {{ Form::button('Delete Account', array( 'id' => 'delbtn' )) }}

	{{ Form::close() }}



        <div id="deletePopup">
            @include('users/deleteUserPopup')
        </div>

@stop
