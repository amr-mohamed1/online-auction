@extends('layout.website.master')
@section('title', 'Product')

@section('page-styles')
    <link rel="stylesheet" href="{{asset('website/css/navbarlogged.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/register.css')}}">
{{--    <link rel="stylesheet" href="{{asset('website/css/upload.css')}}">--}}
    <link rel="stylesheet" href="{{asset('website/css/profile.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/viewproduct.css')}}">
@stop


@section('content')




    <div class="container">
      <div id="fullpage" onclick="this.style.display='none';"></div>

        <div class="row">

              <div class="col-xs-6 col-sm-6 col-md-5 " id="d1">


                <div class="smallimages">

                    <div class="column">
                        <img src="{{asset('website/images/artwork/http___cdn.cnn.com_cnnnext_dam_assets_190430171751-mona-lisa.jpg')}}" alt="Nature" style="width:100%" onclick="myFunction(this);">
                    </div>

                    <div class="column">
                        <img src="{{asset('website/images/1325.jpg')}}" alt="Snow" style="width:100%" onclick="myFunction(this);">
                    </div>

                    <div class="column">
                        <img src="{{asset('website/images/16576.jpg')}}" alt="Mountains" style="width:100%" onclick="myFunction(this);">
                    </div>

                    <div class="column">
                        <img src="{{asset('website/images/2010.i123.005..car headlights AD composition.jpg')}}" alt="Lights" style="width:100%" onclick="myFunction(this);">
                    </div>

                  </div>

                  <div class="mainimg col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <img id="expandedImg" style="width:100%" src="{{asset('website/images/artwork/http___cdn.cnn.com_cnnnext_dam_assets_190430171751-mona-lisa.jpg')}}">
                    <div id="imgtext"></div>
                </div>

              </div>


              <div class="col-xs-6 col-sm-6 col-md-6 " id="d2">
                <div class="prod-id" hidden>
                    <p>1</p>
                </div>
                <div class="Productname-seller">

                    <div class="productname col-sm-12 col-md-12 col-lg-12">
                      <h1>{{$product->product_title}}</h1>
                    </div>


                    <div class="seller col-sm-12 col-md-12 col-lg-12">

                      <a href="profile.html">
                        <div class="seller-img col-sm-2 col-md-2">
                          <img src="{{asset('website/images/img_avatar.png')}}" alt="Profile Pic">
                        </div>
                        <div class="seller-name col-sm-10 col-md-10">
                          mohamad abdelrahman
                        </div>
                      </a>

                    </div>

                  </div>


                  <div class="product-desc col-sm-12 col-md-12" id="descr">
                    <p>{{$product->description}}</p>
                  </div>

                  <div class="product-desc num col-sm-12 col-md-12">
                    <p><span class="span-date-time">Number&nbsp;of&nbsp;Items:</span> {{$product->number_of_items}}</p>
                  </div>

                  <div class="product-desc col-sm-12 col-md-12">
                    <p><span class="span-date-time">Condition:</span> {{$product->Condition}}</p>
                  </div>

                  <div class="product-desc col-sm-12 col-md-12">
                    <p><span class="span-date-time">Category:</span> <span id="prod-cat"><a href="{{route('all_products',$product->category->id)}}">{{$product->category->name}}</a></span></p>
                  </div>



                  <div class="date-time col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                    <div class="st-date-time">
                      <div class="sdate col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <p><span class="span-date-time">Starting Date:</span> {{Carbon\Carbon::parse($product->start_date)->format('d-m-Y')}}</p>
                      </div>
                      <div class="stime col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" >
                        <p><span class="span-date-time">Starting Time:</span> {{Carbon\Carbon::parse($product->start_date)->format('H:i')}} </p>
                      </div>
                    </div>

                    <div class="lt-date-time">
                      <div class="ldate col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <p><span class="span-date-time">Ending Date:</span>{{Carbon\Carbon::parse($product->end_date)->format('d-m-Y')}}</p>
                      </div>
                      <div class="ltime col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <p><span class="span-date-time">Ending Time:</span> {{Carbon\Carbon::parse($product->end_date)->format('H:i')}}</p>
                      </div>
                    </div>

                  </div>

                  <div class="product-st-price col-sm-12 col-md-12">
                    <h4><span class="span-date-time">Starting Price:</span> {{$product->price}} <span style="font-family: Mynerve; font-weight: 900;">&nbsp;LE</span></h4>
                  </div>


                  <div class="part-btn col-xs-12 col-sm-12 col-md-12">
                      <button onclick="window.location.href='dashboard.html'">participate</button>
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
              <!-- product 1 -->
              <div class="col-xs-3 col-sm-3 col-md-3 prod">
                <div class="row">
                  <!-- product photo -->
                  <div class="col-xs-12 col-sm-2 col-md-2 photo">
                    <img src="{{asset('website/images/ship/211223182650-04-storylines-residential-cruise-ship-concept.jpg')}}" alt="photo">
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
                      <div class="col-xs-12 col-sm-6 col-md-6 startingdatetime">
                        <p>Starting Date :  <span class="condspan"><br>5 - 10 - 2023</span></p>
                        <P>Starting Time :  <span class="condspan"><br>18:00</span></P>
                      </div>
                      <div class="col-xs-12 col-sm-6 col-md-6  endingdatetime">
                        <p>Ending Date :  <span class="condspan"><br>6 - 10 - 2023</span></p>
                        <P>Ending Time :  <span class="condspan"><br>18:00</span></P>
                      </div>
                    </div>
                  </div>
                  <!-- price -->
                  <div class="col-xs-12 col-sm-12 col-md-12 price">
                      <h3>500 LE</h3>
                      <div class="row divbtn">
                        <div class="col-xs-12 col-sm-12 col-md-12 btn">
                          <button>View</button>
                        </div>
                      </div>
                  </div>
                </div>
              </div>  <!-- end of product 1  -->

               <!-- product 1 -->
              <div class="col-xs-3 col-sm-3 col-md-3 prod">
                <div class="row">
                  <!-- product photo -->
                  <div class="col-xs-12 col-sm-2 col-md-2 photo">
                    <img src="{{asset('website/images/ship/211223182650-04-storylines-residential-cruise-ship-concept.jpg')}}" alt="photo">
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
                        <p>Starting Date :  <span class="condspan"><br>5 - 10 - 2023</span></p>
                        <P>Starting Time :  <span class="condspan"><br>18:00</span></P>
                      </div>
                      <div class="col-xs-12 col-sm-5 col-md-5  endingdatetime">
                        <p>Ending Date :  <span class="condspan"><br>6 - 10 - 2023</span></p>
                        <P>Ending Time :  <span class="condspan"><br>18:00</span></P>
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

              <!-- product 1 -->
              <div class="col-xs-3 col-sm-3 col-md-3 prod">
                              <div class="row">
                                <!-- product photo -->
                                <div class="col-xs-12 col-sm-2 col-md-2 photo">
                                  <img src="{{asset('website/images/ship/211223182650-04-storylines-residential-cruise-ship-concept.jpg')}}" alt="photo">
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
                                    <div class="col-xs-12 col-sm-6 col-md-6 startingdatetime">
                                      <p>Starting Date :  <span class="condspan"><br>5 - 10 - 2023</span></p>
                                      <P>Starting Time :  <span class="condspan"><br>18:00</span></P>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6  endingdatetime">
                                      <p>Ending Date :  <span class="condspan"><br>6 - 10 - 2023</span></p>
                                      <P>Ending Time :  <span class="condspan"><br>18:00</span></P>
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


    <footer class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-sm-3 col-md-3">
          <h3>Useful Links</h3>
          <a href="homepage.html">Home Page</a>
          <a href="About.html">About us</a>
          <a href="Auctions.html">Categories</a>
          <a href="homepage.html">Recommended products</a>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3">
          <h3>Need Help ?</h3>
          <a href="About.html">Q & A</a>
          <a href="About.html">Privacy</a>
          <a href="About.html">Terms & Conditions</a>
          <a href="report.html">Report a problem</a>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3">
          <h3>For Jobs</h3>
          <a href="About.html">About the job</a>
          <a href="Suppliersignup.html">Sign as supplier</a>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3">
          <h3>Contact Us</h3>
          <img src="{{asset('website/images/Facebook_100px.png')}}" alt="Facebook-logo" class="contact">
          <a href=""  class="contact">Facebook</a> <br><br>
          <img src="{{asset('website/images/Instagram_100px.png')}}" alt="Instagram-logo" class="contact">
          <a href=""  class="contact">Instagram</a> <br><br>
          <img src="{{asset('website/images/twitter_circled_100px.png')}}" alt="Twitter-logo" class="contact">
          <a href=""  class="contact">Twitter</a> <br><br>
          <img src="{{asset('website/images/gmail_100px.png')}}" alt="Gmail-logo" class="contact">
          <a href="mailto: kokamada2000@gmail.com"  class="contact" >Send email</a>

        </div>
      </div>

      <div class="row">

          <div class="col-xs-12 col-sm-12 col-md-6" id="fe">
            <form action="" method="post">
              <h3>Give Feedback</h3>
              <textarea name="feedback" id="feedback" cols="70" rows="5"></textarea>
              <div class="col-xs-12 hidden-sm hidden-md hidden-lg hidden-xl">
                <input type="submit" name="feed" id="feedbutton" >
              </div>
            </form>
          </div>
      </div>
    </footer>



@stop
@section('page-script')
    <script src="{{asset('website/js/img-gallery.js')}}"></script>
@stop
