  <link rel="stylesheet" href="{{ asset('css/custom.css')}}">
  <script src="{{ asset ('component/jquery/dist/jquery.min.js') }}"></script>
<div  id="kartu">
    <img src="{{ asset('img/card.jpg') }}" style="position:relative;width:80mm; height:53mm;"/>
        <div class="data">
            <h4 class="nama" style=" position:absolute;margin-left:15px;margin-top:-75px; text-decoration:none; "><b>{{$user['name']}}</b></h4>
            <img class="barcode" src="data:image/png;base64,{{DNS1D::getBarcodePNG($user->no_pelanggan, 'C39')}}" alt="barcode" style="position:absolute;margin-left:15px;margin-top:-110px;width:100px; height:20px;">
            <p class="ni" style=" position:absolute;margin-left:15px;margin-top:-90px;text-decoration:none;"><strong>{{$user['no_pelanggan']}}</strong></p>
        </div>
</div>
<button id="cetak" >Cetak</button>
<script>
          (function($) {
            // fungsi dijalankan setelah seluruh dokumen ditampilkan
            $(document).ready(function(e) {
                 
                // aksi ketika tombol cetak ditekan
                $("#cetak").bind("click", function(event) {
                    // cetak data pada area <div id="#data-mahasiswa"></div>
                    $('#kartu').printArea();
                });
            });
        }) (jQuery);
    </script>


<script src="{{ asset ('js/jquery.PrintArea.js') }}"></script>

