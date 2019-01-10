<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>{{config('app.name', 'iHOMS')}}</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
        <script src="{{ asset('js/app.js') }}" ></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        @include('inc.navbar')
        <br>
        <div class="container">
            @include('inc.messages')

            @yield('content')
        </div>

        <script src="js/sweetalert.min.js"></script>

        <!-- Include this after the sweet alert js file -->
        @include('sweet::alert')

        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'article-ckeditor' );
        </script>
    </body>
</html>
