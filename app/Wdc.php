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
     'co_leader_name',
     'co_leader_email',
     'co_leader_phone',
     'member_name',
     'member_email',
     'member_phone',
     'progress'
  ];
}
