@extends('layouts.app')
 
@section('css')
  <style>
    .form{

    }
    .form input{
        background: transparent;
        border-bottom: 1px solid yellow;
        border-top: none;
        border-right: none;
        border-left: none;
        color: white;
        font-size: 15px;
        letter-spacing: 1px;
        font-family: arial;
        
    }
    .form input:focus{
        outline:none;
    }
    .form input::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
        color: white;
        opacity: .9; /* Firefox */
    }
  </style>
@endsection

@section('content')
<div class="container w-100 d-flex mt-5" style="color: white;">
    <div class="w-50">
        <div>
            <h1>
                For the Hoop-Up
            </h1>
            <p class="par">"They just make you feel safe" <br> <br>In a world full of colorful clothes <br> 
            Be my monotonous hoodie <br> <br> This hoodie is perfect for <br> cool breezy days, all the colors <br>
            fade at the front of hoodie. </p>
        </div>
    </div>
    <div class="w-50 d-flex justify-content-end">
        <div class=" w-75" >
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3 ">
                            <div class="col-md-6 form">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus  placeholder="Enter Email Here">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 form">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter Password Here">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0 w-50">
                            <button type="submit" class="btn btn-block btn-warning text-dark fw-bold">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </form>
                </div>
    </div>
</div>
@endsection


<!-- 
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
 -->