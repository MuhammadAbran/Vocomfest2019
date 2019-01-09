<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Wdc;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterWdcController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard/wdc';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        // return Validator::make($data, [
        //     'team_name' => ['required', 'string', 'max:255'],
        //     'leader_email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => ['required', 'string', 'min:6', 'confirmed'],
        // ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
           'team_name' => $data['team_name'],
           'leader_email' => $data['leader_email'],
           'password' => Hash::make($data['password']),
           'role' => $data['role'],
        ]);

        $wdc = new Wdc([
           'instance_name' => $data['instance_name'],
           'instance_address' => $data['instance_address'],
           'leader_name' => $data['leader_name'],
           'leader_phone' => $data['leader_phone'],
           'co-leader_name' => $data['co-leader_name'],
           'co-leader_email' => $data['co-leader_email'],
           'co-leader_phone' => $data['co-leader_phone'],
           'member_name' => $data['member-1_name'],
           'member_email' => $data['member-1_email'],
           'member_phone' => $data['member-1_phone'],
           'progress' => $data['progress'],
        ]);

        $user->wdc()->save($wdc);

        return $user;
    }
}
