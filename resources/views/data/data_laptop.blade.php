@extends('template')

@section('title')
Data Laptop
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

@if(Auth::user()->level!=1)
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-close" ></i></button>
        <h4><i class="icon fa fa-check"></i> Recomended </h4>
        <p style="color:white">if you want export this data please use <strong>PDF</strong></p>
</div>
@endif

<div class="box">
    <div class="box-header">

    <div class="row">
       <div class="col-md-12">
       @if(Auth::user()->level==1)
             <a href="{{ url('laptop/add') }}"><button type="button" class="btn bg-green btn-flat margin">Add New</button></a>
             <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-excel">
               <i class="fa fa-file-excel-o"></i> Import Excel
            </button>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#H1">
               <i class="fa fa-money"></i> Range Price H1
            </button>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#H2">
               <i class="fa fa-money"></i> H2
            </button>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#H3">
               <i class="fa fa-money"></i> H3
            </button>
        @elseif(Auth::user()->level==2)
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#H2">
               <i class="fa fa-money"></i> H2
            </button>
        @elseif(Auth::user()->level==3)
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#H3">
               <i class="fa fa-money"></i> H3
            </button>
        @endif
       </div>
    </div>

    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="s" class="table table-bordered table-striped" style="width:100%">
            <thead>
            <tr>
                <th>#</th>
                <th class="id">Merk</th>
                <th>Image</th>
                <th class="tipe">Tipe</th>
                <th>Layar</th>
                <th>Processor</th>
                <th>VGA</th>
                <th>HDD</th>
                <th>Ram</th>
                <th>Color</th>
                <th class="ktg">Kategori</th>
                <th class="os">Os</th>
                <th class="odd">ODD</th>
                <th class="price">Price</th>
                @if(Auth::user()->level==1)
                <th class="price">Price 2</th>
                <th class="price">Price 3</th>
                <th>Action</th>
                @else
                <th>Action</th>
                @endif
            </tr>
            </thead>
            <tbody>
            @php
                $no = 0
            @endphp
            @foreach($laptop as $L)
           
            @php
                $no++
            @endphp
            <tr>
                <td>{{ $no }}</td>
                <!-- <td class="id">{{ $L->id }}</td> -->
                <td class="id">{{ $L->merk }}</td>
                <td>
                @if($L->image!="")
                    <img id="avatar" src="{{ asset('img/'.$L->image) }}" style="width:50px;height:50px;border: 2px solid #ccc;">
                @else
                <img id="avatar" src="{{ asset('img/no-image.png') }}" style="width:50px;height:50px;border: 2px solid #ccc;">
                @endif
                </td>
                <td class="tipe">{{ $L->tipe }}</td>
                <td>{{ $L->layar }}</td>
                <td class="procesor">{{ $L->nama_procesor }}</td>
                <td >{{ $L->nama_vga }}</td>
                <td>{{ $L->storage }}</td>
                <td>{{ $L->kapasitas }}</td>
                <td>{{ $L->color }}</td>
                <td class="ktg">{{ ($L->kategori==1 ? "Office" : ($L->kategori==2 ? "Gaming" : $L->kategori )) }}</td>
                <td class="os">{{ $L->nama_os }}</td>
                <td class="odd">{{ ($L->odd==1 ? "DVD" : ($L->odd==2 ? "NO-DVD" : $L->odd=="" ? "Not set" : $L->odd ))  }}</td>
                @if(Auth::user()->level==1)
                <td class="price">{{number_format($L->H1,0,".",".") }}</td>
                <td class="price">{{number_format($L->H2,0,".",".") }}</td>
                <td class="price">{{number_format($L->H3,0,".",".") }}</td>
                @elseif (Auth::user()->level==2)
                <td>{{number_format($L->H2,0,".",".") }}</td>
                @elseif (Auth::user()->level==3)
                <td>{{number_format($L->H3,0,".",".") }}</td>
                @endif
                <td>
                     <a href="{{ url('laptop/edit/'.$L->id) }}"><button class="btn bg-yellow button" ><i class="fa fa-pencil"></i></button></a>
                     <a href="{{ url('laptop/delete/'.$L->id) }}"><button class="btn btn-danger button " ><i class="fa fa-trash"></i></button></a>
                </td>
            </tr>
            @endforeach
            </tbody>
            <tfoot>
            @if(Auth::user()->level==1)
                <tr>
                <th>#</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th>#</th>
                </tr>
            @else
            <tr>
              <th>#</th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th>#</th>
              <th>#</th>
            </tr>
            @endif
            </tfoot>
        </table>
        <!-- <button id="cetak" class="btn btn-primary">Print</button> -->

        <div class="modal fade" id="modal-excel">
          <div class="modal-dialog">
            <div class="modal-content">
            <form id="frmEx" class="form-horizontal" action="{{ url('/excel/import') }}" method="POST" enctype="multipart/form-data"  >
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
                    <a href="{{ asset('example-excel.xlsx') }}"><button class="btn btn-primary pull-left" Type="button"> <i class="fa fa-download" ></i> Download Example excel for import</button></a>
                </div>
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <!-- Price H1 -->
        <div class="modal fade" id="H1">
          <div class="modal-dialog">
            <div class="modal-content">
            <form id="frmH1" class="form-horizontal" action="{{ url('/laptop') }}" method="POST" enctype="multipart/form-data"  >
             @csrf
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Price</h4>
                </div>
                <div class="modal-body">
                    <label for="exampleInputFile">Range Price</label>
                    <div class="form-group">
                        <label for="price" class="col-sm-2 control-label">From</label>
                        <div class="col-sm-8">
                                <input type="number" class="form-control" placeholder="Price" name="H1">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="price" class="col-sm-2 control-label">To</label>
                        <div class="col-sm-8">
                                <input type="number" class="form-control" placeholder="Price" name="H2">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">SEND</button>
                </div>
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <!-- Price H2 -->
        <div class="modal fade" id="H2">
          <div class="modal-dialog">
            <div class="modal-content">
            <form id="frmH1" class="form-horizontal" action="{{ url('/laptop') }}" method="POST" enctype="multipart/form-data"  >
             @csrf
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Price 2</h4>
                </div>
                <div class="modal-body">
                    <label for="exampleInputFile">Range Price </label>
                    <div class="form-group">
                        <label for="price" class="col-sm-2 control-label">From</label>
                        <div class="col-sm-8">
                                <input type="number" class="form-control" placeholder="Price" name="H3">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="price" class="col-sm-2 control-label">To</label>
                        <div class="col-sm-8">
                                <input type="number" class="form-control" placeholder="Price" name="H4">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">SEND</button>
                </div>
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <!-- Price H3 -->
        <div class="modal fade" id="H3">
          <div class="modal-dialog">
            <div class="modal-content">
            <form id="frmH1" class="form-horizontal" action="{{ url('/laptop') }}" method="POST" enctype="multipart/form-data"  >
             @csrf
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Price 3</h4>
                </div>
                <div class="modal-body">
                    <label for="exampleInputFile">Range Price </label>
                    <div class="form-group">
                        <label for="price" class="col-sm-2 control-label">From</label>
                        <div class="col-sm-8">
                                <input type="number" class="form-control" placeholder="Price" name="H5">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="price" class="col-sm-2 control-label">To</label>
                        <div class="col-sm-8">
                                <input type="number" class="form-control" placeholder="Price" name="H6">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">SEND</button>
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