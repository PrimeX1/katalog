@extends('template')

@section('judul')
Form User
@stop

@section('content')
@if (count($errors) > 0 )
<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-close" ></i></button>
        <h4><i class="icon fa fa-ban"></i> Warning ! </h4>
        <ul>
        @foreach($errors->all() as $error )
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form id="frmUser" class="form-horizontal" action="{{ url('user/save') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="fForm col-md-12">
            <div class="box">
                <!-- Bidodata user -->
                <div class="box-header with-border">
                    <h3 class="box-title">Data user</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="hidden" name="id" value="{{ $user['id'] }}">
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $user['name'] }}" required autofocus placeholder="Your Name">

                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                        <div class="col-sm-10">
                        <textarea type="text" name="alamat" class="form-control{{ $errors->has('alamat') ? ' is-invalid' : '' }}" placeholder="Addres"  required autofocus placeholder="Your Addres">{{ $user['alamat'] }}</textarea>
                                @if ($errors->has('alamat'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('alamat') }}</strong>
                                        </span>
                                    @endif
                        </div>
                    </div>                      
                    <div class="form-group">
                        <label for="telp" class="col-sm-2 control-label">Telepon</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                <input id="telp" type="text" class="form-control{{ $errors->has('telp') ? ' is-invalid' : '' }}" name="telp" value="{{ $user['telp'] }}" required autofocus placeholder="Phone Number">
                                @if ($errors->has('telp'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('telp') }}</strong>
                                        </span>
                                    @endif
                            </div> 
                        </div>
                    </div> 
                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $user['email'] }}" required autofocus placeholder="Email">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>             
                                <input type="password" class="form-control" id="password" placeholder="Password" name="password" >
                                <input type="hidden" value="{{ $user['password'] }}" name="old_password" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="level" class="col-sm-2 control-label">Level</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="level" value="{{ $user['level'] }}">
                                <option value="">- Pilih Level User -</option>
                                <option {{ $user['level']==1 ? 'selected' : '' }} value="1">Admin</option>
                                <option {{ $user['level']==2 ? 'selected' : '' }} value="2">Member</option>
                                <option {{ $user['level']==3 ? 'selected' : '' }} value="3">User Umum</option>
                            </select>
                        </div>
                    </div>                     
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right">
                    @if($user['id']=="")
                    SAVE
                    @else
                    UPDATE
                    @endif</button>
                </div>                   
            </div>
        </div>       
    </div>
</form>
@stop
