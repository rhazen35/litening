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

    </head>
    <body>
        <header>
            <div class="page-title">{{ config('app.name') }} Web Solutions</div>
            <div class="page-subtitle">There are no problems, only opportunities.</div>
        </header>

        <main>
            <div class="main-title">We build effective web solutions to support your growth.</div>
            <div class="main-infotext">
                <p>
                    SEO, UX/UI, Responsive and Fast. You can expect cooperative collaboration.
                    We encourage you to be critical about what we build for you.
                    <br>
                    From an informative, purposeful website to a complex Webshop or Web Suite. 
                    <br>
                    All possibilities are open.
                </p>
            </div>

            <div class="main-portrait-img">
                <img src="{{ asset('img/ruben-hazenbosch.jpg') }}">
            </div>

            <div class="main-title">We use the powerful Laravel Framework and the latest technologies.</div>
            <div class="main-infotext">
                <p>
                    PHP 7.2, Javascript: ECMAScript 6 Modules and Ajax. CSS3, SASS, and much, much more!
                    <br>

                </p>
            </div>

            <div class="main-img">
                <img src="{{ asset('img/laravel.png') }}">
            </div>
        </main>
    </body>
</html>
