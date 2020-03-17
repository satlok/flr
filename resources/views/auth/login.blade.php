@extends('layouts.main')
@section('css')
<link href="{{ asset('public/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!--stylesheets-->
    <link href="{{ asset('public/css/style.css') }}" rel='stylesheet' type='text/css' media="all">
@endsection
@section('js')

@endsection

@section('content')
<div class="w3layouts-two-grids py-5">
    <!---728x90--->
        <div class="mid-class py-5">
            <div class="img-right-side">
                <h3>Manage Your Gadgets Account</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget Lorem ipsum dolor sit
                    amet, consectetuer adipiscing elit. Aenean commodo ligula ege</p>
               <img src="{{url('public/images/b11.png')}}" class="img-fluid" alt="">
            </div>
            <div class="txt-left-side">
                <h2> Login Here </h2>
                 <form method="POST" action="{{ route('login') }}">
                        @csrf
                   
                    <div class="form-left-to-w3l">
                        <span class="fa fa-envelope-o" aria-hidden="true"></span>
                         <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        <div class="clear"></div>
                    </div>
                    <div class="form-left-to-w3l ">

                        <span class="fa fa-lock" aria-hidden="true"></span>
                         <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        <div class="clear"></div>
                    </div>
                    <div class="main-two-w3ls">
                        <div class="left-side-forget">
                             <input class="checked" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <span class="remenber-me">Remember me </span>
                            
                        </div>
                        <div class="right-side-forget">
                           @if (Route::has('password.request'))
                                    <a class="for" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                        </div>
                    </div>
                    <div class="btnn">
                        <button type="submit" class="btn btn-primary">Log In </button>
                    </div>
                </form>
                <div class="w3layouts_more-buttn">
                    <h3>Don't Have an account..?
                        <a href="{{ route('register') }}">Sign Up Here
                        </a>
                    </h3>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
@endsection
