@extends('layouts.fontbase')

@section('title','About Us')

@section('content')
    <div class="breadcrumb-section">
        <div class="container">
            <h1>Contact</h1>
            <div class="breadcrumb">
                <a href="index.html">Home</a>
                <span class="fa fa-angle-double-right"></span>
                <span class="current">Contact</span>
            </div>
        </div>
    </div>


    <div class="container">

        <section id="primary" class="content-full-width">
            <div id="map"> </div>
            <div class="dt-sc-hr"> </div>

            <div class="column dt-sc-three-fourth first contact_form_outer">
                <form name="frcontact" class="contact-form" method="post" action="https://wedesignthemes.com/html/kidslife/php/contactmail.php">
                    <h2>We'd Like to Hear From You!</h2>
                    <p class="column dt-sc-one-third first">
                        <input id="name" name="txtname" type="text" placeholder="Name" required>
                    </p>
                    <p class="column dt-sc-one-third">
                        <input id="email" name="txtemail" type="email" placeholder="Email ID" required>
                    </p>
                    <p class="column dt-sc-one-third">
                        <input id="subject" name="txtsubject" type="text" placeholder="Subject" required>
                    </p>
                    <p>
                        <textarea id="comment" name="txtmessage" placeholder="Message"></textarea>
                    </p>
                    <div id="ajax_contact_msg"> </div>
                    <p>
                        <input name="submit" type="submit" id="submit" class="dt-sc-button medium" value="Send Email">
                    </p>
                </form>
            </div>


            <div class="column dt-sc-one-fourth class_hours">
                <h2>Class Hours</h2>
                <ul class="class_hours">
                    <li>Monday<span>9am - 3pm</span></li>
                    <li>Tuesday<span>9am - 3pm</span></li>
                    <li>Wednesday<span>9am - 3pm</span></li>
                    <li>Thursday<span>9am - 3pm</span></li>
                    <li>Friday<span>9am - 3pm</span></li>
                    <li>Saturday<span>Holiday</span></li>
                    <li>Sunday<span>Holiday</span></li>
                </ul>
                <div class="dt-sc-hr-small"></div>
                <p><strong><span class="highlighter">We care</span> about your dearest</strong></p>
                <ul class="dt-sc-social-icons">
                    <li class="facebook"><a href="#" title="Facebook" class="dt-sc-tooltip-bottom"><img src="{{asset('assets')}}/images/facebook.png" alt title></a></li>
                    <li class="twitter"><a href="#" title="Twitter" class="dt-sc-tooltip-bottom"><img src="{{asset('assets')}}/images/twitter.png" alt title></a></li>
                    <li class="gplus"><a href="#" title="Google Plus" class="dt-sc-tooltip-bottom"><img src="{{asset('assets')}}/images/gplus.png" alt title></a></li>
                    <li class="pinterest"><a href="#" title="Pinterest" class="dt-sc-tooltip-bottom"><img src="{{asset('assets')}}/images/pinterest.png" alt title></a></li>
                </ul>
            </div>

        </section>

    </div>

    </div>
@endsection

@section('foot')
    <script type="text/javascript" src="{{asset('assets')}}/js/jquery.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/js/jquery.tabs.min.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/js/jquery-easing-1.3.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/js/jquery.sticky.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/js/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/js/jquery.inview.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/js/shortcodes.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/js/validation.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/js/jquery.tipTip.minified.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/js/twitter/jquery.tweet.min.js"></script>
    <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="{{asset('assets')}}/js/jquery.gmap.min.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/js/shortcodes.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/js/custom.js"></script>
@endsection
