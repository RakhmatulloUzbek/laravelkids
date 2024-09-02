@extends('layouts.adminbase')

@section('title','User Page')
@section('head')

@endsection


@section('content')
    <div class="content-wrapper">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h2 class="font-weight-bold mb-2">User List</h2>
        </div>
        <div class="col-sm-6">
            <ol class="breadrumb float-sm-right d-flex flex-row" style="list-style-type: none">
                <li class="breadcrumb-item"><a href="{{route('admin')}}" class="text-decoration-none">Home</a>
                </li>
                <li class="breadcrumb-item active">User</li>
            </ol>
        </div>
        <div class="d-grid gap-2 mt-3 mx-3 d-md-flex justify-content-md-end">
            <a href="{{route('admin.users.create')}}" class="btn btn-primary mb-1"><i class="mdi mdi-account-plus"></i>  Add User</a>
        </div>
        <div class="card">

            <div class="row flex-grow">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card card-rounded">
                        <div class="card-body">
                            <div class="d-sm-flex justify-content-between align-items-start">
                                <div>
                                    <h4 class="card-title card-title-dash">Kullanıcı listesi</h4>

                                </div>
                            </div>
                            <div class="table-responsive  mt-1">
                                <table class="table select-table">
                                    <thead>
                                    <tr>
                                        <th style="width: 25px;">Id</th>
                                        <th>User</th>
                                        <th>Mail</th>
                                        <th>Progress</th>
                                        <th>Role</th>
                                        <th style="width: 50px;">Edit</th>
                                        <th style="width: 50px;">Delete</th>
                                        <th style="width: 50px;">Show</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $rs)
                                        <tr>
                                            <td>
                                                <h6>{{$rs->id}}</h6>
                                            </td>
                                            <td>
                                                <div class="d-flex ">
                                                    <img src="{{Storage::url($rs->profile_photo_path)}}"
                                                         alt="">
                                                    <div>
                                                        <h5>{{$rs->name}}</h5>
                                                        <p>{{$rs->role}}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h6>{{$rs->email}}</h6>
                                            </td>
                                            <td>
                                                <div>
                                                    <div
                                                        class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                        <p class="text-success">79%</p>
                                                        <p>85/162</p>
                                                    </div>
                                                    <div class="progress progress-md">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                             style="width: 85%" aria-valuenow="25" aria-valuemin="0"
                                                             aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="badge badge-opacity-warning">{{$rs->role}}</div>
                                            </td>
                                            <td><a href="{{route('admin.users.edit',['id'=>$rs->id])}}"
                                                   class="btn btn-outline-success"
                                                   data-toggle="tooltip" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                                            </td>
                                            <td><a href="{{route('admin.users.destroy',['id'=>$rs->id])}}"
                                                   onclick="return confirm('Deleting !! Are you sure ?')"
                                                   class="btn btn-outline-danger"
                                                   data-toggle="tooltip" title="Delete"><i
                                                        class="bi bi-trash3-fill"></i></a></td>
                                            <td><a href="{{route('admin.users.show',['id'=>$rs->id])}}"
                                                   class="btn btn-outline-primary"
                                                   data-toggle="tooltip" title="Show"><i class="bi bi-eye-fill"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- partial -->
@endsection

