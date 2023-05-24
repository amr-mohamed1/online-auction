<?php

namespace App\Http\Controllers\Api\Feedback;

use App\Http\Controllers\Controller;
use App\Models\FeedBack;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function store(Request $request){
        try {
            $request->validate([
                'specialist_id' => 'required|exists:users,id',
                'show_info'     => 'required',
                'comment'       => 'required'
            ]);

            FeedBack::create([
                'specialist_id' => $request->specialist_id,
                'user_id'       => auth()->user()->id,
                'show_user_info'=> $request->show_info,
                'comment'       => $request->comment
            ])->log('create');
            return response()->json(['message' =>  'Feedback Added successfully'], 201);
        }catch (\Exception $ex){
            return response()->json(['message' => $ex->getMessage()], 401);
        }
    }

    public function specialist_feedback(Request $request){
        try {
            $request->validate([
                'specialist_id' => 'required|exists:users,id',
            ]);

            $feedbacks = FeedBack::with('user','specialist')->where('specialist_id',$request->specialist_id)->get();
            return response()->json(['feedbacks' =>  $feedbacks, 200]);
        }catch(\Exception $ex){
            return response()->json(['message' => $ex->getMessage()], 401);
        }
    }
}
