<?php

namespace App\Models;

use App\Traits\Logger;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliverProduct extends Model
{
    use HasFactory,Logger;

    protected $guarded = [];



    /**
     * relation with user table
     *
     * @return void
     */
    public function supplier(){
        return $this->belongsTo(User::class,'supplier_id','id');
    }

    /**
     * relation with sellcenter table
     *
     * @return void
     */
    public function product(){
        return $this->belongsTo(SellCenter::class,'product_id','id');
    }

}
