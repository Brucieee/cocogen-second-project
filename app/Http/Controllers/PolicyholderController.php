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
            'AutoExcelPlus' => 'in:yes,no',
            'InternationalTravelPlus' => 'in:yes,no',
            'DomesticTravelPlus' => 'in:yes,no',
            'ProTech' => 'in:yes,no',
            'CondoExcelPlus' => 'in:yes,no',
            'contactEmail' => 'in:yes,no',
            'contactSMS' => 'in:yes,no',
            'contactMessenger' => 'in:yes,no',
            'contactCall' => 'in:yes,no',
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
