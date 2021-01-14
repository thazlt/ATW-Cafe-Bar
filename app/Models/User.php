<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable =[
        'userID',
        'username',
        'password',
        'email',
        'dob',
        'userType',
        'phone',
        'gender'
    ];
}
