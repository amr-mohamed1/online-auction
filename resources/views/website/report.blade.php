@extends('layout.website.master')
@section('title', 'Report User')

@section('page-styles')
    <link rel="stylesheet" href="{{asset('website/css/navbarlogged.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/report.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/viewreport.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/controlcenter.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/homepage.css')}}">
@stop

@section('content')


      <div class="row search">

            <div class="col-xs-12 hidden-xs col-sm-7 col-md-7 col-lg-7 up">
                <button onclick="window.location.href='Sellcenter.html'">Upload a products</button>
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

            <div class="recommended col-sm-12 col-md-12 col-xl-12" style="margin-top: -30px;">
                <h1>Report a Problem</h1>
            </div>
        </div>

      </div>

      <div class="container">

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12 div-report" id="re">
                <form action="{{route('store-report-request')}}" method="POST">
                    @csrf
                <div class="uname">
                    <label for="user">Reported User</label>
                    <input type="text" name="user" value="{{ old('user') }}" id="user">
                    @error('user')
                    <p class="help text-danger">{{ $message }}</p>
                    @enderror
                    <textarea id="" name="description" cols="100" rows="8" style="resize: none;" >{{ old('description') }}</textarea>
                    @error('description')
                    <p class="help text-danger">{{ $message }}</p>
                    @enderror
                    <button type="submit">Report</button>
                </div>
                </form>
            </div>

        </div>

      </div>


@stop
@section('page-script')

@stop
