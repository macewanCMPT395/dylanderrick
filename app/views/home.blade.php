@extends('layout/default')
@section('header')
    {{ HTML::script('js/home.js') }}
    {{ HTML::style('css/home.css'); }}

    {{ HTML::script('js/lightbox.js') }}
    {{ HTML::style('css/lightbox.css'); }}

@stop


@section('content')
    <div class="titleBlock">
        <h1 id="name">Sumsang</h1>
        
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
        
        <div class="textBlock">
            Here at Sumsang Electronics, we specialize in violating patents to create hardware that is visually indifferent from our main competitors. This means you, the consumer, can enjoy owning a high quality looking device for the absolute lowest costs anywhere world wide. These devices range from laptops, smart phones, tablets, computers, cameras, televisions, fridges, ovens and more. Not only do we partake in the consumer sphere, we also produce military vehicles, weapons, and devices to crush any infidels, terrorists, or the Japanese from threatening your freedom.
        
            Newly released for this month is the addition to our smart phone line up with the Sumsang Universe S8. We've managed to pack in the pixels with time with its amazing 8K display, and lackluster gpu to drive it. Also, we've added in an extra 8GB of flash memory strictly dedicated to the storage of our pre-installed apps-no longer will you have to manually remove our pre-installed apps to make room for your flappy bird.
        
            <img src="images/sumsangs8.png">
            
            
            By creating an account here with Sumsang, you get the once in a life time opportunity to recieve sales pitches for future products that are to be newly released, and you get to keep any personal information you may have on our cloud backup solution. Never again will you lose your data with our cloud service, not only do we keep backups of your data, but so does the federal government; a proper redundant backup solution to meet your backup needs! 
        </div>
    </div>



@stop





@section('footer')

    
@stop


