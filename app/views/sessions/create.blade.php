@extends('layout/default')

@section('header')
    {{ HTML::script('js/login.js') }}
    {{ HTML::style('css/loginbox.css'); }}
    {{ HTML::style('css/popupbox.css'); }}
@stop


@section('content')

    @include('sessions/loginPopup')

@stop