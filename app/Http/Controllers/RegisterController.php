<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Policyholder;

class RegisterController extends Controller
{
    public function storeStep1(Request $request)
    {
        session([
            'firstName' => $request->firstName,
            'middleName' => $request->middleName,
            'lastName' => $request->lastName,
            'dateOfBirth' => $request->dateOfBirth,
            'placeOfBirth' => $request->placeOfBirth,
            'sex' => $request->sex,
            'citizenship' => $request->citizenship,
            'contactNumber' => $request->contactNumber,
            'email' => $request->email,
            'existingPolicy' => $request->existingPolicy
        ]);

        return response()->json(['success' => true]);
    }

    public function storeStep2(Request $request)
    {
        $userData = session()->all();

        $userData['policyInterest'] = $request->policyInterest;
        $userData['wantRepresentative'] = $request->wantRepresentative;
        $userData['preferredBranch'] = $request->preferredBranch;
        $userData['preferredContactMethod'] = $request->preferredContactMethod;

        $user = User::create([
            'first_name' => $userData['firstName'],
            'middle_name' => $userData['middleName'],
            'last_name' => $userData['lastName'],
            'date_of_birth' => $userData['dateOfBirth'],
            'place_of_birth' => $userData['placeOfBirth'],
            'sex' => $userData['sex'],
            'citizenship' => $userData['citizenship'],
            'contact_number' => $userData['contactNumber'],
            'email' => $userData['email'],
            'password' => Hash::make('defaultpassword123'),
            'existing_policy' => $userData['existingPolicy'],
            'policy_interest' => json_encode($userData['policyInterest']),
            'want_representative' => $userData['wantRepresentative'],
            'preferred_branch' => $userData['preferredBranch'],
            'preferred_contact_method' => json_encode($userData['preferredContactMethod']),
        ]);


        Auth::login($user);

        return response()->json(['success' => true]);
    }

    public function store(Request $request)
    {
        dd($request->all()); // Debugging: check what data is received

        $userData = new Policyholder;
        $userData->first_name = $request->first_name;
        $userData->middle_name = $request->middle_name;
        $userData->last_name = $request->last_name;
        $userData->date_of_birth = $request->date_of_birth;
        $userData->place_of_birth = $request->place_of_birth;
        $userData->sex = $request->sex;
        $userData->citizenship = $request->citizenship;
        $userData->contact_number = $request->contact_number;
        $userData->email = $request->email;

        $userData->save();

        return response()->json([]);
    }
}
