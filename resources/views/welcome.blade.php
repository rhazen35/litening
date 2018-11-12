@extends('layouts.app')

@section('content')
<div class="developer animate-right-cubic-slow">
    <div class="title">The Developer.</div>
    <div class="text">
        <p>
            Ruben Hazenbosch, 32 years, Web/Software Developer.
            <br><br>
            Born in Haarlem, Netherlands. 
            <br>
            Living in Holzdorf, Germany.
        </p>
        <div class="link" id="aboutme"  title="Go to About Me.">About Me</div>
    </div>
</div>

<div class="developer-image animate-right-cubic-fast">
    <img src="{{ asset('img/ruben-hazenbosch.jpg') }}">
</div>

<div class="intro animate-left-cubic-slow">
    <div class="title">What I work with.</div>
    <div class="text">
        <p>
            PHP 7.2, Javascript, ECMAScript 6 Modules, Ajax, AngularJs, CSS3, SASS and much, much more!
        </p>
        <div class="link" id="mywork" title="Go to My Work.">My Work</div>
    </div>
</div>

<div class="intro-image animate-left-cubic-fast">
    <img src="{{ asset('img/web-developer.jpg') }}">
</div>

<div class="content animate-right-cubic-slow">
    <div class="title">I use the Laravel Framework.</div>
    <div class="text">
        <p>
            Fast, reliable and scalable development with automated Unit Testing.
            <br><br>
            Easy integration, secure authentication and wide support.
        </p>
        <div class="link" id="laravel" title="Go to Laravel.">Laravel</div>
    </div>
</div>

<div class="content-image animate-right-cubic-fast">
    <img src="{{ asset('img/laravel.png') }}">
</div>
@endsection

