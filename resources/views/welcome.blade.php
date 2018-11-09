<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

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

            <div class="menu-link">
                <div class="menu-icon" id="menu-icon" title="Open the menu." onclick="toggle()">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>

            <div class="main">

                <div class="developer">
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

                <div class="developer-image">
                    <img src="{{ asset('img/ruben-hazenbosch.jpg') }}">
                </div>

                <div class="intro">
                    <div class="title">What I work with.</div>
                    <div class="text">
                        <p>

                            PHP 7.2, Javascript, ECMAScript 6 Modules, Ajax. CSS3, SASS and much, much more!
                        </p>
                    </div>
                </div>

                <div class="intro-image">
                    <img src="{{ asset('img/web-developer.jpg') }}">
                </div>

                <div class="content">
                    <div class="title">I use the Laravel Framework.</div>
                    <div class="text">
                        <p>
                            Fast, reliable and scalable development with automated Unit Testing.
                            <br><br>
                            Easy integration, secure authentication and wide support.
                        </p>
                    </div>
                </div>

                <div class="content-image">
                    <img src="{{ asset('img/laravel.png') }}">
                </div>

            </div>
        </div>

        <script type="text/javascript">
            function toggle() {
                var element = document.getElementById("menu-icon");
                element.classList.toggle("open");
                element.title = "Close the menu." === element.title ? "Open the menu." : "Close the menu.";
            }
        </script>

    </body>
</html>
