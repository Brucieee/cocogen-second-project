<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Validation\ValidationException;

class TestController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer',
            'email' => 'required|email', // Remove unique constraint
            'bank' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|string',
        ]);

        try {
            $test = Test::create($validated);
            return response()->json(['message' => 'Test created successfully!', 'id' => $test->id], 201);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Something went wrong!', 'message' => $e->getMessage()], 500);
        }
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'additionalInfo' => 'required|string',
            'agree_terms' => 'required|boolean', // Validate the checkbox value
        ]);

        try {
            $test = Test::findOrFail($id); // Find the record by ID
            $test->update([
                'info' => $validated['additionalInfo'],
                'agree_terms' => $validated['agree_terms'], // Update the agree_terms field
            ]);
            return response()->json(['message' => 'Additional info saved successfully!'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Something went wrong!', 'message' => $e->getMessage()], 500);
        }
    }
}
