<?php

namespace App\Http\Controllers\Api\Locations;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\City;
use App\Traits\ResponseHandler;
use Illuminate\Http\Request;

class LocationsController extends Controller
{

    /**
     * include response trait that have response functions
     */
    use ResponseHandler;

    /**
     * return all cities (id,name)
     *
     * @param Request $request
     * @return void
     */
    public function cities(){
        return City::get();
    }

    /**
     * return all cities (id,name,city_id)
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function areas(){
        return Area::get();
    }
}
