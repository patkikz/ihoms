<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>{{config('app.name', 'iHOMS')}}</title>
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('fonts/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('fonts/font-awesome.min.css') }}">

        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body onload="myFunction()">

        <div id="loader"></div>

        <div id="myDiv">

            @include('inc.navbar')

            @include('inc.messages')

            @yield('content')
            

            <script src="js/sweetalert.min.js"></script>

            <!-- Include this after the sweet alert js file -->
            @include('sweet::alert')

            
            <a href="#" id="back-to-top" title="Back to top">&uarr;</a>
            
        </div>
        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
            <script>
                CKEDITOR.replace( 'article-ckeditor' );
            </script>


        <script src="{{ asset('js/jquery.min.js') }}"></script>

        <script src="{{ asset('js/preloader.js') }}"></script>
        <script src="{{ asset('js/menu.js') }}"></script>

        <script src="{{ asset('js/back-to-top.js') }}"></script>
        <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        
    </body>
</html>
