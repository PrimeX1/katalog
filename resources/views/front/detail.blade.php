@extends('layouts.template_front')
@section('title')
Detail Laptop
@stop
@section('isi')
<div class="container">
  <div class="row">
    <div class="col-4">
        <div class="card detail1">
            @foreach($laptop as $P)
                @if($P->image!="")
                <img id="avatar" class="" src="{{ asset('img/'.$P->image) }}" > 
                @else
                <img id="avatar" class="" src="{{ asset('img/no-image.png') }}" > 
                @endif
            @endforeach 
        </div>
    </div>
    <div class="col-8">
        <div class="card detail2">
            @foreach($laptop as $L)
            <h1>{{$L->merk." ". $L->tipe}}</h1>
            <dl  class="spek">
                <dt>Deskripsi </dt>
                <dd>
                    <ul class="title">
                        <li >Procesor: {{$L->Procesor}}</li>
                        <li >Harddisk: {{$L->storage}}</li>
                        <li >Ram: {{$L->ram}}</li>
                        <li >Vga: {{$L->VGA." ".$L->vram}} </li>
                        <li >Layar: {{$L->layar}} </li>

                    </ul> 
                </dd>
            </dl>
        
            <dl class="unit">
                <dt>Kelengkapan</dt>
                <dd class="unit1">
                    <ul >
                        <li>Unit Utama</li>
                    </ul>
                </dd>
            </dl>
            <dl class="harga">
            <dt>Harga <h2>Rp {{number_format($L->H2,0,".",".") }} </h2></dt>
            </dl>
            
            @endforeach 
        </div>
    </div>
  </div>
</div>
@stop















