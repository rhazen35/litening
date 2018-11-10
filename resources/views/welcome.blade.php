<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Title -->
        <title>{{ config('app.name') }}</title>

        <!-- Stylesheets -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Poppins|Questrial|Raleway" rel="stylesheet">

    </head>
    <body>

        <div class="grid">
        
            <div class="header">

                <div class="page-icon"><i class="fas fa-bolt"></i></div>

                <div class="page-title">
                    <div class="title">{{ config('app.name') }} Web Solutions</div>
                    <div class="subtitle">There are no problems, only opportunities.</div>
                </div>
            </div>

            <div class="menu" id="menu">

                <div class="menu-link" id="menu-link">
                    <div class="menu-icon" id="menu-icon" v-on:click="toggleMenuLink" title="Open the menu.">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>

                <div class="menu-items" id="menu-items">
                    <div class="menu-item active" id="menu-home" v-on:click="toggleActive">
                        <div class="icon"><i class="fas fa-home"></i></div>
                        <div class="text">Home</div>
                    </div>
                    <div class="menu-item" id="menu-about" v-on:click="toggleActive">
                        <div class="icon"><i class="fas fa-user-circle"></i></div>
                        <div class="text">About Me</div>
                    </div>
                    <div class="menu-item" id="menu-work" v-on:click="toggleActive">
                        <div class="icon"><i class="fas fa-briefcase"></i></div>
                        <div class="text">My Work</div>
                    </div>
                    <div class="menu-item" id="menu-qualities" v-on:click="toggleActive">
                        <div class="icon"><i class="fas fa-clipboard-list"></i></div>
                        <div class="text">Qualities</div>
                    </div>
                    <div class="menu-item" id="menu-contact" v-on:click="toggleActive">
                        <div class="icon"><i class="fas fa-envelope"></i></div>
                        <div class="text">Contact</div>
                    </div>
                </div>
            </div>

            <div class="main">

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
                    </div>
                </div>

                <div class="developer-image animate-right-cubic-fast">
                    <img src="{{ asset('img/ruben-hazenbosch.jpg') }}">
                </div>

                <div class="intro animate-left-cubic-slow">
                    <div class="title">What I work with.</div>
                    <div class="text">
                        <p>

                            PHP 7.2, Javascript, ECMAScript 6 Modules, Ajax. CSS3, SASS and much, much more!
                        </p>
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
                    </div>
                </div>

                <div class="content-image animate-right-cubic-fast">
                    <img src="{{ asset('img/laravel.png') }}">
                </div>

            </div>
        </div>

        <!-- Scripts -->
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
