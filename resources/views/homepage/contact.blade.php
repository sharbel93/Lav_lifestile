@extends('layouts.app')
@section('content')
    <!-- =========================== MAP BEGIN =========================== -->
    <section class="margin-bottom50">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7979.319963876466!2d35.292688500115474!3d0.5104528573825451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x178101ae37f9f535%3A0xe2db337df0fc0820!2sEldoret!5e0!3m2!1sen!2ske!4v1525779550437" height="505" frameborder="0" style="border:0; width:100%;" allowfullscreen></iframe>
        {{--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.3675613690593!2d2.777652115235407!3d48.870269207825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e61d1971f9af8b%3A0x1a635ad691123731!2sDisneyland+Hotel!5e0!3m2!1sen!2sro!4v1469639288745" height="505" style="border:0;width:100%;" allowfullscreen></iframe>--}}
    </section>
    <!-- =========================== MAP END =========================== -->

    <!-- =========================== Contact BEGIN =========================== -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="the-headline">
                        <h1 style="font-size:20px;">DETAILS</h1>
                    </div>
                    <div class="textwidget"><p><i class="fa fa-map-marker"></i> "Biz Construct" Headquarters</p>
                        <p><i class="fa fa-phone"></i> (305) 8592 4268</p>
                        <p><i class="fa fa-envelope"></i> office@bizconstruct.com</p>
                        <p><i class="fa fa-fax"></i> (106) 4762 8264</p>
                        <p><i class="fa fa-clock-o"></i> Mon - Sat: 9:00 - 21:00</p>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="the-headline">
                        <h1 style="font-size:20px;">GET IN TOUCH</h1>
                    </div>
                    <div class="textwidget">
                        <div class="done">
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                Your message has been sent. Thank you!
                            </div>
                        </div>
                        <form class="wpcf7-form" method="post" action="main-contact.php" id="pagecontactform">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="mainname" placeholder="Name">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="mainemail" placeholder="E-mail">
                                </div>
                            </div>
                            <br/>
                            <textarea name="maincomment" rows="4" placeholder="Message"></textarea>
                            <br/>
                            <input type="submit" id="submitmaincontact" class="btn" value="Send">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =========================== Contact End =========================== -->

@stop