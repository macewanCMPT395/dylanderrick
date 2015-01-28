@extends('layout/titleblock')
@section('pageTitle')
    User Settings
@stop

@section('interface')
        <a id="settingsButton" href="{{URL::route('home')}}">
            Home
        </a>
        <a id="logoutButton" href="/logout">Logout</a>
@stop