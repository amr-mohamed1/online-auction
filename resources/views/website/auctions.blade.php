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
          <a href="artwork.html">Artwork</a>
          <a href="book.html">Books</a>
          <a href="car.html">Cars</a>
          <a href="computer.html">Computer & Laptop</a>
          <a href="electronics.html">Electronics</a>
          <a href="fashion.html">Fashion</a>
          <a href="game.html">Games</a>
          <a href="pet.html">Pets</a>
          <a href="real-estate.html">Real Estate</a>
          <a href="boat.html">Ships</a>
          <a href="software.html">Software</a>
        </div>
        <div class="row">
          <a href="artwork.html" class="categories">
            <div class="col-xs-12 col-sm-6 col-md-2 cat" >
              <img src="{{asset('website/images/art.png')}}" alt="Art - Artwork">
              <h3>Artwork</h3>
            </div>
          </a>
          <a href="book.html" class="categories">
            <div class="col-xs-12 col-sm-6 col-md-2 cat" >
              <img src="{{asset('website/images/book.png')}}" alt="Books - Artwork">
              <h3>Books</h3>
            </div>
          </a>
          <a href="car.html" class="categories">
            <div class="col-xs-12 col-sm-6 col-md-2 cat" >
              <img src="{{asset('website/images/cars.png')}}" alt="Cars - Artwork">
              <h3>Cars</h3>
            </div>
          </a>

          <a href="computer.html" class="categories">
            <div class="col-xs-12 col-sm-6 col-md-2 cat" >
              <img src="{{asset('website/images/computer.png')}}" alt="Computers - Artwork">
              <h3>Computer & Laptop</h3>
            </div>
          </a>
          <a href="electronics.html" class="categories">
            <div class="col-xs-12 col-sm-6 col-md-2 cat" >
              <img src="{{asset('website/images/electronics.png')}}" alt="Electronics - Artwork">
              <h3>Electronics</h3>
            </div>
          </a>
          <a href="fashion.html" class="categories">
            <div class="col-xs-12 col-sm-6 col-md-2 cat" >
              <img src="{{asset('website/images/fashion.png')}}" alt="Fashion - Artwork">
              <h3>Fashion</h3>
            </div>
          </a>
          <a href="game.html" class="categories">
            <div class="col-xs-12 col-sm-6 col-md-2 cat" >
              <img src="{{asset('website/images/games.png')}}" alt="Games - Artwork">
              <h3>Games</h3>
            </div>
          </a>
          <a href="pet.html" class="categories">
            <div class="col-xs-12 col-sm-6 col-md-2 cat" >
              <img src="{{asset('website/images/pet.png')}}" alt="Pets - Artwork">
              <h3>Pets</h3>
            </div>
          </a>
          <a href="real-estate.html" class="categories">
            <div class="col-xs-12 col-sm-6 col-md-2 cat" >
              <img src="{{asset('website/images/real-estate')}}.png" alt="Real Estate - Artwork">
              <h3>Real Estate</h3>
            </div>
          </a>
          <a href="boat.html" class="categories">
            <div class="col-xs-12 col-sm-6 col-md-2 cat" >
              <img src="{{asset('website/images/boat.png')}}" alt="Ships - Artwork">
              <h3>Ship</h3>
            </div>
          </a>
          <a href="software.html" class="categories">
            <div class="col-xs-12 col-sm-6 col-md-2 cat" >
              <img src="{{asset('website/images/software.png')}}" alt="Software - Artwork">
              <h3>Software</h3>
            </div>
          </a>

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
