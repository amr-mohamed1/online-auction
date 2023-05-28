<?php

namespace App\Models;

use App\Traits\Logger;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Category extends Model
{
    use HasFactory,Logger;

    protected $guarded = [];
    protected $appends = ['image_path'];

    /**
     * make image path accessor
     *
     * @return void
     */
    public function getImagePathAttribute()
    {
        return Storage::url('categories/'.$this->image);
    }


    /**
     * relation with sell center table
     *
     * @return void
     */
    public function products(){
        return $this->hasMany(SellCenter::class,'category_id','id');
    }
}
