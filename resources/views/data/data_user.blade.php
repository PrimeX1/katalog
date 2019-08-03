@extends('template')

@section('title')
Data User
@stop

@section('ac-user')
active
@stop

@section('content')

<div class="box">
    <div class="box-header">
    <a href="{{ url('user/add') }}"><button type="button" class="btn bg-green btn-flat margin">Add New</button></a>
    </div>
    <div class="box-body">
        <table id="data" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>No Pelanggan</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Email</th>
                    <th>level</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Menampilkan Data Anggota -->
                @foreach($user as $rsUser)
                <tr>
                    @if($rsUser->level != 1)
                    <td>{{ $rsUser->id }}</td>
                    <td>{{ $rsUser->no_pelanggan}}</td>
                    <td>{{ $rsUser->name }}</td>              
                    <td>{{ $rsUser->alamat }}</td>
                    <td>{{ $rsUser->telp }}</td>
                    <td>{{ $rsUser->email }}</td>
                    <td>{{$rsUser->level}}</td>
                    <td>
                        <a href="{{ url('user/edit',$rsUser->id) }}"><button type="button" class="btn bg-yellow btn-flat"><i class="fa fa-pencil"></i></button></a>
                        <a href="{{ url('user/cetak', $rsUser->id)  }}" target="_BLANK"><button type="button" class="btn bg-purple btn-flat"><i class="fa fa-print"></i></button></a>
                        
                    </td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop
