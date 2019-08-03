@extends('template')

@section('judul')
Form Intensitas Cahaya Proyektor
@stop

@section('content')

<form id="intpro" class="form-horizontal" action="{{ url('intPro/save') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="fForm col-md-8">
            <div class="box">
                <!-- Bidodata Anggota -->
                <div class="box-header with-border">
                    <h3 class="box-title">Data Intesitas Cahaya Proyektor</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="kategori" class="col-sm-2 control-label">Intensitas Cahaya</label>
                        <div class="col-sm-10">
                            <input type="hidden" class="form-control" id="kd_int_pro" name="kd_int_pro" value="{{ $int['kd_int_pro'] }}">
                            <input type="text" class="form-control{{ $errors->has('nama_int') ? ' is-invalid' : '' }}" id="int_pro" placeholder="Intensitas Cahaya proyektor" name="nama_int" value="{{ $int['nama_int'] }}" required autofocus>
                            @if ($errors->has('nama_int'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nama_int') }}</strong>
                                    </span>
                                @endif    
                        </div>
                    </div>
                    
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right">
                    @if($int['kd_int_pro']=="")
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
