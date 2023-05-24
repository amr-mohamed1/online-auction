<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logs extends Model
{
    use HasFactory;

    protected $table = 'logs';

    protected $guarded = [];

    /**
     * relation with user table
     *
     * @return void
     */
    public function admins(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
