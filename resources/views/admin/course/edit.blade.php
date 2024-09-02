@extends('layouts.adminbase')

@section('title','Edit Category : '.$data->title)


@section('content')
    <div class="content-wrapper">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0 pb-4">
            <h3 class="font-weight-bold">Edit Category : {{$data->title}}</h3>
        </div>
        <div class="col-sm-6">
            <ol class="breadrumb float-sm-right d-flex flex-row" style="list-style-type: none">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}" class="text-decoration-none">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin.courses')}}" class="text-decoration-none">Courses</a></li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </div>
        <div class="card-body">
            <form role="form" action="{{route('admin.courses.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row mb-3">
                        <label for="first_name" class="col-sm-2 col-form-label">First name</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="first_name" value="{{$data->first_name}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="last_name" class="col-sm-2 col-form-label">Last name</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="last_name" value="{{$data->Last_name}}" >
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="email" value="{{$data->email}}" >
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="bio" class="col-sm-2 col-form-label">Biography</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="bio" value="{{$data->bio}}" >
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="duration" class="col-sm-2 col-form-label">Price</label>
                        <div class="col-sm-5">
                            <input type="number" class="form-control" name="duration" value="{{$data->duration}}" >
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

