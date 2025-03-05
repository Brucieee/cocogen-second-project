<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class RegisterController2 extends Controller
{
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            //put data here (last task created)
        ])
    }
}
