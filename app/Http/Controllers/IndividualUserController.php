<?php

namespace App\Http\Controllers;

use App\IndividualUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class IndividualUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('individual_user');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('individual_user/home');
    }

    public function viewIndividualUserProfile(IndividualUser $individual_user)
    {
        return view('individualuser-auth.profile', compact('individual_user'));
    }

    public function viewIndividualUserKyc()
    {
        return view('individualuser-auth.kyc');
    }

}
