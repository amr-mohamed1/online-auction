<?php

namespace App\Http\Controllers;

use App\Models\DeliverProduct;
use App\Models\SellCenter;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function all_orders(){
        $avilable_orders = SellCenter::with('buyer','product_images','category','owner')->where('delivery_status','0')->where('end_date','<',\Carbon\Carbon::now())->get();
        return view('website.yourorders',compact('avilable_orders'));
    }

    public function my_orders(){
        $products = DeliverProduct::where('supplier_id',auth()->user()->id)->pluck('product_id');
        $avilable_orders = SellCenter::with('delivery_products','buyer','product_images','category','owner')->whereIn('id',$products)->where('end_date','<',\Carbon\Carbon::now())->latest()->get();
        return view('website.my_orders',compact('avilable_orders'));
    }

    public function accept_order($id){
        try{
            $product = SellCenter::find($id);
            $product->update([
                'delivery_status'   => 1
            ]);
            DeliverProduct::create([
                'product_id'        => $id,
                'supplier_id'       => auth()->user()->id,
                'order_status'       => 'in-progress',
            ]);
            toastr()->success("Order Accepted Successfully");
            return redirect()->back();
        }catch (\Exception $ex){
            toastr()->error($ex->getMessage());
            return redirect()->back();
        }
    }

    public function complete_order($id){
        try{
            DeliverProduct::where('product_id',$id)->update([
                'order_status'       => 'complete',
            ]);
            toastr()->success("Order Completed Successfully");
            return redirect()->back();
        }catch (\Exception $ex){
            toastr()->error($ex->getMessage());
            return redirect()->back();
        }
    }

    public function refuse_order($id){
        try{
            $product = SellCenter::find($id);
            $product->update([
                'delivery_status'   => 0
            ]);
            DeliverProduct::where('product_id',$id)->where('supplier_id',auth()->user()->id)->delete();
            toastr()->success("Order Refused Successfully");
            return redirect()->back();
        }catch (\Exception $ex){
            toastr()->error($ex->getMessage());
            return redirect()->back();
        }
    }
}
