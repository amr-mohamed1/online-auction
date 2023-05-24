@extends('layout.website.master')
@section('title', 'Profile')

@section('page-styles')
    <link rel="stylesheet" href="{{asset('website/css/navbarlogged.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/profile.css')}}">
@stop

@section('content')



    <div class="container-fluid">

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12 cover">


                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 divprofpic">
                    <img src="{{asset('website/images/img_avatar.png')}}" alt="profile picture" class="profpic">
                </div>

                <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 divfullname">
                    <h1>Full Name</h1>
                </div>

                <div class="editprof col-xs-12  col-sm-3 col-md-3 col-lg-3 ">
                  <button onclick="window.location.href='editprofile.html'">Edit Profile</button>
              </div>
            </div>

        </div>
    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="profinfo">
                    <p class="inforimg"><img src="{{asset('website/images/name_tag_128px.png')}}" alt="name">Full Name</p>
                    <p class="inforimg"><img src="{{asset('website/images/Email_96px.png')}}" alt="email">email_address123@gmail.com</p>
                    <p class="inforimg"><img src="{{asset('website/images/age_80px.png')}}" alt="age">22</p>
                    <p class="inforimg"><img src="{{asset('website/images/Smartphone_128px.png')}}" alt="phone">01234567890</p>
                    <p class="inforimg"><img src="{{asset('website/images/address_80px.png')}}" alt="address">Qualubia - Benha - Kafr Elgazar</p>
                    <p class="inforimg"><img src="{{asset('website/images/delivery_80px.png')}}" alt="status"><span class="statusbusy"> Busy</span></p>
                    <p><span class="infor">Created at :</span> 7/3/2023</p>

                </div>
            </div>
        </div>
    </div>


    <div class="container">
      <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12 active middleBlock" id="soldproducts">
          <h2>Uploaded Products</h2>
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

      <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12 active middleBlock" id="boughtproducts">
          <h2>Purchased Products</h2>
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
                          <button onclick="window.location.href='assigned-contract.html'">View</button>
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

@stop
@section('page-script')

@stop