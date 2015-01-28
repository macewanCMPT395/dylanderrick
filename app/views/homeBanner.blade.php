@extends('layout/titleblock')

@section('pageTitle')
    Sumsang
@stop

@section('interface')

    @if(Auth::check())
        <a id="settingsButton" href="{{URL::route('users.edit', Auth::user()->username)}}">
            User Settings
        </a>
        <a id="logoutButton" href="/logout">Logout</a>
    @else
        <a id="loginButton" href="/login">Login</a>
        <a id="registerButton" href="/users/create">Regster</a>
    @endif

@stop
