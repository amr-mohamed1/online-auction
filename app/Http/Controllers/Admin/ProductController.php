<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Logs;
use App\Models\SellCenter;
use App\Models\SellCenterImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index(){
        $product = SellCenter::with('buyer','bid_product','product_images','category','owner')->get();
        return view('admin.Products.index',compact('product'));
    }

    public function delete(Request $request){
        try {

            $product = SellCenter::find($request->id);
            $product->update([
                'end_date'      => "2217-11-02T12:37",
                'delivery_status'   => 1,
            ]);
            Logs::create([
                'user_id'           => Auth::user()->id ?? 1,
                'model_type'        => self::class,
                // 'model_id'          => $this->id,
                'model_id'          => 1,
                'action'            => 'Delete',
            ]);
            toastr()->warning('Product Declined Successfully');
        } catch (\Exception $ex) {
            return $ex;
            toastr()->error($ex->getMessage());
        }
        return redirect()->route('admin.products.index');
    }

}
