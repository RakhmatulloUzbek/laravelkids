@extends('layouts.adminbase')

@section('title','Category List')


@section('content')
    <div class="content-wrapper">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h3 class="font-weight-bold">Messages</h3>
        </div>
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Mesajlar listesi</h3>
                </div>
                <div class="card-body">
                    <!-- /.card-header -->
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="m-2">
                            <tr class="table-primary">
                                <th style="width: 25px;">id</th>
                                <th style="width: 25px;">Sender</th>
                                <th style="width: 25px;">Reciver</th>
                                <th>Gonderilen mesaj</th>
                                <th>Cevap verilen mesaj</th>
                                <th style="width: 120px;">Cevap ver</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>{{$rs->sender->name}}</td>
                                    <td>
                                        @if($rs->receiver && $rs->receiver->name)
                                            {{ $rs->receiver->name }}
                                        @else
                                            New
                                        @endif
                                    </td>
                                    <td>{{$rs->giden_message}}</td>
                                    <td>{{$rs->gelen_message}}</td>
                                    <td>
                                        @if($rs->gelen_message)
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled" checked disabled>
                                        @else
                                            <a href="{{route('admin.message.show',['id'=>$rs->id])}}"
                                               class="btn btn-outline-success" data-toggle="tooltip"
                                               title="Cevap ver"><i class="bi bi-pencil-fill"></i></a>
                                        @endif
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
