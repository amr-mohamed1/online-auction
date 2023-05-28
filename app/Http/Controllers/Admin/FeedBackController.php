<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FeedBack;
use Illuminate\Http\Request;
use function redirect;
use function toastr;
use function view;

class FeedBackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Feedbacks = FeedBack::get();
        return view('admin.Feedbacks.index',compact('Feedbacks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'description'           => 'required|min:3|string',
        ]);
        try{
            FeedBack::create([
                'description'               => $request->description,
            ])->log('Create');
            toastr()->success('Feedback Sent Successfully');
        }catch(\Exception $ex){
            toastr()->error($ex->getMessage());
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FeedBack  $feedBack
     * @return \Illuminate\Http\Response
     */
    public function show(FeedBack $feedBack)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FeedBack  $feedBack
     * @return \Illuminate\Http\Response
     */
    public function edit(FeedBack $feedBack)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FeedBack  $feedBack
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FeedBack $feedBack)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FeedBack  $feedBack
     * @return \Illuminate\Http\Response
     */
    public function destroy(FeedBack $feedBack)
    {
        //
    }


    /**
     * method that receve post request
     * from the delete model and request
     * include the id of the Feedback to
     *
     * @param Request $request
     * @return void
     */
    public function delete(Request $request){
        try {
            FeedBack::find($request->id)->log('Delete')->delete();
            toastr()->warning('Feedback Deleted Successfully');
        } catch (\Exception $ex) {
            toastr()->error('error, Something Occured while deleting this Feedback, please try again later');
        }
        return redirect()->route('admin.feedbacks.index');
    }
}
