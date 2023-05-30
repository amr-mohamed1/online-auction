<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Traits\Logger;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Logger;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    /**
     * relation with logs table
     *
     * @return void
     */
    public function admin_logs(){
        return $this->hasMany(Logs::class,'user_id','id');
    }



    /**
     * relation with sellcenter table
     *
     * @return void
     */
    public function product(){
        return $this->hasMany(SellCenter::class,'owner_id','id');
    }



    /**
     * relation with bids table
     *
     * @return void
     */
    public function user_bids(){
        return $this->hasMany(Bid::class,'User_id','id');
    }
}
