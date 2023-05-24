<?php

namespace App\Http\Controllers\Api\Services;

use App\Http\Controllers\Controller;
use App\Models\SpecialistWorkImages;
use App\Models\User;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function services_with_specialist(Request $request){
        try {
            if(isset($request->speciality_id)){
                $services = User::with('cities','areas','speciality','specialist_rates','specialist_feedbacks')->where('speciality_id',$request->speciality_id)->get();
            }else{
                $services = User::with('cities','areas','speciality','specialist_rates','specialist_feedbacks')->where('speciality_id','!=','null')->get();
            }
            return response()->json(['specialists' =>  $services, 200]);

        }catch (\Exception $ex){
            return response()->json(['message' => $ex->getMessage()], 401);
        }
    }

    public function specialist_info(Request $request){
        try {
            $request->validate([
                'specialist_id' => 'required|exists:users,id'
            ]);

            $specialist = User::with('cities','areas','speciality','specialist_rates','specialist_feedbacks')->where('id',$request->specialist_id)->first();

            $specialist_work_images = SpecialistWorkImages::where('user_id',$request->specialist_id)->get();

            $specialist_data = [
                'specialist_data' => $specialist,
                'specialist_work_images' => $specialist_work_images,
            ];

            return response()->json(['specialist' =>  $specialist_data, 200]);

        }catch (\Exception $ex){
            return response()->json(['message' => $ex->getMessage()], 401);
        }
    }


    }
