@extends('layout/default')
@section('header')
    {{ HTML::script('js/home.js') }}
    {{ HTML::style('css/home.css'); }}

    {{ HTML::script('js/lightbox.js') }}
    {{ HTML::style('css/lightbox.css'); }}


    <script>
        var isAuthed = "{{Auth::check()}}";
    </script>
@stop


@section('content')
    <div class="titleBlock">
        <h1 id="name">MacroSoft</h1>
        
        <div class="loginBlock">
            <a id="loginButton" href="/login">Login</a>
            <a id="logoutButton" href="/logout">Logout</a>
            <a id="registerButton" href="/users/create">Regster</a>
        </div>
        
    </div>

    <div class="aboutTextBlock">



    </div>



@stop





@section('footer')

    
@stop


