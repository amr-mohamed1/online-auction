<?php

namespace App\Models;

use App\Traits\Logger;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportUser extends Model
{
    use HasFactory,Logger;

    protected $guarded = [];
}
