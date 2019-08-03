@extends('template')

@section('title')
Data Proyektor
@stop



@section('content')
@if (count($errors) > 0 )
<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-close" ></i></button>
        <h4><i class="icon fa fa-ban"></i> Can't Import Excel ! </h4>
        <ul>
        @foreach($errors->all() as $error )
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="box">
    <div class="box-header">
    <div class="row">
       <div class="col-md-12">
             <a href="{{ url('proyektor/add') }}"><button type="button" class="btn bg-green btn-flat margin">Add New</button></a>
             
             <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-excel">
               <i class="fa fa-file-excel-o"></i> Import Excel
            </button>
       </div>
    </div>

    </div>
    <!-- /.box-header -->
    <div class="box-body">
    
        <table id="p" class="table table-bordered table-striped" style="width:100%">
            <thead>
            <tr>
               <th>#</th>
               <th>Merk</th>
               <th>image</th>
               <th>Model</th>
               <th>Tipe</th>
               <th>Kategori</th>
               <th>Jenis</th>
               <th>Cahaya</th>
               <th>Detail</th>
               <th>Harga</th>
               @if(Auth::user()->level==1)
               <th>Harga</th>
               <th>Harga</th>
               @endif
               <th>Action</th>
            </tr>
            </thead>
            <tbody>
           @foreach($proyektor as $p)
                <tr>
                    <td>{{ $p->kd_dt_pro }}</td>
                    <td>{{ $p->merk_pro }}</td>
                    <td>
                    @if($p->image!="")
                        <img id="avatar" src="{{ asset('img/'.$p->image) }}" style="width:50px;height:50px;border: 2px solid #ccc;">
                    @else
                    <img id="avatar" src="{{ asset('img/no-image.png') }}" style="width:50px;height:50px;border: 2px solid #ccc;">
                    @endif
                    </td>
                    <td>{{ $p->model }}</td>
                    <td>{{ $p->tipe_pro }}</td>
                    <td>{{ $p->ktg_proyektor }}</td>
                    <td>{{ $p->jenis_pro }}</td>
                    <td>{{ $p->nama_int }}</td>
                    <td>{{ $p->detail_pro }}</td>
                @if(Auth::user()->level==1)
                    <td class="price">{{ $p->H1 }}</td>
                    <td class="price">{{ $p->H2 }}</td>
                    <td class="price">{{ $p->H3 }}</td>
                @elseif (Auth::user()->level==2)
                    <td>{{ $p->H2 }}</td>
                @elseif (Auth::user()->level==3)
                    <td>{{ $p->H3 }}</td>
                @endif
                <td>
                        <a href="{{ url('/proyektor/edit/'.$p->kd_dt_pro) }}"><button class="btn bg-yellow button" ><i class="fa fa-pencil"></i></button></a>
                        <a href="{{ url('/proyektor/delete/'.$p->kd_dt_pro) }}"><button class="btn btn-danger button " ><i class="fa fa-trash"></i></button></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
            <tfoot>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tfoot>
        </table>
        <!-- <button id="cetak" class="btn btn-primary">Print</button> -->

        <div class="modal fade" id="modal-excel">
          <div class="modal-dialog">
            <div class="modal-content">
            <form id="frmEx" class="form-horizontal" action="{{ url('/proyektor/import') }}" method="POST" enctype="multipart/form-data"  >
             @csrf
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Import Excel</h4>
                </div>
                <div class="modal-body">
                    <label for="exampleInputFile">File Excel</label>
                    <input type="file" name="file" id="exampleInputFile">
                    <p class="help-block">File Type : Only xlsx, xls, csv</p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Upload</button>
                    <a href="{{ asset('#') }}"><button class="btn btn-primary pull-left" Type="button"> <i class="fa fa-download" ></i> Download Example excel for import</button></a>
                </div>
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

    </div>
</div>

@stop