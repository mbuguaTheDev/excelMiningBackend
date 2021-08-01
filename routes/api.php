<?php

//bringing in the mighty controllers
use App\Http\Controllers\MiningSiteController;
use App\Http\Controllers\RequisitionController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ExpCategoryController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\PettyCashController;
use App\Http\Controllers\DebtController;
use App\Http\Controllers\DebtPaymentController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//mining sites
Route::get('/mining_sites', [MiningSiteController::class, 'index']);
Route::post('/mining_sites/add', [MiningSiteController::class, 'add']);

//requisitions
Route::get('/requisitions', [RequisitionController::class, 'index']);
Route::post('/requisitions/add', [RequisitionController::class, 'add']);

//items
Route::get('/items', [ItemController::class, 'index']);
Route::post('/items/add', [ItemController::class, 'add']);

//employees
Route::get('/employees', [EmployeeController::class, 'index']);
Route::post('/employees/add', [EmployeeController::class, 'add']);

//expenses
Route::get('/expenses', [ExpenseController::class, 'index']);
Route::post('/expenses/add', [ExpenseController::class, 'add']);
Route::get('/expense_categories', [ExpCategoryController::class, 'index']);
Route::post('/expense_categories/add', [ExpCategoryController::class, 'add']);

//petty cash
Route::get('/petty_cash', [PettyCashController::class, 'index']);
Route::post('/petty_cash/add', [PettyCashController::class, 'add']);

//debts
Route::get('/debts', [DebtController::class, 'index']);
Route::post('/debts/add', [DebtController::class, 'add']);
Route::get('/debt_payments', [DebtPaymentController::class, 'index']);
Route::post('/debt_payments/add', [DebtPaymentController::class, 'add']);