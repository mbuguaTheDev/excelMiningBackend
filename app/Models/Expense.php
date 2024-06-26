<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;
    protected $fillable = [
        'supplier',
        'exp_category',
        'amount',
        'site',
        'payment_status',
        'exp_date',
        'expense_ref'
    ];
}