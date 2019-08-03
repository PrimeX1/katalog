@extends('layouts.template_front')
@section('judul')
Products
@stop
@section('isi')

<div class="container">
  <div class="row">
      <div class="col-10">
        <div class="list">
            <div class="row">
              
              @foreach($laptop as $L)
            <div class="col-md-4 col-sm-6 ">
                <div class="col-md-9">
                  <div class="card cont">
                        @if($L->image!="")
                        <img id="" class="img" src="{{ asset('img/'.$L->image) }}" > 
                        @else
                        <img id="" class="img" src="{{ asset('img/no-image.png') }}" > 
                        @endif 
                        <a href="{{ url('product/detail/'.$L->kd_detail_laptop) }}"><p><b>{{$L->merk}}<br><span>{{$L->tipe}}</span></b></p></a>
                        @if(Auth::user())
                          @if(Auth::user()->level==2)
                          <h6><strong>Rp.{{number_format($L->H2,0,".",".") }}</strong></h6>
                          @else
                          <h6><strong>Rp.{{number_format($L->H2,0,".",".") }}</strong></h6>
                          @endif
                        @else
                        <h6><strong>Rp.{{number_format($L->H3,0,".",".") }}</strong></h6>
                        @endif
                        <button class="banding" id="banding{{$L->kd_detail_laptop}}" onclick="compare('{{$L->kd_detail_laptop}}','{{$L->tipe}}','{{ asset('img/'.$L->image) }}')">Banding</button>
                      </div> <br>
                </div>
              </div>
            @endforeach
              
           @if($H10==1)
            <span class="page">{{ $laptop->appends(request()->input())->links() }}</span>
            @else 

            @endif
          </div>
        </div>
      </div>
    <div class="col-2">
      <div class="sidemenu">
    
          <h6>Pilih berdasarkan harga</h6>
          <h5>Harga</h5>
          <form action="{{url('/product/harga')}}" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">RP</span>
              </div>
              <input type="number" class="form-control" placeholder="Dari Harga" aria-label="harga" name="H1" aria-describedby="basic-addon1" required autofocus placeholder="Your Value">

            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">RP</span>
              </div>
              <input type="number" class="form-control" placeholder="Sampai" aria-label="harga" aria-describedby="basic-addon1" name="H2">
              <button type="submit" class="btn btn-flat btn-primary">Send</button>
          </div>
          </form>
          <h5>Pilih Merk</h5>
          <form action="{{url('/product/merk')}}" method="get">
          @csrf
            <!-- Default unchecked -->
              <div class="custom-control custom-checkbox selected">
                  <input {{ $req->Asus != null ? 'checked' : ''}} type="checkbox" class="custom-control-input" id="defaultUnchecked" value="asus" name="Asus">
                  <label class="custom-control-label" for="defaultUnchecked">Asus</label>
              </div>
                <!-- Default unchecked -->
              <div class="custom-control custom-checkbox">
                  <input {{ $req->ckBox != null ? 'checked' : ''}} type="checkbox" class="custom-control-input" id="defaultUnchecked2" value="lenovo" name="ckBox">
                  <label class="custom-control-label" for="defaultUnchecked2">Lenovo</label>
              </div>
            <!-- Default unchecked -->
              <div class="custom-control custom-checkbox">
                  <input {{ $req->acer != null ? 'checked' : ''}} type="checkbox" class="custom-control-input" id="defaultUnchecked3" value="acer" name="acer">
                  <label class="custom-control-label" for="defaultUnchecked3">Acer</label>
              </div>
          <!-- Default unchecked -->
              <div class="custom-control custom-checkbox">
                  <input {{ $req->hp != null ? 'checked' : ''}} type="checkbox" class="custom-control-input" id="defaultUnchecked4" value="hp" name="hp">
                  <label class="custom-control-label" for="defaultUnchecked4">HP</label>
              </div>
          <!-- Default unchecked -->
              <div class="custom-control custom-checkbox">
                  <input {{ $req->dell != null ? 'checked' : ''}} type="checkbox" class="custom-control-input" id="defaultUnchecked5" value="dell" name="dell">
                  <label class="custom-control-label" for="defaultUnchecked5">DELL</label>
              </div>
              <!-- Default unchecked -->
              <div class="custom-control custom-checkbox">
                <input {{ $req->Toshiba != null ? 'checked' : ''}} type="checkbox" class="custom-control-input" id="defaultUnchecked6" value="Toshiba" name="Toshiba">
                <label class="custom-control-label" for="defaultUnchecked6">Toshiba</label>
            </div>
              <button type="submit" class="btn btn-flat btn-warning">Kirim</button>
            </form>
      </div>
      
    </div>
</div>
  </div>
<!-- Footer -->
<footer class="page-footer font-small pt-4 fixed-bottom ft" id="ft">
<b><a onclick="tampil()" class="button">X</a></b>
  <!-- Footer Links -->
  <form action="/compare"  method="POST" enctype="multipart/form-data">
  @csrf
  
      <ul class="compare" id=compare>
        <li class="banding-footer"> <strong>Product Comparison</strong>
        <p>Product added to comparison. Add up to 2 products or proceed to view compare products selected.</p>
        </li>
      </ul>
     
  <button  class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3 bt-compare" type="submit">Compare Now</button>
  </form>
  <!-- Footer Links -->
</footer>
<!-- Footer -->
  
  
</div>


@stop