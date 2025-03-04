<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Policyholder;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class PolicyholderController extends Controller
{
    public function store(Request $request)
    {
        // Debugging: Log incoming request data
        Log::info('Received Policyholder Data:', $request->all());

        // Validate the request
        $validator = Validator::make($request->all(), [
            'first_name'      => 'required|string|max:255',
            'middle_name'     => 'nullable|string|max:255',
            'last_name'       => 'required|string|max:255',
            'date_of_birth'   => 'required|date',
            'place_of_birth'  => 'required|string|max:255',
            'sex'             => 'required|in:Male,Female,Other',
            'citizenship'     => 'required|string|max:255',
            'contact_number'  => 'required|string|max:20',
            'email'           => 'required|email|unique:policyholders,email',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422); // 422 Unprocessable Entity
        }

        try {
            // Save data to the database
            $policyholder = Policyholder::create([
                'first_name'      => $request->first_name,
                'middle_name'     => $request->middle_name,
                'last_name'       => $request->last_name,
                'date_of_birth'   => $request->date_of_birth,
                'place_of_birth'  => $request->place_of_birth,
                'sex'             => $request->sex,
                'citizenship'     => $request->citizenship,
                'contact_number'  => $request->contact_number,
                'email'           => $request->email,
            ]);

            Log::info('Policyholder created successfully', ['id' => $policyholder->id]);

            return response()->json([
                'message' => 'Policyholder registered successfully',
                'redirect_url' => route('dashboard')
            ], 201); // 201 Created

        } catch (\Exception $e) {
            Log::error('Error saving policyholder:', ['error' => $e->getMessage()]);

            return response()->json([
                'error' => 'Something went wrong while saving data. Please try again.'
            ], 500); // 500 Internal Server Error
        }
    }
}
