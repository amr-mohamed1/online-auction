<?php

namespace App\Models;

use App\Traits\Logger;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Order extends Model
{
    use HasFactory,Logger;

    protected $guarded = [];



    /**
     * make image path accessor
     *
     * @return void
     */
    public function getImagePathAttribute()
    {
        return Storage::url('orders/'.$this->attached_img);
    }


    /**
     * relation with user table
     *
     * @return void
     */
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    /**
     * relation with user table
     *
     * @return void
     */
    public function specialist(){
        return $this->belongsTo(User::class,'specialist_id','id');
    }


    /**
     * relation with city table
     *
     * @return void
     */
    public function city(){
        return $this->belongsTo(City::class,'city_id','id');
    }

    /**
     * relation with area table
     *
     * @return void
     */
    public function area(){
        return $this->belongsTo(Area::class,'area_id','id');
    }
}
