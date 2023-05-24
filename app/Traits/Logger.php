<?php

namespace App\Traits;

use App\Models\Log;
use App\Models\Logs;
use http\Env\Request;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Support\Facades\Auth;

trait Logger
{
    /**
     * Undocumented function
     *
     * @return MorphOne
     */
   public function model_logger(): MorphOne
   {
        return $this->morphOne(Logs::class, 'model');
   }

   /**
    * Undocumented function
    *
    * @param string $action
    * @return void
    */
   public function log(string $action){
    $this->model_logger()->create([
        'user_id'           => Auth::user()->id ?? 1,
        'model_type'        => self::class,
        'model_id'          => $this->id,
        'action'            => $action,
    ]);

    return $this;
   }

}
