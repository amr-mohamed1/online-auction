@extends('layout.website.master')
@section('title', 'Assigned Contract')

@section('page-styles')
    <link rel="stylesheet" href="{{asset('website/css/navbarlogged.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/products.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="{{asset('website/js/active-upcoming-expired-switch.js')}}"></script>

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
          <div id="subScription" class="menu active col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">Active Auctions</div>
          <div id="inStore" class="menu col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">Upcoming Auctions</div>
          <div id="onLine" class="menu col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">Expired Auctions</div>
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
        <div class="col-xs-12 col-sm-12 col-md-12 upcoming middleBlock" id="uppp">
          <!-- products div is where products will be added -->
            <div class="col-xs-12 col-sm-12 col-md-12 products">
              <!-- product 1 -->
              <div class="col-xs-3 col-sm-12 col-md-12 prod">
                <div class="row">
                  <!-- product photo -->
                  <div class="col-xs-12 col-sm-2 col-md-2 photo">
                    <img src="{{asset('website/images/artwork/most-famous-paintings-2.jpg')}}" alt="photo">
                  </div>
                  <!-- product info -->
                  <div class="col-xs-12 col-sm-8 col-md-8 prodinfo">
                    <div class="title">
                      <a href=""><h2>Product</h2></a>
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

               <!-- product 1 -->
               <div class="col-xs-3 col-sm-12 col-md-12 prod">
                <div class="row">
                  <!-- product photo -->
                  <div class="col-xs-12 col-sm-2 col-md-2 photo">
                    <img src="{{asset('website/images/artwork/most-famous-paintings-2.jpg')}}" alt="photo">
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

        <div class="col-xs-12 col-sm-12 col-md-12 expired middleBlock" id="exppp">
          <!-- products div is where products will be added -->
            <div class="col-xs-12 col-sm-12 col-md-12 products">
              <!-- product 1 -->
              <div class="col-xs-3 col-sm-12 col-md-12 prod">
                <div class="row">
                  <!-- product photo -->
                  <div class="col-xs-12 col-sm-2 col-md-2 photo">
                    <img src="{{asset('website/images/artwork/The_Scream_by_Edvard_Munch_1893_800x.webp')}}" alt="photo">
                  </div>
                  <!-- product info -->
                  <div class="col-xs-12 col-sm-8 col-md-8 prodinfo">
                    <div class="title">
                      <a href=""><h2>Product</h2></a>
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

               <!-- product 1 -->
               <div class="col-xs-3 col-sm-12 col-md-12 prod">
                <div class="row">
                  <!-- product photo -->
                  <div class="col-xs-12 col-sm-2 col-md-2 photo">
                    <img src="{{asset('website/images/artwork/The_Scream_by_Edvard_Munch_1893_800x.webp')}}" alt="photo">
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
