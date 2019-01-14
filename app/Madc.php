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
      'co_leader_name',
      'co_leader_email',
      'co_leader_phone',
      'member_1_name',
      'member_1_email',
      'member_1_phone',
      'member_2_name',
      'member_2_email',
      'member_2_phone',
      'progress'
   ];
}
