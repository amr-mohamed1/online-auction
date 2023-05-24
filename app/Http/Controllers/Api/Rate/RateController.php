<?php

namespace App\Http\Controllers\Api\Rate;

use App\Http\Controllers\Controller;
use App\Models\Rate;
use Illuminate\Http\Request;

class RateController extends Controller
{
    public function store(Request $request){
        try {
            $request->validate([
                'specialist_id' => 'required|exists:users,id',
                'num_of_stars'     => 'required',
            ]);

            Rate::create([
                'specialist_id' => $request->specialist_id,
                'user_id'       => auth()->user()->id,
                'num_of_stars'=> $request->num_of_stars,
            ])->log('create');
            return response()->json(['message' =>  'Stars Added successfully'], 201);
        }catch (\Exception $ex){
            return response()->json(['message' => $ex->getMessage()], 401);
        }
    }
}
