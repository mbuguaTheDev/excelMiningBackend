<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requisition extends Model
{
    use HasFactory;
    protected $fillable = [
        'site_name' ,
        'items_requested',
        'ordered_by',
        'is_approved'
    ];

    protected $casts = [
        'items_requested' => 'array'
    ];
}