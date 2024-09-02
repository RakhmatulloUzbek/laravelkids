@extends('layouts.fontbase')

@section('title','Our Staffs')

@section('content')
    <div class="breadcrumb-section">
        <div class="container">
            <h1>Our Staffs</h1>
            <div class="breadcrumb">
                <a href="index.html">Home</a>
                <span class="fa fa-angle-double-right"></span>
                <span class="current">Our Staffs</span>
            </div>
        </div>
    </div>


    <div class="container">

        <section id="primary" class="content-full-width">
            <div class="column dt-sc-one-third first">
                <div class="dt-sc-ico-content type3">
                    <div class="icon">
                        <span class="fa fa-cog"> </span>
                    </div>
                    <h4><a href="#" target="_blank"> Creative Writing </a></h4>
                    <p>Nunc at pretium est curabitur commodo leac est venenatis egestas sed aliquet auguevelit. Curabitur vulputate, ligula lacinia scelerisque</p>
                </div>
            </div>
            <div class="column dt-sc-one-third">
                <div class="dt-sc-ico-content type3">
                    <div class="icon">
                        <span class="fa fa-sun-o"> </span>
                    </div>
                    <h4><a href="#" target="_blank"> Outdoor Play </a></h4>
                    <p>Nunc at pretium est curabitur commodo leac est venenatis egestas sed aliquet auguevelit. Curabitur vulputate, ligula lacinia scelerisque</p>
                </div>
            </div>
            <div class="column dt-sc-one-third">
                <div class="dt-sc-ico-content type3">
                    <div class="icon">
                        <span class="fa fa-smile-o"> </span>
                    </div>
                    <h4><a href="#" target="_blank"> Group Activity </a></h4>
                    <p>Nunc at pretium est curabitur commodo leac est venenatis egestas sed aliquet auguevelit. Curabitur vulputate, ligula lacinia scelerisque</p>
                </div>
            </div>
            <div class="dt-sc-hr"></div>
            <h2 class="dt-sc-hr-green-title"> Activities for Children </h2>
            <div class="column dt-sc-one-fourth first">
                <div class="activity box1">
                    <h4> Creative Writing </h4>
                    <img src="{{asset('assets')}}/images/activity1.jpg" alt title>
                    <p>Vestibulum Ante Ipsum Primis In Faucibus Orci Luctus Et Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu</p>
                </div>
            </div>
            <div class="column dt-sc-one-fourth">
                <div class="activity box2">
                    <h4> Arts &amp; Craft </h4>
                    <img src="{{asset('assets')}}/images/activity2.jpg" alt title>
                    <p>Vestibulum Ante Ipsum Primis In Faucibus Orci Luctus Et Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu</p>
                </div>
            </div>
            <div class="column dt-sc-one-fourth">
                <div class="activity box3">
                    <h4> Music Unplugged </h4>
                    <img src="{{asset('assets')}}/images/activity3.jpg" alt title>
                    <p>Vestibulum Ante Ipsum Primis In Faucibus Orci Luctus Et Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu</p>
                </div>
            </div>
            <div class="column dt-sc-one-fourth">
                <div class="activity box4">
                    <h4> Swimming Hour </h4>
                    <img src="{{asset('assets')}}/images/activity4.jpg" alt title>
                    <p>Vestibulum Ante Ipsum Primis In Faucibus Orci Luctus Et Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu</p>
                </div>
            </div>
            <div class="dt-sc-hr"></div>
            <div class="column dt-sc-one-half first">
                <h2>School Experience</h2>
                <p>Praesent pulvinar massa nec augue malsuada in aliquam odio interdum. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante <a href="#" class="highlighter">malesuada</a> arca Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus. Phasellus lorem augue, vulputate vel orci id, ultricies aliquet risus.</p>
                <ul class="dt-sc-fancy-list thumbs-down">
                    <li>Lorem ipsum dolor sit euismod diam pulvinar massa nec augue</li>
                    <li>Praesent convallis nibh ollicitudin sit amet massa nec augue</li>
                    <li>Nullam ac sapien sit ac malesuada arca in aliquam odio inter</li>
                    <li>Phasellus auctor augue adipiscing lobortis ligula lacinia sceler estas</li>
                </ul>
            </div>

            <div class="column dt-sc-one-half">
                <div class="dt-sc-tabs-container">
                    <ul class="dt-sc-tabs">
                        <li><a href="#" class="current"> Tab 1 </a></li>
                        <li><a href="#"> Tab 2 </a></li>
                        <li><a href="#"> Tab 3 </a></li>
                    </ul>
                    <div class="dt-sc-tabs-content">
                        Tab 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Lorem ipsum dolor sit amet
                        <ul class="dt-sc-fancy-list mustard smile">
                            <li>Lorem ipsum dolor sit</li>
                            <li>Praesent convallis nibh</li>
                            <li>Nullam ac sapien sit</li>
                            <li>Phasellus auctor augue</li>
                        </ul>
                    </div>
                    <div class="dt-sc-tabs-content">
                        Tab 2 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Lorem ipsum dolor sit amet
                        <ul class="dt-sc-fancy-list burnt-orange music">
                            <li>Lorem ipsum dolor sit</li>
                            <li>Praesent convallis nibh</li>
                            <li>Nullam ac sapien sit</li>
                            <li>Phasellus auctor augue</li>
                        </ul>
                    </div>
                    <div class="dt-sc-tabs-content">
                        Tab 3 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Lorem ipsum dolor sit amet
                        <ul class="dt-sc-fancy-list pink star">
                            <li>Lorem ipsum dolor sit</li>
                            <li>Praesent convallis nibh</li>
                            <li>Nullam ac sapien sit</li>
                            <li>Phasellus auctor augue</li>
                        </ul>
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
        </section>

    </div>

    </div>
@endsection

@section('foot')

@endsection
