@extends('layout.website.master')
@section('title', 'Profile')

@section('page-styles')

    <link rel="stylesheet" href="{{asset('website/css/profile.css')}}">
@stop

@section('content')



    <div class="container-fluid">

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12 cover">


                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 divprofpic">
                    <img src="{{asset('storage/user_profile_images/'.auth()->user()->img)}}" alt="profile picture" class="profpic">
                </div>

                <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 divfullname">
                    <h1>{{auth()->user()->first_name . " " . auth()->user()->last_name}}</h1>
                </div>

                <div class="editprof col-xs-12  col-sm-3 col-md-3 col-lg-3 ">
                  <button onclick="window.location.href='{{route('edit_profile')}}'">Edit Profile</button>
              </div>
            </div>

        </div>
    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="profinfo">
                    <p class="inforimg"><img src="{{asset('website/images/name_tag_128px.png')}}" alt="name">{{auth()->user()->first_name . " " . auth()->user()->last_name}}</p>
                    <p class="inforimg"><img src="{{asset('website/images/Email_96px.png')}}" alt="email">{{auth()->user()->email}}</p>
                    <p class="inforimg"><img src="{{asset('website/images/age_80px.png')}}" alt="age">{{auth()->user()->birthday}}</p>
                    <p class="inforimg"><img src="{{asset('website/images/Smartphone_128px.png')}}" alt="phone">{{auth()->user()->phone}}</p>
                    <p class="inforimg"><img src="{{asset('website/images/address_80px.png')}}" alt="address">{{auth()->user()->country}} - {{auth()->user()->city}} - {{auth()->user()->address}}</p>

                    @if(auth()->user()->type == 'supplier')
                    <p class="inforimg"><img src="{{asset('website/images/delivery_80px.png')}}" alt="status">

                            @if($busy_or_not > 0)
                            <span class="statusbusy"> Busy </span>
                            @else
                            <span class="status" > Avilable </span>
                            @endif
                        </p>
                    @endif

                    <p><span class="infor">Created at :</span> {{auth()->user()->created_at}}</p>

                </div>
            </div>
        </div>
    </div>

    @if(auth()->user()->type != "supplier")
    <div class="container">
      <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12 active middleBlock" id="soldproducts">
          <h2>Uploaded Products</h2>
          <!-- products div is where products will be added -->
            <div class="col-xs-12 col-sm-12 col-md-12 products">
            @foreach($uploaded_product as $uploaded_product_data)
                <!-- product 1 -->
                    <div class="col-xs-3 col-sm-3 col-md-3 prod">
                        <div class="row">
                            <!-- product photo -->
                            <div class="col-xs-12 col-sm-2 col-md-2 photo">
                                <img src="{{asset('storage/products/'.$uploaded_product_data->product_images[0]->image_src)}}" alt="photo">
                            </div>
                            <!-- product info -->
                            <div class="col-xs-12 col-sm-8 col-md-8 prodinfo">
                                <div class="title">
                                    <a href=""><h2>{{$uploaded_product_data->product_title}}</h2></a>
                                </div>
                                <div class="description hidden">
                                    <p>{{$uploaded_product_data->description}}</p>
                                </div>

                                <!-- date time -->
                                <div class="row datetime">
                                    <div class="col-xs-12 col-sm-12 col-md-12 cond">
                                        <p>Condition : <span class="condspan">{{$uploaded_product_data->Condition}}</span></p>
                                        <p>No Items : <span class="condspan">{{$uploaded_product_data->number_of_items}}</span> </p>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 startingdatetime">
                                        <p>Starting Date :  <span class="condspan"><br>  {{Carbon\Carbon::parse($uploaded_product_data->start_date)->format('d-m-Y')}} </span></p>
                                        <P>Starting Time :  <span class="condspan"><br> {{Carbon\Carbon::parse($uploaded_product_data->start_date)->format('H:i')}} </span></P>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6  endingdatetime">
                                        <p>Ending Date :  <span class="condspan"><br>{{Carbon\Carbon::parse($uploaded_product_data->end_date)->format('d-m-Y')}}</span></p>
                                        <P>Ending Time :  <span class="condspan"><br>{{Carbon\Carbon::parse($uploaded_product_data->end_date)->format('H:i')}}</span></P>
                                    </div>
                                </div>
                            </div>
                            <!-- price -->
                            <div class="col-xs-12 col-sm-12 col-md-12 price">
                                <h3>{{$uploaded_product_data->price}} LE</h3>
                                <div class="row divbtn">
                                    <div class="col-xs-12 col-sm-12 col-md-12 btn">
                                        <a href="{{route('product',$uploaded_product_data->id)}}"><button>View</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  <!-- end of product 1  -->
                @endforeach
            </div>

        </div>

      </div>

      <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12 active middleBlock" id="boughtproducts">
          <h2>Purchased Products</h2>
          <!-- products div is where products will be added -->
            <div class="col-xs-12 col-sm-12 col-md-12 products">
            @forelse($purchased_products as $purchased_product)
                <!-- product 1 -->
                    <div class="col-xs-3 col-sm-3 col-md-3 prod">
                        <div class="row">
                            <!-- product photo -->
                            <div class="col-xs-12 col-sm-2 col-md-2 photo">
                                <img src="{{asset('storage/products/'.$purchased_product->product_images[0]->image_src)}}" alt="photo">
                            </div>
                            <!-- product info -->
                            <div class="col-xs-12 col-sm-8 col-md-8 prodinfo">
                                <div class="title">
                                    <a href=""><h2>{{$purchased_product->product_title}}</h2></a>
                                </div>
                                <div class="description hidden">
                                    <p>{{$purchased_product->description}}</p>
                                </div>

                                <!-- date time -->
                                <div class="row datetime">
                                    <div class="col-xs-12 col-sm-12 col-md-12 cond">
                                        <p>Condition : <span class="condspan">{{$purchased_product->Condition}}</span></p>
                                        <p>No Items : <span class="condspan">{{$purchased_product->number_of_items}}</span> </p>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 startingdatetime">
                                        <p>Starting Date :  <span class="condspan"><br>  {{Carbon\Carbon::parse($purchased_product->start_date)->format('d-m-Y')}} </span></p>
                                        <P>Starting Time :  <span class="condspan"><br> {{Carbon\Carbon::parse($purchased_product->start_date)->format('H:i')}} </span></P>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6  endingdatetime">
                                        <p>Ending Date :  <span class="condspan"><br>{{Carbon\Carbon::parse($purchased_product->end_date)->format('d-m-Y')}}</span></p>
                                        <P>Ending Time :  <span class="condspan"><br>{{Carbon\Carbon::parse($purchased_product->end_date)->format('H:i')}}</span></P>
                                    </div>
                                </div>
                            </div>
                            <!-- price -->
                            <div class="col-xs-12 col-sm-12 col-md-12 price">
                                <h3>{{$purchased_product->max_price}} LE</h3>
                                <div class="row divbtn">
                                    <div class="col-xs-12 col-sm-12 col-md-12 btn">
                                        <a href="{{route('assigned-contract',$purchased_product->id)}}"><button>Assigned Contract</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  <!-- end of product 1  -->
                @empty
                    <p style="color:red;text-align: center"></p>
            @endforelse

            </div>

        </div>
      </div>
  </div>
    @endif

@stop
@section('page-script')

@stop
