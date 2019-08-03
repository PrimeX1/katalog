@extends('template')

@section('judul')
Form Kategori
@stop

@section('content')

<form id="frmMerk" class="form-horizontal" action="{{ url('merk/save') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="fForm col-md-8">
            <div class="box">
                <!-- Bidodata Anggota -->
                <div class="box-header with-border">
                    <h3 class="box-title">Data Merk</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="kategori" class="col-sm-2 control-label">Merk</label>
                        <div class="col-sm-10">
                            <input type="hidden" class="form-control" id="id_merk" name="id_merk" value="{{ $merk['id_merk'] }}">
                            <input type="text" class="form-control{{ $errors->has('merk') ? ' is-invalid' : '' }}" id="merk" placeholder="merk" name="merk" value="{{ $merk['merk'] }}" required autofocus>
                            @if ($errors->has('merk'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('merk') }}</strong>
                                    </span>
                                @endif    
                        </div>
                    </div>
                    
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right">
                    @if($merk['id_merk']=="")
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
