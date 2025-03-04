<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Policyholder extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'date_of_birth',
        'place_of_birth',
        'sex',
        'citizenship',
        'contact_number',
        'email',
        'interested_policies',
        'contact_methods'
    ];
}
