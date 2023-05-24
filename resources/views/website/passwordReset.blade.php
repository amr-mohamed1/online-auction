@extends('layout.website.master')
@section('title', 'Password Reset')

@section('page-styles')
    <link rel="stylesheet" href="{{asset('website/css/pass-reset.css')}}">
@stop


@section('content')
    <div class="container">
        <div class="row">

          <form action="" method="post">


            <div class="col-xs-push-3 col-xs-12 col-sm-push-3 col-sm-6 col-md-push-3  col-md-6" id="d2">
              <section id="sec3">
                    <form action="">
                        <h1>Account Information</h1>
                        <div id="divmail" class="col-sm-12 col-md-12">
                        <label for="mail">Email Address</label>
                        <input type="email" id="mail" class="forminputs" placeholder="username_123 @gmail.com" required inputmode="email">
                        </div>
                        <div id="divsubbutton" class="col-sm-12 col-md-12">
                        <input type="submit" id="subbutton" class="forminputs" value="Get Code">
                        </div>
                    </form>
                </section>

            </div>

          </form>

        </div>
    </div>

@stop
@section('page-script')

@stop
