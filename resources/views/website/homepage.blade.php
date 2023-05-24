@extends('layout.website.master')
@section('title', 'Home Page')

@section('page-styles')
    <link rel="stylesheet" href="{{asset('website/css/navbarlogged.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/products.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/homepage.css')}}">
@stop


@section('content')


      <div class="row search">

            <div class="col-xs-12 hidden-xs col-sm-7 col-md-7 col-lg-7 up">
                <button onclick="window.location.href='{{route('sellcenter')}}'">Upload a products</button>
            </div>

            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 sear">

                <form action="" method="">
                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8" id="se">
                        <input type="search" placeholder="Search.." name="search" autocomplete="">
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

            <div class="col-xs-12 col-sm-12 col-md-12 product" style=" border-radius: 20px;background-image: url({{asset('website/images/5991.jpg')}}); height: 300px;">
                    <h1 style="margin-top: -20px;">ONLINE AUCTION</h1>
                    <p >Buy the products you want in the online auction | Bid for what you want</p>
            </div>

        </div>

    </div>


      <div class="container">
        <div class="row">
            <div class="recommended col-sm-12 col-md-12 col-xl-12">
                <h2>Recommended Products</h2>
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
                  <div class="row">
                    <!-- product photo -->
                    <div class="col-xs-12 col-sm-2 col-md-2 photo">
                      <img src="{{asset('website/images/artwork/http___cdn.cnn.com_cnnnext_dam_assets_190430171751-mona-lisa.jpg')}}" alt="photo">
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
                        <div class="col-xs-12 col-sm-5 col-md-5 startingdatetime">
                          <p>Starting Date :  <span class="condspan">5 - 10 - 2023</span></p>
                          <P>Starting Time :  <span class="condspan">18:00</span></P>
                        </div>
                        <div class="col-xs-12 col-sm-5 col-md-5  endingdatetime">
                          <p>Ending Date :  <span class="condspan">6 - 10 - 2023</span></p>
                          <P>Ending Time :  <span class="condspan">18:00</span></P>
                        </div>
                      </div>
                    </div>
                    <!-- price -->
                    <div class="col-xs-12 col-sm-2 col-md-2 price">
                        <h3>500 LE</h3>
                        <div class="row divbtn">
                          <div class="col-xs-12 col-sm-12 col-md-12 btn">
                            <button onclick="window.location.href='product.html'">View</button>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>  <!-- end of product 1  -->

                 <!-- product 1 -->
                 <div class="col-xs-3 col-sm-12 col-md-12 prod">
                  <div class="row">
                    <!-- product photo -->
                    <div class="col-xs-12 col-sm-2 col-md-2 photo">
                      <img src="{{asset('website/images/artwork/http___cdn.cnn.com_cnnnext_dam_assets_190430171751-mona-lisa.jpg')}}" alt="photo">
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
                        <div class="col-xs-12 col-sm-5 col-md-5 startingdatetime">
                          <p>Starting Date :  <span class="condspan">5 - 10 - 2023</span></p>
                          <P>Starting Time :  <span class="condspan">18:00</span></P>
                        </div>
                        <div class="col-xs-12 col-sm-5 col-md-5  endingdatetime">
                          <p>Ending Date :  <span class="condspan">6 - 10 - 2023</span></p>
                          <P>Ending Time :  <span class="condspan">18:00</span></P>
                        </div>
                      </div>
                    </div>
                    <!-- price -->
                    <div class="col-xs-12 col-sm-2 col-md-2 price">
                        <h3>500 LE</h3>
                        <div class="row divbtn">
                          <div class="col-xs-12 col-sm-12 col-md-12 btn">
                            <button>View</button>
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

@stop
