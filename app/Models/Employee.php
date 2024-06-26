<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'id_number',
        'dob',
        'mobile_no',
        'id_image',
        'passport',
        'site',
        'salary',
        'is_active'
    ];
}