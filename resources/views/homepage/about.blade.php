@extends('layouts.app')
@section('content')
    <!-- =========================== PAGE HEADER BEGIN =========================== -->
    <section class="margin-bottom50 darkarea">
        <div class="pagecover" style="background-image:url(assets/img/defaultbg.jpg)">
            <div class="container">
                <div class="entrycover short">
                    <h1 class="maintitle">About</h1>
                    <nav class="breadcrumbs"><span><a href="#">Home</a></span> <span class="sep">/</span> <span>About</span></nav><!-- .breadcrumbs -->		</div>
            </div>
        </div>
    </section>
    <!-- =========================== PAGE HEADER END =========================== -->

    <!-- =========================== ABOUT BEGIN =========================== -->
    <section>
        <div class="container">
            <div class="col-md-6">
                <div class="the-headline">
                    <h1>About <span class="accentcolor">Us</span></h1>
                    <h3 style="font-size:16px;">WE'RE THE MOST AWARDED COMPANY SINCE 1989</h3>
                </div>
                <div class="textwidget">
                    <p>
                        Nisl congue varius. Curabitur ullamcorper nibh ut felis ultricies, in auctor lacus vulputate. Sed id auctor augue. Aenean pellentesque bibendum leo ut porttitor. Nam non odio nunc. Vivamus viverra sodales. Nisl congue varius. Curabitur ullamcorper nibh ut felis ultricies, in auctor lacus vulputate. Sed id auctor augue. Aenean pellentesque bibendum leo ut porttitor.
                    </p>
                    <p>
                        Nisl congue varius. Curabitur ullamcorper nibh ut felis ultricies, in auctor lacus vulputate. Sed id auctor augue. Aenean pellentesque bibendum leo ut porttitor. Nam non odio nunc. Vivamus viverra sodales. Nisl congue varius. Curabitur ullamcorper nibh ut felis ultricies, in auctor lacus vulputate. Sed id auctor augue.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('template/assets/img/bg1.png') }}" class="so-widget-image" alt="">
            </div>
        </div>
    </section>
    <!-- =========================== ABOUT END =========================== -->

    <!-- =========================== FEATURES BEGIN =========================== -->
    <section class="padding-top80 darkarea" style="background-color:#222546;">
        <div class="container">
            <div class="col-md-4">
                <h1 style="font-size:20px;font-weight:700;"><span class="accentcolor">Choose us</span> for integrity</h1>
                <div class="textwidget">
                    <p>Donec id sem pulvinar ligula commodo condimentum in a tellus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam id ante bibendum.</p>
                </div>
                <br/>
                <h1 style="font-size:20px;font-weight:700;"><span class="accentcolor">Known</span> for respect</h1>
                <div class="textwidget">
                    <p>Donec id sem pulvinar ligula commodo condimentum in a tellus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam id ante bibendum.</p>
                </div>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('template/assets/img/whyus.png') }}" class="so-widget-image" alt="">
            </div>
            <div class="col-md-4">
                <h1 style="font-size:20px;font-weight:700;"><span class="accentcolor">Select us</span> for quality</h1>
                <div class="textwidget">
                    <p>Donec id sem pulvinar ligula commodo condimentum in a tellus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam id ante bibendum.</p>
                </div>
                <br/>
                <h1 style="font-size:20px;font-weight:700;"><span class="accentcolor">Love us</span> for ennovation</h1>
                <div class="textwidget">
                    <p>Donec id sem pulvinar ligula commodo condimentum in a tellus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam id ante bibendum.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- =========================== FEATURES END =========================== -->

    <!-- =========================== BUTTONS BEGIN =========================== -->
    <section class="text-center padding-top80 padding-bottom80 margin-negative-bottom60" style="background-color:#f4f5f6;">
        <div class="textwidget">
            <p><a class="btn icon whiteicon btn-primary rightmargin" href="{{ url('/service') }}">View Services<i class="fa fa-cogs"></i></a> or <a class="btn left icon whiteicon btn-inverse leftmargin" href="{{ url('/contact') }}"><i class="fa fa-envelope"></i>Get Free Quote</a></p>
        </div>
    </section>
    <!-- =========================== BUTTONS BEGIN =========================== -->
@stop