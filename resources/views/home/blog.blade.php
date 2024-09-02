@extends('layouts.fontbase')

@section('title','Blog')

@section('content')
    <div class="breadcrumb-section">
        <div class="container">
            <h1>Blog</h1>
            <div class="breadcrumb">
                <a href="index.html">Home</a>
                <span class="fa fa-angle-double-right"></span>
                <span class="current">Blog</span>
            </div>
        </div>
    </div>


    <div class="container">

        <section id="primary" class="content-full-width">
            <div class="dt-sc-one-column">
                <article class="blog-entry">
                    <div class="blog-entry-inner">
                        <div class="entry-meta">
                            <a href="blog-detail.html" class="blog-author"><img src="{{asset('assets')}}/images/rounded-bg-img.jpg" alt title></a>
                            <div class="date">
                                <span> 27 </span>
                                <p> Aug <br> 2014 </p>
                            </div>
                            <a href="#" class="comments">
                                12 <span class="fa fa-comment"> </span>
                            </a>
                            <a href="#" class="entry_format"><span class="fa fa-picture-o"></span></a>
                        </div>
                        <div class="entry-thumb">
                            <a href="blog-detail.html"><img src="{{asset('assets')}}/images/blog_img1.jpg" alt title></a>
                        </div>
                        <div class="entry-details">
                            <div class="entry-title">
                                <h3><a href="blog-detail.html"> Activities Improves Mind </a></h3>
                            </div>

                            <div class="entry-body">
                                <p>Roin bibendum nibhsds. Nuncsdsd fermdada msit ametadasd consequat. Praes porr nulla sit amet dui lobortis, id venenatis nibh accums. Proin lobortis tempus odio eget venenatis. Proin fermentum ut massa at bibendum. Proin bibendum non est quis egestas. Pellentesque at enim id enim tempus placerat. Etiam tempus gravida leo, et gravida justo bibendum non. Suspendisse vitae fermentum sapien.</p>
                            </div>
                            <a href="blog-detail.html" class="dt-sc-button small"> Read More <span class="fa fa-chevron-circle-right"> </span></a>
                        </div>
                    </div>
                </article>
            </div>
            <div class="dt-sc-one-column">
                <article class="blog-entry">
                    <div class="blog-entry-inner">
                        <div class="entry-meta">
                            <a href="blog-detail.html" class="blog-author"><img src="{{asset('assets')}}/images/rounded-bg-img.jpg" alt title></a>
                            <div class="date">
                                <span> 27 </span>
                                <p> Aug <br> 2014 </p>
                            </div>
                            <a href="#" class="comments">
                                12 <span class="fa fa-comment"> </span>
                            </a>
                            <a href="#" class="entry_format"><span class="fa fa-picture-o"></span></a>
                        </div>
                        <div class="entry-thumb">
                            <a href="blog-detail.html"><img src="{{asset('assets')}}/images/blog_img2.jpg" alt title></a>
                        </div>
                        <div class="entry-details">
                            <div class="entry-title">
                                <h3><a href="blog-detail.html"> Weekly Reader Zone </a></h3>
                            </div>

                            <div class="entry-body">
                                <p>Roin bibendum nibhsds. Nuncsdsd fermdada msit ametadasd consequat. Praes porr nulla sit amet dui lobortis, id venenatis nibh accums. Proin lobortis tempus odio eget venenatis. Proin fermentum ut massa at bibendum. Proin bibendum non est quis egestas. Pellentesque at enim id enim tempus placerat. Etiam tempus gravida leo, et gravida justo bibendum non. Suspendisse vitae fermentum sapien.</p>
                            </div>
                            <a href="blog-detail.html" class="dt-sc-button small"> Read More <span class="fa fa-chevron-circle-right"> </span></a>
                        </div>
                    </div>
                </article>
            </div>
            <div class="dt-sc-one-column">
                <article class="blog-entry">
                    <div class="blog-entry-inner">
                        <div class="entry-meta">
                            <a href="blog-detail.html" class="blog-author"><img src="{{asset('assets')}}/images/rounded-bg-img.jpg" alt title></a>
                            <div class="date">
                                <span> 27 </span>
                                <p> Aug <br> 2014 </p>
                            </div>
                            <a href="#" class="comments">
                                12 <span class="fa fa-comment"> </span>
                            </a>
                            <a href="#" class="entry_format"><span class="fa fa-picture-o"></span></a>
                        </div>
                        <div class="entry-thumb">
                            <a href="blog-detail.html"><img src="{{asset('assets')}}/images/blog_img3.jpg" alt title></a>
                        </div>
                        <div class="entry-details">
                            <div class="entry-title">
                                <h3><a href="blog-detail.html"> Wonderland Adventures </a></h3>
                            </div>

                            <div class="entry-body">
                                <p>Roin bibendum nibhsds. Nuncsdsd fermdada msit ametadasd consequat. Praes porr nulla sit amet dui lobortis, id venenatis nibh accums. Proin lobortis tempus odio eget venenatis. Proin fermentum ut massa at bibendum. Proin bibendum non est quis egestas. Pellentesque at enim id enim tempus placerat. Etiam tempus gravida leo, et gravida justo bibendum non. Suspendisse vitae fermentum sapien.</p>
                            </div>
                            <a href="blog-detail.html" class="dt-sc-button small"> Read More <span class="fa fa-chevron-circle-right"> </span></a>
                        </div>
                    </div>
                </article>
            </div>
        </section>

    </div>

    </div>
@endsection

@section('foot')

@endsection
