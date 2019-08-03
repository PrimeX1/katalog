@extends('layouts.template_front')
@section('isi')
<hr>
<div class="container">
  <div class="row">
    <div class="col-2">
        <h5>Kategori</h5>
        <h6>Pilih berdasarkan harga</h6>
        <h5>Harga</h5>
        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">RP</span>
        </div>
        <input type="number" class="form-control" placeholder="Dari Harga" aria-label="harga" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">RP</span>
        </div>
        <input type="number" class="form-control" placeholder="Sampai" aria-label="harga" aria-describedby="basic-addon1">
        </div>
    </div>
    <div class="col-10">
    <div class="row">
    @foreach($laptop as $L)
   
   <div class="col-lg-3 col-md-6 col-sm-6">
     <div class="row">
       <div class="col-md-9">
         <div class="card cont">
               @if($L->image!="")
               <img id="" class="img" src="{{ asset('img/'.$L->image) }}" > 
               @else
               <img id="" class="img" src="{{ asset('img/no-image.png') }}" > 
               @endif 
               <h5>{{$L->merk}}<br><span>{{$L->tipe}}</span></h5>
               <p>{{ $L->H3 }}</p>
           </div> <br>
       </div>
     </div>
   </div>
   
 @endforeach 
    </div>
   
      
    </div>
  </div>
</div>

Halaman:{{$laptop->currentPage()}} <br>
Jumlah data : {{ $laptop->total()}} <br>
Data Per halaman : {{ $laptop->perPage()}} <br>
{{$laptop->links()}}

@stop