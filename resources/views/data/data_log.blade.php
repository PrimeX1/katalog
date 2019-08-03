@extends('template')
@section('title')
Data Log
@stop
@section('content')
<div class="box">
    <div class="box-header">
    </div>
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                
                <th>Date</th>
                <th>User ID</th>
                <th>Username</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($log as $l)
            <tr>
                
                <td>{{ $l->updated_at }}</td>
                <td>{{ $l->user_id }}</td>
                <td>{{ $l->name }}</td>
                <td>{{ $l->description }}</td>
                
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop