<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'team_name', 'leader_email', 'password', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function madc()
    {
      return $this->hasOne(\App\Madc::class);
    }

   public function wdc()
   {
     return $this->hasOne(\App\Wdc::class);
   }


   public function isAdmin()
   {
      if (Auth::user()->role == 1) {
         return true;
      }

      return false;
   }

   public function isMadc()
   {
      if (Auth::user()->role == 2) {
         return true;
      }

      return false;
   }

   public function isWdc()
   {
      if (Auth::user()->role == 3) {
         return true;
      }

      return false;
   }

   public function isNtf()
   {
      if (Auth::user()->role == 4) {
         return true;
      }

      return false;
   }
}
