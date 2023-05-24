<?php

namespace App\Models;

use App\Traits\Logger;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory,Logger;

    protected $guarded = [];

    /**
     *
     * relation with areas table
     *
     * @return void
     */
    public function areas(){
        return $this->hasMany(Area::class,'city_id','id');
    }

    /**
     * relation with users table
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function user_cities(){
        return $this->hasMany(User::class,'city_id','id');
    }


    /**
     * relation with orders table
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orders_cities(){
        return $this->hasMany(Order::class,'city_id','id');
    }
}
