@extends('layouts.fontbase')

@section('title','Portfolio Detail')

@section('content')
    <div class="breadcrumb-section">
        <div class="container">
            <h1>Arts &amp; Craft</h1>
            <div class="breadcrumb">
                <a href="index.html">Home</a>
                <span class="fa fa-angle-double-right"></span>
                <a href="portfolio.html">Portfolio</a>
                <span class="fa fa-angle-double-right"></span>
                <span class="current">Arts &amp; Craft</span>
            </div>
        </div>
    </div>


    <div class="container">

        <section id="primary" class="content-full-width">
            <article class="portfolio-single">
                <div class="dt-sc-two-third column first">
                    <div class="portfolio-slider-container">
                        <ul class="portfolio-slider">
                            <li> <img src="{{asset('assets')}}/images/portfolio_detail1.jpg" alt title> </li>
                            <li> <img src="{{asset('assets')}}/images/portfolio_detail2.jpg" alt title> </li>
                            <li> <img src="{{asset('assets')}}/images/portfolio_detail3.jpg" alt title> </li>
                            <li> <img src="{{asset('assets')}}/images/portfolio_detail4.jpg" alt title> </li>
                        </ul>
                    </div>
                </div>
                <div class="dt-sc-one-third column">
                    <h2>Arts &amp; Craft</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do ex fb aute in esse eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex eafb aute in cd commodo consequat. Duis aute irure dolor in eprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex eafb aute in cd commodo conset. Duis aute irure dolor in eprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute irure dolor in eprehenderit.</p>
                    <div class="project-details">
                        <h3>Class Activities</h3>
                        <p><span class="fa fa-gift"></span> Category: <a href="#"> Class Activities,</a><a href="#"> Fun</a></p>
                        <p><span class="fa fa-location-arrow"></span>Location Info: <a href="#"> Sheridan, </a><a href="#"> Melbourne, </a><a href="#"> Australia</a></p>
                        <p><span class="fa fa-globe"></span>Website: <a href="#"> mywebgallery.com </a></p>
                        <p><span class="fa fa-calendar"></span>Date: 03 Oct 2014</p>
                    </div>
                </div>
            </article>
            <div class="dt-sc-hr"></div>
            <h2 class="dt-sc-hr-green-title">Related Projects</h2>
            <div class="portfolio dt-sc-one-fourth column first">
                <div class="portfolio-thumb">
                    <img class="item-mask" src="{{asset('assets')}}/images/portfolio-mask.png" alt title>
                    <img src="{{asset('assets')}}/images/cartoon1.jpg" alt title>
                    <div class="image-overlay">
                        <a href="portfolio-detail.html" class="link"><span class="fa fa-link"></span></a>
                        <a href="{{asset('assets')}}/images/cartoon1.jpg" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
                    </div>
                </div>
                <div class="portfolio-detail">
                    <div class="portfolio-title">
                        <h5><a href="portfolio-detail.html"> Arts &amp; Craft </a></h5>
                        <p><a href="#">Cool</a>, <a href="#">Fun</a></p>
                    </div>
                </div>
            </div>
            <div class="portfolio dt-sc-one-fourth column">
                <div class="portfolio-thumb">
                    <img class="item-mask" src="{{asset('assets')}}/images/portfolio-mask.png" alt title>
                    <img src="{{asset('assets')}}/images/cartoon2.jpg" alt title>
                    <div class="image-overlay">
                        <a href="portfolio-detail.html" class="link"><span class="fa fa-link"></span></a>
                        <a href="{{asset('assets')}}/images/cartoon2.jpg" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
                    </div>
                </div>
                <div class="portfolio-detail">
                    <div class="portfolio-title">
                        <h5><a href="portfolio-detail.html"> Summer Fun </a></h5>
                        <p><a href="#">Lead</a>, <a href="#">Sustain</a></p>
                    </div>
                </div>
            </div>
            <div class="portfolio dt-sc-one-fourth column">
                <div class="portfolio-thumb">
                    <img class="item-mask" src="{{asset('assets')}}/images/portfolio-mask.png" alt title>
                    <img src="{{asset('assets')}}/images/cartoon3.jpg" alt title>
                    <div class="image-overlay">
                        <a href="portfolio-detail.html" class="link"><span class="fa fa-link"></span></a>
                        <a href="{{asset('assets')}}/images/cartoon3.jpg" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
                    </div>
                </div>
                <div class="portfolio-detail">
                    <div class="portfolio-title">
                        <h5><a href="portfolio-detail.html"> Swim Lesson </a></h5>
                        <p><a href="#">Joy</a>, <a href="#">Enjoy</a></p>
                    </div>
                </div>
            </div>
            <div class="portfolio dt-sc-one-fourth column">
                <div class="portfolio-thumb">
                    <img class="item-mask" src="{{asset('assets')}}/images/portfolio-mask.png" alt title>
                    <img src="{{asset('assets')}}/images/cartoon4.jpg" alt title>
                    <div class="image-overlay">
                        <a href="portfolio-detail.html" class="link"><span class="fa fa-link"></span></a>
                        <a href="{{asset('assets')}}/images/cartoon4.jpg" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
                    </div>
                </div>
                <div class="portfolio-detail">
                    <div class="portfolio-title">
                        <h5><a href="portfolio-detail.html"> Fly with me </a></h5>
                        <p><a href="#">Slick</a>, <a href="#">bless</a></p>
                    </div>
                </div>
            </div>
        </section>

    </div>

    </div>
@endsection

@section('foot')

@endsection
