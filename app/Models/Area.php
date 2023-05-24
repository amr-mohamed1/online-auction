<?php

namespace App\Models;

use App\Traits\Logger;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory,Logger;

    protected $guarded = [];


    /**
     * relation with city table
     *
     * @return void
     */
    public function cities(){
        return $this->belongsTo(City::class,'city_id','id');
    }

    /**
     * relation with users table
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function user_areas(){
        return $this->hasMany(User::class,'area_id','id');
    }


    /**
     * relation with orders table
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orders_areas(){
        return $this->hasMany(Order::class,'area_id','id');
    }
}
