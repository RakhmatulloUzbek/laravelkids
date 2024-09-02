@extends('layouts.adminbase')

@section('title','Servise List')

@section('content')
    <div class="content-wrapper">
        <div class="col-12  mb-4 mb-xl-0">
            <h3 class="font-weight-bold">{{$data->title}} hizmet detayı</h3>
        </div>
        <div class="col-sm-6">
            <ol class="breadrumb float-sm-right d-flex flex-row" style="list-style-type: none">
                <li class="breadcrumb-item"><a href="{{route('admin')}}" class="text-decoration-none">Home</a>
                </li>
                <li class="breadcrumb-item active"><a href="{{route('admin.course')}}"
                                                      class="text-decoration-none">Service</a></li>
                <li class="breadcrumb-item active">Show</li>
            </ol>
        </div>
        <section class="py-3">
            <div class="container">
                <div class="row">
                    <aside class="col-lg-4">
                        <div class="gallery-wrap">
                            <div class="img-big-wrap img-thumbnail d-block my-auto">
                                <a href="{{Storage::url($data->image)}}" data-type="image" data-fslightbox="mygallery"
                                   target="_blank">
                                    <img class="img1 img-thumbnail d-block" src="{{Storage::url($data->image)}}" alt="">
                                </a>
                            </div>
                        </div>
                    </aside>
                    <main class="col-lg-8">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tr>
                                    <th>ID</th>
                                    <td>{{$data->id}}</td>
                                </tr>
                                <tr>
                                    <th>Parent</th>
                                    <td>{{$data->category}}</td>
                                </tr>
                                <tr>
                                    <th>Title</th>
                                    <td>{{$data->title}}</td>
                                </tr>
                                <tr>
                                    <th>Keyword</th>
                                    <td>{{$data->keyword}}</td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <td>{{$data->description}}</td>
                                </tr>
                                <tr>
                                    <th>Price</th>
                                    <td>{{$data->price}} $</td>
                                </tr>
                                <tr>
                                    <th>Created Date</th>
                                    <td>{{$data->created_at}}</td>
                                </tr>
                                <tr>
                                    <th>Updated Date</th>
                                    <td>{{$data->updated_at}}</td>
                                </tr>
                            </table>
                        </div>
                    </main>
                </div>
            </div>
        </section>
    </div>
    <!-- partial -->
@endsection
