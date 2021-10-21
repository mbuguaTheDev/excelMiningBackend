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
use App\Http\Controllers\StoreItemController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\DashboardAnalysisController;

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

//moment of silence at home
Route::get('/', function(){
return '<h1>I choose silence</h1>';
});

//mining sites
Route::get('/mining_sites', [MiningSiteController::class, 'index']);
Route::post('/mining_sites/add', [MiningSiteController::class, 'add']);
Route::put('mining_sites/update/{id}', [MiningSiteController::class, 'update']);
Route::delete('mining_sites/delete/{id}', [MiningSiteController::class, 'delete']);

//requisitions
Route::get('/requisitions', [RequisitionController::class, 'index']);
Route::post('/requisitions/add', [RequisitionController::class, 'add']);
Route::put('/requisitions/update/{id}', [RequisitionController::class, 'delete']);
Route::delete('/requisitions/delete/{id}', [RequisitionController::class, 'update']);


//items
Route::get('/items', [ItemController::class, 'index']);
Route::post('/items/add', [ItemController::class, 'add']);
Route::put('/items/update/{id}', [ItemController::class, 'update']);
Route::delete('/items/delete/{id}', [ItemController::class, 'delete']);

//employees
Route::get('/employees', [EmployeeController::class, 'index']);
Route::post('/employees/add', [EmployeeController::class, 'add']);
Route::put('/employees/update/{id}', [EmployeeController::class, 'update']);
Route::delete('/employees/delete/{id}', [EmployeeController::class, 'delete']);

//expenses
Route::get('/expenses', [ExpenseController::class, 'index']);
Route::post('/expenses/add', [ExpenseController::class, 'add']);
Route::put('/expenses/update/{id}', [ExpenseController::class, 'add']);
Route::delete('/expenses/delete/{id}', [ExpenseController::class, 'delete']);

//expense categories
Route::get('/expense_categories', [ExpCategoryController::class, 'index']);
Route::post('/expense_categories/add', [ExpCategoryController::class, 'add']);
Route::put('/expense_categories/update/{id}', [ExpCategoryController::class, 'update']);
Route::delete('/expense_categories/delete/{id}', [ExpCategoryController::class, 'delete']);

//petty cash
Route::get('/petty_cash', [PettyCashController::class, 'index']);
Route::post('/petty_cash/add', [PettyCashController::class, 'add']);
Route::put('/petty_cash/update/{id}', [PettyCashController::class, 'update']);
Route::delete('/petty_cash/delete/{id}', [PettyCashController::class, 'delete']);

//debts
Route::get('/debts', [DebtController::class, 'index']);
Route::get('/current_debts', [DebtController::class, 'current_debts']);
Route::post('/debts/add', [DebtController::class, 'add']);
Route::put('/debts/update/{id}', [DebtController::class, 'update']);
Route::delete('/debts/delete/{id}', [DebtController::class, 'delete']);

//debt payments
Route::get('/debt_payments', [DebtPaymentController::class, 'index']);
Route::post('/debt_payments/add', [DebtPaymentController::class, 'add']);
Route::put('/debt_payments/update/{id}', [DebtPaymentController::class, 'update']);
Route::delete('/debt_payments/delete/{id}', [DebtPaymentController::class, 'delete']);

//store items
Route::get('/store_items', [StoreItemController::class, 'index']);
Route::post('/store_items/add', [StoreItemController::class, 'add']);
Route::put('/store_items/update/{id}', [StoreItemController::class, 'update']);
Route::delete('/store_items/delete/{id}', [StoreItemController::class, 'delete']);

//suppliers
Route::get('/suppliers', [SupplierController::class, 'index']);
Route::post('/suppliers/add', [SupplierController::class, 'add']);
Route::put('/suppliers/update/{id}', [SupplierController::class, 'update']);
Route::delete('/suppliers/delete/{id}', [SupplierController::class, 'delete']);

//Dashboard analysis
Route::get('/current_month_overview', [DashboardAnalysisController::class,'current_month']);