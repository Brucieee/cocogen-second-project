<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Policyholder;
use Illuminate\Validation\ValidationException;

class PolicyholderController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'firstName' => 'required|string',
            'middleName' => 'required|string',
            'lastName' => 'required|string',
            'dateOfBirth' => 'required|string',
            'placeOfBirth' => 'required|string',
            'sex' => 'required|string',
            'citizenship' => 'required|string',
            'contactNumber' => 'required|integer',
            'email' => 'required|email',
            'branch' => 'required|string',
            'contactEmail' => 'required|boolean',
            'contactSMS' => 'required|boolean',
            'contactMessenger' => 'required|boolean',
            'contactCall' => 'required|boolean',
            
        ]);

        try {
            $policyholder = Policyholder::create($validated);
            return response()->json(['message' => 'Policyholder created successfully!', 'id' => $policyholder->id], 201);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Something went wrong!', 'message' => $e->getMessage()], 500);
        }
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            
            'unitNo' => 'nullable|string',
            'street' => 'nullable|string',
            'barangay' => 'nullable|string',
            'city' => 'nullable|string',
            'province' => 'nullable|string',
            'region' => 'nullable|string',
            'uploadID' => 'nullable|string',
            'uploadDisplayPicture' => 'nullable|string',
            'payment' => 'nullable|string',
            'bankWallet' => 'nullable|string',
            'otp' => 'nullable|string',
        ]);

        try {
            $policyholder = Policyholder::findOrFail($id); // Find the record by ID
            $policyholder->update($validated);
            return response()->json(['message' => 'Policyholder info updated successfully!'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Something went wrong!', 'message' => $e->getMessage()], 500);
        }
    }
}
