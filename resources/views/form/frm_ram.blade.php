@extends('template')

@section('title')
FORM Merk
@stop

@section('content')
    <form id="frmProcesor" class="form-horizontal" action="{{ url('/ram/save') }}" method="POST" enctype="multipart/form-data"   >
        @csrf
        <div class="row">
            <div class="fForm col-md-7">
                <div class="box">
                    <div class="box-header with-border">
                            <h3 class="box-title">Data Ram</h3>
                    </div>
                    <div class="box-body">
                            <div class="form-group">
                                <label for="merk" class="col-sm-2 control-label">Kapasitas</label>
                                <div class="col-sm-5">
                                <input type="hidden" id="kd_ram_laptop" name="kd_ram_laptop" value="{{$ram['kd_ram_laptop']}}">
                                <input type="text" class="form-control{{ $errors->has('kapasitas') ? ' is-invalid' : '' }}" id="kapasitas" name="kapasitas" placeholder="Kapasitas" value="{{$ram['kapasitas']}}" required autofocus>
                                @if ($errors->has('kapasitas'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('kapasitas') }}</strong>
                                    </span>
                                @endif      
                            </div>
                            </div>
                            <div class="form-group">
                                <label for="kota" class="col-sm-2 control-label">Kecepatan</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control{{ $errors->has('kecepatan') ? ' is-invalid' : '' }}" id="kecepatan" name="kecepatan" placeholder="Kecepatan" value="{{$ram['kecepatan']}}" required autofocus>
                                </div>
                                @if ($errors->has('kecepatan'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('kecepatan') }}</strong>
                                    </span>
                                @endif  
                            </div>
                            <div class="form-group">
                                <label for="kota" class="col-sm-2 control-label">Type</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control{{ $errors->has('type') ? ' is-invalid' : '' }}" id="type" name="type" placeholder="Type" value="{{$ram['type']}}" required autofocus>
                                @if ($errors->has('type'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                @endif  
                                </div>
                            </div>         
                        <div class="box-footer">
                        <a href="/ram"><button class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-primary pull-right">
                        @if($ram['kd_ram_laptop']=="")
                        SAVE
                        @else
                        UPDATE
                        @endif</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@stop