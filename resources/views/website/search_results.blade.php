@extends('layout.website.master')
@section('title', 'Search Result')

@section('page-styles')
    <link rel="stylesheet" href="{{asset('website/css/navbarlogged.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/products.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/homepage.css')}}">
@stop


@section('content')


      <div class="row search">

            <div class="col-xs-12 hidden-xs col-sm-7 col-md-7 col-lg-7 up">
                <button onclick="window.location.href='{{route('sellcenter')}}'">Upload a products</button onclick="window.location.href='{{route('sellcenter')}}'">
            </div>

            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 sear">

                <form action="{{route('homepage_search')}}" method="POST">
                    @csrf
                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8" id="se">
                        <input type="search" placeholder="Search.." name="search" autocomplete="">
                        @error('search')
                        <p class="help text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" id="btn">
                        <input type="submit" value="Search">
                    </div>
                </form>
            </div>

            <div class="col-xs-12 col-sm-7 hidden-sm col-md-7 hidden-md col-lg-7 hidden-lg hidden-xl up" id="up">
                <button onclick="window.location.href='Sellcenter.html'">Upload a Products</button>
            </div>

        </div>

    </div>



      <div class="container">
        <div class="row">
            <div class="recommended col-sm-12 col-md-12 col-xl-12">
                <h2>Search Results</h2>
            </div>
        </div>
      </div>

      <div class="container">
          <div class="row">

              <div class="col-xs-12 col-sm-12 col-md-12 active middleBlock" id="recommendprod">
                  <!-- products div is where products will be added -->
                  <div class="col-xs-12 col-sm-12 col-md-12 products">

                      <!-- product 1 -->
                      <div class="col-xs-3 col-sm-12 col-md-12 prod">
                          @forelse($product as $product_data)
                              <div class="row">
                                  <!-- product photo -->
                                  <div class="col-xs-12 col-sm-2 col-md-2 photo">
                                      <img src="{{asset('storage/products/'.$product_data->product_images[0]->image_src)}}" alt="photo">
                                  </div>
                                  <!-- product info -->
                                  <div class="col-xs-12 col-sm-8 col-md-8 prodinfo">
                                      <div class="title">
                                          <a href=""><h2>{{$product_data->product_title}}</h2></a>
                                      </div>
                                      <div class="description hidden">
                                          <p>{{$product_data->description}}</p>
                                      </div>

                                      <!-- date time -->
                                      <div class="row datetime">
                                          <div class="col-xs-12 col-sm-12 col-md-12 cond">
                                              <p>Condition : <span class="condspan">{{$product_data->Condition}}</span></p>
                                              <p>No Items : <span class="condspan">{{$product_data->number_of_items}}</span> </p>
                                          </div>
                                          <div class="col-xs-12 col-sm-6 col-md-6 startingdatetime">
                                              <p>Starting Date :  <span class="condspan"><br>  {{Carbon\Carbon::parse($product_data->start_date)->format('d-m-Y')}} </span></p>
                                              <P>Starting Time :  <span class="condspan"><br> {{Carbon\Carbon::parse($product_data->start_date)->format('H:i')}} </span></P>
                                          </div>
                                          <div class="col-xs-12 col-sm-6 col-md-6  endingdatetime">
                                              <p>Ending Date :  <span class="condspan"><br>{{Carbon\Carbon::parse($product_data->end_date)->format('d-m-Y')}}</span></p>
                                              <P>Ending Time :  <span class="condspan"><br>{{Carbon\Carbon::parse($product_data->end_date)->format('H:i')}}</span></P>
                                          </div>
                                      </div>
                                  </div>
                                  <!-- price -->
                                  <div class="col-xs-12 col-sm-2 col-md-2 price">
                                      <h3>{{$product_data->price}} LE</h3>
                                      <div class="row divbtn">
                                          <div class="col-xs-12 col-sm-12 col-md-12 btn">
                                              <a href="{{route('product',$product_data->id)}}"><button>View</button></a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          @empty
                              <p style="color:red;text-align: center">There is no Products With This Name</p>
                          @endforelse
                      </div>  <!-- end of product 1  -->

                  </div>


              </div>

          </div>
      </div>



      <div class="container">
        <div class="row">
            <div class="recommended col-sm-12 col-md-12 col-xl-12">
                <h2>Other Recommended Products</h2>
            </div>
        </div>
      </div>



    <div class="container">
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12 active middleBlock" id="recommendprod">
            <!-- products div is where products will be added -->
              <div class="col-xs-12 col-sm-12 col-md-12 products">

                 <!-- product 1 -->
                 <div class="col-xs-3 col-sm-12 col-md-12 prod">
                     @foreach($random_products as $product_data)
                     <div class="row">
                    <!-- product photo -->
                    <div class="col-xs-12 col-sm-2 col-md-2 photo">
                      <img src="{{asset('storage/products/'.$product_data->product_images[0]->image_src)}}" alt="photo">
                    </div>
                    <!-- product info -->
                    <div class="col-xs-12 col-sm-8 col-md-8 prodinfo">
                      <div class="title">
                          <a href=""><h2>{{$product_data->product_title}}</h2></a>
                      </div>
                      <div class="description hidden">
                          <p>{{$product_data->description}}</p>
                      </div>

                        <!-- date time -->
                        <div class="row datetime">
                            <div class="col-xs-12 col-sm-12 col-md-12 cond">
                                <p>Condition : <span class="condspan">{{$product_data->Condition}}</span></p>
                                <p>No Items : <span class="condspan">{{$product_data->number_of_items}}</span> </p>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 startingdatetime">
                                <p>Starting Date :  <span class="condspan"><br>  {{Carbon\Carbon::parse($product_data->start_date)->format('d-m-Y')}} </span></p>
                                <P>Starting Time :  <span class="condspan"><br> {{Carbon\Carbon::parse($product_data->start_date)->format('H:i')}} </span></P>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6  endingdatetime">
                                <p>Ending Date :  <span class="condspan"><br>{{Carbon\Carbon::parse($product_data->end_date)->format('d-m-Y')}}</span></p>
                                <P>Ending Time :  <span class="condspan"><br>{{Carbon\Carbon::parse($product_data->end_date)->format('H:i')}}</span></P>
                            </div>
                        </div>
                    </div>
                    <!-- price -->
                    <div class="col-xs-12 col-sm-2 col-md-2 price">
                        <h3>{{$product_data->price}} LE</h3>
                        <div class="row divbtn">
                          <div class="col-xs-12 col-sm-12 col-md-12 btn">
                              <a href="{{route('product',$product_data->id)}}"><button>View</button></a>
                          </div>
                        </div>
                    </div>
                  </div>
                 @endforeach
                </div>  <!-- end of product 1  -->

              </div>


            </div>

        </div>
    </div>




@stop
@section('page-script')

@stop
