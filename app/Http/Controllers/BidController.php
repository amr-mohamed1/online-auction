<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use App\Models\SellCenter;
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
            $product_min_price = SellCenter::find($request->product_id);
            if($max_price > $request->price || $product_min_price->price > $request->price){
                toastr()->warning('Please Enter Price More Than Highest Bid');
                return redirect()->back();
            }

            Bid::create([
                'user_id'                         => auth()->user()->id,
                'product_id'                      => $request->product_id,
                'price'                           => $request->price,
            ]);
            SellCenter::where('id',$request->product_id)->update([
                'buyer_id'=>auth()->user()->id,
                'max_price'=>$request->price,
            ]);

            toastr()->success('Price Sent Successfully Successfully');
        }catch(\Exception $ex){
            toastr()->error($ex->getMessage());
        }
        return redirect()->back();
    }
}
