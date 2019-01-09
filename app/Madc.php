<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Madc extends Model
{
   protected $table = "madcs";

   protected $fillable = [
      'instance_name',
      'instance_address',
      'leader_name',
      'leader_phone',
      'co-leader_name',
      'co-leader_email',
      'co-leader_phone',
      'member-1_name',
      'member-1_email',
      'member-1_phone',
      'member-2_name',
      'member-2_email',
      'member-2_phone',
      'progress'
   ];
}
