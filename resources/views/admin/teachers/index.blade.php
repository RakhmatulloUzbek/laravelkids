@extends('layouts.adminbase')

@section('title','Admin - Teachers')


@section('content')
    <div class="content-wrapper">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h2 class="font-weight-bold my-2">Teachers</h2>
        </div>
        <div class="col-sm-6">
            <ol class="breadrumb float-sm-right d-flex flex-row" style="list-style-type: none">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}" class="text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active">Teachers</li>
            </ol>
        </div>
        <div class="card">
            <div class="d-grid gap-2 mt-3 mx-3 d-md-flex justify-content-md-end">
                <a href="{{route('admin.teachers.create')}}" class="btn btn-primary mb-1"><i class="bi bi-plus-lg"></i> Add teacher</a>
                <div class="card-tools">
                    <form action="" method="post">
                        @csrf
                        <div class="input-group input-group-md">
                            <input type="text" class="form-control mb-1" placeholder="Search teacher" name="query">
                            <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
                        </div>

                    </form>

                </div>
            </div>

            <!-- /.card-header -->
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr class="table-primary">
                        <th style="width: 20px">id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Biography</th>
                        <th style="width: 80px;">Image</th>
                        <th style="width: 25px">Delete</th>
                        <th style="width: 25px">Show</th>
                    </tr>
                    </thead>
                    @foreach($data as $rs)
                        <tbody>
                        <tr>
                            <td>{{$rs->id}}</td>
                            <td>{{$rs->first_name}}</td>
                            <td>{{$rs->last_name}}</td>
                            <td>{{$rs->email}}</td>
                            <td>{{$rs->bio}}</td>
                            <td style="width: 25px">
                                @if($rs->profile_pic)
                                    <img src="{{Storage::url($rs->profile_pic)}}" class="img1 rounded m-0" style="width: 70px; height: 60px" alt="">
                                @endif
                            </td>
                            <td style="width: 25px"><a href="{{route('admin.teachers.destroy',['id'=>$rs->id])}}" onclick="return confirm('Deleting !! Are you sure ?')" class="btn btn-outline-danger" data-toggle="tooltip" title="Delete"><i class="bi bi-trash3-fill"></i></a></td>
                            <td style="width: 25px"><a href="{{route('admin.teachers.show',['id'=>$rs->id])}}" class="btn btn-outline-info" data-toggle="tooltip" title="Show"><i class="bi bi-eye-fill"></i></a></td>
                        </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                    <li class="page-item"><a class="page-link" href="#">«</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">»</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- partial -->
@endsection

