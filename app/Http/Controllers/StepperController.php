<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StepperController extends Controller
{
    public function step1(Request $request)
    {
        // Set currentStep to 1
        $request->session()->put('currentStep', 1);
        return view('step1');
    }

    public function step2(Request $request)
    {
        // Set currentStep to 2
        $request->session()->put('currentStep', 2);
        return view('step2');
    }

    public function step3(Request $request)
    {
        // Set currentStep to 3
        $request->session()->put('currentStep', 3);
        return view('step3');
    }
}
