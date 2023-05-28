<?php

namespace App\Models;

use App\Traits\Logger;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellCenterImages extends Model
{
    use HasFactory,Logger;

    protected $guarded = [];



    /**
     * relation with products table
     *
     * @return void
     */
    public function products(){
        return $this->belongsTo(SellCenter::class,'product_id','id');
    }
}
