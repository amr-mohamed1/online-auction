<?php

namespace App\Http\Controllers;

use App\Models\DeliverProduct;
use App\Models\PasswordReset;
use App\Models\SellCenter;
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
            if (auth()->user()->status != 1) {
                Auth::guard('web')->logout();

                $request->session()->invalidate();

                $request->session()->regenerateToken();

                return back()->withErrors([
                    'email' => trans('auth.failed'),
                ]);
            }
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

    public function send_reset_code(Request $request){
        $request->validate([
            'email'     => 'required|exists:users,email',
        ]);

        try{
            PasswordReset::create([
                'email'     => $request->email,
                'token'     => rand(000000,999999),
                'created_at'    => date('Y-m-d H-i-s')
            ]);
            toastr()->success('Reset Token Send To Mail Successfully');
        }catch(\Exception $ex){
            toastr()->error($ex->getMessage());
        }
        return redirect()->route('confirm_password');
    }

    public function reset_password(Request $request){
        $request->validate([
            'email'     => 'required|exists:users,email',
            'code'      => 'required|numeric',
            'password'                          => ['required', 'string', 'min:8','confirmed'],
            'password_confirmation'             => ['required'],
        ]);
        try{
            $found_user = PasswordReset::where('email',$request->email)->count();
            if($found_user > 0){
                User::where('email',$request->email)->update(['password'=> Hash::make($request->password)]);
                PasswordReset::where('email',$request->email)->delete();
                toastr()->success('Password Reset Successfully');
                return redirect()->route('site_login');
            }
        }catch (\Exception $ex){
            toastr()->error($ex->getMessage());
        }
        return redirect()->back();

        }


        public function profile_date($id){
            $uploaded_product = SellCenter::with('product_images','category','owner')->where('owner_id',$id)->get();
            $purchased_products = SellCenter::with('product_images','category','owner')->where('buyer_id',$id)->where('end_date','<',\Carbon\Carbon::now())->get();
            $busy_or_not = DeliverProduct::where('supplier_id',auth()->user()->id)->where('order_status','in-progress')->count();
            return view('website.profile',compact('uploaded_product','purchased_products','busy_or_not'));
        }

        public function assigned_con($product_id){
            try {
                $product_data = SellCenter::with('product_images','category','owner')->find($product_id);
                return view('website.assigned-contract',compact('product_data'));
            }catch (\Exception $ex){
                toastr()->error($ex->getMessage());
                return redirect()->back();
            }
        }

        public function update_profile(Request $request,$id){
//        return $request;
            try{
                $user = User::find($id);
                if($request->image){
                    $final_path = $this->upload_img($request,'image','user_profile_images');
                }else{
                    $final_path = auth()->user()->img;
                }
                $user->update([
                    'first_name'                        => $request->firstname,
                    'last_name'                         => $request->lastname,
                    'email'                             => $request->email,
                    'phone'                             => $request->phone,
                    'home_number'                       => $request->home_number,
                    'password'                          => Hash::make($request->password),
                    'gender'                            => $request->gender,
                    'birthday'                          => $request->birthdate,
                    'country'                           => $request->country,
                    'city'                              => $request->city,
                    'address'                           => $request->address,
                    'postal_code'                       => $request->postal_code,
                    'digital_signature'                 => $request->digital_signature,
                    'type'                              => auth()->user()->type,
                    'img'                               => $final_path,
                ]);
                toastr()->success('User Updated Successfully');
            }catch (\Exception $ex){
                toastr()->error($ex->getMessage());
            }
            return redirect()->route('profile',auth()->user()->id);
        }
}
