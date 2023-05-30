<?php

namespace App\Models;

use App\Traits\Logger;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellCenter extends Model
{
    use HasFactory,Logger;

    protected $guarded = [];



    /**
     * relation with products images table
     *
     * @return void
     */
    public function product_images(){
        return $this->hasMany(SellCenterImages::class,'product_id','id');
    }


    /**
     * relation with category table
     *
     * @return void
     */
    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }


    /**
     * relation with users table
     *
     * @return void
     */
    public function owner(){
        return $this->belongsTo(User::class,'owner_id','id');
    }


    /**
     * relation with bids table
     *
     * @return void
     */
    public function bid_product(){
        return $this->hasMany(Bid::class,'product_id','id');
    }
}
