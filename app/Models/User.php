<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Cache;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        "name",
        "prenom",
        "dateNaissance",
        "sexe",
        "email",
        "adresse",
        "password",
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function isUserOnline()
    {
        return Cache::has('user-is-online' . $this->id);
    } 
    // create a public function PhoneNumber to formatted a phone number on view? 
    // generate a view code to display the PhoneNumber function?
    // generate a public function PhoneNumber on User Model to  formatted a phone number on view?
    // generate a code to display the formatted phone mumber on view with this PhoneNumber Function?

    public function PhoneNumber()
{
    // Remove all non-numeric characters from the phone number.
    $phone = preg_replace('/[^0-9]/', '', $this->phone);

    // Check if the phone number is 10 digits long.
    if (strlen($phone) != 10) {
        return $phone;
    }

    // Return the phone number with dashes between the three groups of digits.
    return substr($phone, 0, 3) . '-' . substr($phone, 3, 3) . '-' . substr($phone, 6);
}
}