@extends('layout/default')

@section('header')
	{{ HTML::style('css/usersettings.css'); }}
	{{ HTML::script('js/usersettings.js') }}

@stop

@section('content')
	<h1> Hello, {{ $user->username }} </h2>

	{{ Form::open(array( 'route' => 'users.edit',
		'id' => 'form-usersettings'
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

		<span id="upass">
			{{ Form::label('oldpasslabel', 'Old: ') }}
			{{ Form::password('oldpass') }}

			{{ Form::label('newpasslabel', 'New: ') }}
			{{ Form::password('passchange') }}

			{{ Form::label('confpasslabel', 'Confirm: ') }}
			{{ Form::password('passchangeconf') }}

			<div id="passwdErr"></div>

		</span>

	</div>
	<div> {{ Form::submit('Edit Username and Password', array( 'id' => 'editbtn' )) }} </div>

	{{ Form::close() }}

@stop
