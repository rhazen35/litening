<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Title -->
        <title>{{ config('app.name') }}</title>

        <!-- Stylesheets -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
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

                <div class="link" id="menu-link">

                    <div class="icon" id="menu-icon" v-on:click="toggleMenuLink" title="Open the menu.">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>

                <div class="items" id="menu-items">
                    <div class="item menu-item active" id="menu-home" v-on:click="goToRoute">
                        <div class="icon"><i class="fas fa-home"></i></div>
                        <div class="text">Home</div>
                    </div>
                    <div class="item menu-item" id="menu-demo" v-on:click="goToRoute">
                        <div class="icon"><i class="fas fa-play"></i></div>
                        <div class="text">Demo</div>
                    </div>
                    <div class="item menu-item" id="menu-about" v-on:click="goToRoute">
                        <div class="icon"><i class="fas fa-user-circle"></i></div>
                        <div class="text">About Me</div>
                    </div>
                    <div class="item menu-item" id="menu-work" v-on:click="goToRoute">
                        <div class="icon"><i class="fas fa-briefcase"></i></div>
                        <div class="text">My Work</div>
                    </div>
                    <div class="item menu-item" id="menu-qualities" v-on:click="goToRoute">
                        <div class="icon"><i class="fas fa-clipboard-list"></i></div>
                        <div class="text">Qualities</div>
                    </div>
                    <div class="item menu-item" id="menu-contact" v-on:click="goToRoute">
                        <div class="icon"><i class="fas fa-envelope"></i></div>
                        <div class="text">Contact</div>
                    </div>
                </div>
            </div>

            <div class="main" id="app">

                @yield('content')

            </div>
        </div>

        <!-- Scripts -->
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
