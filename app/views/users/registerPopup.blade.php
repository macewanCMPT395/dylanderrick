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
            {{ Form::label('username', 'Username: ') }}
            {{ Form::text('username') }}

       </div>

        <div>
            {{ Form::label('email', 'Email: ') }}
            {{ Form::email('email') }}
       </div>

       <div>
            {{ Form::label('pass1', 'Password: ') }}
            {{ Form::password('pass1') }}
       </div>



       <div>
            {{ Form::label('pass2', 'Confirm Password: ') }}
            {{ Form::password('pass2') }}
       </div>


        <div id="registerErrorMsg"></div>

       <div> {{ Form::submit('Create User') }}</div>
        <div> {{Form::button('Cancel',['id' => 'lightBoxCloseBtn']) }}</div>

       {{ Form::close() }}
    </div>

    <div class="registerSuccess">
        <p>Registration success, please login on the main page.</p>

        {{Form::button('ok', ['id' => 'lightBoxCloseBtn'])}}
    </div>
@stop