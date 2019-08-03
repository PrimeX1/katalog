@extends('layouts.app')
@section('content')

  <!-- /.login-logo -->
  <!-- <h1 class=" ">Example</h1> -->
  <div class = "row">
    <div >
      <div class ="animated bounceInUp">
      <!-- <img src="{{URL::asset('img/com.png')}}" alt="profile Pic" style="margin-top: 150px; margin-left: 140px" height="400" width="600"> -->
      </div>
    </div>
    
    <div class = col-md-12>
    <div class ="animated fadeIn delay-1s">
      <div class="login-box-body">
        <div class="login-logo">
          <a href="#"><b style="color: #03b70f">Agee</b>Computer</a>
        </div>
        <form action="{{ route('login') }}" method="POST">
          @csrf
          <div class="form-group ">
            <input type="email" style="border-radius: 20px;" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Email" >
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
          </div>
          
          <div class="form-group">
            <input type="password" style="border-radius: 20px;"  class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
          </div>
          <button type="submit" class="m">Sign In</button>
          <div class="row">
           
               
          </div>
        </form>
        <!-- /.social-auth-links -->
        </div>
      </div>
  <!-- /.login-box-body -->
  </div>
</div>



@endsection
