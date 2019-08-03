@extends('layouts.template_front')

@section('title')
@stop

@section('isi')

<div class="top1">
        <img src="img/bg.jpg" alt="no logo" width="1366" height="800">
        <div class="text-wrapper">
            <h1 class="home"><b>Welcome to our</b> website</h1>
            <h1 class="home"><b>Agee Computers</b></h1>
            <p  class="home" >We have lots of things about computer</p>
            <p  class="home">please see our website.</p>
        </div>
</div>  

<div class="baris">
	<div class="container">
		<div class="row">
			<div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-center img-decoration">
			<span class="display-4 text-white d-block mb-4"></span>
			<img src="img/web-settings(1).png" alt="no logo" width="64" height="56">
			<h4 class="mb-4 text-danger">Computer Setting</h4>
			<p>Kami memberikan perbaikan terbaik untuk masalah komputer kesayangan anda.</p>
			</div>
			<div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-center img-decoration">
			<span class="display-4 text-white d-block mb-4"></span>
			<img src="img/laptop.png" alt="no logo" width="64" height="56">
			<h4 class="mb-4 text-danger">Laptop / PC</h4>
			<p>Kami menyediakan berbagai laptop dan PC mulai dari spesifikasi normal hingga spesifikasi tinggi.</p>
			</div>
			<div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-center img-decoration">
			<span class="display-4 text-white d-block mb-4"></span>
			<img src="img/wifi.png" alt="no logo" width="64" height="56">
			<h4 class="mb-4 text-danger">Network Engineering</h4>
			<p>Kami juga menyediakan alat - alat jaringan untuk kebutuhan rumah, kantor, gedung, maupun sekolah.</p>
			</div>
			<div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-center img-decoration">
			<span class="display-4 text-white d-block mb-4"></span>
			<img src="img/icon.png" alt="no logo" width="64" height="56">
			<h4 class="mb-4 text-danger">Mobile</h4>
			<p>Kami menyediakan berbagai macam smartphone yang sesuai dengan jaman sekarang.</p>
			</div>
		</div>
	</div>
</div>



<div class=" c1">
	<a href="{{ url('product/asus') }}"><div class="box">
		<div class="imgBox">
			<img class="img-index" src="img/asus.png" alt="">
		</div>
		<div class="details">
			<div class="FrontD">
				<h2>ASUS</h2>
				<p>Setelah sukses dengan kehadiran produk tablet Asus Transformer untuk kalangan menengah ke atas, Asus memperkenalkan Asus MeMO Pad yang harganya lebih terjangkau.</p>
			</div>
		</div>
	</div></a>
		<a href="{{url('product/lenovo')}}"><div class="box">
		<div class="imgBox">
				<img class="img-index" src="img/lenovo.png" alt="">
			</div>
			<div class="details">
				<div class="FrontD">
					<h2>LENOVO</h2>
					<p>Menyediakan ekosistem perangkat pintar, layanan, dan aplikasi yang diberdayakan melalui pusat data untuk membantu orang terhubung dengan apa yang benar-benar penting.</p>
				</div>
			</div>
		</div></a>
		<a href="{{url('product/hp')}}"><div class="box">
			<div class="imgBox">
					<img class="img-index" src="img/1024px-HP_New_Logo_2D.svg.png" alt="">
				</div>
				<div class="details">
					<div class="FrontD">
						<h2>HP</h2>
						<p> HP mengumumkan fokus pada konsumen yang sering meng-upgrade komputer mereka dan menghabiskan lebih banyak uang pada permainan dan dirilis merek laptop dan desktop Omen.</p>
					</div>
				</div>
		</div></a>
		<a href="{{url('product/Acer')}}"><div class="box">
			<div class="imgBox">
				<img class="img-index" src="img/Acer-logo.jpg" alt="">
			</div>
			<div class="details">
				<div class="FrontD">
					<h2>ACER</h2>
					<p>Acer Indonesia telah meraih berbagai penghargaan bergengsi dari berbagai institusi, di antaranya: Top Brand Award, Indonesia Best Brand Award dan Indonesia Customer Satisfaction Award.</p>
				</div>
			</div>
		</div></a>
	<a href="{{url('product/dell')}}"><div class="box">
		<div class="imgBox">
			<img class="img-index" src="img/logo dell.jpg " alt="">
		</div>
		<div class="details">
			<div class="FrontD">
				<h2>DELL</h2>
				<p>Dell berada pada posisi pertama di dalam urutan “Perusahaan yang paling patut dibanggakan” versi dari majalah Fortune.</p>
			</div>
		</div>
	</div></a>
	<a href="{{url('product/toshiba')}}"><div class="box">
		<div class="imgBox">
			<img class="img-index" src="img/FreeVector-Toshiba.jpg" alt="">
		</div>
		<div class="details">
			<div class="FrontD">
				<h2>TOSHIBA</h2>
				<p>Toshiba telah mencatat total pengiriman ke seluruh dunia sejumlah lebih dari 100 juta PC notebook pada Tahun Keuangan 2010.</p>
			</div>
		</div>
	</div></a>
</div>



@stop