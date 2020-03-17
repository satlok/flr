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
                <h2> Sign Up Here </h2>
                 <form method="POST" action="{{ route('register') }}">
                        @csrf
                    <div class="form-left-to-w3l">
                        <span class="fa fa-user-o" aria-hidden="true"></span>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                               

                        <div class="clear"></div>
                    </div>
                    <div class="form-left-to-w3l">
                        <span class="fa fa-phone" aria-hidden="true"></span>
                        <input type="text" name="Phone" placeholder="Phone" required="">

                        <div class="clear"></div>
                    </div>
                    <div class="form-left-to-w3l">
                        <span class="fa fa-envelope-o" aria-hidden="true"></span>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                               

                        <div class="clear"></div>
                    </div>
                    <div class="form-left-to-w3l ">

                        <span class="fa fa-lock" aria-hidden="true"></span>
                         <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                               
                        <div class="clear"></div>
                    </div>
                    <div class="form-left-to-w3l ">

                        <span class="fa fa-lock" aria-hidden="true"></span>
                         <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        <div class="clear"></div>
                    </div>
                   
                    <div class="">
                        <button type="submit" class="btn btn-primary">Sign Up </button>
                    </div>
                </form>
               <div class="w3layouts_more-buttn">
                    <h3>Have an account..?
                        <a href="{{ route('login') }}">Login Here
                        </a>
                    </h3>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
@endsection
