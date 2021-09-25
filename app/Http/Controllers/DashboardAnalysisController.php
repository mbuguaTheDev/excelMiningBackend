<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Debt;
use App\Models\DebtPayment;
use App\Models\PettyCash;
use App\Models\Employee;
use App\Models\Expense;

use Illuminate\Http\Request;

class DashboardAnalysisController extends Controller
{
    public function current_month(){
        $pettyCash = PettyCash::sum('money_in') - PettyCash::sum('money_out');
        $employees = Employee::count('id');
        $expenses = Expense::whereMonth('exp_date', Carbon::now()->month)->sum('amount');
        $totalDebt = Debt::sum('amount') - DebtPayment::sum('amount');
        return [
            'petty_cash'=> $pettyCash,
            'employees' => $employees,
            'expenses' => $expenses,
            'debt' => $totalDebt
        ];
    }
}