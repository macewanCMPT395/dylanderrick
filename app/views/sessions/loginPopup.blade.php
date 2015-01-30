@extends('layout/popupbox')

@section('popupTitleText')
    Please Login:
@stop

@section('popupContent')
    <div class="loginBox">
	{{ Form::open(['route' => 'sessions.store',
                    'id' => 'form-login'
        ])}}
            
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


	{{ Form::close() }}
    </div>
@stop