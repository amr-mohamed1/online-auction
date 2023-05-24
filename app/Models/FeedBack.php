<?php

namespace App\Models;

use App\Traits\Logger;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedBack extends Model
{
    use HasFactory,Logger;

    protected $guarded = [];

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
}
