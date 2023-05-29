<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SellCenter;
use Illuminate\Http\Request;

class CategoryController extends Controller
{


    public function all_categories(){
        $categories = Category::get();
        return view('website.auctions',compact('categories'));
    }

    public function get_category_products($id){
        $products = SellCenter::with('product_images')->where('category_id',$id)->get();
        return view('website.all_products',compact('products'));
    }

    public function product_data($id){
        $random_products = SellCenter::with('product_images','category','owner')->inRandomOrder()->limit(3)->get();
        $product = SellCenter::with('product_images','category','owner')->where('id',$id)->first();
        return view('website.product',compact('product','random_products'));
    }
}
