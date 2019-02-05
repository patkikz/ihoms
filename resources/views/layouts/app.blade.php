<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>{{config('app.name', 'iHOMS')}}</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
        {{-- <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> --}}
        <script src="{{ asset('js/jquery-1.12.4.js') }}"></script>
        <script src="{{ asset('js/jquery-ui.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('fonts/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('fonts/font-awesome.min.css') }}">

        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">

    </head>
    <body onload="myFunction()">

        <div id="loader"></div>

        <div id="myDiv">

            @include('inc.navbar')

            @include('inc.messages')

            @yield('content')
            
            @yield('scripts')

            
            <a href="#" id="back-to-top" title="Back to top">&uarr;</a>
            
        </div>


        <!-- Include this after the sweet alert js file -->
        @include('sweet::alert')
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js" charset="utf-8"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        
    </body>
</html>
