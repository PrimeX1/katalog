@extends('template')

@section('title')
Form Detail Laptop
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

<form id="frmDetailLaptop" class="form-horizontal" action="{{ url('laptop/save') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" class="form-control" id="id" name="id" value="{{ $laptop['kd_detail_laptop'] }}">
    <div class="row">
        <div class="Fimage col-md-3">
                <div class="box">
                    <div class="box-body">
                        @if($laptop['image'])
                            <img id="avatar" src="{{ asset('img/'.$laptop['image']) }}" style="width:100%;border: 1px solid #ccc;">
                        @else
                            <img id="avatar" src="{{ asset('img/no-image.png') }}" style="width:100%;border: 1px solid #ccc;">
                        @endif
                        <input id="file" type="file" name="image" style="display: none">
                        <input type="hidden" name="old_image" value="{{ $laptop['image'] }}">

                    </div>
                </div>
            </div>
        <div class="fForm col-md-9">
            <div class="box">
                <!--frm laptop -->
                <div class="box-header with-border">
                    <h3 class="box-title">Data Laptop</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="merk" class="col-sm-2 control-label"><a href="{{ url('/merk') }}" target="_BLANK">Merk <i class="fa fa-pencil"></i></a></label>
                        <div class="col-sm-10">
                                <select class="form-control" name="id_merk" value="{{ $laptop['id_merk'] }}" >
                                    <option  value="" >- Pilih Merk -</option>
                                    @foreach($merk as $m)
                                    
                                    <option {{ $laptop['id_merk']==$m['id_merk'] ? 'selected' : "" }} value="{{ $m['id_merk'] }}">{{ $m['merk'] }}</option>
                                    @endforeach                             
                                </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="kategori" class="col-sm-2 control-label">kategori</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="kategori" value="{{$laptop['kategori']}}" >
                                <option value="">-Pilih kategori-</option>
        
                                <option {{ $laptop['kategori']=='1' ? 'selected' : "" }} value="1">Office</option>
                                <option {{ $laptop['kategori']=='2' ? 'selected' : "" }} value="2">Gaming</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="type" class="col-sm-2 control-label">Tipe</label>
                        <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Tipe" name="tipe" value="{{ $laptop['tipe'] }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="type" class="col-sm-2 control-label">Color</label>
                        <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="color" name="color" value="{{ $laptop['color'] }}">
                        </div>
                    </div>             
                    <div class="form-group">
                        <label for="procesor" class="col-sm-2 control-label"><a href="{{ url('/procesor') }}" target="_BLANK">Processor <i class="fa fa-print"></i></a></label>
                        <div class="col-sm-10">
                            <select class="form-control" name="kd_procesor"  value="{{ $laptop['kd_procesor'] }}">
                                <option  value="" >- Pilih Processor -</option>
                                @foreach($procesor as $p)
                               
                                <option {{ $laptop['kd_procesor']==$p['kd_procesor'] ? 'selected' : "" }} value="{{ $p['kd_procesor'] }}">{{ $p['nama_procesor'] }}</option>
                                @endforeach                             
                            </select>
                        </div>
                    </div> 
                   <div class="form-group">
                        <label for="hdd" class="col-sm-2 control-label"> <a href="{{ url('/hdd') }}" target="_BLANK">HDD <i class="fa fa-tag"></i> </a></label>
                        <div class="col-sm-10">
                            <select class="form-control" name="kd_hdd" value="{{ $laptop['kd_hdd'] }}" >
                                <option value="">- Pilih HDD -</option>
                                @foreach($hdd as $h)
                              
                                <option {{ $laptop['kd_hdd']==$h['kd_hdd'] ? 'selected' : "" }}  value="{{ $h['kd_hdd'] }}">{{ $h['storage'] }}</option>
                                @endforeach                             
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ram" class="col-sm-2 control-label"> <a href="{{ url('/ram') }}" target="_BLANK">RAM <i class="fa fa-tag"></i> </a></label>
                        <div class="col-sm-10">
                            <select class="form-control" name="kd_ram_laptop" value="{{ $laptop['kd_ram_laptop'] }}" >
                                <option value="">- Pilih Ram -</option>
                                @foreach($ram as $r)
                                
                                <option {{ $laptop['kd_ram_laptop']==$r['kd_ram_laptop'] ? 'selected' : "" }} value="{{ $r['kd_ram_laptop'] }}">{{ $r['kapasitas'] }}</option>
                                @endforeach                             
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="vga" class="col-sm-2 control-label"> <a href="{{ url('/vga') }}" target="_BLANK">VGA<i class="fa fa-tag"></i> </a></label>
                        <div class="col-sm-10">
                            <select class="form-control" name="kd_vga" value="{{ $laptop['kd_vga'] }}" >
                                <option value="">- Pilih VGA -</option>
                                @foreach($vga as $v)
                               
                                <option {{ $laptop['kd_vga']==$v['kd_vga'] ? 'selected' : "" }} value="{{ $v['kd_vga'] }}">{{ $v['nama_vga'] }}  {{ $v['vram'] }}</option>
                                @endforeach                             
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="os" class="col-sm-2 control-label"> <a href="{{ url('/os') }}" target="_BLANK">OS<i class="fa fa-tag"></i> </a></label>
                        <div class="col-sm-10">
                            <select class="form-control" name="kd_os" value="{{ $laptop['kd_os'] }}" >
                                <option value="">- Pilih Os -</option>
                                @foreach($os as $rsOs)
                               
                                <option {{ $laptop['kd_os']==$rsOs['kd_os'] ? 'selected' : "" }} value="{{ $rsOs['kd_os'] }}">{{ $rsOs['nama_os'] }}</option>
                                @endforeach                             
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="odd" class="col-sm-2 control-label"> <a href="{{ url('/os') }}" target="_BLANK">ODD<i class="fa fa-tag"></i> </a></label>
                        <div class="col-sm-10">
                            <select class="form-control" name="odd" value="{{$laptop['odd']}}" >
                                <option value="">- Pilih Optical Drive Disk -</option>
                                
                               
                                <option {{ $laptop['odd']=='1' ? 'selected' : "" }} value="1">DVD</option>
                                <option {{ $laptop['odd']=='2' ? 'selected' : "" }} value="2">NO-DVD</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="aksesoris" class="col-sm-2 control-label">layar</label>
                        <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="layar" name="layar" value="{{ $laptop['layar'] }}">
                        </div>
                    </div>         
                    <div class="form-group">
                        <label for="aksesoris" class="col-sm-2 control-label">Aksesoris</label>
                        <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="aksesoris" name="aksesoris" value="{{ $laptop['aksesoris'] }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="price" class="col-sm-2 control-label">Price</label>
                        <div class="col-sm-10">
                                <input type="number" class="form-control" placeholder="Price" name="H1" value="{{ $laptop['H1'] }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="price" class="col-sm-2 control-label">Price 2</label>
                        <div class="col-sm-10">
                                <input type="number" class="form-control" placeholder="Price" name="H2" value="{{ $laptop['H2'] }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="price" class="col-sm-2 control-label">Price 3</label>
                        <div class="col-sm-10">
                                <input type="number" class="form-control" placeholder="Price" name="H3" value="{{ $laptop['H3'] }}">
                        </div>
                    </div> 
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary pull-right">
                    @if($laptop['kd_detail_laptop']=="")
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
