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
            'AutoExcelPlus' => 'required|boolean',
            'InternationalTravelPlus' => 'required|boolean',
            'DomesticTravelPlus' => 'required|boolean',
            'ProTech' => 'required|boolean',
            'CondoExcelPlus' => 'required|boolean',
            'branch' => 'required|string',
            'contactEmail' => 'required|boolean',
            'contactSMS' => 'required|boolean',
            'contactMessenger' => 'required|boolean',
            'contactCall' => 'required|boolean'
        ]);

        try {
            $policyholder = Policyholder::create($validated);
            return response()->json(['message' => 'Test created successfully!', 'id' => $policyholder->id], 201);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Something went wrong!', 'message' => $e->getMessage()], 500);
        }
    }

    // public function update(Request $request, $id)
    // {
    //     $validated = $request->validate([
    //         'additionalInfo' => 'required|string',
    //         'agree_terms' => 'required|boolean', // Validate the checkbox value
    //     ]);

    //     try {
    //         $test = Test::findOrFail($id); // Find the record by ID
    //         $test->update([
    //             'info' => $validated['additionalInfo'],
    //             'agree_terms' => $validated['agree_terms'], // Update the agree_terms field
    //         ]);
    //         return response()->json(['message' => 'Additional info saved successfully!'], 200);
    //     } catch (\Exception $e) {
    //         return response()->json(['error' => 'Something went wrong!', 'message' => $e->getMessage()], 500);
    //     }
    // }
}
