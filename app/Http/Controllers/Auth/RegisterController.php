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
use Illuminate\Http\Request;
use App\Mail\VerifyMail;

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
            'team_name' => ['required', 'string', 'max:191'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'instance_name' => ['required', 'string', 'max:191'],
            'instance_address' =>['required', 'string', 'max:191'],
            'leader_name' => ['required', 'string', 'max:191', 'regex:/^[A-Za-z ]+$/'],
            'leader_email' => ['required', 'string', 'email', 'max:191', 'unique:users'],
            'leader_phone' => ['required', 'regex:/(08)/', 'min:7', 'digits_between:08,089999999999999', 'max:15'],
            'co_leader_name' => ['nullable', 'string', 'max:191', 'regex:/^[A-Za-z ]+$/'],
            'co_leader_email' => ['nullable', 'string', 'email', 'max:191'],
            'co_leader_phone' => ['nullable', 'regex:/(08)/', 'min:7', 'digits_between:08, 089999999999999', 'max:15'],
            'member_1_name' => ['nullable', 'string', 'max:191', 'regex:/^[A-Za-z ]+$/'],
            'member_1_email' => ['nullable', 'string', 'email', 'max:191'],
            'member_1_phone' => ['nullable', 'regex:/(08)/', 'min:7', 'digits_between:08,089999999999999', 'max:15'],
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
        // $this->validate($data, [
        //     'team_name' => ['required', 'string', 'max:255'],
        //     'leader_email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => ['required', 'string', 'min:6', 'confirmed'],
        //     'instance_name' => ['required', 'string']
        // ]);

        $user = User::create([
            'team_name' => $data['team_name'],
            'leader_email' => $data['leader_email'],
            'password' => Hash::make($data['password']),
            'role' => $data['role'],
        ]);

        if ($data['role'] == "3")
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
        //rediret to /madc  if role == 2
        if (Auth::user()->role == '2') {
            return 'madc';
        }

        //rediret to /wdc  if role == 3
        if (Auth::user()->role == '3') {
            return 'wdc';
        }

       
    }

    public function showRegistrationForm() {
        return view('frontend.register');
    }
}
