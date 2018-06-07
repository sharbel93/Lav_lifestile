<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel='stylesheet' href='{{ asset('template/assets/css/front.css') }}' type='text/css' media='all'/>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel='stylesheet' href='{{ asset('template/assets/css/animate.min.css') }}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ asset('template/assets/css/flexslider.css') }}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ asset('template/style.css') }}' type='text/css' media='all'/>
    <link rel='stylesheet' href='https://netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto%3A300italic%2C400italic%2C700italic%2C300%2C400%2C700%2C800%2C900%7CShadows+Into+Light&#038;ver=4.5.3' type='text/css' media='all'/>

    <!-- Scripts -->
    {{--<script src="{{ asset('js/app.js') }}" defer></script>--}}

    <!-- Fonts -->
    {{--<link rel="dns-prefetch" href="https://fonts.gstatic.com">--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">--}}

    <!-- Styles -->
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
</head>
<body >
<div class="page-loader">
    <img src="{{ asset('template/assets/img/loader.gif') }}" alt="loader">
</div>
<!--[if lt IE 8]>
<div class="alert alert-warning">
    You are using an <strong>outdated</strong> browser. Please upgrade your browser</a> to improve your experience.
</div>
<![endif]-->
        {{--<nav class="navbar navbar-expand-md navbar-light navbar-laravel">--}}
            {{--<div class="container">--}}
                {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
                    {{--{{ config('app.name', 'Laravel') }}--}}
                {{--</a>--}}
                {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
                    {{--<span class="navbar-toggler-icon"></span>--}}
                {{--</button>--}}

                {{--<div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
                    {{--<!-- Left Side Of Navbar -->--}}
                    {{--<ul class="navbar-nav mr-auto">--}}

                    {{--</ul>--}}

                    {{--<!-- Right Side Of Navbar -->--}}
                    {{--<ul class="navbar-nav ml-auto">--}}
                        {{--<!-- Authentication Links -->--}}
                        {{--@guest--}}
                            {{--<li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>--}}
                            {{--<li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>--}}
                        {{--@else--}}
                            {{--<li class="nav-item dropdown">--}}
                                {{--<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
                                    {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
                                {{--</a>--}}

                                {{--<div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
                                    {{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
                                       {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                        {{--{{ __('Logout') }}--}}
                                    {{--</a>--}}

                                    {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                        {{--@csrf--}}
                                    {{--</form>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                        {{--@endguest--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</nav>--}}

        <!-- Header
            ================================================== -->
            <!-- =========================== HEADER BEGIN  =========================== -->
            @include('inc.header')
            <!-- =========================== HEADER END =========================== -->

            <main class="py-4">
            @yield('content')
            </main>
            <!-- =========================== FOOTER BEGIN  =========================== -->
           @include('inc.footer')
            <!-- =========================== FOOTER END  =========================== -->

<!-- =========================== SCRIPTS BEGIN  =========================== -->
<script type='text/javascript' src='{{ asset('template/assets/js/jquery.js') }}'></script>
<script type='text/javascript' src='{{ asset('template/assets/js/jquery.touchSwipe.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('template/assets/js/carousel.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('template/assets/js/modernizr-2.8.3.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('template/assets/js/bootstrap.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('template/assets/js/mason.js') }}'></script>
<script type='text/javascript' src='{{ asset('template/assets/js/popup.js') }}'></script>
<script type='text/javascript' src='{{ asset('template/assets/js/common.js') }}'></script>
<script type='text/javascript' src='{{ asset('template/assets/js/flexslider.js') }}'></script>
<script type='text/javascript' src='{{ asset('template/assets/js/portfolio.js') }}'></script>
<script type='text/javascript' src='{{ asset('template/assets/js/countto.js') }}'></script>
<script type='text/javascript' src='{{ asset('template/assets/js/testimonial.js') }}'></script>
<!-- =========================== SCRIPTS END  =========================== -->
{{--<script src="{{ asset('js/app.js') }}"></script>--}}
</body>
</html>
