<?php

namespace App\Http\Controllers\Api\Orders;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class IncomingOrdersController extends Controller
{
    public function incomming_orders(Request $request){
        try {
            $orders = Order::with('city','area','user','specialist')->where('specialist_id',auth()->user()->id)->get();
            return response()->json(['incoming_orders' =>  $orders, 200]);
        }catch(\Exception $ex){
            return response()->json(['message' => $ex->getMessage()], 401);
        }
    }
}
