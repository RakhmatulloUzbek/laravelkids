@extends('layouts.adminbase')

@section('title','Message Page')
@section('head')
    <style>
        #new1 {
            text-align: center;
            background-color: yellow;
            width: 28px;
            box-shadow: 1px 1px 2px yellow, 0 0 15px yellow, 0 0 15px yellow, 0 0 5px yellow;
        }
        #new2 {
            text-align: center;
            background-color: springgreen;
            width: 28px;
            box-shadow: 1px 1px 2px springgreen, 0 0 15px springgreen, 0 0 15px springgreen, 0 0 5px springgreen;
        }
    </style>
@endsection


@section('content')
    <div class="content-wrapper">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h2 class="font-weight-bold mb-2">Message List</h2>
        </div>
        <div class="col-sm-6">
            <ol class="breadrumb float-sm-right d-flex flex-row" style="list-style-type: none">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}" class="text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active">Message</li>
            </ol>
        </div>
        <div class="card">
            <!-- /.card-header -->
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="m-2">
                    <tr class="table-primary">
                        <th style="width: 25px;">id</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Status</th>
                        <th style="width: 25px">Delete</th>
                        <th style="width: 25px">Show</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $rs)
                    <tr>
                        <td>{{$rs->id}}</td>
                        <td>{{$rs->name}}</td>
                        <td>{{$rs->phone}}</td>
                        <td>{{$rs->email}}</td>
                        <td>{{$rs->subject}}</td>
                        <td>
                            @if($rs->status=='New')<div id="new1">{{$rs->status}}</div>
                            @else<div id="new2">{{$rs->status}}</div>
                            @endif
                        </td>
                        <td><a href="{{route('admin.message.destroy',['id'=>$rs->id])}}" onclick="return confirm('Deleting !! Are you sure ?')" class="btn btn-outline-danger" data-toggle="tooltip" title="Delete"><i class="bi bi-trash3-fill"></i></a></td>
                        <td>
                            <a href="{{route('admin.message.show',['id'=>$rs->id])}}" class="btn btn-outline-primary" onclick="return !window.open(this.href,'','top=50 left=100 width=730 height=900')" data-toggle="tooltip" title="Show"><i class="bi bi-eye-fill"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
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

