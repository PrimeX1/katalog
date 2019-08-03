@extends('template')

@section('title')
FORM Merk
@stop

@section('content')
    <form id="frmVga" class="form-horizontal" action="{{ url('/vga/save') }}" method="POST" enctype="multipart/form-data"  >
        @csrf
        <div class="row">
            <div class="fForm col-md-7">
                <div class="box">
                    <div class="box-header with-border">
                            <h3 class="box-title">Data Ram</h3>
                    </div>
                    <div class="box-body">
                            <div class="form-group">
                                <label for="merk" class="col-sm-2 control-label">VGA</label>
                                <div class="col-sm-5">
                                <input type="hidden" id="kd_vga" name="kd_vga" value="{{$vga['kd_vga']}}">
                                <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="nama_vga" name="name" placeholder="Nama VGA" value="{{$vga['nama_vga']}}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif  
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="kota" class="col-sm-2 control-label">Vram</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control{{ $errors->has('vram') ? ' is-invalid' : '' }}" id="vram" name="vram" placeholder="Vram" value="{{$vga['vram']}}" required autofocus>
                                @if ($errors->has('vram'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('vram') }}</strong>
                                    </span>
                                @endif  
                                </div>
                            </div>       
                        <div class="box-footer">
                        <a href="/ram"><button class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-primary pull-right">
                        @if($vga['kd_vga']=="")
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