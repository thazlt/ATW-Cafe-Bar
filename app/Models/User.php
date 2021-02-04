<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    #User Types
    public static $Admin = 1;
    public static $HR = 2;
    public static $Staff = 3;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', // 8 character minimum
        'name',
        'email',
        'password', // 8 character minimum
        'dob', //date
        'userType', // 0: normal user, 1: admin, 2: HR, 3: employee
        'phone',
        'gender'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'dob' => 'date'
    ];

    public function getUserType(){
        return $this->roles()->where('userType', 1)->exists();
    }
}
