<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Traits\ResponseHandler;
use App\Traits\UploadImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    use UploadImages,ResponseHandler;


    /**
     * store data comming from api in users table
     * @param Request $request
     * @return mixed
     */
    public function register(Request $request)
    {
        $request->validate([
            'name'                              => 'required|string|max:50',
            'email'                             => ['required', 'email', 'max:50','unique:users,email'],
            'phone'                             => ['required', 'string', 'size:11','unique:users,phone'],
            'password'                          => ['required', 'string', 'min:8'],
            'city_id'                           => 'required|exists:cities,id',
            'area_id'                           => 'required|exists:areas,id',
            'speciality_id'                     => 'nullable',
            'type'                              => 'required',
            'profile_image'                     => 'nullable|mimes:png,jpg,jpeg',
            'price_per_hour'                    => 'nullable',
        ]);
        try{
            if($request->file('profile_image') != NULL){
                $image_path = $this->upload_img($request,'profile_image','user_profile_images');
            }else{
                $image_path = NULL;
            }
            # insert into users table
            $user = User::create([
                'name'                              => $request->name,
                'email'                             => $request->email,
                'phone'                             => $request->phone,
                'password'                          => Hash::make($request->password),
                'city_id'                           => $request->city_id,
                'area_id'                           => $request->area_id,
                'speciality_id'                     => $request->speciality_id,
                'type'                              => $request->type,
                'img'                               => $image_path,
                'price_per_hour'                    => $request->price_per_hour,
            ]);
            #return success response that account has been created Successfully;
            $token = $user->createToken('login_token')->accessToken;
            return response()->json(['user' =>  $user, 'token' => $token, 'type' => 'Bearer'], 200);
        }catch (\Exception $ex){
            return response()->json(['message' => $ex->getMessage()], 401);
        }

    }


    /**
     * user login (email ,password and device_token)
     *
     * @param Request $request
     * @return void
     */
    public function login(Request $request)
    {
        # validate email and password of member
        $request->validate([
            'email'             => 'required|exists:users,email',
            'password'          => 'required|min:4',
        ]);
        #prepare email and password to be check if exists or not
        $credentials = [
            'email'          => $request->email,
            'password'       => $request->password,
        ];
        #check email and password to check if exists
        if (auth()->attempt($credentials)){
            #return all user data to return it in the response
            $user = User::with('cities','areas','speciality')->find(auth()->id());
            #check if member account is confirmed and not blocked
            if($user->status == 1){
                #create passport token to use it while sending api requests
                $token = auth()->user()->createToken('login_token')->accessToken;
                #return success response with member data
                return response()->json(['user' =>  $user, 'token' => $token, 'type' => 'Bearer'], 200);
            }else{
                #return error response because of member account is pending or the account has been blocked
                return response()->json(['message' => 'your account is not active. please contact us.'], 401);
            }
        }else{
            #return error  response because of credintials not correct
            return response()->json(['message' => 'check your credentials and try again'], 401);
        }
    }


}
