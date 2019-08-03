@extends('template')

@section('judul')
Form Merk Proyektor
@stop

@section('content')

<form id="frmMerk" class="form-horizontal" action="{{ url('Merkpro/save') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="fForm col-md-8">
            <div class="box">
                <!-- Bidodata Anggota -->
                <div class="box-header with-border">
                    <h3 class="box-title">Data Merk Proyektor</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="kategori" class="col-sm-2 control-label">Merk Proyektor</label>
                        <div class="col-sm-10">
                            <input type="hidden" class="form-control" id="kd_merk" name="kd_merk" value="{{ $mpro['kd_merk'] }}">
                            <input type="text" class="form-control{{ $errors->has('merk_pro') ? ' is-invalid' : '' }}" id="merk" placeholder="merk" name="merk_pro" value="{{ $mpro['merk_pro'] }}" required autofocus>
                            @if ($errors->has('merk_pro'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('merk_pro') }}</strong>
                                    </span>
                                @endif    
                        </div>
                    </div>
                    
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right">
                    @if($mpro['kd_merk']=="")
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
