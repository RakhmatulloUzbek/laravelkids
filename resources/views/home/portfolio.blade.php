@extends('layouts.fontbase')

@section('title','Portfolio')

@section('content')
    <div class="breadcrumb-section">
        <div class="container">
            <h1>Portfolio</h1>
            <div class="breadcrumb">
                <a href="index.html">Home</a>
                <span class="fa fa-angle-double-right"></span>
                <span class="current">Portfolio</span>
            </div>
        </div>
    </div>


    <div class="container">

        <section id="primary" class="content-full-width">
            <div class="dt-sc-sorting-container">
                <a href="#" title class="active-sort" data-filter="*"> All (12) </a>
                <a href="#" title data-filter=".arts"> Arts (1) </a>
                <a href="#" title data-filter=".innovation"> Innovation (3) </a>
                <a href="#" title data-filter=".fun"> Fun (4) </a>
                <a href="#" title data-filter=".listen"> Listen (5) </a>
                <a href="#" title data-filter=".music"> Music (6) </a>
            </div>

            <div class="dt-sc-portfolio-container">
                <div class="portfolio dt-sc-one-fourth column first music">
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
                <div class="portfolio dt-sc-one-fourth column all music">
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
                <div class="portfolio dt-sc-one-fourth column all arts fun listen">
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
                <div class="portfolio dt-sc-one-fourth column all music">
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
                <div class="portfolio dt-sc-one-fourth column first all fun music listen">
                    <div class="portfolio-thumb">
                        <img class="item-mask" src="{{asset('assets')}}/images/portfolio-mask.png" alt title>
                        <img src="{{asset('assets')}}/images/cartoon5.jpg" alt title>
                        <div class="image-overlay">
                            <a href="portfolio-detail.html" class="link"><span class="fa fa-link"></span></a>
                            <a href="{{asset('assets')}}/images/cartoon5.jpg" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
                        </div>
                    </div>
                    <div class="portfolio-detail">
                        <div class="portfolio-title">
                            <h5><a href="portfolio-detail.html"> Active Learning </a></h5>
                            <p><a href="#">Learn</a>, <a href="#">Lead</a></p>
                        </div>
                    </div>
                </div>
                <div class="portfolio dt-sc-one-fourth column all innovation listen">
                    <div class="portfolio-thumb">
                        <img class="item-mask" src="{{asset('assets')}}/images/portfolio-mask.png" alt title>
                        <img src="{{asset('assets')}}/images/cartoon6.jpg" alt title>
                        <div class="image-overlay">
                            <a href="portfolio-detail.html" class="link"><span class="fa fa-link"></span></a>
                            <a href="{{asset('assets')}}/images/cartoon6.jpg" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
                        </div>
                    </div>
                    <div class="portfolio-detail">
                        <div class="portfolio-title">
                            <h5><a href="portfolio-detail.html"> Our Approach </a></h5>
                            <p><a href="#">Blow</a>, <a href="#">Relax</a></p>
                        </div>
                    </div>
                </div>
                <div class="portfolio dt-sc-one-fourth column all listen">
                    <div class="portfolio-thumb">
                        <img class="item-mask" src="{{asset('assets')}}/images/portfolio-mask.png" alt title>
                        <img src="{{asset('assets')}}/images/cartoon7.jpg" alt title>
                        <div class="image-overlay">
                            <a href="portfolio-detail.html" class="link"><span class="fa fa-link"></span></a>
                            <a href="{{asset('assets')}}/images/cartoon7.jpg" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
                        </div>
                    </div>
                    <div class="portfolio-detail">
                        <div class="portfolio-title">
                            <h5><a href="portfolio-detail.html"> Our School </a></h5>
                            <p><a href="#">Fun</a>, <a href="#">Enjoy</a></p>
                        </div>
                    </div>
                </div>
                <div class="portfolio dt-sc-one-fourth column all fun">
                    <div class="portfolio-thumb">
                        <img class="item-mask" src="{{asset('assets')}}/images/portfolio-mask.png" alt title>
                        <img src="{{asset('assets')}}/images/cartoon8.jpg" alt title>
                        <div class="image-overlay">
                            <a href="portfolio-detail.html" class="link"><span class="fa fa-link"></span></a>
                            <a href="{{asset('assets')}}/images/cartoon8.jpg" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
                        </div>
                    </div>
                    <div class="portfolio-detail">
                        <div class="portfolio-title">
                            <h5><a href="portfolio-detail.html"> Karate Kid </a></h5>
                            <p><a href="#">Slick</a>, <a href="#">bless</a></p>
                        </div>
                    </div>
                </div>
                <div class="portfolio dt-sc-one-fourth column first all innovation music listen">
                    <div class="portfolio-thumb">
                        <img class="item-mask" src="{{asset('assets')}}/images/portfolio-mask.png" alt title>
                        <img src="{{asset('assets')}}/images/cartoon9.jpg" alt title>
                        <div class="image-overlay">
                            <a href="portfolio-detail.html" class="link"><span class="fa fa-link"></span></a>
                            <a href="{{asset('assets')}}/images/cartoon9.jpg" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
                        </div>
                    </div>
                    <div class="portfolio-detail">
                        <div class="portfolio-title">
                            <h5><a href="portfolio-detail.html"> Play Time </a></h5>
                            <p><a href="#">Learn</a>, <a href="#">Lead</a></p>
                        </div>
                    </div>
                </div>
                <div class="portfolio dt-sc-one-fourth column all">
                    <div class="portfolio-thumb">
                        <img class="item-mask" src="{{asset('assets')}}/images/portfolio-mask.png" alt title>
                        <img src="{{asset('assets')}}/images/cartoon10.jpg" alt title>
                        <div class="image-overlay">
                            <a href="portfolio-detail.html" class="link"><span class="fa fa-link"></span></a>
                            <a href="{{asset('assets')}}/images/cartoon10.jpg" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
                        </div>
                    </div>
                    <div class="portfolio-detail">
                        <div class="portfolio-title">
                            <h5><a href="portfolio-detail.html"> Your Innovations </a></h5>
                            <p><a href="#">Slick</a>, <a href="#">bless</a></p>
                        </div>
                    </div>
                </div>
                <div class="portfolio dt-sc-one-fourth column all innovation">
                    <div class="portfolio-thumb">
                        <img class="item-mask" src="{{asset('assets')}}/images/portfolio-mask.png" alt title>
                        <img src="{{asset('assets')}}/images/cartoon11.jpg" alt title>
                        <div class="image-overlay">
                            <a href="portfolio-detail.html" class="link"><span class="fa fa-link"></span></a>
                            <a href="{{asset('assets')}}/images/cartoon11.jpg" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
                        </div>
                    </div>
                    <div class="portfolio-detail">
                        <div class="portfolio-title">
                            <h5><a href="portfolio-detail.html"> Music Hour </a></h5>
                            <p><a href="#">Learn</a>, <a href="#">Lead</a></p>
                        </div>
                    </div>
                </div>
                <div class="portfolio dt-sc-one-fourth column all fun music">
                    <div class="portfolio-thumb">
                        <img class="item-mask" src="{{asset('assets')}}/images/portfolio-mask.png" alt title>
                        <img src="{{asset('assets')}}/images/cartoon12.jpg" alt title>
                        <div class="image-overlay">
                            <a href="portfolio-detail.html" class="link"><span class="fa fa-link"></span></a>
                            <a href="{{asset('assets')}}/images/cartoon12.jpg" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
                        </div>
                    </div>
                    <div class="portfolio-detail">
                        <div class="portfolio-title">
                            <h5><a href="portfolio-detail.html"> Get Ready for Adventure </a></h5>
                            <p><a href="#">Fun</a>, <a href="#">Enjoy</a></p>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </div>

    </div>
@endsection

@section('foot')

@endsection
