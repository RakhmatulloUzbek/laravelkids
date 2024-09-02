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
                <li class="breadcrumb-item"><a href="{{route('admin.users')}}" class="text-decoration-none">Kullanıcılar</a></li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </div>
        <div class="card-body">
            <form role="form" action="{{route('admin.users.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Kullanıcı rolu</label>
                        <div class="col-sm-5">
                            <select class="form-control select2" name="role" id="">
                                <option value="{{$data->role}}" selected="selected">{{$data->role}}</option>
                                <option value="{{$data->role == 'admin' ? 'user': 'admin'}}">
                                    @if($data->role == 'admin')
                                        user
                                    @else
                                        admin
                                    @endif
                                </option>

                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="name" value="{{$data->name}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="email" class="col-sm-2 col-form-label">E-posta</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="email" value="{{$data->email}}" >
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

