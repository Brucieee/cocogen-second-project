<?php

// app/Http/Controllers/TestController.php

// app/Http/Controllers/TestController.php

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
            'email' => 'required|email|unique:tests,email',
            'bank' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|string'
        ]);

        try {
            Test::create($validated);
            return response()->json(['message' => 'Test created successfully!'], 201);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Something went wrong!', 'message' => $e->getMessage()], 500);
        }
    }
}
