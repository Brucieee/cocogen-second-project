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
            'middleName' => 'nullable|string',
            'lastName' => 'required|string',
            'dateOfBirth' => 'required|string',
            'placeOfBirth' => 'required|string',
            'sex' => 'required|string',
            'citizenship' => 'required|string',
            'contactNumber' => 'required|numeric',
            'email' => 'required|email|unique:policyholders,email',
            
            'branch' => 'required|string',

            'contactEmail' => 'required|string|in:yes,no',
            'contactSMS' => 'required|string|in:yes,no',
            'contactMessenger' => 'required|string|in:yes,no',
            'contactCall' => 'required|string|in:yes,no',

            'AutoExcelPlus' => 'required|string|in:yes,no',
            'InternationalTravelPlus' => 'required|string|in:yes,no',
            'DomesticTravelPlus' => 'required|string|in:yes,no',
            'ProTech' => 'required|string|in:yes,no',
            'CondoExcelPlus' => 'required|string|in:yes,no',
        ]);

        // Convert checkbox (boolean) values to "yes" or "no"
        $validated['contactEmail'] = $validated['contactEmail'] === 'yes' ? 'yes' : 'no';
        $validated['contactSMS'] = $validated['contactSMS'] === 'yes' ? 'yes' : 'no';
        $validated['contactMessenger'] = $validated['contactMessenger'] === 'yes' ? 'yes' : 'no';
        $validated['contactCall'] = $validated['contactCall'] === 'yes' ? 'yes' : 'no';

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
            'zip' => 'nullable|string',

            'uploadID' => 'nullable|string',
            'uploadDisplayPicture' => 'nullable|string',
            'payment' => 'nullable|string',
            'bankWallet' => 'nullable|string',
            'otp' => 'nullable|string',

            'contactEmail' => 'nullable|string|in:yes,no',
            'contactSMS' => 'nullable|string|in:yes,no',
            'contactMessenger' => 'nullable|string|in:yes,no',
            'contactCall' => 'nullable|string|in:yes,no',

            'AutoExcelPlus' => 'nullable|string|in:yes,no',
            'InternationalTravelPlus' => 'nullable|string|in:yes,no',
            'DomesticTravelPlus' => 'nullable|string|in:yes,no',
            'ProTech' => 'nullable|string|in:yes,no',
            'CondoExcelPlus' => 'nullable|string|in:yes,no',
        ]);

        // Convert checkbox (boolean) values to "yes" or "no"
        if (isset($validated['contactEmail'])) {
            $validated['contactEmail'] = $validated['contactEmail'] === 'yes' ? 'yes' : 'no';
        }
        if (isset($validated['contactSMS'])) {
            $validated['contactSMS'] = $validated['contactSMS'] === 'yes' ? 'yes' : 'no';
        }
        if (isset($validated['contactMessenger'])) {
            $validated['contactMessenger'] = $validated['contactMessenger'] === 'yes' ? 'yes' : 'no';
        }
        if (isset($validated['contactCall'])) {
            $validated['contactCall'] = $validated['contactCall'] === 'yes' ? 'yes' : 'no';
        }

        try {
            $policyholder = Policyholder::findOrFail($id);
            $policyholder->update($validated);
            return response()->json(['message' => 'Policyholder info updated successfully!'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Something went wrong!', 'message' => $e->getMessage()], 500);
        }
    }
}
