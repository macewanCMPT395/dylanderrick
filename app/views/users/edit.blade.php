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
            
                <div class="userInfoBox">
                    {{Form::label('userInfo', 'User Information') }}
                    <div class="emailDiv">
                            {{ Form::label('email', 'Email: ') }}
                            {{ Form::label('email', $user->email) }}
                    </div>

                    <div class="usernameDiv">
                            {{ Form::label('namechange', 'Username: ') }}
                            {{Form::text('namechange', $user->username) }}
                    </div>
                </div>
    
                <div class="passwordChangeBox">
                    {{ Form::label('passwordlabel', 'Change Password', ['id'=>'changePassLabel']) }}

                    <div class="newPasswordField">
                        {{ Form::label('newPassword', 'New: ') }}
                        {{ Form::password('newPassword') }}
                    </div>

                    <div class="confirmPasswordField">
                        {{ Form::label('confirmPassword', 'Confirm: ') }}
                        {{ Form::password('confirmPassword') }}
                    </div>
                </div>
		
		<div class="submitChanges">
                        <div id="passwdErr">
                            {{ $errors->first('password') }}
                            {{ $errors->first('username') }}
                        </div>
                        <div id="changeNotice"></div>
			{{ Form::submit('Save Changes', array( 'id' => 'editbtn' )) }}
			{{ Form::button('Delete Account', array( 'id' => 'delbtn' )) }}

			{{ Form::close() }}

		</div>


	        <div id="deletePopup">
	            @include('users/deleteUserPopup')
	        </div>
	</div>

@stop
