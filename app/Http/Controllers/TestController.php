<?php

// app/Http/Controllers/TestController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Validation\ValidationException;

class TestController extends Controller
{
    public function store(Request $request)
    {
        try {
            // Validate request data
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'age' => 'required|integer',
                'email' => 'required|email|unique:tests,email', // Ensure 'tests' is the correct table name
                'bank' => 'required|string',
            ]);

            // Create a new Test record
            $test = Test::create($validated);

            return response()->json(['message' => 'Test created successfully!', 'test' => $test], 201);
        } catch (ValidationException $e) {
            return response()->json(['errors' => $e->errors()], 422);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
