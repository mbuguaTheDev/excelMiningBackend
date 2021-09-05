<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreItem extends Model
{
    use HasFactory;
    protected $fillable = [
        'name' ,
        'qty_received',
        'date_received'
    ];
}