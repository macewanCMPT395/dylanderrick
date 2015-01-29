@extends('layout/default')


@section('header')
    {{ HTML::style('css/popupbox.css') }}
    {{ HTML::style('css/registerBox.css') }}
    {{ HTML::script('js/register.js') }}

@section('content')
    
    @include('users/registerPopup')

@stop
