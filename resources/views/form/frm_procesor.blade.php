@extends('template')

@section('title')
Form Procesor
@stop

@section('content')
    <form id="frmProcesor" class="form-horizontal" action="{{ url('/procesor/save') }}" method="POST" enctype="multipart/form-data"  >
        @csrf
        <div class="row">
            <div class="fForm col-md-7">
                <div class="box">
                    <div class="box-header with-border">
                            <h3 class="box-title">Data laptop</h3>
                    </div>
                    <div class="box-body">
                            <div class="form-group">
                                <label for="merk" class="col-sm-2 control-label">Procesor</label>
                                <div class="col-sm-5">
                                <input type="hidden" id="id_procesor" name="kd_procesor" value="{{$procesor['kd_procesor']}}">
                                <input type="text" class="form-control{{ $errors->has('Procesor') ? ' is-invalid' : '' }}"  id="Procesor" name="Procesor" placeholder="Procesor" value="{{$procesor['nama_procesor']}}" required autofocus>
                                @if ($errors->has('Procesor'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Procesor') }}</strong>
                                    </span>
                                @endif    
                                </div>
                            </div>

                        <div class="box-footer">
                        <a href="/procesor"><button class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-primary pull-right">
                        @if($procesor['kd_procesor']=="")
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