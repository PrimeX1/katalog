@extends('template')

@section('judul')
Form Jenis Proyektor
@stop

@section('content')

<form id="frmMerk" class="form-horizontal" action="{{ url('Jpro/save') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="fForm col-md-8">
            <div class="box">
                <!-- Bidodata Anggota -->
                <div class="box-header with-border">
                    <h3 class="box-title">Data Jenis Proyektor</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="kategori" class="col-sm-2 control-label">Jenis</label>
                        <div class="col-sm-10">
                            <input type="hidden" class="form-control" id="kd_jenis_pro" name="kd_jenis_pro" value="{{ $jpro['kd_jenis_pro'] }}">
                            <input type="text" class="form-control{{ $errors->has('jenis_pro') ? ' is-invalid' : '' }}" id="jenis_pro" placeholder="Jenis proyektor" name="jenis_pro" value="{{ $jpro['jenis_pro'] }}" required autofocus>
                            @if ($errors->has('jenis_pro'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('jenis_pro') }}</strong>
                                    </span>
                                @endif    
                        </div>
                    </div>
                    
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right">
                    @if($jpro['kd_jenis_pro']=="")
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
