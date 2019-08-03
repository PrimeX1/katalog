<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>@yield('judul')</title>
 
</head>
@include('sc_head_front')
<body>
  @include('front.navbar')
  <!-- Start your project here-->
  @yield('isi')
  <!-- /Start your project here-->
  
  
@include('front.footer')
  <!-- SCRIPTS -->
  @include('sc_footer_front')
</body>

</html>