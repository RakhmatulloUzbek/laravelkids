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
                <li class="breadcrumb-item"><a href="/admin/category" class="text-decoration-none">Category</a></li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </div>
        <form role="form" action="{{route('admin.category.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
            @csrf
           <div class="card-body">
               <div class="row mb-3">
                   <label class="col-sm-2 col-form-label">Parent</label>
                   <div class="col-sm-5">
                       <select class="form-control" name="parent_id">
                           <option value="0" selected="selected">Main catagory</option>
                           @foreach($datalist as $rs)
                               <option value="{{$rs->id}}" @if($rs->id == $data->parent_id) selected="selected" @endif>
                                   {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}
                               </option>
                           @endforeach
                       </select>
                   </div>
               </div>
            <div class="row mb-3">
                <label for="title" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="title" value="{{$data->title}}">
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
                    <input type="text" class="form-control" name="description" value="{{$data->description}}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="image" class="col-sm-2 col-form-label">Image</label>
                <div class="col-sm-5">
                    <input type="file" class="form-control" name="image">
                </div>
            </div>
            <div class="row mb-3">
                <label for="status" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-5">
                    <select class="form-select" name="status" aria-label="Default select example">
                        <option selected>{{$data->status}}</option>
                        <option value="True">True</option>
                        <option value="False">False</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
           </div>
        </form>
    </div>
    <!-- partial -->
@endsection

