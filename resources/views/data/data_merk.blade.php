@extends('template')

@section('title')
Merk
@stop

@section('content')
<div class="box">
    <div class="box-header">
        <a href="{{ url('merk/add') }}"><button type="button" class="btn bg-green btn-flat margin">Add New</button></a>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Merk</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($merk as $m)
            <tr>
                <td>{{ $m->id_merk }}</td>
                <td>{{ $m->merk }}</td>
                <td>
                <a href="{{ url('merk/edit',$m['id_merk'] ) }}" ><button class="btn btn-warning btn-flat"><i class="fa fa-pencil" ></i></button></a>
                <a href="{{ url('merk/delete/'. $m->id_merk ) }}" ><button class="btn btn-danger btn-flat"><i class="fa fa-trash" ></i></button></a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop