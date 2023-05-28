<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ReportUser;
use Illuminate\Http\Request;

class ReportUserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reports = ReportUser::get();
        return view('admin.Reported_users.index',compact('reports'));
    }


    public function store(Request $request){
        $request->validate([
            'user'                  => 'required|min:3|string',
            'description'           => 'required|min:3|string',
        ]);
        try{
            ReportUser::create([
                'user_name'                 => $request->user,
                'description'               => $request->description,
            ])->log('Create');
            toastr()->success('Report Sent Successfully');
        }catch(\Exception $ex){
            toastr()->error($ex->getMessage());
        }
        return redirect()->back();
    }

    public function delete(Request $request){
        try {
            ReportUser::find($request->id)->log('Delete')->delete();
            toastr()->warning('Report Deleted Successfully');
        } catch (\Exception $ex) {
            toastr()->error('error, Something Occured while deleting this Report, please try again later');
        }
        return redirect()->route('admin.all-reports');
    }
}
