@extends('layout.website.master')
@section('title', 'Signup')

@section('page-styles')
    <link rel="stylesheet" href="{{asset('website/css/signup.css')}}">
@stop


@section('content')

    <div class="container">
        <div class="row">
            <div class="hidden-xs col-sm-4 col-md-4" id="d1">
                <h1>Welcome !</h1>
                <p id="p1">A few clicks away from <br> creating your online auction</p>
                <img src="{{asset('website/images/d1photo.png')}}" alt="Artwork">
                <h2>Already have an account ?</h2>
                <button type="button" name="logbtn" id="logbtn" onclick="window.location.href='{{route('site_login')}}'">Login</button>
            </div>
            <div class="col-xs-12 col-sm-3 col-sm-push-1 col-md-3 col-md-push-1" id="d2">
                <h2>Supplier</h2>
                <p>Register as a delivery man using your own vehicle.</p>
                <img src="{{asset('website/images/d2photo.png')}}" alt="supplier-artwork">
                <a href="{{route('about')}}" target="_blank">Learn more</a>
                <button type="button" name="ssupbtn" id="ssupbtn" onclick="window.location.href='{{route('supplier_signup')}}'">Signup</button>
            </div>
            <div class="col-xs-12 col-sm-3 col-sm-push-1 col-md-3 col-md-push-2" id="d3">
                <h2>Customer</h2>
                <p>Sell your products and buy participating in auctions.</p>
                <img src="{{asset('website/images/d3photo.png')}}" alt="Customer-artwork">
                <a href="{{route('about')}}" target="_blank">Learn more</a>
                <button type="button" name="csupbtn" id="csupbtn" onclick="window.location.href='{{route('user_signup')}}'">Signup</button>
            </div>
        </div>
    </div>

@stop
@section('page-script')

@stop
