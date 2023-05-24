<?php

namespace App\Http\Controllers\Api\Orders;

use App\Http\Controllers\Controller;
use App\Models\FeedBack;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderHistoryController extends Controller
{
    public function order_history(Request $request){
        try {
            $orders = Order::with('city','area','user','specialist')->where('user_id',auth()->user()->id)->get();
            return response()->json(['orders' =>  $orders, 200]);
        }catch(\Exception $ex){
            return response()->json(['message' => $ex->getMessage()], 401);
        }
    }
}
