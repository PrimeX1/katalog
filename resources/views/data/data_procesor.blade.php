@extends('template')

@section('title')
Procesor
@stop

@section('content')
<div class="box">
    <div class="box-header">
        <a href="{{ url('procesor/add') }}"><button type="button" class="btn bg-green btn-flat margin">Add New</button></a>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Processor</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($procesor as $pro)
            <tr>
                <td>{{ $pro->nama_procesor }}</td>
                <td>
                <a href="{{ url('procesor/edit',$pro['kd_procesor']) }}" ><button class="btn btn-warning btn-flat"><i class="fa fa-pencil" ></i></button></a>
                <a href="{{ url('procesor/delete', $pro['kd_procesor'] ) }}" ><button class="btn btn-danger btn-flat"><i class="fa fa-trash" ></i></button></a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop