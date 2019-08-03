@extends('layouts.template_front')
@section('title')
Perbandingan
@stop
@section('isi')
<div class="container">
  <div class="row">
  <a href="/compare/delete"><button class="btn btn-danger bt-delete-compare">BACK</button></a>
        <div class="image-list">
            @foreach($compare as $c)
                @if($c->image !="")
                <img id="avatar" class="" src="{{ asset('img/'.$c->image) }}" > 
                @else
                <img id="avatar" class="" src="{{ asset('img/no-image.png') }}" > 
                @endif
            @endforeach 
        </div>
<b><hr></b>
       <div class="list-merk">
           <p><b>MERK</b></p>
            <div class="row">
            @foreach($compare as $c)
                <div class="col-md-6">
                <h6>{{ $c->merk." ".$c->tipe }}</h6>
                </div>  
            @endforeach 
            </div>  
        </div>
<hr>
        <div class="list-procesor">
           <p><b>Procesor</b></p>
            <div class="row">
            @foreach($compare as $c)
       
                <div class="col-md-6">
                    <h6>{{$c->procesor}}</h6>
                </div>  
        
            @endforeach 
            </div>  
        </div>
  <hr>
        <div class="list-storage">
           <p><b>storage</b></p>
            <div class="row">
            @foreach($compare as $c)
       
                <div class="col-md-6">
                    <h6>{{$c->storage}}</h6>
                </div>  
        
            @endforeach 
            </div>  
        </div>
<hr>
        <div class="list-kapasitas">
           <p><b>Ram</b></p>
            <div class="row">
            @foreach($compare as $c)
       
                <div class="col-md-6">
                    <h6>{{$c->kapasitas}}</h6>
                </div>  
        
            @endforeach 
            </div>  
        </div>
<hr>
        <div class="list-vga">
           <p><b>Graphic</b></p>
            <div class="row">
            @foreach($compare as $c)
       
                <div class="col-md-6">
                    <h6>{{$c->VGA." ". $c->vram }}</h6>
                </div>  
        
            @endforeach 
            </div>  
        </div>
<hr>
        <div class="list-layar">
           <p><strong>Display</strong></p>
            <div class="row">
            @foreach($compare as $c)
       
                <div class="col-md-6">
                    <h6>{{$c->layar}}</h6>
                </div>  
        
            @endforeach 
            </div>  
        </div>
        <hr>
        <div class="list-harga">
           <p><b>Price</b></p>
            <div class="row">
            @foreach($compare as $c)
       
                <div class="col-md-6">
                    <h6>Rp {{number_format($c->H2,0,".",".") }}</h6>
                </div>  
        
            @endforeach 
            </div>  
        </div>

    </div>
</div>

@stop















