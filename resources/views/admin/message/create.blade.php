@extends('layouts.adminbase')

@section('title','Create Category')


@section('content')
    <div class="content-wrapper">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0 pb-4">
            <h3 class="font-weight-bold">Create Category</h3>
        </div>
        <form role="form" action="{{route('admin.category.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Parent Category</label>
                <div class="col-sm-5">
                    <select class="form-control select2" name="parent_id" id="">
                        <option value="0" selected="selected">Main catagory</option>
                        @foreach($data as $rs)
                            <option value="{{$rs->id}}">
                                {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="title" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="title" placeholder="Title">
                </div>
            </div>
            <div class="row mb-3">
                <label for="keyword" class="col-sm-2 col-form-label">Keyword</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="keyword" placeholder="Keyword">
                </div>
            </div>
            <div class="row mb-3">
                <label for="description" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="description" placeholder="Description">
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
                    <option></option>
                    <option value="True">True</option>
                    <option value="False">False</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
    <!-- partial -->
@endsection

