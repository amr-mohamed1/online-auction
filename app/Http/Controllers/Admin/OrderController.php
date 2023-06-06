<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SellCenter;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = SellCenter::with('buyer','product_images','category','owner')->where('end_date','<',\Carbon\Carbon::now())->get();

        return view('admin.Orders.index',compact('orders'));
    }
}
