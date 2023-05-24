<?php

namespace App\Http\Controllers\Api\Blogs;

use App\Http\Controllers\Controller;
use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * return all blogs
     *
     * @param Request $request
     * @return void
     */
    public function blogs(){
        return Blog::get();
    }
}
