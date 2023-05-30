<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use App\Models\SellCenter;
use Illuminate\Http\Request;

class ProductAuctionController extends Controller
{
    public function index($id){
        $random_products = SellCenter::with('bid_product','product_images','category','owner')->inRandomOrder()->limit(3)->get();
        $product = SellCenter::with('bid_product','product_images','category','owner')->where('id',$id)->first();
        $all_bids = Bid::where('product_id',$id);
        $user_last_bid = Bid::where('product_id',$id)->where('User_id',auth()->user()->id)->orderBy('id', 'desc')->limit(1)->get();
        return view('website.product_dashboard',compact('product','random_products','all_bids','user_last_bid'));
    }
}
