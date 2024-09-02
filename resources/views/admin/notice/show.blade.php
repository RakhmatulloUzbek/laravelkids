@extends('layouts.adminbase')

@section('title','Create Category')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h2 class="font-weight-bold my-2">{{$data->title}} duyuru detayı</h2>
        </div>
        <div class="col-sm-6">
            <ol class="breadrumb float-sm-right d-flex flex-row" style="list-style-type: none">
                <li class="breadcrumb-item"><a href="{{route('admin')}}" class="text-decoration-none">Anasayfa</a></li>
                <li class="breadcrumb-item active">Service</li>
            </ol>
        </div>
        <!-- Main content -->
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Title</h3>
            </div>
            <div class="card-body">
                <section class="py-3">
                    <div class="container">
                        <div class="row">
                            <aside class="col-lg-4">
                                <div class="gallery-wrap">
                                    <div class="img-big-wrap img-thumbnail d-block my-auto">
                                        <a href="{{Storage::url($data->image)}}" data-type="image"
                                           data-fslightbox="mygallery" target="_blank">
                                            <img class="img1 img-thumbnail d-block" src="{{Storage::url($data->image)}}"
                                                 alt="">
                                        </a>
                                    </div>
                                </div>
                            </aside>
                            <main class="col-lg-8">
                                <table class="table table-striped">
                                    <tr>
                                        <th>ID</th>
                                        <td>{{$data->id}}</td>
                                    </tr>
                                    <tr>
                                        <th>Title</th>
                                        <td>{{$data->title}}</td>
                                    </tr>
                                    <tr>
                                        <th>Keyword</th>
                                        <td>{{$data->keywords}}</td>
                                    </tr>
                                    <tr>
                                        <th>Description</th>
                                        <td>{{$data->description}}</td>
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
                            </main>
                        </div>
                    </div>
                </section>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->
        <!-- /.content -->
    </div>
    <!-- partial -->
@endsection




