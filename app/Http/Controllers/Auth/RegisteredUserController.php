<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'middle_name' => ['nullable', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'date_of_birth' => ['required', 'date'],
            'place_of_birth' => ['required', 'string', 'max:255'],
            'sex' => ['required', 'in:Male,Female,Other'],
            'citizenship' => ['required', 'string', 'max:255'],
            'contact_number' => ['required', 'string', 'max:20'],
            'has_existing_policy' => ['boolean'],
            'interested_policies' => ['nullable', 'array'],
            'wants_representative' => ['boolean'],
            'preferred_branch' => ['required', 'string', 'max:255'],
            'preferred_contact_methods' => ['nullable', 'array'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // Convert checkboxes to booleans
        $validated['has_existing_policy'] = $request->has('has_existing_policy');
        $validated['wants_representative'] = $request->has('wants_representative');

        // Create new user
        $user = User::create([
            'first_name' => $validated['first_name'],
            'middle_name' => $validated['middle_name'],
            'last_name' => $validated['last_name'],
            'date_of_birth' => $validated['date_of_birth'],
            'place_of_birth' => $validated['place_of_birth'],
            'sex' => $validated['sex'],
            'citizenship' => $validated['citizenship'],
            'contact_number' => $validated['contact_number'],
            'has_existing_policy' => $validated['has_existing_policy'],
            'interested_policies' => json_encode($validated['interested_policies']),
            'wants_representative' => $validated['wants_representative'],
            'preferred_branch' => $validated['preferred_branch'],
            'preferred_contact_methods' => json_encode($validated['preferred_contact_methods']),
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
