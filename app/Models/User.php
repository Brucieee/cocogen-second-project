<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'first_name',
        'middle_name',
        'last_name',
        'date_of_birth',
        'place_of_birth',
        'sex',
        'citizenship',
        'contact_number',
        'has_existing_policy',
        'interested_policies',
        'wants_representative',
        'preferred_branch',
        'preferred_contact_methods'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'has_existing_policy' => 'boolean',
            'wants_representative' => 'boolean',
            'interested_policies' => 'array',
            'preferred_contact_methods' => 'array',
        ];
    }
}
