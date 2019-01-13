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
      'coleader_name',
      'coleader_email',
      'coleader_phone',
      'member1_name',
      'member1_email',
      'member1_phone',
      'member2_name',
      'member2_email',
      'member2_phone',
      'progress'
   ];
}
