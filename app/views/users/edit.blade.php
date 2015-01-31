@extends('layout/default')

@section('header')
        {{ HTML::script('js/lightbox.js') }}
        {{ HTML::style('css/lightbox.css'); }}
        {{ HTML::style('css/popupbox.css'); }}

        {{ HTML::script('js/usersettings.js') }}
	{{ HTML::style('css/usersettings.css'); }}
@stop


@section('pageTitle')
    User Settings
@stop

@section('interface')
        <a id="settingsButton" href="{{URL::route('home')}}">
            Home
        </a>
        <a id="logoutButton" href="/logout">Logout</a>
@stop


@section('content')
	<div class="userSettingsDiv">
		<p id="userGreeting"> Hello, {{ $user->username }}!</p>

		{{ Form::open(array( 'route' => 'users.update',
			'id' => 'form-usersettings',
			'method' => 'PUT'
			))
		}}

		<div class="usernameDiv">
			{{ Form::label('screenamelabel', 'Username: ') }}
			{{ Form::label('screenname', $user->username) }}
			<span id="uname">{{ Form::text('namechange', $user->username) }}</span>
		</div>
		<div class="emailDiv">
			{{ Form::label('emaillabel', 'Email: ') }}
			{{ Form::label('email', $user->email) }}
		</div>
		<div class="passwordDiv">
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
		<div id="passwdErr">{{ $errors->first('password') }}</div>
		<div>
			{{ Form::submit('Edit Username and Password', array( 'id' => 'editbtn' )) }}
			{{ Form::button('Delete Account', array( 'id' => 'delbtn' )) }}

			{{ Form::close() }}

		</div>


	        <div id="deletePopup">
	            @include('users/deleteUserPopup')
	        </div>
	</div>

@stop
