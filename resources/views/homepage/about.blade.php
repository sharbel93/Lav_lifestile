@extends('layouts.app')
@section('content')
    <!-- =========================== PAGE HEADER BEGIN =========================== -->
    <section class="margin-bottom50 darkarea">
        <div class="pagecover" style="background-image:url({{ asset('template/assets/img/defaultbg.jpg') }})">
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
                    {{--<h3 style="font-size:16px;">WE'RE THE MOST AWARDED COMPANY SINCE 1989</h3>--}}
                </div>
                <div class="textwidget">
                    <p>
                        Lifestile builders ltd is a Kenyan incorporated company locally owned
                        and registered with The National Construction Authority(NCA) and the Kenya Master Builders.
                        The Company offers General Real Estate,Building Construction,
                        Civil & Road  Construction Works and Transport/Supply of all building materials.
                    </p>
                    <p>
                        Our area of expertise includes but is not limited to building technology,
                        Civil and Structural Engineering.We work closely with other professionals in
                        the built environment and clientele to accurately interpret their visions and
                        dreams to bring them to fruition of their projects.We keep our clients informed throughout
                        the construction period and ensure that the project keeps on schedule and within budget.
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
    <section class="padding-top80 darkarea" style="background-color:#3949ab;">
        <div class="container">
            <div class="col-md-4">
                <h1 style="font-size:20px;font-weight:700;">Our&nbsp;<span class="accentcolor">Vision</span> </h1>
                <div class="textwidget">
                <p>   A regional market leader in provision of Real Estate Solutions,
                    Project Management,Civil and Building Construction Services.
                </p>
                </div>
                <br/>

            </div>
            <div class="col-md-4">
                {{--<img src="{{ asset('template/assets/img/whyus.png') }}" class="so-widget-image" alt="">--}}
                <h1 style="font-size:20px;font-weight:700;">Our&nbsp;<span class="accentcolor">Mission</span> </h1>
                <div class="textwidget">
                    <p>
                        To be a world class leader in Real Estate Development
                        and Engineering Construction company providing efficient,affordable,sustainable &
                        cost effective services of highest level of quality.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <h1 style="font-size:20px;font-weight:700;">Our&nbsp;<span class="accentcolor">Values</span> </h1>
                <div class="textwidget">
                    <p>
                        We believe in maintaining the highest standard of Professionalism,
                        Integrity,Creativity,Positive attitude delivery that meets and surpasses
                        expectations while offering Prompt and lasting solutions that stand the test of time.
                    </p>
                </div>
                <br/>

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