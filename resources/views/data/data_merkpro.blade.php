@extends('template')
@section('title')
Merk Proyektor
@stop

@section ('content')
<div class="box">
    <div class="box-header">
        <a href="{{ url('Merkpro/add') }}"><button type="button" class="btn bg-green btn-flat margin">Add New</button></a>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Merk Proyektor</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($mpro as $k)
            <tr>
                <td>{{ $k->kd_merk }}</td>
                <td>{{ $k->merk_pro }}</td>
                <td>
                <a href="{{ url('Merkpro/edit'.$k->kd_merk ) }}" ><button class="btn btn-warning btn-flat"><i class="fa fa-pencil" ></i></button></a>
                <a href="{{ url('Merkpro/delete'. $k->kd_merk ) }}" ><button class="btn btn-danger btn-flat"><i class="fa fa-trash" ></i></button></a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop