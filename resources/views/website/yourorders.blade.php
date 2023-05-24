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
          <!-- products div is where products will be added -->
            <div class="col-xs-12 col-sm-12 col-md-12 products">
              <!-- product 1 -->
              <div class="col-xs-3 col-sm-12 col-md-12 prod">
                <div class="row">
                  <!-- product photo -->
                  <div class="col-xs-12 col-sm-2 col-md-2 photo">
                    <img src="{{asset('website/images/delivery-man-with-box-postman-design-isolated-on-white-background-courier-in-hat-and-uniform-with-package-vector.webp')}}" alt="photo">
                  </div>
                  <!-- product info -->
                  <div class="col-xs-12 col-sm-8 col-md-8 prodinfo">
                    <div class="title">
                      <a href=""><h2>Product Name</h2></a>
                    </div>
                    <div class="description hidden">
                      <p>This is a description for the product i sell online using online auction application.This is a description for the product i sell online using online auction application.This is a description for the product i sell online using online auction application.This is a description for the product i sell online using online auction application.This is a description for the product i sell online using online auction application.This is a description for the product i sell online using online auction application.</p>
                    </div>

                    <!-- date time -->
                    <div class="row datetime">
                      <div class="col-xs-12 col-sm-12 col-md-12 cond">
                        <p>Condition : <span class="condspan">Almost New</span></p>
                        <p>No Items : <span class="condspan">1</span> </p>
                      </div>

                      <div class="col-xs-12 col-sm-5 col-md-5  endingdatetime">
                        <p>Address :  <span class="condspan">qualubia - benha</span></p>
                        <p>500 LE</p>
                      </div>
                    </div>
                  </div>
                  <!-- price -->
                  <div class="col-xs-12 col-sm-2 col-md-2 price">
                      <div class="row divbtn">

                        <div class="col-xs-12 col-sm-12 col-md-12 btn">
                          <button class="acc">Accept</button>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 btn">
                            <button class="ref">Refuse</button>
                          </div>
                      </div>
                  </div>
                </div>
              </div>  <!-- end of product 1  -->


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
