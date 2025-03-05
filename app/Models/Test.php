<?php

// app/Models/Test.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'age', 'email', 'bank', 'address', 'phone', 'info' ]; // Ensure these match your database columns
}
