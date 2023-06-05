@extends('layout.website.master')
@section('title', 'Assigned Contract')

@section('page-styles')
    <link rel="stylesheet" href="{{asset('website/css/navbarlogged.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/products.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/yourorders.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="{{asset('website/js/active-upcoming-expired-switch.js')}}"></script>

@stop


@section('content')


    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 product" style="background-image: url({{asset('website/images/delivery-man-with-box-postman-design-isolated-on-white-background-courier-in-hat-and-uniform-with-package-vector.webp')}});">

        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 active middleBlock" id="acttt">
            <h3 style="font-weight: 700;font-size: 35px;text-align: center;padding-bottom: 20px">In-Progress Orders</h3>
          <!-- products div is where products will be added -->
            <div class="col-xs-12 col-sm-12 col-md-12 products">
                @forelse($avilable_orders as $order)
                    <!-- product 1 -->
                        <div class="col-xs-3 col-sm-12 col-md-12 prod">
                            <div class="row">
                                <!-- product photo -->
                                <div class="col-xs-12 col-sm-2 col-md-2 photo">
                                    <img src="{{asset('storage/products/'.$order->product_images[0]->image_src)}}" alt="photo">
                                </div>
                                <!-- product info -->
                                <div class="col-xs-12 col-sm-8 col-md-8 prodinfo">
                                    <div class="title">
                                        <a href=""><h2>{{$order->product_title}}</h2></a>
                                    </div>
                                    <div class="description hidden">
                                        <p>{{$order->description}}</p>
                                    </div>

                                    <!-- date time -->
                                    <div class="row datetime">
                                        <div class="col-xs-12 col-sm-12 col-md-12 cond">
                                            <p>Condition : <span class="condspan">{{$order->Condition}}</span></p>
                                            <p>No Items : <span class="condspan">{{$order->number_of_items}}</span> </p>
                                            <p>Owner : <span class="condspan">{{$order->buyer->first_name . " " . $order->buyer->last_name}}</span> </p>
                                            <p>Owner Phone : <span class="condspan">{{$order->buyer->phone}}</span> </p>
                                        </div>

                                        <div class="col-xs-12 col-sm-5 col-md-5  endingdatetime">
                                            <p>Address :  <span class="condspan">{{$order->buyer->country}} - {{$order->buyer->city}} - {{$order->buyer->address}}</span></p>
                                            <p>{{$order->max_price}} LE</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- price -->
                                <div class="col-xs-12 col-sm-2 col-md-2 price">
                                    <div class="row divbtn">

                                        @if($order->delivery_products[0]->order_status == 'in-progress')
                                        <div class="col-xs-12 col-sm-12 col-md-12 btn">
                                            <a href="{{route('complete_order',$order->id)}}"><button class="acc">Complete</button></a>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 btn">
                                            <a href="{{route('refuse_order',$order->id)}}"><button class="ref">Refuse</button></a>
                                        </div>
                                        @else
                                            <button class="acc" disabled>Completed</button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>  <!-- end of product 1  -->
                @empty
                    <p style="color: red;text-align: center"> There Is No Orders To show</p>
                @endforelse



            </div>

        </div>



      </div>
    </div>



@stop
@section('page-script')
    <script type="text/javascript">
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
