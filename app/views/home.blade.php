@extends('layout/default')
@section('header')
    {{ HTML::script('js/home.js') }}
    {{ HTML::style('css/home.css'); }}

    {{ HTML::script('js/lightbox.js') }}
    {{ HTML::style('css/lightbox.css'); }}

@stop


@section('content')
    <div class="titleBlock">
        <h1 id="name">MacroSoft</h1>
        
        <div class="loginBlock">
            @if(Auth::check())
                <a id="settingsButton" href="{{URL::route('users.edit', Auth::user()->username)}}">
                    User Settings
                </a>
                <a id="logoutButton" href="/logout">Logout</a>
            @else
                <a id="loginButton" href="/login">Login</a>
                <a id="registerButton" href="/users/create">Regster</a>
            @endif
        </div>
        
    </div>

    <div class="aboutTextBlock">
            Buncha gibberish text here. ASlkjhsadfjlakhdfjklafhglakjdg, adfjlahdfljkahdfakljdfaffd
        what about this? Or that! I'm too lazy to format lorem ipsum into here for test purposes. Or perhaps
        I should do so.
        I wonder if text will wrap around this image? <img src="/images/9f50538d_test.jpeg"/> Perhaps.
    </div>



@stop





@section('footer')

    
@stop


