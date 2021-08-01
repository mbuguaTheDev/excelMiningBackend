<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MiningSite extends Model
{
    use HasFactory;
    protected $fillable = [
        'site_name',
        'description'
    ];
}