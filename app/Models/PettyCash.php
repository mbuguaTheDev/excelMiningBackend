<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PettyCash extends Model
{
    use HasFactory;
    protected $fillable = [
        'money_in',
        'money_out',
        'date_added',
        'remarks'
    ];
}