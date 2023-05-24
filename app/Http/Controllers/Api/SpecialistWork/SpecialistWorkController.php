<?php

namespace App\Http\Controllers\Api\SpecialistWork;

use App\Http\Controllers\Controller;
use App\Models\SpecialistWorkImages;
use App\Traits\UploadImages;
use Illuminate\Http\Request;

class SpecialistWorkController extends Controller
{
    /*
     * upload image trait
     */
    use UploadImages;

    public function store(Request $request){
        try{
            $request->validate([
                'image'                       => 'required|mimes:png,jpg,jpeg|max:5120',
            ]);
            $path = $this->upload_img($request,'image','specialist_work');
            SpecialistWorkImages::create([
                'user_id'   => auth()->user()->id,
                'img'       => $path
            ]);
            return response()->json(['message' =>  'image saved successfully'], 201);
        }catch(\Exception $ex){
            return response()->json(['message' => $ex->getMessage()], 401);
        }
    }

    public function get_specialist_images(Request $request){
        try {
            $request->validate([
                'user_id' => 'required|exists:users,id'
            ]);
            $images = SpecialistWorkImages::where('user_id',$request->user_id)->get();
            return response()->json(['images' =>  $images, 200]);
        }catch (\Exception $ex){
            return response()->json(['message' => $ex->getMessage()], 401);
        }
    }
}
