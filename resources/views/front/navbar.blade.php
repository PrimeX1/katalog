<!--Navbar-->
<nav class="navbar navbar-expand-lg white sticky" id="nav">
	<!-- Navbar brand -->
		<a class="navbar-brand" href="{{url('/')}}"><img class="img-navbar" src="{{asset('img/logo-agee.png')}}" alt=""></a>
		<!-- Collapse button -->	
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
  		aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
  		<span class="navbar-toggler-icon"></span>
			</button>
			<!-- Collapsible content -->
				<div class="collapse navbar-collapse" id="basicExampleNav">
				<!-- Links -->
  			<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
	  				<b><a class="nav-link" href="{{url('/')}}">Home
							<span class="sr-only">(current)</span>
	  				</a></b>
					</li>
					<li class="nav-item">
	  				<b><a class="nav-link" href="{{url('/product')}}">Product</a></b>
					</li>
					<li class="nav-item">
						<b><a class="nav-link" href="{{url('/contact')}}">About</a></b>
					</li>
					
					<!-- Dropdown -->
					
					@if(Auth::user())
					<li class="nav-item">
					<b><a class="nav-link" href="{{url('logout')}}">Log out</a></b>
					@else
					<b><a class="nav-link" href="/login">Login</a></b>
					</li>
					@endif
  			</ul>
			<!-- Links -->
			
		<form class="form-inline my-2 my-lg-0 ml-auto" action="{{url('/product/cari')}}">
			<input class="form-control" type="search" placeholder="Search" name="cari" aria-label="Search" value="{{old('cari')}}">
			<button class="btn btn-outline-blue btn-md my-2 my-sm-0 ml-3" type="submit" > Search</button>
		</form>
		
<!-- Collapsible content -->
</nav>
<!--/.Navbar-->