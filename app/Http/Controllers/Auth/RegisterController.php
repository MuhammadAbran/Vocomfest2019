<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Madc;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Auth;
use Illuminate\Support\Facades\Redirect;
use App\Wdc;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
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
    protected $redirectTo = '/';

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
        return Validator::make($data, [
            // 'team_name' => ['required', 'string', 'max:255'],
            // 'leader_email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            // 'password' => ['required', 'string', 'min:6', 'confirmed'],

        ]);
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

        if ($data['role'] == "1")
        {
            $wdc = new Wdc([
                'instance_name' => $data['instance_name'],
                'instance_address' => $data['instance_address'],
                'leader_name' => $data['leader_name'],
                'leader_phone' => $data['leader_phone'],
                'co_leader_name' => $data['co_leader_name'],
                'co_leader_email' => $data['co_leader_email'],
                'co_leader_phone' => $data['co_leader_phone'],
                'member_name' => $data['member_1_name'],
                'member_email' => $data['member_1_email'],
                'member_phone' => $data['member_1_phone'],
                'progress' => $data['progress'],
            ]);
     
            $user->wdc()->save($wdc);
        }

        elseif ($data['role'] == "2")
        {
            $madc = new Madc([
                'instance_name' => $data['instance_name'],
                'instance_address' => $data['instance_address'],
                'leader_name' => $data['leader_name'],
                'leader_phone' => $data['leader_phone'],
                'co_leader_name' => $data['co_leader_name'],
                'co_leader_email' => $data['co_leader_email'],
                'co_leader_phone' => $data['co_leader_phone'],
                'member_1_name' => $data['member_1_name'],
                'member_1_email' => $data['member_1_email'],
                'member_1_phone' => $data['member_1_phone'],
                // 'member_2_name' => $data['member_2_name'],
                // 'member_2_email' => $data['member_2_email'],
                // 'member_2_phone' => $data['member_2_phone'],
                'progress' => $data['progress'],
            ]);
     
            $user->madc()->save($madc);
             
        }

        return $user;
    }

    protected function redirectTo()
    {
        
        if (Auth::user()->role == '2') {
            return 'madc';
        }

        if (Auth::user()->role == '3') {
            return 'wdc';
        }

       
    }

    public function showRegistrationForm() {
        return view('frontend.register');
    }
}
