@extends('layout.website.master')
@section('title', 'Confirm Password')

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
                        <div id="divcode" class="col-sm-12 col-md-12">
                            <label for="code">Code</label>
                            <input type="number" id="code" class="forminputs" placeholder="# # # #" required inputmode="numeric">
                        </div>
                        <div id="divpass" class="col-sm-12 col-md-12">
                            <label for="pass">New Password</label>
                            <input type="password" id="pass" class="forminputs" placeholder="* * * * * * * *" required>
                        </div>
                        <div id="divconfpass" class="col-sm-12 col-md-12">
                            <label for="confpass">Confirm New Password</label>
                            <input type="password" id="confpass" class="forminputs" placeholder="* * * * * * * *" required>
                        </div>
                        <div id="divsubbutton" class="col-sm-12 col-md-12">
                        <input type="submit" id="subbutton" class="forminputs" value="Reset">
                        </div>
                    </form>
                </section>

            </div>


        </div>
    </div>

@stop
@section('page-script')

@stop
