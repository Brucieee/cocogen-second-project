<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function process(Request $request)
    {
        $step = $request->input('step');
        $yesNo = $request->input('yes_no');
        $policyholder = $request->input('policyholder');
        $partner = $request->input('partner');

        
        
        
        if ($step === 'create-account-1') {
            return view($yesNo === 'yes' ? 'Register.create-account-2-2' : 'Register.create-account-2')->render();
        } elseif ($step === 'create-account-2' || $step === 'create-account-2-2') {
            return view('Register.your-identity-1')->render();
        } elseif ($step === 'your-identity-1') {
            return view('Register.your-identity-2')->render();
        } elseif ($step === 'your-identity-2') {
            return view('Register.your-identity-3')->render();
        } elseif ($step === 'your-identity-3') {
            return view('Register.otp-page')->render();
        }

        return response()->json(['error' => 'Invalid step'], 400);
    }
}
