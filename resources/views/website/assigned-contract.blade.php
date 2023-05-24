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
                        mohamed ahmed mohamed
                    </span>
                    , hereinafter referred to as Purchaser, offers and agrees to purchase from
                    <span class="sign seller-sign">
                        ahmed mohamed ahmed
                    </span>
                    , hereinafter referred to as Seller,
                    upon the terms and conditions set forth.
                </p>
                <br><br>
                <p>
                    <span class="sign buyer-sign" >
                        mohamed ahmed mohamed
                    </span>
                    will pay to buy
                    <span class="sign number-of-items" >
                        1
                    </span>
                    item of the product
                    <span class="sign product-name" >
                        pepsi
                    </span>
                    at
                    <span class="sign price-amount">
                        20
                    </span>
                    Egyptian Pounds (LE).

                    <br><br>
                    The seller offered his product for sale in an online auction through the website <span class="online-auction">ONLINE&nbsp;AUCTION</span>
                    in the period from
                    <span class="sign auc-start-date">
                        5/12/2023 8:00
                    </span>
                    to
                    <span class="sign auc-end-date">
                        5/12/2023 9:00
                    </span>
                    and the buyer participated in the auction and won it.

                    <br><br>
                    <span class="sign supplier-sign">
                        mostafa mohamed ahmed
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
