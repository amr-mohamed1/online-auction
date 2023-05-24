<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Traits\UploadImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    use UploadImages;
    /**
     * store data comming user from  in users table
     * @param Request $request
     * @return mixed
     */
    public function register_user(Request $request)
    {
        try{
            $request->validate([
                'first_name'                        => 'required|string|max:50',
                'last_name'                         => 'required|string|max:50',
                'email'                             => ['required', 'email', 'max:50','unique:users,email'],
                'phone'                             => ['required', 'string','unique:users,phone'],
                'home_number'                       => ['required', 'string','unique:users,home_number'],
                'password'                          => ['required', 'string', 'min:8','confirmed'],
                'password_confirmation'             => ['required'],
                'gender'                            => 'required',
                'birthday'                          => 'required',
                'country'                           => 'required',
                'city'                              => 'required',
                'address'                           => 'required',
                'postal_code'                       => 'required',
                'digital_signature'                 => 'required',
                'profile_image'                     => 'required|mimes:png,jpg,jpeg',
            ]);
            $image_path = $this->upload_img($request,'profile_image','user_profile_images');
            # insert into users table
            $user = User::create([
                'first_name'                        => $request->first_name,
                'last_name'                         => $request->last_name,
                'email'                             => $request->email,
                'phone'                             => $request->phone,
                'home_number'                       => $request->home_number,
                'password'                          => Hash::make($request->password),
                'gender'                            => $request->gender,
                'birthday'                          => $request->birthday,
                'country'                           => $request->country,
                'city'                              => $request->city,
                'address'                           => $request->address,
                'postal_code'                       => $request->postal_code,
                'digital_signature'                 => $request->digital_signature,
                'type'                              => 'user',
                'img'                               => $image_path,
            ]);
            toastr()->success('User Added Successfully');
        }catch (\Exception $ex){
            return $ex;
            toastr()->error($ex->getMessage());
        }
        return redirect()->route('site_login');

    }

    /**
     * store data comming sipplier from  in users table
     * @param Request $request
     * @return mixed
     */
    public function register_supplier(Request $request)
    {
        try{
            $request->validate([
                'first_name'                        => 'required|string|max:50',
                'last_name'                         => 'required|string|max:50',
                'email'                             => ['required', 'email', 'max:50','unique:users,email'],
                'phone'                             => ['required', 'string','unique:users,phone'],
                'home_number'                       => ['required', 'string','unique:users,home_number'],
                'password'                          => ['required', 'string', 'min:8','confirmed'],
                'password_confirmation'             => ['required'],
                'gender'                            => 'required',
                'birthday'                          => 'required',
                'country'                           => 'required',
                'city'                              => 'required',
                'address'                           => 'required',
                'postal_code'                       => 'required',
                'digital_signature'                 => 'required',
                'profile_image'                     => 'required|mimes:png,jpg,jpeg',
            ]);
            $image_path = $this->upload_img($request,'profile_image','user_profile_images');
            # insert into users table
            $user = User::create([
                'first_name'                        => $request->first_name,
                'last_name'                         => $request->last_name,
                'email'                             => $request->email,
                'phone'                             => $request->phone,
                'home_number'                       => $request->home_number,
                'password'                          => Hash::make($request->password),
                'gender'                            => $request->gender,
                'birthday'                          => $request->birthday,
                'country'                           => $request->country,
                'city'                              => $request->city,
                'address'                           => $request->address,
                'postal_code'                       => $request->postal_code,
                'digital_signature'                 => $request->digital_signature,
                'type'                              => 'supplier',
                'img'                               => $image_path,
            ]);
            toastr()->success('Supplier Added Successfully');
        }catch (\Exception $ex){
            toastr()->error($ex->getMessage());
        }
        return redirect()->route('site_login');

    }


    public function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            toastr()->success('Welcome Back');
            if(auth()->user()->type == 'supplier'){
                return redirect()->route('yourorders');
            }else{
                return redirect()->route('homepage');
            }
        }

        toastr()->error('Please Check Your Credentials');
        return redirect()->route('site_login');
    }
}