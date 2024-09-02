@extends('layouts.adminwindow')

@section('title','User Deail')


@section('content')
    <div class="content-wrapper">
        <div class="col-12 col-xl-12 mb-4 mb-xl-0 row">
            <h3 class="font-weight-bold">Detail of {{$data->name}}</h3>
        </div>
        <div class="col-12 col-xl-12 mb-4 mb-xl-0 row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th>ID</th>
                            <td>{{$data->id}}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{$data->name}}</td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>{{$data->phone}}</td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>{{$data->address}}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{$data->name}}</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>{{$data->status}}</td>
                        </tr>
                        <tr>
                            <th>Role</th>
                            <td>
                                @foreach($data->roles as $role)
                                    / {{$role->name}}
                                    <a href="{{route('admin.users.destroyrole',['uid'=>$data->id,'rid'=>$role->id])}}"
                                       onclick="return confirm('Deleting !! Are you sure ?')"
                                       data-toggle="tooltip" title="Delete" style="size: 5px">[<i
                                            class="bi bi-trash3-fill"></i>]</a>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>Created Date</th>
                            <td>{{$data->created_at}}</td>
                        </tr>
                        <tr>
                            <th>Updated Date</th>
                            <td>{{$data->updated_at}}</td>
                        </tr>
                        <tr>
                            <form role="form" action="{{route('admin.users.addrole',['id'=>$data->id])}}"
                                  method="post">
                                @csrf

                                <th>Add Admin Role</th>
                                <td>
                                    <select name="role_id">
                                        @foreach($roles as $role)
                                            <option value="{{$role->id}}">{{$role->name}}</option>
                                        @endforeach
                                    </select>
                                    <div class="row nb-2  ml-2 mt-4 responsive">
                                        <div class="col-sm-2 m-2">
                                            <button type="submit" class="btn btn-primary">Add Role</button>
                                        </div>
                                    </div>
                                </td>
                            </form>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- partial -->
@endsection
