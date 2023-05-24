<?php

namespace App\Models;

use App\Traits\Logger;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;


class Blog extends Model
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
        return Storage::url('blogs/'.$this->img);
    }
}
