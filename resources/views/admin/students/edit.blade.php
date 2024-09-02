@extends('layouts.adminbase')

@section('title','Edit Category : '.$data->title)


@section('content')
    <div class="content-wrapper">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0 pb-4">
            <h3 class="font-weight-bold">Edit Category : {{$data->title}}</h3>
        </div>
        <div class="col-sm-6">
            <ol class="breadrumb float-sm-right d-flex flex-row" style="list-style-type: none">
                <li class="breadcrumb-item"><a href="{{route('admin')}}" class="text-decoration-none">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin.course')}}" class="text-decoration-none">Kullanıcılar</a></li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </div>
        <div class="card-body">
            <form role="form" action="{{route('admin.course.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row mb-3">
                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="title" value="{{$data->title}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="category" class="col-sm-2 col-form-label">Category</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="category" value="{{$data->category}}" >
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="keyword" class="col-sm-2 col-form-label">Keyword</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="keyword" value="{{$data->keyword}}" >
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="description" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="description" value="{{$data->description}}" >
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="price" class="col-sm-2 col-form-label">Price</label>
                        <div class="col-sm-5">
                            <input type="number" class="form-control" name="price" value="{{$data->price}}" >
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="image" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control" name="image">
                            @if($data->image)
                                <img class="img-thumbnail" src="{{Storage::url($data->image)}}" alt="">
                            @endif
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
    <!-- partial -->
@endsection

