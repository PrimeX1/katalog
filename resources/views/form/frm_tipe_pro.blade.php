@extends('template')

@section('judul')
Form Tipe Proyektor
@stop

@section('content')

<form id="frmMerk" class="form-horizontal" action="{{ url('Tipepro/save') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="fForm col-md-8">
            <div class="box">
                <!-- Bidodata Anggota -->
                <div class="box-header with-border">
                    <h3 class="box-title">Data Tipe Proyektor</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="kategori" class="col-sm-2 control-label">Tipe Proyektor</label>
                        <div class="col-sm-10">
                            <input type="hidden" class="form-control" id="kd_tipe_pro" name="kd_tipe_pro" value="{{ $tpro['kd_tipe_pro'] }}">
                            <input type="text" class="form-control{{ $errors->has('tipe_pro') ? ' is-invalid' : '' }}" id="tipe" placeholder="Tipe" name="tipe_pro" value="{{ $tpro['tipe_pro'] }}" required autofocus>
                            @if ($errors->has('tipe_pro'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tipe_pro') }}</strong>
                                    </span>
                                @endif    
                        </div>
                    </div>
                    
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right">
                    @if($tpro['kd_tipe_pro']=="")
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
