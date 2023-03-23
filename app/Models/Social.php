<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'country',
        'email',
        'phone_number',
        'otp',
        'password',
    ];

     public function findForPassport($username)
    {
        return $this->where('email', $username)->first();
    }
}
