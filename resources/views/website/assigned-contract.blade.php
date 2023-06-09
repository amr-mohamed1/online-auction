@extends('layout.website.master')
@section('title', 'Assigned Contract')

@section('page-styles')
    <link rel="stylesheet" href="{{asset('website/css/navbarlogged.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/products.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/homepage.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/contract.css')}}">
    <script src="{{asset('website/js/print.js')}}"></script>
@stop


@section('content')


    <div class="container-fluid">
        <div class="row" id="contract">

            <div class="title-head col-xs-12 col-sm-12 col-md-12">
                <h1>Purchase Agreement</h1>
            </div>

            <div class="title-head2 col-xs-12 col-sm-12 col-md-12">
                <h2>This is a legally binding contract between<br>Purchaser and Seller<br>If you do not understand it, seek legal advice</h2>
            </div>

            <div class="par-body">
                <h3 class="bolder-par">
                    PARTIES TO CONTRACT - PROPERTY.
                </h3>
                <p>
                    Purchaser and Seller acknowledge that Broker is <span class="online-auction">ONLINE&nbsp;AUCTION</span>
                    is not responsible for any financial transactions between the seller and the buyer,
                    but he guarantees the seller his right through this contract.
                </p>
                <br> <br>
                <p>
                    <span class="sign buyer-sign">
                       {{auth()->user()->first_name . " " . auth()->user()->last_name}}
                    </span>
                    , hereinafter referred to as Purchaser, offers and agrees to purchase from
                    <span class="sign seller-sign">
                        {{$product_data->owner->first_name . " " . $product_data->owner->last_name}}
                    </span>
                    , hereinafter referred to as Seller,
                    upon the terms and conditions set forth.
                </p>
                <br><br>
                <p>
                    <span class="sign buyer-sign" >
                       {{auth()->user()->first_name . " " . auth()->user()->last_name}}
                    </span>
                    will pay to buy
                    <span class="sign number-of-items" >
                        1
                    </span>
                    item of the product
                    <span class="sign product-name" >
                        {{$product_data->product_title}}
                    </span>
                    at
                    <span class="sign price-amount">
                        {{$product_data->max_price}}
                    </span>
                    Egyptian Pounds (LE).

                    <br><br>
                    The seller offered his product for sale in an online auction through the website <span class="online-auction">ONLINE&nbsp;AUCTION</span>
                    in the period from
                    <span class="sign auc-start-date">
                        {{Carbon\Carbon::parse($product_data->start_date)->format('d-m-Y')}} {{Carbon\Carbon::parse($product_data->start_date)->format('H:i')}}
                    </span>
                    to
                    <span class="sign auc-end-date">
                        {{Carbon\Carbon::parse($product_data->end_date)->format('d-m-Y')}} {{Carbon\Carbon::parse($product_data->end_date)->format('H:i')}}
                    </span>
                    and the buyer participated in the auction and won it.

                    <br><br>
                    <span class="sign supplier-sign">
                        *transfare Company*
                    </span>
                    agreed to mediate between the seller and the buyer to transfer
                    product from the seller to the buyer and to deliver the money to the seller.
                </p>

                <h4>This is a provision that all parties agree to the contract, and any party that violates this contract will be subject to legal questioning.</h4>
            </div>

            <div class="print-btn col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <button onclick="printDiv('contract')">Print</button>
            </div>
        </div>

        </div>

    </div>



@stop
@section('page-script')

@stop
