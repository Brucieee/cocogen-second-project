<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function storeStep1(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'place_of_birth' => 'required|string|max:255',
            'sex' => 'required|in:Male,Female,Other',
            'citizenship' => 'required|string|max:255',
            'contact_number' => 'required|digits_between:7,15',
            'email' => 'required|email|unique:users,email',
            'existing_policy' => 'nullable|boolean',
        ]);

        session($validatedData);

        return response()->json(['success' => true]);
    }

    public function storeStep2(Request $request)
    {
        $validatedData = $request->validate([
            'policy_interest' => 'nullable|array',
            'want_representative' => 'nullable|boolean',
            'preferred_branch' => 'required|string|max:255',
            'preferred_contact_method' => 'nullable|array',
        ]);

        $userData = session()->all();

        $user = User::create([
            'first_name' => $userData['first_name'],
            'middle_name' => $userData['middle_name'] ?? null,
            'last_name' => $userData['last_name'],
            'date_of_birth' => $userData['date_of_birth'],
            'place_of_birth' => $userData['place_of_birth'],
            'sex' => $userData['sex'],
            'citizenship' => $userData['citizenship'],
            'contact_number' => $userData['contact_number'],
            'email' => $userData['email'],
            'password' => Hash::make('defaultpassword123'),
            'existing_policy' => $userData['existing_policy'] ?? null,
            'policy_interest' => json_encode($validatedData['policy_interest'] ?? []),
            'want_representative' => $validatedData['want_representative'] ?? false,
            'preferred_branch' => $validatedData['preferred_branch'],
            'preferred_contact_method' => json_encode($validatedData['preferred_contact_method'] ?? []),
        ]);

        Auth::login($user);
        session()->forget(array_keys($userData)); // Clear session after storing

        return response()->json(['success' => true]);
    }
}
