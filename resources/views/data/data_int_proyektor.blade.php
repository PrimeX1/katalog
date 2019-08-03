@extends('template')
@section('title')
Intensitas cahaya Proyektor
@stop

@section ('content')
<div class="box">
    <div class="box-header">
        <a href="{{ url('intPro/add') }}"><button type="button" class="btn bg-green btn-flat margin">Add New</button></a>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Intensitas Cahaya Proyektor</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($int as $i)
            <tr>
                <td>{{ $i->kd_int_pro}}</td>
                <td>{{ $i->nama_int}}</td>
                <td>
                <a href="{{ url('intPro/edit'.$i->kd_int_pro ) }}" ><button class="btn btn-warning btn-flat"><i class="fa fa-pencil" ></i></button></a>
                <a href="{{ url('intPro/delete'. $i->kd_int_pro ) }}" ><button class="btn btn-danger btn-flat"><i class="fa fa-trash" ></i></button></a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop