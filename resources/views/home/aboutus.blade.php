@extends('layouts.fontbase')

@section('title','About Us')

@section('content')
    <div class="breadcrumb-section">
        <div class="container">
            <h1>About us</h1>
            <div class="breadcrumb">
                <a href="index.html">Home</a>
                <span class="fa fa-angle-double-right"></span>
                <span class="current">About us</span>
            </div>
        </div>
    </div>


    <div class="container">

        <section id="primary" class="content-full-width">
            <div class="column dt-sc-one-half first">
                <div class="about-slider-wrapper">
                    <ul class="about-slider">
                        <li> <img src="{{asset('assets')}}/images/activity1.jpg" alt title> </li>
                        <li> <img src="{{asset('assets')}}/images/activity2.jpg" alt title> </li>
                        <li> <img src="{{asset('assets')}}/images/activity3.jpg" alt title> </li>
                    </ul>
                </div>
            </div>

            <div class="column dt-sc-one-half">
                <h2>Our Leisure Time</h2>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. Lorem Ipsum available, but the majority have suffered alteration in some form. Vivamus adipiscing lobortis sagittis. Nullam tempus mauris dolor, ac malesuada arcu. Praesent dolor quam, tincidunt in sollicitudin sit amet, volutpat sed velit. Nullam non neque ipsum. Nullam tempus mauris dolor, ac malesuada arcu. Praesent dolor quam, tincidunt in sollicitudin sit amet, volutpat sed velit. Nullam non neque ipsum.</p>
                <a href="#" class="dt-sc-button small read-more"> Read More <span class="fa fa-chevron-circle-right"> </span></a>
            </div>

            <div class="dt-sc-hr"></div>

            <div class="dt-sc-one-half column first">
                <h2>Meet Our Founder</h2>
                <div class="author-details">
                    <div class="author-thumb">
                        <img class="item-mask" src="{{asset('assets')}}/images/author-hexa-bg.png" alt title>
                        <img src="{{asset('assets')}}/images/founder.jpg" alt title>
                    </div>
                    <div class="author-description">
                        <h5><a href>James Bond</a></h5>
                        <span class="author-role">Music Trainer, Specialist in <a href="#">Classical Music</a></span>
                        <a href="#" class="students-count"><span class="fa fa-user"></span> 25 STUDENTS</a>
                        <div class="rating-review">
                            <span class="author-rating rating-4"></span> <a href="#">2 reviews</a>
                        </div>
                        <p>Phasellus lorem augue, vulputate vel orci id, ultricies aliquet risus. Sed cursus ipsum vitae justo scelerisque, ac viverra tellus eleifend. Etiam interdum justo nunc, ac volutpat erat elementum id. Fusce dapibus mauris ac dictum porta. Sed pretium luctus elementum. In sollicitudin felis semper purus imperdiet lobortis. In odio tellus, rhoncus eget dolor in, </p>
                    </div>
                </div>
            </div>


            <div class="dt-sc-one-half column">
                <h2>Some Words from Parents</h2>
                <div class="dt-sc-testimonial-carousel-wrapper">
                    <ul class="dt-sc-testimonial-carousel">
                        <li>
                            <div class="dt-sc-testimonial">
                                <blockquote><q>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehiculaest, in consequat. Donec hendrerit vehicula est, in consequat. Donec hendrerit vehicula est, in consequat.</q></blockquote>
                                <div class="author">
                                    <img src="{{asset('assets')}}/images/parent.jpg" alt title>
                                </div>
                                <div class="author-meta">
                                    <p> Rooney </p>
                                    <span>CEO &amp; Founder - Dhoom Inc</span>
                                    <span class="author-rating rating-4"></span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="dt-sc-testimonial">
                                <blockquote><q>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehiculaest, in consequat. Donec hendrerit vehicula est, in consequat. Donec hendrerit vehicula est, in consequat.</q></blockquote>
                                <div class="author">
                                    <img src="{{asset('assets')}}/images/parent.jpg" alt title>
                                </div>
                                <div class="author-meta">
                                    <p> Rooney </p>
                                    <span>CEO &amp; Founder - Dhoom Inc</span>
                                    <span class="author-rating rating-4"></span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="dt-sc-testimonial">
                                <blockquote><q>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehiculaest, in consequat. Donec hendrerit vehicula est, in consequat. Donec hendrerit vehicula est, in consequat.</q></blockquote>
                                <div class="author">
                                    <img src="{{asset('assets')}}/images/parent.jpg" alt title>
                                </div>
                                <div class="author-meta">
                                    <p> Rooney </p>
                                    <span>CEO &amp; Founder - Dhoom Inc</span>
                                    <span class="author-rating rating-4"></span>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="carousel-arrows">
                        <a href="#" class="testimonial-prev"><span class="fa fa-angle-left"></span></a>
                        <a href="#" class="testimonial-next"><span class="fa fa-angle-right"></span></a>
                    </div>
                </div>
            </div>

            <div class="dt-sc-hr"></div>
            <h2 class="dt-sc-hr-green-title">Our Teachers</h2>
            <div class="column dt-sc-one-fourth first">
                <div class="dt-sc-team">
                    <div class="image">
                        <img class="item-mask" src="{{asset('assets')}}/images/mask.png" alt title>
                        <img src="{{asset('assets')}}/images/team1.jpg" alt title>
                        <div class="dt-sc-image-overlay">
                            <a href="#" class="link"><span class="fa fa-facebook"></span></a>
                            <a href="#" class="zoom"><span class="fa fa-twitter"></span></a>
                        </div>
                    </div>
                    <div class="team-details">
                        <h4> Jack Daniels </h4>
                        <h6> Senior Supervisor </h6>
                        <p> Phasellus lorem augue, vulputate vel orci id, ultricies aliquet risus. </p>
                    </div>
                </div>
            </div>
            <div class="column dt-sc-one-fourth">
                <div class="dt-sc-team">
                    <div class="image">
                        <img class="item-mask" src="{{asset('assets')}}/images/mask.png" alt title>
                        <img src="{{asset('assets')}}/images/team2.jpg" alt title>
                        <div class="dt-sc-image-overlay">
                            <a href="#" class="link"><span class="fa fa-facebook"></span></a>
                            <a href="#" class="zoom"><span class="fa fa-twitter"></span></a>
                        </div>
                    </div>
                    <div class="team-details">
                        <h4> Linda Glendell </h4>
                        <h6> Teaching Professor </h6>
                        <p> Phasellus lorem augue, vulputate vel orci id, ultricies aliquet risus. </p>
                    </div>
                </div>
            </div>
            <div class="column dt-sc-one-fourth">
                <div class="dt-sc-team">
                    <div class="image">
                        <img class="item-mask" src="{{asset('assets')}}/images/mask.png" alt title>
                        <img src="{{asset('assets')}}/images/team3.jpg" alt title>
                        <div class="dt-sc-image-overlay">
                            <a href="#" class="link"><span class="fa fa-facebook"></span></a>
                            <a href="#" class="zoom"><span class="fa fa-twitter"></span></a>
                        </div>
                    </div>
                    <div class="team-details">
                        <h4> Kate Dennings </h4>
                        <h6> Children Diet </h6>
                        <p> Phasellus lorem augue, vulputate vel orci id, ultricies aliquet risus. </p>
                    </div>
                </div>
            </div>
            <div class="column dt-sc-one-fourth">
                <div class="dt-sc-team">
                    <div class="image">
                        <img class="item-mask" src="{{asset('assets')}}/images/mask.png" alt title>
                        <img src="{{asset('assets')}}/images/team4.jpg" alt title>
                        <div class="dt-sc-image-overlay">
                            <a href="#" class="link"><span class="fa fa-facebook"></span></a>
                            <a href="#" class="zoom"><span class="fa fa-twitter"></span></a>
                        </div>
                    </div>
                    <div class="team-details">
                        <h4> Kristof Slinghot </h4>
                        <h6> Management </h6>
                        <p> Phasellus lorem augue, vulputate vel orci id, ultricies aliquet risus. </p>
                    </div>
                </div>
            </div>
            <div class="dt-sc-hr"></div>
            <h2>Our Sponsors</h2>
            <div class="dt-sc-sponsor-carousel-wrapper">
                <ul class="dt-sc-sponsor-carousel">
                    <li> <a href title> <img src="{{asset('assets')}}/images/client-logo1.png" alt title> </a> </li>
                    <li> <a href title> <img src="{{asset('assets')}}/images/client-logo2.png" alt title> </a> </li>
                    <li> <a href title> <img src="{{asset('assets')}}/images/client-logo3.png" alt title> </a> </li>
                    <li> <a href title> <img src="{{asset('assets')}}/images/client-logo4.png" alt title> </a> </li>
                    <li> <a href title> <img src="{{asset('assets')}}/images/client-logo1.png" alt title> </a> </li>
                    <li> <a href title> <img src="{{asset('assets')}}/images/client-logo2.png" alt title> </a> </li>
                </ul>
                <div class="carousel-arrows">
                    <a class="sponsor-prev" href> </a>
                    <a class="sponsor-next" href> </a>
                </div>
            </div>
        </section>

    </div>

    </div>
@endsection
