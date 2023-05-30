<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BidController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'product_id'         => 'required|exists:sell_centers,id',
            'price'              => 'required',
        ]);
        try{
            $max_price = Bid::where('product_id',$request->product_id)->max('price');
            if($max_price > $request->price){
                toastr()->warning('Please Enter Price More Than Highest Bid');
                return redirect()->back();
            }

            Bid::create([
                'user_id'                         => auth()->user()->id,
                'product_id'                      => $request->product_id,
                'price'                           => $request->price,
            ]);

            toastr()->success('Price Sent Successfully Successfully');
        }catch(\Exception $ex){
            toastr()->error($ex->getMessage());
        }
        return redirect()->back();
    }
}
