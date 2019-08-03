@extends('template')
@section('title')
Jenis Proyektor
@stop

@section ('content')
<div class="box">
    <div class="box-header">
        <a href="{{ url('Jpro/add') }}"><button type="button" class="btn bg-green btn-flat margin">Add New</button></a>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Jenis Proyektor</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($jpro as $j)
            <tr>
                <td>{{ $j->kd_jenis_pro}}</td>
                <td>{{ $j->jenis_pro}}</td>
                <td>
                <a href="{{ url('Jpro/edit'.$j->kd_jenis_pro ) }}" ><button class="btn btn-warning btn-flat"><i class="fa fa-pencil" ></i></button></a>
                <a href="{{ url('Jpro/delete'. $j->kd_jenis_pro ) }}" ><button class="btn btn-danger btn-flat"><i class="fa fa-trash" ></i></button></a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop