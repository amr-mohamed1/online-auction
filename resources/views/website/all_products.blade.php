@extends('layout.website.master')
@section('title', 'Category Products')

@section('page-styles')
    <link rel="stylesheet" href="{{asset('website/css/navbarlogged.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/products.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="{{asset('website/js/active-upcoming-expired-switch.js')}}"></script>
    <style>
        .menu{
            background-color: transparent;
            border: 1px solid #efefef;
            padding: 12px 0px;
        }
    </style>
@stop
@section('content')

    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 product">
                <h1>Artwork</h1>
                <p>Discover Art You Love and Buy an Artwork in a Competitive Auction.</p>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="menuLine col-sm-12 col-md-12 col-xl-12">
            <button class="menu active col-xs-3 col-sm-4 col-md-3 col-lg-3 col-xl-3" type="button" data-filter="all">All</button>
            <button type="button" class="menu active col-3 col-xs-3 col-sm-4 col-md-3 col-lg-3 col-xl-3" data-filter=".active">Active Auctions</button>
            <button type="button" class="menu col-xs-3 col-sm-4 col-md-3 col-lg-3 col-xl-3" data-filter=".upcomming">Upcoming Auctions</button>
            <button type="button" class="menu col-xs-3 col-sm-4 col-md-3 col-lg-3 col-xl-3" data-filter=".expired">Expired Auctions</button>
      </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 active middleBlock" id="acttt">
          <!-- products div is where products will be added -->
            <div class="col-xs-12 col-sm-12 col-md-12 products">


              <!-- product 1 -->
                @forelse($products as $product)
                    <div class="col-xs-3 col-sm-12 col-md-12 prod mix {{Carbon\Carbon::parse($product->start_date) >= Carbon\Carbon::now() ? "upcomming" : ''}}{{Carbon\Carbon::parse($product->end_date) <= Carbon\Carbon::now() ? "expired" : ''}}{{Carbon\Carbon::parse($product->start_date) <= Carbon\Carbon::now() && Carbon\Carbon::parse($product->end_date) > Carbon\Carbon::now() ? "active" : ''}}">
                <div class="row">
                  <!-- product photo -->
                  <div class="col-xs-12 col-sm-2 col-md-2 photo">
                    <img src="{{asset('storage/products/'.$product->product_images[0]->image_src??'website/images/artwork/http___cdn.cnn.com_cnnnext_dam_assets_190430171751-mona-lisa.jpg')}}" alt="photo">
                  </div>
                  <!-- product info -->
                  <div class="col-xs-12 col-sm-8 col-md-8 prodinfo">
                    <div class="title">
                      <a href=""><h2>{{$product->product_title}}</h2></a>
                    </div>
                    <div class="description hidden">
                      <p>{{$product->description}}</p>
                    </div>

                    <!-- date time -->
                    <div class="row datetime">
                      <div class="col-xs-12 col-sm-12 col-md-12 cond">
                        <p>Condition : <span class="condspan">{{$product->Condition}}</span></p>
                        <p>No Items : <span class="condspan">{{$product->number_of_items}}</span> </p>
                      </div>
                      <div class="col-xs-12 col-sm-5 col-md-5 startingdatetime">
                        <p>Starting Date :  <span class="condspan">{{Carbon\Carbon::parse($product->start_date)->format('d-m-Y')}}</span></p>
                        <P>Starting Time :  <span class="condspan">{{Carbon\Carbon::parse($product->start_date)->format('H:i')}}</span></P>
                      </div>
                      <div class="col-xs-12 col-sm-5 col-md-5  endingdatetime">
                        <p>Ending Date :  <span class="condspan">{{Carbon\Carbon::parse($product->end_date)->format('d-m-Y')}}</span></p>
                        <P>Ending Time :  <span class="condspan">{{Carbon\Carbon::parse($product->end_date)->format('H:i')}}</span></P>
                      </div>
                    </div>
                  </div>
                  <!-- price -->
                  <div class="col-xs-12 col-sm-2 col-md-2 price">
                      <h3>{{$product->price}} LE</h3>
                      <div class="row divbtn">
                        <div class="col-xs-12 col-sm-12 col-md-12 btn">
                            <a href="{{route('product',$product->id)}}"><button>View</button></a>

                        </div>
                      </div>
                  </div>
                </div>
              </div>
                @empty
                        <h3 style="color:#F56960;text-align: center">
                            There Is No Products To show
                        </h3>
                @endforelse
                <!-- end of product 1  -->


            </div>

        </div>

      </div>
    </div>

@stop
@section('page-script')
    <script src="{{asset('website/js/mixitup.min.js')}}"></script>
    <script type="text/javascript">
        var mixer = mixitup('body');
        var display = function(block_name, title) {
            // Toogle Block
            $('.middleBlock').css('display', 'none');
            $('#' + block_name + '').css('display', 'block');

            // Change Title Color
            $('.menu').removeClass('active');
            $(title).addClass('active');
        }

        $('#subScription').on('click', function() {
            display('acttt', $(this));
        });

        $('#inStore').on('click', function() {
            display('uppp', $(this));
        });

        $('#onLine').on('click', function() {
            display('exppp', $(this));
        });
    </script>
@stop
