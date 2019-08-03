@extends('template')
@section('title')
Tipe Proyektor
@stop

@section ('content')
<div class="box">
    <div class="box-header">
        <a href="{{ url('Tipepro/add') }}"><button type="button" class="btn bg-green btn-flat margin">Add New</button></a>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Tipe Proyektor</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tpro as $t)
            <tr>
                <td>{{ $t->kd_tipe_pro }}</td>
                <td>{{ $t->tipe_pro }}</td>
                <td>
                <a href="{{ url('Tipepro/edit'.$t->kd_tipe_pro ) }}" ><button class="btn btn-warning btn-flat"><i class="fa fa-pencil" ></i></button></a>
                <a href="{{ url('Tipepro/delete'. $t->kd_tipe_pro) }}" ><button class="btn btn-danger btn-flat"><i class="fa fa-trash" ></i></button></a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop