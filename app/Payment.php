<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = "payments";

   protected $fillable = [
      'payment_path',
      'user_id'
   ];

   public function user()
   {
      return $this->belongsTo(\App\User::class);
   }
}
