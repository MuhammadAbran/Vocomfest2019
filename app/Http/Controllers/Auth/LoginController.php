<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Validator;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
      return 'leader_email';
    }
    
    public function authenticated()
    {
      // redirect to admin
      if (Auth::user()->isAdmin()) {
         return redirect()->route('admin.dashboard');
      }
      // redirect to madc
      else if (Auth::user()->isMadc()) {
         return redirect()->route('madc.dashboard');
      }
      // redirect to wdc
      else if (Auth::user()->isWdc()) {
         return redirect()->route('wdc.dashboard');
      }

      return redirect('/login');
   }

   public function showLoginForm()
   {
      return view('frontend.login');
   }
}
