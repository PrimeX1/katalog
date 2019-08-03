@extends('template')

@section('title')
FORM Operating System
@stop

@section('content')
@if ($errors->any())
  <div class="alert alert-danger alert-dismissible" role="alert">
     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><em>
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</em>
</div>
@endif
    <form id="frmOs" class="form-horizontal" action="{{ url('/os/save') }}" method="POST" enctype="multipart/form-data"  >
        @csrf
        <input type="hidden" class="form-control" id="kd_os" name="kd_os" value="{{ $os['kd_os'] }}" >
        <div class="row">
            <div class="fForm col-md-7">
                <div class="box">
                   
                    <div class="box-body">
                            <div class="form-group">
                                <label for="hardisk" class="col-sm-2 control-label">Operating System</label>
                                <div class="col-sm-5">
                                <input type="text" class="form-control{{ $errors->has('os') ? ' is-invalid' : '' }}" id="operatingsystem" name="os" placeholder="operating system" value="{{$os['nama_os']}}" required autofocus>
                                @if ($errors->has('os'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('os') }}</strong>
                                    </span>
                                @endif    
                            </div>
                            </div>
                        <div class="box-footer">
                        <a href="/operatingsystem"><button class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-primary pull-right">
                            @if($os['kd_os']=="")
                            SAVE
                            @else
                            UPDATE
                            @endif</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@stop