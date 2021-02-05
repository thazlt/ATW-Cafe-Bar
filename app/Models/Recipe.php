<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable =[
        'name',
        'ingridients',
        'guide',
        'author',
        'validate',
    ];
    protected $casts = [
        'ingridients' => 'array',
    ];
}
