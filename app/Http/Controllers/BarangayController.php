<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class YourController extends Controller
{
    public function showForm()
    {
        // Fetch barangays from the PSGC API
        $response = Http::get('https://psgc.cloud/api/barangays');

        // Check if the request was successful
        if ($response->successful()) {
            $barangays = $response->json();
        } else {
            $barangays = []; // Fallback to an empty array if the API fails
        }

        // Pass the barangays to the view
        return view('your-view', [
            'barangays' => $barangays,
        ]);
    }
}