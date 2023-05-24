<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Logs;

class UserController extends Controller
{
    public function index(){
        $users = User::where('type','!=','admin')->get();
        return view('admin.Users.index',compact('users'));
    }

    public function unblock_user($id){
        try {
            User::find($id)->update([
                'status' => 1,
            ]);
            Logs::create([
                'user_id'           => Auth::user()->id ?? 1,
                'model_type'        => self::class,
                // 'model_id'          => $this->id,
                'model_id'          => 1,
                'action'            => 'UnBlocked-'.$id,
            ]);
            toastr()->warning('User UnBlocked Successfully');
        } catch (\Exception $ex) {
            toastr()->error('error, Something Occured while Unblock this User, please try again later');
        }
        return redirect()->route('admin.users.index');
    }

    public function block_user(Request $req){
        try{
            User::find($req->id)->update([
                'status' => 0,
            ]);
            Logs::create([
                'user_id'           => Auth::user()->id ?? 1,
                'model_type'        => self::class,
                // 'model_id'          => $this->id,
                'model_id'          => 1,
                'action'            => 'Blocked-'.$req->id,
            ]);
            toastr()->warning('User Blocked Successfully');
        }catch(\Exception $ex){
            return $ex;
            toastr()->error('error Occured While Blocking This User');
        }
        return redirect()->route('admin.users.index');
    }
}
