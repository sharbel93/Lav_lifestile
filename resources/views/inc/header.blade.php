<header id="header">
    <div class="container">
        <div class="logoarea">
            <div class="col-md-4">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('template/assets/img/log.png') }}" alt="logo">
                </a>
            </div>
            <div class="col-md-8 text-right">
                <div class="headMiddInfo">
                    <div class="">
                        <div class="hidden-xs singMiddInfo phone">
                            <i class="fa fa-phone"></i>
                            <h4>PHONE</h4>
                            <p>
                                +254 729 919 710
                            </p><br>
                            <p> +254 777 919 710</p>
                        </div>
                        <div class="hidden-xs singMiddInfo email">
                            <i class="fa fa-envelope-o"></i>
                            <h4>EMAIL</h4>
                            <p>
                                info@lifestilebuildersltd.co.ke
                            </p>
                        </div>
                        <div class="hidden-sm hidden-md hidden-xs singMiddInfo time">
                            <i class="fa fa-clock-o"></i>
                            <h4>OPENING TIME</h4>
                            <p>
                                Mon - Sat 8:00 - 19:00
                            </p>
                        </div>
                    </div>
                    <div class="clearfix">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="mega-menu" class="header header-sticky primary-menu icons-no default-skin fadeIn">
        <nav class="navbar navbar-default redq ">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbar">
                    <a class="mobile-menu-close"><i class="fa fa-close"></i></a>
                    <div class="menu-top-menu-container">
                        <ul id="menu-top-menu" class="nav navbar-nav nav-list">
                            <li class="current-menu-item active"><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/about') }}">About</a></li>
                            <li><a href="{{ url('/service') }}">Services</a></li>
                            <li class="dropdown"><a title="Pages" href="#" data-hover="dropdown" class="dropdown-toggle">
                                    Pages <span class="caret"></span></a>
                                <ul role="menu" class=" sub-menu">
                                    <li><a href="video.html">Video</a></li>
                                    <li><a href="f-a-q.html">F.A.Q.</a></li>
                                    <li class="menu-item dropdown"><a title="Lightbox Galleries" href="#">Lightbox Galleries</a>
                                        <ul role="menu" class="sub-menu">
                                            <li><a href="gallery-four.html">Gallery Four</a></li>
                                            <li><a href="gallery-three.html">Gallery Three</a></li>
                                            <li><a href="gallery-two.html">Gallery Two</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="pricing.html">Pricing</a></li>
                                    <li><a href="team.html">Team</a></li>
                                    <li><a href="testimonials.html">Testimonials</a></li>
                                    <li><a href="page-sidebar.html">Page Sidebar</a></li>
                                    <li><a href="portfolio-single.html">Portfolio Single</a></li>
                                    <li><a href="blog-single.html">Blog Single</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ url('/portfolio') }}">Portfolio</a></li>
                            <li><a href="{{ url('/blog') }}">Blog</a></li>
                            <li><a href="{{ url('/contact') }}">Contact</a></li>
                            <li class="highlight"><a href="{{ url('/contact') }}">Free Quote</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
    </div>
</header>