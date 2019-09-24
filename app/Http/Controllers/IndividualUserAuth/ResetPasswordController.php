<?php

namespace App\Http\Controllers\IndividualUserAuth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/individual_user/home';

    /**
     * Create a new controller instance.
     *
     * @return void
//     */
//    public function __construct()
//    {
//        $this->middleware('guest');
//    }

    protected function guard()
    {
        return auth()->guard('individual_users');
    }

    public function showResetForm(Request $request, $token = null)
    {
        return view('individualuser-auth.passwords.reset')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }
}
