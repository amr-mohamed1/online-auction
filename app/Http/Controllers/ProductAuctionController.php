<?php

namespace App\Http\Controllers;

use App\Models\SellCenter;
use Illuminate\Http\Request;

class ProductAuctionController extends Controller
{
    public function index($id){
        $random_products = SellCenter::with('product_images','category','owner')->inRandomOrder()->limit(3)->get();
        $product = SellCenter::with('product_images','category','owner')->where('id',$id)->first();
        return view('website.product_dashboard',compact('product','random_products'));
    }
}
