<?php

namespace App\Http\Controllers;

use App\Models\SellCenter;
use Illuminate\Http\Request;

class HomePageController extends Controller
{

    public function index(){
        $random_products = SellCenter::with('product_images','category','owner')->inRandomOrder()->limit(3)->get();
        return view('website.homepage',compact('random_products'));
    }


    public function search_for_product(Request $request)
    {
        $request->validate([
            'search'      => 'required|min:3',
        ]);
        try {
            $product = SellCenter::with('product_images','category','owner')->where('product_title','like','%'.$request->search.'%')->inRandomOrder()->limit(3)->get();
            $random_products = SellCenter::with('product_images','category','owner')->inRandomOrder()->limit(3)->get();

            return view('website.search_results',compact('product','random_products'));

        } catch (\Exception $ex) {
            toastr()->error($ex->getMessage());
            return redirect()->route('homepage');
        }
    }
}
