@extends('layouts.app')
@section('content')
    <!-- =========================== PAGE HEADER BEGIN =========================== -->
    <section class="margin-bottom50 darkarea">
        <div class="pagecover" style="background-image:url({{ asset('template/assets/img/defaultbg.jpg') }})">
            <div class="container">
                <div class="entrycover short">
                    <h1 class="maintitle">Solar Systems Solutions</h1>
                    <nav class="breadcrumbs"><span><a href="{{ url('/') }}">Home</a></span> <span class="sep">/</span> <span><a href="{{ url('/service') }}">Products &amp; Services</a></span>
                        <span class="sep">/</span> <span>Solar System Solutions</span></nav><!-- .breadcrumbs -->		</div>
            </div>
        </div>
    </section>
    <!-- =========================== PAGE HEADER END =========================== -->

    <!-- =========================== Services Accordion Begin  =========================== -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="content" role="main">
                        <div class="col-md-4 no-pad">
                            <ul class="nav nav-tabs tabstyle1" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#tab_two0" aria-controls="tab_two0" role="tab" data-toggle="tab">Solar pump systems</a>
                                </li>
                                <li role="presentation" class="">
                                    <a href="#tab_two1" aria-controls="tab_two1" role="tab" data-toggle="tab">Borehole pumps</a>
                                </li>
                                <li role="presentation" class="">
                                    <a href="#tab_two2" aria-controls="tab_two2" role="tab" data-toggle="tab">Turn-Key solar projects </a>
                                </li>
                                <li role="presentation" class="">
                                    <a href="#tab_two3" aria-controls="tab_two3" role="tab" data-toggle="tab">Power Back-up systems</a>
                                </li>
                                <li role="presentation" class="">
                                    <a href="#tab_two4" aria-controls="tab_two4" role="tab" data-toggle="tab">Smaller domestic systems</a>
                                </li>
                                <li role="presentation" class="">
                                    <a href="#tab_two5" aria-controls="tab_two5" role="tab" data-toggle="tab">Hot Water Systems</a>
                                </li>
                                <li role="presentation" class="">
                                    <a href="#tab_two6" aria-controls="tab_two6" role="tab" data-toggle="tab">Full Solar Systems</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-8 no-pad">
                            <div class="tab-content tabstyle1">
                                <div role="tabpanel" class="tab-pane active in " id="tab_two0">
                                    <h4>Solar Pump systems for pools</h4>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <img class="image_spec" src="{{ asset('template/assets/solar/solarpump.jpg') }}" alt="">
                                            <img class="alignright" src="{{ asset('template/assets/solar/image011.jpg') }}" alt="">
                                        </div>
                                    </div>

                                    {{--<ul class="unstyle checklist">--}}
                                        {{--<li>Tipper trucks</li>--}}
                                        {{--<li>Concrete mixers</li>--}}
                                        {{--<li>Scaffolds </li>--}}
                                        {{--<li>Cranes</li>--}}
                                    {{--</ul>--}}
                                </div>
                                <div role="tabpanel" class="tab-pane " id="tab_two1">
                                    <h4 class="text-center">Borehole pumps for domestic single homes or estates and housing projects</h4>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <img class="image_spec" src="{{ asset('template/assets/solar/image012.jpg') }}" alt="">
                                            <img class="alignright" src="{{ asset('template/assets/solar/borehole.jpg') }}" alt="">
                                        </div>
                                    </div>

                                </div>
                                <div role="tabpanel" class="tab-pane " id="tab_two2">
                                    <h4>Turn-Key large scale solar projects ideal for heavy power consumers seeking to reduce power costs</h4>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <img class="image_spec" src="{{ asset('template/assets/solar/image013.jpg') }}" alt="">
                                            <img class="alignright" src="{{ asset('template/assets/solar/turn.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane " id="tab_two3">
                                    <h4>Power Back-Up systems(battery storage) hybrid sysytems</h4>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <img class="image_spec" src="{{ asset('template/assets/solar/powerback.jpg') }}" alt="">
                                            <img class="alignright" src="{{ asset('template/assets/solar/powrback2.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane " id="tab_two4">
                                    <h4>Smaller domestic systems</h4>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <img class="image_spec" src="{{ asset('template/assets/solar/image017.jpg') }}" alt="">
                                            <img class="" src="{{ asset('template/assets/solar/smaller.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane " id="tab_two5">
                                    <h4>Hot Water systems domestic single house systems and also large scal foor schools restaurants and hotels</h4>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <img class="image_spec" src="{{ asset('template/assets/solar/hot1.jpg') }}" alt="">
                                            <img class="" src="{{ asset('template/assets/solar/hot_water.jpg') }}" alt="">
                                            <img class="" src="{{ asset('template/assets/solar/image020.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane " id="tab_two6">
                                    <h4>Full solar systems for offgrid needs such as lodges hospitals and NGO requirements</h4>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <img class="image_spec" src="{{ asset('template/assets/solar/image022.jpg') }}" alt="">
                                            <img class="" src="{{ asset('template/assets/solar/image023.jpg') }}" alt="">
                                            <img class="" src="{{ asset('template/assets/solar/image024.jpg') }}" alt="">
                                            <img class="" src="{{ asset('template/assets/solar/image025.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =========================== Services Accordion End  =========================== -->


@stop