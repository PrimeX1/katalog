@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="container container--xs">
            <div class="woocommerce">
            <div id="signup">
            <h1 class="mb-1 text-center">Sign up</h1>
            <p class="fs-14 text-gray text-center mb-5">Please, Register Your Data and Access the Website</p>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right" style="font-size: 16px;">{{ __('Name') }} </label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="Your Name">

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right" style="font-size: 16px;">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Your Email">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                        <label for="alamat" class="col-md-4 col-form-label text-md-right" style="font-size: 16px;">{{ __('Address') }}</label>
                            <div class="col-md-6">
                                <textarea type="text" name="alamat" class="form-control{{ $errors->has('alamat') ? ' is-invalid' : '' }}" placeholder="Addres" value="{{ old('alamat') }}" required autofocus placeholder="Your Addres"></textarea>
                                @if ($errors->has('alamat'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('alamat') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>
                             <!-- Phone number -->
                        <div class="form-group row">
                        <label for="telp" class="col-md-4 col-form-label text-md-right" style="font-size: 16px;">{{ __('No Telp') }}</label>
                            <div class="col-md-6">
                            <input id="telp" type="text" class="form-control{{ $errors->has('telp') ? ' is-invalid' : '' }}" name="telp" value="{{ old('telp') }}" required autofocus placeholder="Your Phone Number">
                                @if ($errors->has('telp'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('telp') }}</strong>
                                        </span>
                                    @endif
                            </div>
                         </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right" style="font-size: 16px;">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autofocus placeholder="Your Password">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right" style="font-size: 16px;">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autofocus placeholder="Confirm Your Password">
                            </div>
                        </div>
                    
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                                <a href= "login" class="text" style="margin-left: 500px;"> I have an Account</a>
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

