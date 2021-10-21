<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Debt;
use App\Models\Supplier;
use DB;

class DebtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $groupedDebts = DB::table('debts')
        //          ->select('supplier', DB::raw('sum(amount) as total'))
        //          ->groupBy('supplier')
        //          ->get(); 

        return Debt::all();
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {
        $request->validate([
            'amount' => 'required|integer',
            'expense' => 'required|string',
            'supplier' => 'required|string'
        ]);

        return Debt::create($request->all());
    }

    //get outstanding debts from supplier table
    public function current_debts(){
        $current_debts = Supplier::where('outstanding_debt', '>', 0)->get();

        return $current_debts;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $debt = Debt::find($id);
        $debt->update($request->all());
        return $debt;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Debt::destroy($id);
        return $id;
    }
}