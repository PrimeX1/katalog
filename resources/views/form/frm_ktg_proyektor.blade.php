@extends('template')

@section('judul')
Form Kategori Proyektor
@stop

@section('content')

<form id="frmMerk" class="form-horizontal" action="{{ url('ktgpro/save') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="fForm col-md-8">
            <div class="box">
                <!-- Bidodata Anggota -->
                <div class="box-header with-border">
                    <h3 class="box-title">Data Kategori Proyektor</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="kategori" class="col-sm-2 control-label">Kategori</label>
                        <div class="col-sm-10">
                            <input type="hidden" class="form-control" id="id_ktg_pro" name="id_ktg_pro" value="{{ $ktg['kd_ktg_proyek'] }}">
                            <input type="text" class="form-control{{ $errors->has('ktg_pro') ? ' is-invalid' : '' }}" id="ktg_pro" placeholder="Kategori proyektor" name="ktg_pro" value="{{ $ktg['ktg_proyektor'] }}" required autofocus>
                            @if ($errors->has('ktg_pro'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('ktg_pro') }}</strong>
                                    </span>
                                @endif    
                        </div>
                    </div>
                    
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right">
                    @if($ktg['kd_ktg_proyek']=="")
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
