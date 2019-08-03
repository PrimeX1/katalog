@extends('template')

@section('title')
Ram
@stop

@section('content')
<div class="box">
    <div class="box-header">
        <a href="{{ url('vga/add') }}"><button type="button" class="btn bg-green btn-flat margin">Add New</button></a>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>VGA</th>
                <th>VRAM</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($vga as $v)
            <tr>
                <td>{{ $v->nama_vga }}</td>
                <td>{{ $v->vram }}</td>
                <td>
                <a href="{{ url('vga/edit',$v['kd_vga'] ) }}" ><button class="btn btn-warning btn-flat"><i class="fa fa-pencil" ></i></button></a>
                <a href="{{ url('vga/delete',$v['kd_vga'] ) }}" ><button class="btn btn-danger btn-flat"><i class="fa fa-trash" ></i></button></a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop