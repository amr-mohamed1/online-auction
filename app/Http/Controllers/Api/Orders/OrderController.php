<?php

namespace App\Http\Controllers\Api\Orders;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Traits\UploadImages;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /*
     * upload image trait
     */
    use UploadImages;

    public function store(Request $request){
        try{
            $request->validate([
                'specialist_id'                 => 'required|exists:users,id',
                'city_id'                       => 'required|exists:cities,id',
                'area_id'                       => 'required|exists:areas,id',
                'user_address'                  => 'required',
                'order_description'             => 'required',
            ]);
            if(isset($request->image)){
                $path = $this->upload_img($request,'image','order_description_image');
            }else{
                $path = NULL;
            }
            Order::create([
                'user_id'           => auth()->user()->id,
                'specialist_id'     => $request->specialist_id,
                'city_id'           => $request->city_id,
                'area_id'           => $request->area_id,
                'user_address'              => $request->user_address,
                'order_description'         => $request->order_description,
                'order_status'              => 'Pending',
                'attached_img'              => $path
            ]);
            return response()->json(['message' =>  'Order saved successfully'], 201);
        }catch(\Exception $ex){
            return response()->json(['message' => $ex->getMessage()], 401);
        }
    }


    public function change_status(Request $request){
        try {
            $request->validate([
                'order_id'                 => 'required|exists:orders,id',
                'order_status'                 => 'required',
            ]);

            $order = Order::where('id',$request->order_id)->where('specialist_id',auth()->user()->id);

            $order->update([
                'order_status'      => $request->order_status,
            ]);

            return response()->json(['message' =>  'Order Status Updated Successfully'], 201);
        }catch(\Exception $ex){
            return response()->json(['message' => $ex->getMessage()], 401);
        }
    }

}
