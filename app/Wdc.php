<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wdc extends Model
{
   protected $table = "wdcs";

  protected $fillable = [
     'instance_name',
     'instance_address',
     'leader_name',
     'leader_phone',
     'co-leader_name',
     'co-leader_email',
     'co-leader_phone',
     'member_name',
     'member_email',
     'member_phone',
     'progress'
  ];
}
