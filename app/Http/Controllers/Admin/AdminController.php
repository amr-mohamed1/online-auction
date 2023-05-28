<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\City;
use App\Models\Logs;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use function redirect;
use function toastr;
use function view;

class AdminController extends Controller
{
    /**
     * return all admins page(view)
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = User::where('type','admin')->get();
        return view('admin.Admins.index',compact('admins'));
    }

    /**
     * Show the form for creating a new admin.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Admins.create');
    }

    /**
     * method to store Admin data - it have validation
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name'      => 'required|min:3',
            'last_name'       => 'required|min:3',
            'email'     => 'required|unique:users',
            'password'  => 'required',
        ]);
        try{
            User::create([
                'first_name'      => $request->first_name,
                'last_name'       => $request->last_name,
                'email'     => $request->email,
                'password'  => Hash::make($request->password),
                'type'      => 'admin'
            ])->log('Create');
            toastr()->success('Admin Added Successfully');
        }catch(\Exception $ex){
            return $ex;
            toastr()->error('Admin Not Saved, Please Try Again Later');
        }
        return redirect()->route('admin.admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * return edit admins page
     * we send id then it will return
     * admin information to present it on the
     * update form
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $admin = User::where('type','admin')->where('id',$id)->first();
            return view('admin.Admins.edit',compact('admin',));
        } catch (\Exception $ex) {
            toastr()->error($ex->getMessage());
            return redirect()->route('admin.admin.index');
        }
    }

    /**
     * method to update admin data - it have validation
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Request
     */
    public function update(Request $request, User $admin)
    {
        $request->validate([
            'first_name'      => 'required|min:3',
            'last_name'       => 'required|min:3',
            'email'     => 'required',
            'password'  => 'required',
        ]);
        try {
            if(isset($request->password)){
                $new_password = Hash::make($request->password);
            }else{
                $new_password = $admin->password;
            }
            $admin->update([
                'first_name'      => $request->first_name,
                'last_name'       => $request->last_name,
                'email'     => $request->email,
                'password'  => $new_password,
            ]);
            Logs::create([
                'user_id'           => Auth::user()->id ?? 1,
                'model_type'        => self::class,
                // 'model_id'          => $this->id,
                'model_id'          => 1,
                'action'            => 'update',
            ]);
            toastr()->success('Admin Updated Successfully');
        } catch (\Exception $ex) {
            toastr()->error('Error Occured While updating this Admin , please try again later');
        }
        return redirect()->route('admin.admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $city)
    {
        //
    }

    /**
     * method that receve post request
     * from the delete model and request
     * include the id of the admin to
     * use it on delete (we use soft delete)
     *
     * @param Request $request
     * @return void
     */
    public function delete(Request $request){
        try {
            User::find($request->id)->log('Delete')->delete();
            toastr()->warning('Admin Deleted Successfully');
        } catch (\Exception $ex) {
            toastr()->error('error, Something Occured while deleting this Admin, please try again later');
        }
        return redirect()->route('admin.admin.index');
    }

    public function get_area(Request $request){
        try {
            if($request->from == 'add_admin'){
                $areas = Area::where('city_id', $request->city_id)->get();
                return $areas;
            }else{
                return "cannot find the directions";
            }
        } catch (\Exception $ex) {
            return 404;
        }
        return $request;
    }
}
