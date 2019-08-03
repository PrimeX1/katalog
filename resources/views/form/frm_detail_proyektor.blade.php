@extends('template')

@section('title')
Form Detail Proyektor
@stop


@section('content')

@if (count($errors) > 0 )
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error )
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form id="frmDetailProyektor" class="form-horizontal" action="{{ url('proyektor/save') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" class="form-control" id="kd_dt_pro" name="kd_dt_pro" value="{{ $proyektor['kd_dt_pro'] }}">
    <div class="row">
        <div class="Fimage col-md-3">
                <div class="box">
                    <div class="box-body">
                        @if($proyektor['image'])
                            <img id="avatar" src="{{ asset('img/'.$proyektor['image']) }}" style="width:100%;border: 1px solid #ccc;">
                        @else
                            <img id="avatar" src="{{ asset('img/no-image.png') }}" style="width:100%;border: 1px solid #ccc;">
                        @endif
                        <input id="file" type="file" name="image" style="display: none">
                        <input type="hidden" name="old_image" value="{{ $proyektor['image'] }}">

                    </div>
                </div>
            </div>
        <div class="fForm col-md-9">
            <div class="box">
                <!--frm proyektor -->
                <div class="box-header with-border">
                    <h3 class="box-title">Data proyektor</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="merk" class="col-sm-2 control-label"><a href="{{ url('/merk') }}" target="_BLANK">Merk <i class="fa fa-pencil"></i></a></label>
                        <div class="col-sm-10">
                                <select class="form-control" name="kd_merk" value="{{ $proyektor['kd_merk'] }}" >
                                    <option  value="" >- Pilih Merk -</option>
                                    @foreach($merk as $m)
                                    
                                    <option {{ $proyektor['kd_merk']==$m['kd_merk'] ? 'selected' : "" }} value="{{ $m['kd_merk'] }}">{{ $m['merk_pro'] }}</option>
                                    @endforeach                             
                                </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="model" class="col-sm-2 control-label">Model</label>
                        <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Model" name="model" value="{{ $proyektor['model'] }}">
                        </div>
                    </div> 
                    <div class="form-group">
                        <label for="kd_tipe_pro" class="col-sm-2 control-label"><a href="{{ url('#') }}" target="_BLANK">Tipe <i class="fa fa-pencil"></i></a></label>
                        <div class="col-sm-10">
                                <select class="form-control" name="kd_tipe_pro" value="{{ $proyektor['kd_tipe_pro'] }}" >
                                    <option  value="" >- Pilih tipe -</option>
                                    @foreach($tipe as $t)
                                    
                                    <option {{ $proyektor['kd_tipe_pro']==$t['kd_tipe_pro'] ? 'selected' : "" }} value="{{ $t['kd_tipe_pro'] }}">{{ $t['tipe_pro'] }}</option>
                                    @endforeach                             
                                </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="kd_ktg_proyek" class="col-sm-2 control-label"><a href="{{ url('#') }}" target="_BLANK">Kategori <i class="fa fa-pencil"></i></a></label>
                        <div class="col-sm-10">
                                <select class="form-control" name="kd_ktg_proyek" value="{{ $proyektor['kd_ktg_proyek'] }}" >
                                    <option  value="" >- Pilih Kategori -</option>
                                    @foreach($kategori as $k)
                                    
                                    <option {{ $proyektor['kd_ktg_proyek']==$k['kd_ktg_proyek'] ? 'selected' : "" }} value="{{ $k['kd_ktg_proyek'] }}">{{ $k['ktg_proyektor'] }}</option>
                                    @endforeach                             
                                </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="kd_jenis_pro" class="col-sm-2 control-label"><a href="{{ url('#') }}" target="_BLANK">Jenis<i class="fa fa-pencil"></i></a></label>
                        <div class="col-sm-10">
                                <select class="form-control" name="kd_jenis_pro" value="{{ $proyektor['kd_jenis_pro'] }}" >
                                    <option  value="" >- Pilih Jenis -</option>
                                    @foreach($jenis as $j)
                                    
                                    <option {{ $proyektor['kd_jenis_pro']==$j['kd_jenis_pro'] ? 'selected' : "" }} value="{{ $j['kd_jenis_pro'] }}">{{ $j['jenis_pro'] }}</option>
                                    @endforeach                             
                                </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="kd_int_pro" class="col-sm-2 control-label"><a href="{{ url('#') }}" target="_BLANK">Cahaya<i class="fa fa-pencil"></i></a></label>
                        <div class="col-sm-10">
                                <select class="form-control" name="kd_int_pro" value="{{ $proyektor['kd_int_pro'] }}" >
                                    <option  value="" >- Pilih Jenis -</option>
                                    @foreach($int as $i)
                                    <option {{ $proyektor['kd_int_pro']==$i['kd_int_pro'] ? 'selected' : "" }} value="{{ $i['kd_int_pro'] }}">{{ $i['nama_int'] }}</option>
                                    @endforeach                             
                                </select>
                        </div>
                    </div>
                    <div class="form-group">
                    
                        <label class="col-sm-2 control-label">Detail</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="3" name="detail_pro" placeholder="Detail">{{ $proyektor['detail_pro'] }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="price" class="col-sm-2 control-label">Harga</label>
                        <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="harga" name="H1" value="{{ $proyektor['H1'] }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="price" class="col-sm-2 control-label">Harga 2</label>
                        <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="harga" name="H2" value="{{ $proyektor['H2'] }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="price" class="col-sm-2 control-label">Harga 3</label>
                        <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="harga" name="H3" value="{{ $proyektor['H3'] }}">
                        </div>
                    </div> 
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary pull-right">
                    @if($proyektor['kd_dt_pro']=="")
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
