@extends('layout/popupbox')

@section('popupTitleText')
    Create an Account:
@stop

@section('popupContent')
    <div class="registerBox">
       {{ Form::open([ 'route' => 'users.store',
                        'id' => 'form-register']
        )}}


       <div>
            {{ Form::label('username', 'Username: ', ['id' => 'userLbl']) }}
            {{ Form::text('username') }}

       </div>

        <div>
            {{ Form::label('email', 'Email: ', ['id' => 'emailLbl']) }}
            {{ Form::email('email') }}
       </div>

       <div>
            {{ Form::label('pass1', 'Password: ', ['id' => 'pass1Lbl']) }}
            {{ Form::password('pass1') }}
       </div>



       <div>
            {{ Form::label('pass2', 'Confirm Password: ', ['id' => 'pass2Lbl']) }}
            {{ Form::password('pass2') }}
       </div>


        <div id="registerErrorMsg"></div>

       <div class="registrationBtns"> {{ Form::submit('Create User') }} {{Form::button('Cancel',['id' => 'lightBoxCloseBtn']) }}</div>

       {{ Form::close() }}
    </div>

    <div class="registerSuccess">
        <p>Registration success, please login on the main page.</p>

        {{Form::button('ok', ['id' => 'lightBoxCloseBtn'])}}
    </div>
@stop
