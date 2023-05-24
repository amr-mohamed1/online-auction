<?php

namespace App\Http\Controllers\Api\Specialities;

use App\Http\Controllers\Controller;
use App\Models\Speciality;
use Illuminate\Http\Request;

class SpecialityController extends Controller
{
    public function specialities(){
        return Speciality::get();
    }
}
