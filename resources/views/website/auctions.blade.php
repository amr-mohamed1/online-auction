@extends('layout.website.master')
@section('title', 'Auctions')

@section('page-styles')
    <link rel="stylesheet" href="{{asset('website/css/auctions.css')}}">
@stop


@section('content')
    <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12" id="d1">

            <div class="col-xs-5 col-sm-6 col-md-5 ">
              <img src="{{asset('website/images/landing-page-design_52683-76081 copy.png')}}" alt="Online Auction - Artwork">
            </div>

            <div class="col-xs-6 col-sm-6 col-md-7 ">
              <h1>Online Auction</h1>
              <h2>Buy and sell products in an auction.</h2>
            </div>
          </div>
        </div>


        <div class="row">
            <div class="col-xs-12 hidden-sm hidden-md hidden-lg hidden-xl" id="d3">
              <h2>Categories</h2>
            </div>
        </div>

        <div class="hidden-xs col-sm-3 col-md-3" id="leftnav">
          <h2>Categories</h2>
            @foreach($categories as $category)
                <a href="{{route('all_products',$category->id)}}">{{$category->name}}</a>
            @endforeach
        </div>
        <div class="row">
            @foreach($categories as $category)
          <a href="{{route('all_products',$category->id)}}" class="categories">
            <div class="col-xs-12 col-sm-6 col-md-2 cat" >
              <img src="{{asset($category->image_path)}}" alt="{{$category->name}}">
              <h3>{{$category->name}}</h3>
            </div>
          </a>
            @endforeach

        </div>
    </div>

    <div class="container-fluid" id="sell">
      <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-6" id="divwrite">
          <h3>Everything you need to sell online</h3>
          <p>The easiest and most reputable way to create your own online auction store.</p>

          <div class="col-xs-6 col-sm-6 col-md-6" id="sellbut">
            <button onclick="window.location.href='Sellcenter.html'">Sell product</button>
          </div>

          <div class="col-xs-6 col-sm-6 col-md-6" id="signbut">
            <button onclick="window.location.href='Signup.html'">Signup</button>
          </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-6" id="divsell">
          <img src="{{asset('website/images/sell.png')}}" alt="Artwork">
        </div>
      </div>
    </div>


@stop
@section('page-script')

@stop
