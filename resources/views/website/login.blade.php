@extends('layout.website.master')
@section('title', 'Login')

@section('page-styles')
    <link rel="stylesheet" href="{{asset('website/css/login.css')}}">
@stop


@section('content')

    <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" id="loginside">

            <div class="col-sm-12  col-md-12 col-lg-12 col-xl-12" id="divlogo2" >
                <img src="{{asset('website/images/LOGINIMG.png')}}" alt="loading" id="logo2">
            </div>

            <div class="col-sm-12  col-md-12 col-lg-12 col-xl-12" id="divform" >
              <form method="post" action="{{route('login_method')}}">
                  @csrf
                  <div class="form-outline mb-4">
                    <label for="mail" class="lab">Email Address</label>
                    <input type="email" id="mail" placeholder="username_123 @gmail.com" class="form-control form-control-lg info" name="email" autofocus required inputmode="email"/>
                  </div>

                  <div class="form-outline mb-4">
                    <label for="pass" class="lab">Password</label>
                    <input type="password" name="password" id="pass" placeholder="* * * * * * * * * *" class="form-control form-control-lg info" required/>
                  </div>

                  <a class="small text-muted" href="{{route('passwordReset')}}" id="passwordreset">Forgot password?</a>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" id="loginbtn" type="submit">Login</button>
                  </div>


              </form>
            </div>

          </div>
          <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" id="signside">
            <img src="{{asset('website/images/online-auction-concept-vector-34216329 copy.png')}}" alt="Auction-artwork">
            <p>Get an Account to Participate in Auctions</p>
            <button type="button" onclick="window.location.href='{{route('signup')}}'" id="signbtn">Signup</button>
      </div>

        </div>
    </div>


@stop
@section('page-script')

@stop
