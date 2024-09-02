@extends('layouts.adminbase')

@section('title','Create Teacher')


@section('content')
    <div class="content-wrapper">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0 pb-4">
            <h3 class="font-weight-bold">Create teacher</h3>
        </div>
        <div class="card-body">
            <form role="form" action="{{route('admin.teachers.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row mb-3">
                        <label for="first_name" class="col-sm-2 col-form-label">First name</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="first_name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="last_name" class="col-sm-2 col-form-label">Last name</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="last_name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="email">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="bio" class="col-sm-2 col-form-label">Biography</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="bio">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-5">
                            <input type="password" class="form-control" name="password">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="image" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control" name="image">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
    <!-- partial -->
@endsection


