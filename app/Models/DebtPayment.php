<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DebtPayment extends Model
{
    use HasFactory;
    protected $fillable = [
        'amount',
        'payment_mode',
        'txn_ref'
    ];
}