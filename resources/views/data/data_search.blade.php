@extends('template')

@section('title')
Data Laptop
@stop



@section('content')
<div class="box">
    <div class="box-header">
    <div class="row">
       <div class="col-md-10">
             <a href="{{ url('laptop') }}"><button type="button" class="btn bg-green btn-flat margin">Kembali ke Main Menu</button></a>
       </div>
       <div class="col-md-2">
            <!-- <div class="form-group">
                    <label>CPU</label>
                    <select class="form-control" name="cpu">
                        <option value="">-- Pilih CPU --</option>
                        @foreach($cpu as $c)
                        <option value="{{ $c['kd_procesor'] }}" ><a href="#"></a>{{ $c['nama_procesor'] }}</option>
                        @endforeach
                    </select>
            </div> -->
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">-- Pilih CPU --
                <span class="caret"></span></button>
                <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                @foreach($cpu as $c)
                    <li role="presentation"><a role="menuitem"  href="{{ url('laptop/search_cpu/'.$c->kd_procesor) }}">{{ $c->nama_procesor}}</a></li>
                @endforeach
                </ul>
            </div>
        </div>
    </div>

    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Merk</th>
                <th>Processor</th>
                <th>HDD</th>
                <th>Ram</th>
                <th>VGA</th>
                <th>Os</th>
                <th>ODD</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($search_cpu as $c)
            <tr>
                <th>{{ $c->kd_detail_laptop }}</th>
                <th>{{ $c->merk }}</th>
                <th>{{ $c->nama_procesor }}</th>
                <th>{{ $c->storage }}</th>
                <th>{{ $c->kapasitas }}</th>
                <th>{{ $c->nama_vga }}  {{ $c->vram }}</th>
                <th>{{ $c->nama_os }}</th>
                <th>{{ $c->odd }}</th>
                <th>{{ $c->harga }}</th>
                <th>
                     <a href="{{ url('laptop/edit/'.$c->kd_detail_laptop) }}"><button class="btn bg-yellow btn-flat" ><i class="fa fa-pencil"></i></button></a>
                     <a href="{{ url('laptop/delete/'.$c->kd_detail_laptop) }}"><button class="btn btn-danger btn-flat" ><i class="fa fa-trash"></i></button></a>
                </th>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop