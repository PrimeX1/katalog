@extends('template')

@section('title')
FORM Hardisk
@stop

@section('content')
    <form id="frmHdd" class="form-horizontal" action="{{ url('hardisk/save') }}" method="POST" enctype="multipart/form-data"  >
        @csrf
        <input type="hidden" class="form-control" id="kd_hdd" name="kd_hdd" value="{{ $hdd['kd_hdd'] }}" >
        <div class="row">
            <div class="fForm col-md-7">
                <div class="box">
                    <div class="box-header with-border">
                            <h3 class="box-title">Data laptop</h3>
                    </div>
                    <div class="box-body">
                            <div class="form-group">
                                <label for="hardisk" class="col-sm-2 control-label">Kapasitas</label>
                                <div class="col-sm-5">
                                <input type="text" class="form-control{{ $errors->has('Hardisk') ? ' is-invalid' : '' }}"  id="Hardisk" name="Hardisk" placeholder="Storage" value="{{$hdd['storage']}}" required autofocus>
                                @if ($errors->has('Hardisk'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Hardisk') }}</strong>
                                    </span>
                                @endif   
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="hardisk" class="col-sm-2 control-label">Kecepatan</label>
                                <div class="col-sm-5">
                                <input type="text" class="form-control{{ $errors->has('Kecepatan') ? ' is-invalid' : '' }}"  id="Hardisk" name="Kecepatan" placeholder="Kecepatan" value="{{$hdd['kecepatan']}}" required autofocus>
                                @if ($errors->has('Kecepatan'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Kecepatan') }}</strong>
                                    </span>
                                @endif   
                                </div>
                                
                            </div>
                        <div class="box-footer">
                        <a href="/Hardisk"><button class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-primary pull-right">
                        @if($hdd['kd_hdd']=="")
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