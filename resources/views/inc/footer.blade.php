<footer id="footer" class="footer2">
    <div class="scrolltop">
        <div class="scroll icon">
            <a href="#" id="back-to-top"><i class="fa fa-angle-up"></i></a>
        </div>
    </div>
    <div class="inner sep-bottom-md">
        <div class="container">
            <div class="footer-ribbon">
                <a href="contact.html">Get in Touch !</a>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="text-2 widget_text text-center">
                        <div class="widget sep-top-lg">
                            <div class="textwidget">
                                <p >
                                    {{--https://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/16/2016/07/05191140/footerlogo-1.png--}}

                                    <img src="{{ asset('template/assets/img/logo.jpg') }}" alt="">
                                </p>
                                {{--<p>--}}
                                    {{--Simple, flexible theme, ideally suited for business ventures. With powerful, easy to use preset elements you can design any layout that you can imagine.--}}
                                {{--</p>--}}
                                {{--<p>--}}
                                    {{--This is the HTML5  version of BizConstruct, a WordPress version is also available. The template comes with documentation and free support.--}}
                                {{--</p>--}}
                            </div>
                        </div>
                    </div>
                    <div class="socialwidget-2 SocialWidget">
                        <div class="widget sep-top-lg">
                            <div class="social-widget">
                                <a target="_blank" href="#">
                                    <div class="social-bg">
                                        <i class="fa fa-twitter"></i>
                                    </div>
                                </a><a target="_blank" href="#">
                                    <div class="social-bg">
                                        <i class="fa fa-facebook"></i>
                                    </div>
                                </a><a target="_blank" href="#">
                                    <div class="social-bg">
                                        <i class="fa fa-pinterest"></i>
                                    </div>
                                </a><a target="_blank" href="#">
                                    <div class="social-bg">
                                        <i class="fa fa-google-plus"></i>
                                    </div>
                                </a><a target="_blank" href="#">
                                    <div class="social-bg">
                                        <i class="fa fa-skype"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="search-3 widget_search">
                        <div class="widget sep-top-lg">
                            <h3 class="upper widget-title">Search</h3>
                            <form role="search" method="get" id="searchform" class="searchform" action="#">
                                <div>
                                    <input type="search" class="search-field" placeholder="Type keyword and enter&hellip;" value="" name="s" id="s"/>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="recent-posts-3 widget_recent_entries">
                        <div class="widget sep-top-lg">
                            <h3 class="upper widget-title">Quick Links</h3>
                            <ul>
                                <li>
                                    <a href="{{ url('/service') }}">Transport &amp; Hire Of Plant &amp; Machinery</a>
                                </li>
                                <li>
                                    <a href="{{ url('/service') }}">Building Materials</a>
                                </li>
                                <li>
                                    <a href="{{ url('/service') }}">Real Estate</a>
                                </li>
                                <li>
                                    <a href="{{ url('/service') }}">General Building Construction &amp; Renovation</a>

                                </li>

                                <li>
                                    <a href="{{ url('/solarsystem') }}">Solar Systems Solutions</a>

                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="text-3 widget_text">
                        <div class="widget sep-top-lg">
                            <h3 class="upper widget-title">Business Hours</h3>
                            <div class="textwidget">
                                <p>
                                    We're available 24 Hours a day <br>+254 729 919 710<br>+254 777 919 710
                                </p>
                                <p>
                                    Monday - Friday: 9am to 5pm<br/>
                                    Saturday: 10am to 2pm<br/>
                                    Sunday: Closed
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="text-4 widget_text">
                        <div class="widget sep-top-lg">
                            <h3 class="upper widget-title">Company Location</h3>
                            <div class="textwidget">
                                <p>
                                   Eldoret
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="text-5 widget_text">
                        <div class="widget sep-top-lg">
                            <h3 class="upper widget-title">Quick Contact</h3>
                            <div class="textwidget">
                                <div class="done">
                                    <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        Your message has been sent. Thank you!
                                    </div>
                                </div>


                                <form  data-parsley-validate method="post" action="{{ url('contact_form') }}" id="contactform">
                                    @csrf
                                    <div class="form wpcf7-form .form-control">
                                        <div class="controls controls-row">
                                            <input type="text" name="name" placeholder="Name" required=""><br/>
                                            <input type="text" name="email" placeholder="E-mail" required=""><br/>
                                            <input type="text" name="company" placeholder="Company" required=""><br>
                                            <input type="text" name="subject" placeholder="Subject" required=""><br>

                                        </div>
                                        <div class="controls">
                                            <textarea name="message" rows="8"  placeholder="Enter your Message" required=" "></textarea><br/>
                                        </div>
                                        <input type="submit" id="submit" class="btn" value="Send">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright sep-top-xs sep-bottom-xs">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <small>
                        &copy; 2018 LifeStile Builders Ltd </small>
                </div>
                <div class="col-md-6 text-right">
                </div>
            </div>
        </div>
    </div>
</footer>