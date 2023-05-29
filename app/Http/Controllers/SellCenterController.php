<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SellCenter;
use App\Models\SellCenterImages;
use App\Traits\UploadImages;
use Illuminate\Http\Request;

class SellCenterController extends Controller
{
    use UploadImages;

    public function index(){
        $categories = Category::get();
        return view('website.sellcenter',compact('categories'));
    }

    public function store_product(Request $request){
        $request->validate([
            'title'         => 'required|min:3',
            'description'   => 'required|min:3',
            'category'         => 'required|exists:categories,id',
            'numberitem'         => 'required',
            'condition'         => 'required',
            'price'         => 'required',
            'startdate'         => 'required',
            'enddate'         => 'required',
        ]);
        try{
            $product = SellCenter::create([
                'product_title'                         => $request->title,
                'price'                                 => $request->price,
                'description'                             => $request->description,
                'owner_id'                             => auth()->user()->id,
                'category_id'                             => $request->category,
                'number_of_items'                       => $request->numberitem,
                'Condition'                          => $request->condition,
                'start_date'                            => $request->startdate,
                'end_date'                          => $request->enddate,
            ]);

            foreach ($request->productpic as $image){
                $img = $image->getClientOriginalName();
                $final_name = rand(1,1000) . $img;
                $path = $image->storeAs('products',$final_name,'public');
                SellCenterImages::create([
                'product_id'    => $product->id,
                'image_src'     => $final_name,
                ]);
            }

            toastr()->success('Product Added Successfully');
        }catch(\Exception $ex){
            toastr()->error($ex->getMessage());
        }
        return redirect()->back();
    }

}
