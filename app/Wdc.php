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
     'coleader_name',
     'coleader_email',
     'coleader_phone',
     'member_name',
     'member_email',
     'member_phone',
     'progress'
  ];
}
