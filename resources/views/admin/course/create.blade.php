@extends('layouts.adminbase')

@section('title','Create Service')


@section('content')
    <div class="content-wrapper">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0 pb-4">
            <h3 class="font-weight-bold">Create course</h3>
        </div>
        <div class="card-body">
            <form role="form" action="{{route('admin.courses.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row mb-3">
                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="title">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="category" class="col-sm-2 col-form-label">Category</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="category">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="age_group" class="col-sm-2 col-form-label">Age Group</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="age_group">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="duration" class="col-sm-2 col-form-label">Duration</label>
                        <div class="col-sm-5">
                            <input type="number" class="form-control" name="duration">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="description" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="description">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="video_url" class="col-sm-2 col-form-label">Video URL</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="video_url" placeholde="Paste video url">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="image" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control" name="image">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Teacher</label>
                        <div class="col-sm-4">
                            <select class="form-control select2" name="teacher_id" id="">
                                @foreach($data as $rs)
                                    <option value="{{$rs->id}}">
                                        {{$rs->first_name}} {{$rs->last_name}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
    <!-- partial -->
@endsection


