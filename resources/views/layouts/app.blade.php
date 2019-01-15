<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>{{config('app.name', 'iHOMS')}}</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Ruda:400,900,700" rel="stylesheet">

        <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
        <script type="text/javascript" src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/bootstrap/js/bootstrap.js') }}"></script>

        <link href="{{ asset('assets/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/lib/prettyphoto/css/prettyphoto.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/lib/hover/hoverex-all.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/lib/jetmenu/jetmenu.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/lib/owl-carousel/owl-carousel.css') }}" rel="stylesheet">

        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/css/colors/blue.css') }}">

        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/preloader.css') }}">
        <script type="text/javascript" src="{{ asset('assets/js/preloader.js') }}"></script>
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

            
            <div class="dmtop">Scroll to Top</div>
            
        </div>
        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
            <script>
                CKEDITOR.replace( 'article-ckeditor' );
            </script>


        <script src="{{ asset('assets/js/jquery-1.js') }}"></script>
        <script src="{{ asset('assets/js/canvasjs.js') }}"></script>
        <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/lib/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/lib/php-mail-form/validate.js') }}"></script>
        <script src="{{ asset('assets/lib/prettyphoto/js/prettyphoto.js') }}"></script>
        <script src="{{ asset('assets/lib/isotope/isotope.min.js') }}"></script>
        <script src="{{ asset('assets/lib/hover/hoverdir.js') }}"></script>
        <script src="{{ asset('assets/lib/hover/hoverex.min.js') }}"></script>
        <script src="{{ asset('assets/lib/unveil-effects/unveil-effects.js') }}"></script>
        <script src="{{ asset('assets/lib/owl-carousel/owl-carousel.js') }}"></script>
        <script src="{{ asset('assets/lib/jetmenu/jetmenu.js') }}"></script>
        <script src="{{ asset('assets/lib/animate-enhanced/animate-enhanced.min.js') }}"></script>
        <script src="{{ asset('assets/lib/jigowatt/jigowatt.js') }}"></script>
        <script src="{{ asset('assets/lib/easypiechart/easypiechart.min.js') }}"></script>
        <script src="{{ asset('assets/js/col-area-line.js') }}"></script>

        <script src="{{ asset('assets/js/menu.js') }}"></script>

        <script src="{{ asset('assets/js/main.js') }}"></script>
        
    </body>
</html>
