<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    protected $table = "submissions";

    protected $fillable = [
       'submissions_path',
       'type',
       'user_id'
    ];
}
