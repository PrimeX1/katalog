@extends('template')

@section('title')
Form Detail Laptop Excel
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

<form id="frmLaptopExcel" class="form-horizontal" action="{{ url('/excel/update') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" class="form-control" id="id" name="id" value="{{ $laptop['id'] }}">
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
                            <label for="merk" class="col-sm-2 control-label">Merk</label>
                            <div class="col-sm-10">
                             <input type="text" class="form-control" placeholder="merk" name="id_merk" value="{{ $laptop['id_merk'] }}">
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
                        <label for="kategori" class="col-sm-2 control-label">kategori</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="kategori" name="kategori" value="{{ $laptop['kategori'] }}">
                        </div>
                    
                    </div>     
                    <div class="form-group">
                        <label for="procesor" class="col-sm-2 control-label">Processor</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Processor" name="kd_procesor" value="{{ $laptop['kd_procesor'] }}">
                        </div>
                    </div> 
                   <div class="form-group">
                        <label for="hdd" class="col-sm-2 control-label">HDD</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="HDD" name="kd_hdd" value="{{ $laptop['kd_hdd'] }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ram" class="col-sm-2 control-label">RAM</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Ram" name="kd_ram_laptop" value="{{ $laptop['kd_ram_laptop'] }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="vga" class="col-sm-2 control-label">VGA</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="VGA" name="kd_vga" value="{{ $laptop['kd_vga'] }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="os" class="col-sm-2 control-label">OS</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Os" name="kd_os" value="{{ $laptop['kd_os'] }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="odd" class="col-sm-2 control-label">ODD</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" placeholder="ODD" name="odd" value="{{ $laptop['odd'] }}">
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
                        <label for="price" class="col-sm-2 control-label">Price 1</label>
                        <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Price" name="H1" value="{{ $laptop['H1'] }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="price" class="col-sm-2 control-label">Price 2</label>
                        <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Price" name="H2" value="{{ $laptop['H2'] }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="price" class="col-sm-2 control-label">Price 3</label>
                        <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Price" name="H3" value="{{ $laptop['H3'] }}">
                        </div>
                    </div> 
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary pull-right">
                    @if($laptop['id']=="")
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
