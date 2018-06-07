@extends('layouts.app')
@section('content')

    <!-- =========================== PAGE HEADER BEGIN =========================== -->
    <section class="margin-bottom50 darkarea">
        <div class="pagecover" style="background-image:url({{ asset('template/assets/img/defaultbg.jpg') }})">
            <div class="container">
                <div class="entrycover short">
                    <h1 class="maintitle">Project</h1>
                    <nav class="breadcrumbs"><span><a href="{{ url('/') }}">Home</a></span> <span class="sep">/</span><span><a href="{{ url('/service') }}">Service</a></span> <span class="sep">/</span> <span class="sep">Roofing Ridges</span> </nav><!-- .breadcrumbs -->		</div>
            </div>
        </div>
    </section>
    <!-- =========================== PAGE HEADER END =========================== -->


    <!-- =========================== PORTFOLIO SINGLE BEGIN =========================== -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="content" role="main">
                        <div>
                            <p>
                                <img class="alignright" src="{{ asset('template/assets/images/roofing_ridges.png') }}" alt="">
                            </p>
                          <p>
                              <h3> Roofing Ridges</h3>
                          </p>
                            <p>
                                <a href="{{ url('/contact') }}" class="btn btn-inverse btn-lg"><i class="fa fa-send-o"></i> Ask for Here!!</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =========================== PORTFOLIO SINGLE END =========================== -->
    <hr>

    <!-- =========================== PORTFOLIO SINGLE BEGIN =========================== -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="content" role="main">
                        <div>
                            <p>
                                <img class="alignright" src="{{ asset('template/assets/images/roofing_ridges_r-110.png') }}" alt="">
                            </p>
                      <p>
                          <h3>Roofing Ridges R-110</h3>
                      </p>
                            <p>
                                <a href="{{ url('/contact') }}" class="btn btn-inverse btn-lg"><i class="fa fa-send-o"></i> Ask for Here!!</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =========================== PORTFOLIO SINGLE END =========================== -->

    <hr>

    <!-- =========================== PORTFOLIO SINGLE BEGIN =========================== -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="content" role="main">
                        <div>
                            <p>
                                <img class="alignright" src="{{ asset('template/assets/images/roofing_tiles_colored.png') }}" alt="">
                            </p>
                        <p>

                        <h3>  Roofing Tiles Coloured</h3>
                        </p>
                            <p>
                                <a href="{{ url('/contact') }}" class="btn btn-inverse btn-lg"><i class="fa fa-send-o"></i> Ask for Here!!</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =========================== PORTFOLIO SINGLE END =========================== -->
@endsection