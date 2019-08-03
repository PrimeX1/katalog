@extends('template')
@section('title')
Kategori Proyektor
@stop

@section ('content')
<div class="box">
    <div class="box-header">
        <a href="{{ url('ktgpro/add') }}"><button type="button" class="btn bg-green btn-flat margin">Add New</button></a>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Kategori Proyektor</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($ktg as $k)
            <tr>
                <td>{{ $k->kd_ktg_proyek }}</td>
                <td>{{ $k->ktg_proyektor }}</td>
                <td>
                <a href="{{ url('ktgpro/edit'.$k->kd_ktg_proyek ) }}" ><button class="btn btn-warning btn-flat"><i class="fa fa-pencil" ></i></button></a>
                <a href="{{ url('ktgpro/delete'. $k->kd_ktg_proyek ) }}" ><button class="btn btn-danger btn-flat"><i class="fa fa-trash" ></i></button></a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop