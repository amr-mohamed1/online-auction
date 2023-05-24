<?php

namespace App\Http\Controllers\Api\ContactUs;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use App\Models\User;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function store_contact(Request $request)
    {
        # validate request
        $request->validate([
            'title'                 => 'required|min:2',
            'description'           => 'required|min:4',
        ]);
        try{
            ContactUs::create([
                'user_id'           => auth()->user()->id,
                'title'             => $request->title,
                'description'       => $request->description,
            ]);
            return response()->json(['message' =>  'Message Sent Successfully'], 200);

        }catch(\Exception $ex){
            return response()->json(['message' => $ex->getMessage()], 401);
        }
    }
}
