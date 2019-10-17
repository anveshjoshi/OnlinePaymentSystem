<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KYC;
use Illuminate\Support\Facades\Auth;

class KYCController extends Controller
{
    public function viewIndividualUserKyc()
    {
        return view('individualuser-auth.kyc');
    }

    public function storeKYC(Request $request)
    {
        $kyc = new KYC();

        $kyc->father_name = request('father_name');
        $kyc->mother_name = request('mother_name');
        $kyc->grandfather_name = request('grandfather_name');
        $kyc->spouse_name = request('spouse_name');
        $kyc->district = request('district');
        $kyc->vdc = request('vdc');
        $kyc->ward = request('ward');
        $kyc->dob = request('dob');
        $kyc->gender = request('gender');
        $kyc->occupation = request('occupation');
        $kyc->identity_type = request('identity_type');
        $kyc->identity_number = request('identity_number');
        $kyc->issued_form = request('issued_form');
        $kyc->issued_date = request('issued_date');

        if ($request->hasFile('front')){
            $file = $request->file('front');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . "." . $extension;
            $file->move('uploads/kyc/', $filename);
            $kyc->front = $filename;
        }

        if ($request->hasFile('back')){
            $file = $request->file('back');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . "." . $extension;
            $file->move('uploads/kyc/', $filename);
            $kyc->back = $filename;
        }

        if ($request->hasFile('pp_photo')){
            $file = $request->file('pp_photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . "." . $extension;
            $file->move('uploads/kyc/', $filename);
            $kyc->pp_photo = $filename;
        }

        $kyc->individual_users_id = $this->getUserId();

        $kyc->save();

        return redirect('/individual_user/home');

//        $request->validate([
//            'father_name' => 'required|max:255',
//            'mother_name' => 'required|max:255',
//            'grandfather_name' => 'required|max:255',
//            'spouse_name' => 'required|max:255',
//            'district' => 'required|max:255',
//            'vdc' => 'required|max:255',
//            'ward' => 'required|max:2',
//            'dob' => 'required|max:10',
//            'gender' => 'required',
//            'occupation' => 'required|max:255',
//            'identity_type' => 'required',
//            'identity_number' => 'required|max:255',
//            'issued_form' => 'required|max:255',
//            'issued_date' => 'required|max:255',
//            'front' => 'required|max:255',
//            'back' => 'required|max:255',
//            'pp_photo' => 'required|max:255',
//        ]);
//
//        if(request()->hasFile('front')){
//            request()->validate([
//                'front' => 'required|file|image|max:5120'
//            ]);
//        }
    }
    public function getUserId()
    {
        $user_id =  Auth::guard('individual_user')->user()->id;
        return $user_id;
    }

    public function checkKYC()
    {
        $user = KYC::where('individual_users_id', Auth::guard('individual_user')->user()->id);
        return $user;
    }
}
