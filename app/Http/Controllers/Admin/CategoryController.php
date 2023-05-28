<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Logs;
use App\Traits\UploadImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{


    /**
     * Trait include uploadiong images method
     *
     * @return \Illuminate\Http\Response
     */
    use UploadImages;


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::get();
        return view('admin.Category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Category.create');

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
            'name'                      => 'required|min:3',
            'img'                       => 'required|mimes:png,jpg,jpeg|max:5120',
        ]);
        try{
            // save store data
            $path = $this->upload_img($request,'img','categories');
            Category::create([
                'name'              => $request->name,
                'image'               => $path,
            ])->log('Create');
            toastr()->success('Category Added Successfully');
        }catch(\Exception $ex){
            toastr()->error($ex->getMessage());
        }
        return redirect()->route('admin.categories.index');
    }

    /**
     * Display the categories resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the categories resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $category = Category::find($id);
            return view('admin.Category.edit',compact('category'));
        } catch (\Exception $ex) {
            toastr()->error('Category you want to update not found');
            return redirect()->route('admin.categories.index');
        }
    }

    /**
     * Update the categories resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name'                     => 'required|min:3',
            'img'                       => 'mimes:png,jpg,jpeg|max:5120',
        ]);
        try {
            $img = $request->file('img');
            if($img == NULL){
                $final_image = $category->image;
            }else{
                $new_path = $this->upload_img($request,'img','categories');
                $final_image = $new_path;
                Storage::delete('public/categories/'.$category->img);
            }

            $category->update([
                'name'             => $request->name,
                'image'               => $final_image,
            ]);
            Logs::create([
                'user_id'           => Auth::user()->id ?? 1,
                'model_type'        => self::class,
                // 'model_id'          => $this->id,
                'model_id'          => 1,
                'action'            => 'update',
            ]);
            toastr()->success('Category Updated Successfully');
        } catch (\Exception $ex) {
            toastr()->error('Error Occured While updating this Category , please try again later');
        }
        return redirect()->route('admin.categories.index');
    }

    /**
     * Remove the Category resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }


    /**
     * method that receve post request
     * from the delete model and request
     * include the id of the Category to
     * use it on delete (we use soft delete)
     *
     * @param Request $request
     * @return void
     */
    public function delete(Request $request){
        try {
            Category::find($request->id)->log('Delete')->delete();
            toastr()->warning('Category Deleted Successfully');
        } catch (\Exception $ex) {
            toastr()->error('error, Something Occured while deleting this Category, please try again later');
        }
        return redirect()->route('admin.categories.index');
    }
}
