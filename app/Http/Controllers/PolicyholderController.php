<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Policyholder;

class PolicyholderController extends Controller
{

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'firstName' => 'required|string|max:100',
                'middleName' => 'nullable|string|max:100',
                'lastName' => 'required|string|max:100',
                'dateOfBirth' => 'required|date',
                'placeOfBirth' => 'required|string|max:255',
                'sex' => 'required|in:Male,Female,Other',
                'citizenship' => 'required|string|max:100',
                'contactNumber' => 'required|string|max:20',
                'email' => 'required|email|unique:policyholders,email',
            ]);

            $policyholder = Policyholder::create([
                'first_name' => $validatedData['firstName'],
                'middle_name' => $validatedData['middleName'],
                'last_name' => $validatedData['lastName'],
                'date_of_birth' => $validatedData['dateOfBirth'],
                'place_of_birth' => $validatedData['placeOfBirth'],
                'sex' => $validatedData['sex'],
                'citizenship' => $validatedData['citizenship'],
                'contact_number' => $validatedData['contactNumber'],
                'email' => $validatedData['email'],
            ]);

            session(['policyholder_id' => $policyholder->id]);

            return response()->json(['success' => true, 'redirect_url' => route('next.step')]); // Redirect to next step
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json(['errors' => $e->errors()], 422);
        }
    }
}
