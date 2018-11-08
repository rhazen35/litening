<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Stylesheets -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Poppins|Questrial|Raleway" rel="stylesheet">

    </head>
    <body>

        <div class="grid">
        
            <div class="header">
                <div class="page-title">{{ config('app.name') }} Web Solutions</div>
                <div class="page-subtitle">There are no problems, only opportunities.</div>
            </div>

            <div class="main">

                <div class="intro">
                    <div class="title">I build effective web solutions to support your growth.</div>
                    <div class="text">
                        <p>
                            SEO, UX/UI, Responsive and Fast. You can expect cooperative collaboration.
                            I encourage you to be critical about what is build for you.
                            <br><br>
                            From an informative, purposeful website to a complex webshop or web suite. 
                            <br><br>
                            All possibilities are open.
                        </p>
                    </div>
                </div>

                <div class="intro-image">
                    <img src="{{ asset('img/ruben-hazenbosch.jpg') }}">
                </div>

                <div class="content">
                    <div class="title">I use the powerful Laravel Framework and the latest technologies.</div>
                    <div class="text">
                        <p>
                            PHP 7.2, Javascript, ECMAScript 6 Modules, Ajax. CSS3, SASS and much, much more!
                        </p>
                    </div>
                </div>

                <div class="content-image">
                    <img src="{{ asset('img/laravel.png') }}">
                </div>

            </div>
        </div>
    </body>
</html>
