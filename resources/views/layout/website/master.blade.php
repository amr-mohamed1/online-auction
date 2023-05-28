<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title Begin -->
    <title>Online Auction - @yield('title')</title>
    <link rel="shortcut icon" href="{{asset('website/images/favicon.ico')}}">
    <!-- End of title -->

    <!-- Page Description -->
    <meta name="description" content="A safe, easy and simple-to-use online auction site that provides you with the ability to buy products , display and sell your products in an auction that has a specific start and end time. The sale process takes place through trusted and signed contracts among seller, buyer, and supplier. The site provides job opportunities for young people as delivery workers.">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mynerve&display=swap" rel="stylesheet">
    <!-- End of Fonts -->

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('website/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/navbar.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/footer.css')}}">
    @if (trim($__env->yieldContent('page-styles')))
        @yield('page-styles')
    @endif
</head>
<body>
<!-- jQuery (Bootstrap JS plugins depend on it) -->
<script src="{{asset('website/js/jquery-2.1.4.min.js')}}" ></script>
<script src="{{asset('website/js/bootstrap.min.js')}}"></script>
<script src="{{asset('website/js/ajax-utils.js')}}"></script>

<!-- js code -->



<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-md-12">

            <!-- Navigation Bar -->
            <header class="navbar navbar-inverse">
                <div class="container-fluid">

                    <div class="navbar-header">
                        <a href="index.html" id="logo">
                            <img src="{{asset('website/images/logo.png')}}" alt="Logo" title="Home"  width="100px">
                        </a>
                    </div>

                    <!-- Create Toogle Button -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#colabse" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- End of Create Toogle Button -->

                    <div class="container-fluid collapse navbar-collapse" id="colabse">
                        <ul class="nav navbar-nav navbar-right" id="navlist">
                            <li class="lista"><a href="{{route('index')}}" id="home">Home</a></li>
                            <li class="lista" id="auctions"><a href="{{route('auctions')}}">Auctions</a></li>
                            <li class="lista" id="laws"><a href="{{route('index')}}#law-sec">Laws</a></li>
                            <li class="lista" id="about"><a href="{{route('about')}}">About</a></li>
                            <li class="lista" ><a href="{{route('site_login')}}" id="login">Login</a></li>
                            <li class="lista" ><a href="{{route('signup')}}" id="signup">Signup</a></li>
                        </ul>
                    </div>

                </div>
            </header>
            <!-- End of Navigation Bar -->
        </div>
    </div>  <!--Row closing tag-->
</div>


    @yield('content')




<footer class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-3 col-md-3">
            <h3>Useful Links</h3>
            <a href="index.html">Home Page</a>
            <a href="{{route('about')}}">About us</a>
            <a href="html/Auctions.html">Categories</a>
            <a href="html/Login.html">Recommended products</a>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3">
            <h3>Need Help ?</h3>
            <a href="html/About.html">Q & A</a>
            <a href="html/About.html">Privacy</a>
            <a href="html/About.html">Terms & Conditions</a>
            <a href="html/Login.html">Report a problem</a>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3">
            <h3>For Jobs</h3>
            <a href="html/About.html">About the job</a>
            <a href="html/Suppliersignup.html">Sign as supplier</a>
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
        <div class="col-md-6 mb-5 pb-5" id="fe">
            <form action="{{route('store-feedback')}}" method="post">
                @csrf
                <h3>Give Feedback</h3>
                <textarea name="description" id="feedback" cols="70" rows="3"></textarea>
                <input type="submit" name="feed" id="feedbutton">
            </form>
        </div>
    </div>
</footer>



<script src="{{asset('website/js/app.js')}}"></script>

@if (trim($__env->yieldContent('page-script')))
    @yield('page-script')
@endif
</body>
</html>
