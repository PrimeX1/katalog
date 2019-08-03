@extends('template')

@section('title')
Hardisk
@stop

@section('content')
<div class="box">
    <div class="box-header">
        <a href="{{ url('hardisk/add') }}"><button type="button" class="btn bg-green btn-flat margin">Add New</button></a>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Kapasitas </th>
                <th>Kecepatan </th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($hardisk as $hdd)
            <tr>
                <td>{{ $hdd->kd_hdd}}</td>
                <td>{{ $hdd->storage}}</td>
                <td>{{ $hdd->kecepatan}}</td>
                <td>
                <a href="{{ url('hardisk/edit/'. $hdd->kd_hdd ) }}" ><button class="btn btn-warning btn-flat"><i class="fa fa-pencil" ></i></button></a>
                <a href="{{ url('hardisk/delete/'. $hdd->kd_hdd ) }}" ><button class="btn btn-danger btn-flat"><i class="fa fa-trash" ></i></button></a>
                
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop