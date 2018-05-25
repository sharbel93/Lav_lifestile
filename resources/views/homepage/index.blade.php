@extends('layouts.app')
@section('content')
    <!-- =========================== SLIDER BEGIN =========================== -->
    <section class="margin-bottom50">
        <div class="customtypewowslider fullwidth flexslider clearfix cayman-slider" style="max-height:500px;">
            <ul class="slides slider-content-style1">
                <li style="background-color:#000000;">
                    {{--https://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/16/2016/07/05175802/s1.jpg--}}
                    <img src="{{ asset('template/assets/images/tipper truck.jpg') }}" alt="" style="opacity:0.7;">
                    <div class="flex-caption" style="top:0%;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <h2 class="wow none" data-wow-duration="1.0s" data-wow-delay="0.1s">
                                        Quality that honors architectural vision </h2>
                                    <h1 class="wow fadeInUp" data-wow-duration="1.0s" data-wow-delay="0.6s"><span class="accentcolor">Transport &amp; Hire</span><br/>
                                        Of Plant &amp; Machinery</h1>
                                    <a href="{{ url('/contact') }}" class="btn btn-ghost wow none"> Free Quote </a>
                                    <a href="{{ url('/service') }}" class="btn btn-primary wow none"> Learn More </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-color:#000000;">
                    {{--https://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/16/2016/07/05175809/s2.jpg--}}
                    <img src="{{ asset('template/assets/images/starconcretefloortiles.jpg') }}" alt="" style="opacity:0.7;">
                    <div class="flex-caption" style="top:2%;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <h2 class="wow none" data-wow-duration="1.0s" data-wow-delay="0.1s">
                                        QUALITY THAT HONORS ARCHITECTURAL VISION </h2>
                                    <h1 class="wow fadeInUp" data-wow-duration="1.0s" data-wow-delay="0.6s"><span class="accentcolor">Building</span><br/>
                                        Materials</h1>
                                    <a href="{{ url('/contact') }}" class="btn btn-ghost wow none"> Free Quote </a>
                                    <a href="{{ url('/service') }}" class="btn btn-primary wow none"> Learn More </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-color:#000000;">
                    {{--https://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/16/2016/07/05190348/s33.jpg--}}
                    <img src="{{ asset('template/assets/images/realestate.jpg') }}" alt="" style="opacity:0.7;">
                    <div class="flex-caption" style="top:2%;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <h2 class="wow none" data-wow-duration="1.0s" data-wow-delay="0.1s">
                                        QUALITY THAT HONORS ARCHITECTURAL VISION </h2>
                                    <h1 class="wow fadeInUp" data-wow-duration="1.0s" data-wow-delay="0.6s"><span class="accentcolor">Real </span><br/>
                                        Estate</h1>
                                    <a href="{{ url('/contact') }}" class="btn btn-ghost wow none"> Free Quote </a> <!--#222546 / change with this #3949ab-->
                                    <a href="{{ url('/service') }}" class="btn btn-primary wow none"> Learn More </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-color:#000000;">
                    <img src="{{ asset('template/assets/images/cabros_paving_blocks_cosmic.jpg') }}" alt="" style="opacity:0.7;">
                    <div class="flex-caption" style="top:0%;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <h2 class="wow none" data-wow-duration="1.0s" data-wow-delay="0.1s">
                                        QUALITY THAT HONORS ARCHITECTURAL VISION </h2>
                                    <h1 class="wow fadeInUp" data-wow-duration="1.0s" data-wow-delay="0.6s"><span class="accentcolor">General Building</span><br/>
                                        Construction &amp; Renovations</h1>
                                    <a href="{{ url('/contact') }}" class="btn btn-ghost wow none"> Free Quote </a>
                                    <a href="{{ url('/service') }}" class="btn btn-primary wow none"> Learn More </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- =========================== SLIDER END =========================== -->
    <!-- =========================== ABOUT BEGIN =========================== -->
    <section>
        <div class="container">
            <div class="col-md-6">
                <div class="the-headline">
                    <h1>About <span class="accentcolor">Us</span></h1>
                    <h3 style="font-size:16px;">Motto: "We take pride in everything we do"</h3>
                </div>
                <div class="textwidget">
                    <p>
                        <strong>Lifestile builders ltd</strong> is a Kenyan incorporated company locally owned and registered with
                        The National Construction Authority(NCA) and the Kenya Master Builders.The Company offers General Real Estate,Building Construction,
                        Civil & Road  Construction Works and Transport/Supply of all building materials.
                   </p>
                    <p>
                        Our area of expertise includes but is not limited to building technology,Civil and Structural Engineering.
                        We work closely with other professionals in the built environment and clientele to accurately interpret
                        their visions and  dreams to bring them to fruition of their projects.
                        We keep our clients informed throughout the construction period and ensure that the project keeps on schedule and within budget.
                     </p>
                </div>
            </div>
            <div class="col-md-6 wow fadeInRight">
                <img alt="" src="{{ asset('template/assets/img/bg1.png') }}" class="so-widget-image" style="max-width:100%; height:auto; display:block"/>
            </div>
        </div>
    </section>
    <!-- =========================== ABOUT END =========================== -->
    <!-- =========================== PORTFOLIO BEGIN =========================== -->
    <section class="margin-bottom50 padding-top50 darkarea" style="background-color:#3949ab;">
        <div class="container">
            <div class="the-headline text-center ">
                <h1>Our Building &nbsp;<span class="accentcolor">Materials</span></h1>
            </div>
            <div id="portfolio-filter" class="text-center">
                <ul class="portfolio-filter-list">
                    <li><a href="#" data-cat="*" class="active">All</a></li>
                    <li><a href="#" data-cat=".9">blocks</a></li>
                    <li><a href="#" data-cat=".11">tiles</a></li>
                    <li><a href="#" data-cat=".10">posts</a></li>
                    <li><a href="#" data-cat=".8">others</a></li>
                </ul>
            </div>
        </div>
        <div id="portfolio-items" class="portfolio-items">
            <article class="9 / 8">
                <a href="portfolio-single.html" class="portfolio-link">
                    <img src="https://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/16/2015/09/05153404/1-470x294.jpg" class="background-image" alt="Spanish Style">
                    <div class="overlay">
                        <i class="fa fa-link"></i>
                        <h3>Torridon</h3>
                        <span>
			big / houses </span>
                    </div>
                </a>
            </article>
            <article class="9 / 10 / 8">
                <a href="portfolio-single.html" class="portfolio-link">
                    <img src="https://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/16/2015/09/05153409/2-470x294.jpeg" class="background-image" alt="Garden House"/>
                    <div class="overlay">
                        <i class="fa fa-link"></i>
                        <h3>Earl of Moreland</h3>
                        <span>
			big / gardens / houses </span>
                    </div>
                </a>
            </article>
            <article class="9 / 11">
                <a href="portfolio-single.html" class="portfolio-link">
                    <img src="https://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/16/2015/09/05153414/3-470x294.jpg" class="background-image" alt="Gray Tiles"/>
                    <div class="overlay">
                        <i class="fa fa-link"></i>
                        <h3>Bungalow</h3>
                        <span>
			big / buildings </span>
                    </div>
                </a>
            </article>
            <article class="11">
                <a href="portfolio-single.html" class="portfolio-link">
                    <img src="https://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/16/2015/09/05153446/4-470x294.jpeg" class="background-image" alt="Wooden House"/>
                    <div class="overlay">
                        <i class="fa fa-link"></i>
                        <h3>Mill House</h3>
                        <span>
			buildings </span>
                    </div>
                </a>
            </article>
            <article class="11 / 10">
                <a href="portfolio-single.html" class="portfolio-link">
                    <img src="https://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/16/2015/09/05153417/5-470x294.jpg" class="background-image" alt="Light House"/>
                    <div class="overlay">
                        <i class="fa fa-link"></i>
                        <h3>Long Walks</h3>
                        <span>
			buildings / gardens </span>
                    </div>
                </a>
            </article>
            <article class="9 / 11">
                <a href="portfolio-single.html" class="portfolio-link">
                    <img src="https://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/16/2015/09/05153424/6-470x294.jpeg" class="background-image" alt="Winter Cabin"/>
                    <div class="overlay">
                        <i class="fa fa-link"></i>
                        <h3>Twilight</h3>
                        <span>
			big / buildings </span>
                    </div>
                </a>
            </article>
            <article class="10 / 8">
                <a href="portfolio-single.html" class="portfolio-link">
                    <img src="https://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/16/2015/09/05153428/7-470x294.jpg" class="background-image" alt="Lovely Home"/>
                    <div class="overlay">
                        <i class="fa fa-link"></i>
                        <h3>Desert Rose</h3>
                        <span>
			gardens / houses </span>
                    </div>
                </a>
            </article>
            <article class="9 / 8">
                <a href="portfolio-single.html" class="portfolio-link">
                    <img src="https://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/16/2015/09/05153520/8-470x294.jpg" class="background-image" alt="Red House"/>
                    <div class="overlay">
                        <i class="fa fa-link"></i>
                        <h3>Coming Home</h3>
                        <span>
			big / houses </span>
                    </div>
                </a>
            </article>
        </div>
    </section>
    <!-- =========================== PORTFOLIO END =========================== -->
    <!-- =========================== SERVICES BEGIN =========================== -->
    <section class="margin-bottom50">

        <div class="container">

            <div class="the-headline text-center">
                <h1><span class="accentcolor">Our</span> Services</h1>
                <div class="decoration">
                    <div class="decoration-inside">
                    </div>
                </div>
                <div class="col-md-12">
                    <section class="text-center" style="padding: 12px;">
                        <div class="textwidget">
                            <p><a class="btn icon whiteicon btn-primary rightmargin" href="{{ url('/service') }}">View Services<i class="fa fa-cogs"></i></a>
                                or <a class="btn left icon whiteicon btn-inverse leftmargin" href="{{ url('/contact') }}"><i class="fa fa-envelope"></i>Get Free Quote</a></p>
                        </div>
                    </section>
                </div>
                {{--<h3>WE BRING YOU THE AMAZING SERVICES SINCE 1989</h3>--}}
            </div>

            <div class="sow-services-list">
                <div class="our-services service-icon-list">

                    <div class="col-md-6 sow-services-service">
                        <div class="content">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="type">
                                        <span class="sow-icon-fontawesome"><i class="fa fa-home"></i></span>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <a href="#" title="">
                                        <h3>Real Estate</h3>
                                        <ul class="unstyle checklist">
                                            <li>Leasing of Houses, Offices, Go Downs</li>
                                            <li>Letting of Apartments</li>
                                            <li>Morgages</li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 sow-services-service">
                        <div class="content">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="type">
                                        <span class="sow-icon-fontawesome"><i class="fa fa-wrench"></i></span>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <h3>General Civil Engineering Works</h3>
                                    <ul class="unstyle checklist">
                                        <li>Construction Consulting</li>
                                        <li>Project Management</li>
                                        <li>Culvert And Drainage Work</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 sow-services-service">
                        <div class="content">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="type">
                                        <span class="sow-icon-fontawesome"><i class="fa fa-truck"></i></span>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <a href="#" title="">
                                        <h3>Transport &amp; Services</h3>
                                        <ul class="unstyle checklist">
                                            <li>updated</li>
                                            <li>updated</li>
                                            <li>updated</li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 sow-services-service">
                        <div class="content">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="type">
                                        <span class="sow-icon-fontawesome"><i class="fa fa-cog"></i></span>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <h3>Building Materials</h3>
                                    <ul class="unstyle checklist">
                                        <li>updated</li>
                                        <li>updated</li>
                                        <li>updated</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </section>
    <!-- =========================== SERVICES END =========================== -->
    <!-- =========================== COUNTER BEGIN =========================== -->
    <section class="darkarea margin-bottom50 padding110" style="background-size:cover;background-image: url(https://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/16/2016/07/05175951/counter.jpg); background-position: center center; background-repeat: no-repeat;">
        <div class="container">

            <div class="row">

                <div class="col-md-4">
                    <div class="funfacts text-center">
                        <div class="icon">
                            <span class="sow-icon-fontawesome"><i class="fa fa-life-ring"></i></span>
                        </div>
                        <h2 class="counter" style="">20</h2>
                        <h4>Loyal Clients</h4>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="funfacts text-center">
                        <div class="icon">
                            <span class="sow-icon-fontawesome"><i class="fa fa-cube"></i></span>
                        </div>
                        <h2 class="counter" style="">30</h2>
                        <h4>Projects Completed</h4>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="funfacts text-center">
                        <div class="icon">
                            <span class="sow-icon-fontawesome"><i class="fa fa-globe"></i></span>
                        </div>
                        <h2 class="counter" style="">50</h2>
                        <h4>Auctions Won</h4>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- =========================== COUNTER END =========================== -->
    <!-- =========================== TESTIMONIALS BEGIN =========================== -->
    <section class="margin-bottom50">
        <div class="the-headline text-center">
            <h1><span class="accentcolor">Happy</span> Clients</h1>
            <div class="decoration">
                <div class="decoration-inside">
                </div>
            </div>
            <h3>JUST LISTEN TO WHAT OUR CLIENTS HAVE TO SAY</h3>
        </div>
        <div class="sow-testimonials">
            <div class="flexslider testimonials-wrapper text-center">
                <ul class="slides">
                    <li>
                        <div class="sow-round-image-frame imground" style="background-image: url(https://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/16/2016/07/05180344/business-people-meeting-together-170x150.jpg); width:123px; height:123px">
                        </div>
                        <p>
                            Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.
                        </p>
                        <strong class="signature">- John Doe, <a>California</a></strong>
                    </li>
                    <li>
                        <div class="sow-round-image-frame imground" style="background-image: url(https://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/16/2016/07/05180344/business-people-meeting-together-170x150.jpg); width:123px; height:123px">
                        </div>
                        <p>
                            Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.
                        </p>
                        <strong class="signature">- John Doe, <a>California</a></strong>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- =========================== TESTIMONIALS END  =========================== -->
    <!-- =========================== PROMO BANNER BEGIN  =========================== -->
    <section class="margin-bottom50 darkarea">
        <div class="padding110" style="background-size:cover; background-image: url(https://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/16/2016/07/05180039/break1.jpg); background-position: center center; background-repeat: no-repeat;">
            <div class="wow fadeInUp text-center">
                <div class="textwidget text-uppercase">
                    <h5 style="margin-bottom:20px;">Working with us</h5>
                    <h2 style="margin-bottom:24px;">Contractors & Construction<br/>	Managers Since 1989</h2>
                    <p>
                        <a class="btn icon whiteicon btn-primary rightmargin" href="{{ url('/about') }}">About Us<i class="fa fa-arrow-right"></i></a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- =========================== PROMO BANNER END  =========================== -->
    <!-- =========================== RECENT NEWS BEGIN  =========================== -->
    <section class="margin-bottom50">
        <div class="container">
            <div class="the-headline text-center">
                <h1><span class="accentcolor">Our</span> News</h1>
                <div class="decoration">
                    <div class="decoration-inside">
                    </div>
                </div>
                <h3>READ OUR LATEST ARTICLES, TUTORIALS AND MORE</h3>
            </div>

            <div class="wow fadeInUp panel-widget-style">
                <div class="so-widget-sow-post-carousel so-widget-sow-post-carousel-base">
                    <div class="row tline-holder">
                        <!-- tline ITEM-->
                        <div class="col-md-4">
                            <article class="hentry">
                                <div class="blog-img-box">
                                    <div class="blog-date">
                                        <span class="month">Jul</span><span class="date">5</span>
                                    </div>
                                    <a class="hover-effect" href="#">
                                        <img src="https://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/16/2015/09/05153404/1.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Spanish Style"></a>
                                </div>
                                <div class="blog-content">
                                    <h3 class="entry-title"><a href="#"> Interior Design </a></h3>
                                    <p>
                                        <span class="vcard author"><span class="fn">By Admin</span></span>  <a href="#" rel="category tag"></a>
                                    </p>
                                </div>
                            </article>
                        </div>
                        <!-- /tline-->
                        <!-- tline ITEM-->
                        <div class="col-md-4">
                            <article class="hentry">
                                <div class="blog-img-box">
                                    <div class="blog-date">
                                        <span class="month">Jul</span><span class="date">4</span>
                                    </div>
                                    <a class="hover-effect" href="#">
                                        <img src="https://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/16/2015/09/05153424/6.jpeg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Winter Cabin"></a>
                                </div>
                                <div class="blog-content">
                                    <h3 class="entry-title"><a href="#"> Renovation </a></h3>
                                    <p>
                                        <span class="vcard author"><span class="fn">By Admin</span></span>  <a href="#" rel="category tag"></a>
                                    </p>
                                </div>
                            </article>
                        </div>
                        <!-- /tline-->
                        <!-- tline ITEM-->
                        <div class="col-md-4">
                            <article class="hentry">
                                <div class="blog-img-box">
                                    <div class="blog-date">
                                        <span class="month">Jul</span><span class="date">3</span>
                                    </div>
                                    <a class="hover-effect" href="#">
                                        <img src="https://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/16/2015/09/05153417/5.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Light House"/></a>
                                </div>
                                <div class="blog-content">
                                    <h3 class="entry-title"><a href="#"> Wooden Construction </a></h3>
                                    <p>
                                        <span class="vcard author"><span class="fn">By Admin</span></span>  <a href="#" rel="category tag"></a>
                                    </p>
                                </div>
                            </article>
                        </div>

                        <div class="tline-start-content">
                            <div class="tline-start-icon">
                            </div>
                            <a style="position:relative;" href="blog.html" class="btn btn-primary">More</a>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- =========================== RECENT NEWS END  =========================== -->



@stop