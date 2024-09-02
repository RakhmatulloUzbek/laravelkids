@extends('layouts.adminbase')

@section('title','message List')


@section('content')
    <div class="content-wrapper">
        <div class="col-12 col-xl-12 mb-4 mb-xl-0 row">
            <h3 class="font-weight-bold">{{$data->sender->name}}'s Message</h3>
        </div>
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Title</h3>
                </div>
                <div class="card-body">
                    <section class="py-3">
                        <div class="container">
                            <div class="row">
                                <main class="col-lg-8">
                                    <table class="table table-striped">
                                        <tr>
                                            <th>ID</th>
                                            <td>{{$data->id}}</td>
                                        </tr>
                                        <tr>
                                            <th>Sender</th>
                                            <td>{{$data->sender->name}}</td>
                                        </tr>
                                        <tr>
                                            <th>Receiver</th>
                                            <td>
                                                @if($data->receiver && $data->receiver->name)
                                                    {{ $data->receiver->name }}
                                                @else

                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Sended Message</th>
                                            <td>{{$data->giden_message}}</td>
                                        </tr>
                                        <tr>
                                            <th>Received Message</th>
                                            <td>{{$data->gelen_message}}</td>
                                        </tr>
                                        <tr>
                                            <th>Created Date</th>
                                            <td>{{$data->created_at}}</td>
                                        </tr>
                                        <tr>
                                            <th>Updated Date</th>
                                            <td>{{$data->updated_at}}</td>
                                        </tr>
                                    </table>
                                </main>
                            </div>
                            <form role="form" action="{{route('admin.message.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="receivedMessage" class="col-sm-2 col-form-label">Received Message</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" name="receivedMessage" value="{{$data->receivedMessage}}">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </section>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Footer
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
    </div>
    <!-- partial -->
@endsection
