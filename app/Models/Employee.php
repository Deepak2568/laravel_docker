<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $fillable = ['name', 'email', 'phone', 'gender', 'dob', 'department', 'language', 'status'];
    protected $casts = [
        'language' => 'array',
    ];
}
