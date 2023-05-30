@extends('layout.website.master')
@section('title', 'Product Dashboard')

@section('page-styles')
    <link rel="stylesheet" href="{{asset('website/css/navbarlogged.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/register.css')}}">
    {{--    <link rel="stylesheet" href="{{asset('website/css/upload.css')}}">--}}
    <link rel="stylesheet" href="{{asset('website/css/profile.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/viewproduct.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/dashboard.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
@stop


@section('content')

    <div class="container-fluid">
        <div class="row">

            <div class="ima col-xs-12 col-sm-3 col-md-3">
                <h1>{{$product->product_title}}</h1>
                <img src="{{asset('storage/products/'.$product->product_images[0]->image_src)}}" alt="image">
            </div>


            <div class="chart1 col-xs-8 col-sm-6 col-md-6">
                <canvas id="myChart" style="width:100%;max-width:500px;min-height: 260px;"></canvas>

                <script>
                var xyValues = [
                    @foreach($all_bids->with('users')->get() as $our_bids)
                    {x: {{$our_bids->User_id}}, y:{{$our_bids->price}}},
                    @endforeach
                ];

                new Chart("myChart", {
                type: "scatter",
                data: {
                    datasets: [{
                    pointRadius: 5,
                    pointBackgroundColor: "rgb(0,0,255)",
                    data: xyValues
                    }]
                },
                options: {
                    legend: {display: false},
                    scales: {
                    xAxes: [],
                    yAxes: [],
                    }
                }
                });
                </script>
            </div>


            <div class="top-bidders col-xs-4 col-sm-3 col-md-3">
                <div class="row">
                    <h2>Top Bidders</h2>
                </div>

                <div class="row bidder-top" style="overflow-y: auto">
                    @foreach($all_bids->with('users')->orderBy('id', 'desc')->get() as $bids)
                    <div class="bidder-pic-name mb-5">
                        <div class="col-xs-2 col-sm-2 col-md-2 bidder-pic mb-5" >
                            <img src="{{asset('storage/user_profile_images/'.$bids->users->img)}}" alt="image">
                        </div>
                        <div class="col-xs-7 col-sm-7 col-md-7 bidder-name">
                            <p>{{$bids->users->id . " - " . $bids->users->first_name}}</p>
                        </div>
                        <div class="col-xs-3 col-sm-3 col-md-3 bidder-name">
                            <p>{{$bids->price}}</p>

                        </div>
                    </div>
                    @endforeach
                </div>
            </div>



        </div>


            <div class="col-xs-12 col-sm-9 col-md-9" id="de">
              <div class="prod-id" hidden>
                  <p>1</p>
              </div>

              <!-- before auctions start -->
              <div class="time22" hidden>
                    <p>Bid starts after </p>

                    <p id="demo"></p>

                    <script>
                    // Set the date we're counting down to
                    var countDownDate = new Date('{{date("M d, Y h:i:s", strtotime($product->end_date))}}').getTime();

                    // Update the count down every 1 second
                    var x = setInterval(function() {

                      // Get today's date and time
                      var now = new Date().getTime();

                      // Find the distance between now and the count down date
                      var distance = countDownDate - now;

                      // Time calculations for days, hours, minutes and seconds
                      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                      // Output the result in an element with id="demo"
                      document.getElementById("demo").innerHTML = days + "d " + hours + "h "
                      + minutes + "m " + seconds + "s ";
                      document.getElementById("dem").innerHTML = days + "d " + hours + "h "
                      + minutes + "m " + seconds + "s ";

                      // If the count down is over, write some text
                      if (distance < 0) {
                        clearInterval(x);
                        document.getElementById("demo").innerHTML = "EXPIRED";
                        document.getElementById("dem").innerHTML = "EXPIRED";
                      }
                    }, 1000);
                    </script>

                    <div class="col-xs-12 col-sm-6 col-md-6 startingdatetime">
                        <p>Starting Date :  <span class="condspan">5 - 10 - 2023</span></p>
                        <P>Starting Time :  <span class="condspan">18:00</span></P>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6  endingdatetime">
                        <p>Ending Date :  <span class="condspan">6 - 10 - 2023</span></p>
                        <P>Ending Time :  <span class="condspan">18:00</span></P>
                    </div>
              </div>

            <!-- after -->
              <div class="place-bid">
                <h3>Place Your Bid</h3>
                <form action="{{route('store_bid')}}" method="POST">
                    @csrf
                    <input type="number" inputmode="numeric" name="price" placeholder="LE" id="bid-val">
                    @error('price')
                    <p class="help text-danger">{{ $message }}</p>
                    @enderror
                    <input type="number" name="product_id" hidden value="{{$product->id}}">
                    @if($product->end_date > \Carbon\Carbon::now())
                        <input type="submit" id="add" value="Place Bid">
                    @else
                        <p STYLE="color: red;margin: 20px">EXPIRED</p>
                    @endif
                </form>
                <div class="deta">
                    <p id="high">Highest Bid:  {{$product->bid_product->max('price')}} LE</p>
                    <p id="yours">Your Latest Bid: {{$user_last_bid[0]->price}}  LE</p>
                    <p>Remaining Time:</p>
                    <p id="dem" style="display: inline;"></p>
                </div>

              </div>



            </div>


    </div>



    <div class="container">

      <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12 active middleBlock" id="boughtproducts">
          <h2>Recommended Products</h2>
          <!-- products div is where products will be added -->
            <div class="col-xs-12 col-sm-12 col-md-12 products">

                    @foreach($random_products as $rand_product)
                  <!-- product 1 -->
                  <div class="col-xs-3 col-sm-3 col-md-3 prod">
                    <div class="row">
                      <!-- product photo -->
                      <div class="col-xs-12 col-sm-2 col-md-2 photo">
                        <img src="{{asset('storage/products/'.$rand_product->product_images[0]->image_src)}}" alt="photo">
                      </div>
                      <!-- product info -->
                      <div class="col-xs-12 col-sm-8 col-md-8 prodinfo">
                        <div class="title">
                          <a href=""><h2>{{$rand_product->product_title}}</h2></a>
                        </div>
                        <div class="description hidden">
                          <p>{{$rand_product->description}}</p>
                        </div>

                        <!-- date time -->
                        <div class="row datetime">
                          <div class="col-xs-12 col-sm-12 col-md-12 cond">
                            <p>Condition : <span class="condspan">{{$rand_product->Condition}}</span></p>
                            <p>No Items : <span class="condspan">{{$rand_product->number_of_items}}</span> </p>
                          </div>
                          <div class="col-xs-12 col-sm-6 col-md-6 startingdatetime">
                            <p>Starting Date :  <span class="condspan"><br>  {{Carbon\Carbon::parse($rand_product->start_date)->format('d-m-Y')}} </span></p>
                            <P>Starting Time :  <span class="condspan"><br> {{Carbon\Carbon::parse($rand_product->start_date)->format('H:i')}} </span></P>
                          </div>
                          <div class="col-xs-12 col-sm-6 col-md-6  endingdatetime">
                            <p>Ending Date :  <span class="condspan"><br>{{Carbon\Carbon::parse($rand_product->end_date)->format('d-m-Y')}}</span></p>
                            <P>Ending Time :  <span class="condspan"><br>{{Carbon\Carbon::parse($rand_product->end_date)->format('H:i')}}</span></P>
                          </div>
                        </div>
                      </div>
                      <!-- price -->
                      <div class="col-xs-12 col-sm-12 col-md-12 price">
                          <h3>{{$rand_product->price}} LE</h3>
                          <div class="row divbtn">
                            <div class="col-xs-12 col-sm-12 col-md-12 btn">
                                <a href="{{route('product',$rand_product->id)}}"><button>View</button></a>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>  <!-- end of product 1  -->
                    @endforeach

            </div>

        </div>

      </div>

    </div>


@stop
@section('page-script')
    <script src="{{asset('website/js/img-gallery.js')}}"></script>
@stop
