@extends('layout.website.master')
@section('title', 'Confirm Password')

@section('page-styles')
    <link rel="stylesheet" href="{{asset('website/css/pass-reset.css')}}">
@stop


@section('content')

    <div class="container">
        <div class="row">



            <div class="col-xs-push-3 col-xs-12 col-sm-push-3 col-sm-6 col-md-push-3  col-md-6" id="d2">
              <section id="sec3">
                    <form action="{{route('reset_user_password')}}" method="POST">
                        @csrf
                        <h1>Account Information</h1>
                        <div id="divcode" class="col-sm-12 col-md-12">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="forminputs" placeholder="email address" required>
                            @error('email')
                            <p class="help text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div id="divcode" class="col-sm-12 col-md-12">
                            <label for="code">Code</label>
                            <input type="number" id="code" name="code" class="forminputs" placeholder="# # # #" required inputmode="numeric">
                            @error('code')
                            <p class="help text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div id="divpass" class="col-sm-12 col-md-12">
                            <label for="pass">New Password</label>
                            <input type="password" id="pass" name="password" class="forminputs" placeholder="* * * * * * * *" required>
                            @error('password')
                            <p class="help text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div id="divconfpass" class="col-sm-12 col-md-12">
                            <label for="confpass">Confirm New Password</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" class="forminputs" placeholder="* * * * * * * *" required>
                            @error('password_confirmation')
                            <p class="help text-danger">{{ $message }}</p>
                            @enderror
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
