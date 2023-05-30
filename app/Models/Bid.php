<?php

namespace App\Models;

use App\Traits\Logger;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    use HasFactory,Logger;

    protected $guarded = [];


    /**
     * relation with users table
     *
     * @return void
     */
    public function users(){
        return $this->belongsTo(User::class,'User_id','id');
    }


    /**
     * relation with users table
     *
     * @return void
     */
    public function product(){
        return $this->belongsTo(SellCenter::class,'product_id','id');
    }

}
