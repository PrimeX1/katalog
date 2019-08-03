@extends("layouts.template_front")
@section('title')
@stop 
@section('isi')
<div class="top2">
        <img class="imgcont" src="img/banner-2.jpg" alt="no logo" width="1366" height="600">
        <div class="text-wrapper2">
            <h1><b>About </b>US</h1>
        </div>
</div> 



<main id="contents" class="site-contnts">
    <!--404 Contents-->
	<section class="row contact-form-section">
	    <div class="container">
	        <div class="row">
	            <div class="col-sm-6 contact-form-box contact-box about1">
                    <img src="img/3-12.jpg" alt="">
                    
	            </div>
	            <div class="col-sm-6 contact-info-box contact-box about1">
                    <h5>History Begining</h5>
                    <p>&ensp;   Agee Komputer berdiri pada tahun 2007-2008, Setelah itu memulali usaha dengan Penjualan Komputer Second dan aksesoris. Setelah itu pada tahun awal tahun 2009 memulai Melayani tukar tambah dan penambahan penjualan aksesories</p>
                    <p>Setelah itu pada tahun 2010 Agee Komputer mulai mendirikan Toko Baru di Jl. Serayu Timur, kel. Pandean kec. Taman Kota Madiun pada tahun itu juga CV AGEE FITAMA mulai terbentuk dan berbadan hukum</p>
                    <p>Pada awal tahun 2012 CV.AGEE FITAMA mulai membuka pelayanan pemasangan jaringan untuk Instansi Pemerintah dan swasta</p>
                    <!-- <div class="row contact-ibox">
                        <h2 class="cb-title">Contact <strong>Info</strong></h2>
                        <p>Here is the information &amp; contacts you can apply.</p>
                        <ul class="media-list contact-infolist">
                            <li class="media">
                                <div class="media-left"><span class="media-object"><img src="icons/site.png" alt="Contact Icon 1" height="25px" width="25px"></span></div>
                                <div class="media-body">Jl. Serayu Timur, kel. Pandean kec. Taman Kota Madiun : 63433</div>
                            </li>
                            <li class="media">
                                <div class="media-left"><span class="media-object"><img src="icons/oldtelp.png" alt="Contact Icon 2" height="25px" width="25px"></span></div>
                                <div class="media-body">08113663808</div>
                            </li>
                            <li class="media">
                                <div class="media-left"><span class="media-object"><img src="icons/whatsapp.png" alt="Contact Icon 3" height="25px" width="25px"></span></div>
                                <div class="media-body">081332778377</div>
                            </li>
                            <li class="media">
                                <div class="media-left"><span class="media-object"><img src="icons/instagram.png" alt="Contact Icon 4" height="25px" width="25px"></span></div>
                                <div class="media-body">ageecomputer</div>
                            </li>
                            <li class="media">
                                <div class="media-left"><span class="media-object"><img src="icons/facebook.png" alt="Contact Icon 4" height="25px" width="25px"></span></div>
                                <div class="media-body">ageecomputer</div>
                            </li>
                        </ul>
                    </div>
                    <div class="row contact-ibox">
                        <h2 class="cb-title">We also <strong>Support</strong></h2>
                        <ul class="media-list contact-infolist">
                            <li class="media">
                                <div class="media-left"><span class="media-object"><img src="icons/cion5.png" alt="Contact Icon 1"></span></div>
                                <div class="media-body"><a href="#">Chat Support</a></div>
                            </li>
                            <li class="media">
                                <div class="media-left"><span class="media-object"><img src="icons/cion6.png" alt="Contact Icon 2"></span></div>
                                <div class="media-body"><a href="#">Support Ticket</a></div>
                            </li>
                            <li class="media">
                                <div class="media-left"><span class="media-object"><img src="icons/cion4.png" alt="Contact Icon 4"></span></div>
                                <div class="media-body"><a href="#">Email Support</a></div>
                            </li>
                        </ul>
                    </div> -->
	            </div>
	        </div>
	    </div>
	</section>
</main>
<h4 style="text-align:center;margin-top:10px;">Contact Us</h4>
<div class="container map">
    <div class="row">
        <div class="col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.3141151144855!2d111.52965731450738!3d-7.649332677796215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79be843e2b2e53%3A0x7100245b78d9d94a!2sAgee+Computer!5e0!3m2!1sen!2sid!4v1562044537182!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="col-md-4">
                <img class="about-icon" src="{{asset('img/facebook-placeholder-for-locate-places-on-maps.png')}}" alt=""> 
                <div class="about-jl"><b>Address:</b> Jl. Serayu Timur, kel. Pandean kec. Taman Kota Madiun : 63433</div><br>
                <img class="about-icon2" src="{{asset('img/envelope.png')}}" alt="">
                <div class="about-email"><b>Email:</b> info@ageecomputer.com</div> <br>
                <img class="about-icon3" src="{{asset('img/telephone.png')}}" alt="">
                <div class="about-phone"><b>Phone:</b> (+62)351 452329 </div>
                <div class="about-open">
                    <span><b>Opening Hours:</b></span> <br>
                    <span>Monday to Friday: 8am-9pm</span> <br>
                    <span>Saturday to Sunday: 9am-5pm</span>
                </div>
        </div>
    </div>
</div>

<hr>

<div class="container lower">
    <div class="row">
        <div class="col-md-2">
            <div class="card sol">
            <img src="img/11-9-300x300.jpg" alt="Avatar" style="width:100%">
            <div class="captions">
            <h4><b>Sigit PJ</b></h4> 
            <p>CEO/Founder</p> 
            </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card sol">
            <img src="img/12-9.jpg" alt="Avatar" style="width:100%">
            <div class="captions">
            <h4><b>Anning</b></h4> 
            <p>Accounting</p> 
            </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card sol">
            <img src="img/niken-a.jpg" alt="Avatar" style="width:100%">
            <div class="captions">
            <h4><b>Niken Kris</b></h4> 
            <p>Costumer Service</p> 
            </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card sol">
            <img src="img/dede.jpg" alt="Avatar" style="width:100%">
            <div class="captions">
            <h4><b>Dhedhe</b></h4> 
            <p>Programmer</p> 
            </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card sol">
            <img src="img/yusuf-b.jpg" alt="Avatar" style="width:100%">
            <div class="captions">
            <h4><b>Yusuf HW</b></h4> 
            <p>Technician</p> 
            </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card sol">
            <img src="img/wildan.jpg" alt="Avatar" style="width:100%">
            <div class="captions">
            <h4><b>M Wildan Hadi</b></h4> 
            <p>Online Suport</p> 
            </div>
            </div>
        </div>
    </div> <!-- row -->
</div><!-- low -->


@stop