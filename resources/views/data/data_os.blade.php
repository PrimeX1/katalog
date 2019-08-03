@extends('template')

@section('title')
Merk
@stop

@section('content')
<div class="box">
    <div class="box-header">
        <a href="{{ url('os/add') }}"><button type="button" class="btn bg-green btn-flat margin">Add New</button></a>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Operating System</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($os as $os)
            <tr>
                <td>{{ $os->kd_os }}</td>
                <td>{{ $os->nama_os }}</td>
                <td>
                <a href="{{ url('os/edit/'. $os->kd_os ) }}" ><button class="btn btn-warning btn-flat"><i class="fa fa-pencil" ></i></button></a>
                <a href="{{ url('os/delete', $os['kd_os'] ) }}" ><button class="btn btn-danger btn-flat"><i class="fa fa-trash" ></i></button></a>
               
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop