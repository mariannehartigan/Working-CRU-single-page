<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return inertia(
            'Expenses/Index',
            [
                'expenses' => Expense::all()
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('Expense/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Expense::create($request->all());
        return redirect()->route('finances.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Expense $expense)
    {
        return inertia(
            'Expense/Show',
            [
                'expense' => $expense
            ]
        );

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Expense $expense)
    {
        return inertia(
            'expense/Edit',
            [
                'expense' => $expense
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Expense $expense)
    {
        $expense->update($request->all());
        return redirect()->route('finances.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Expense $expense)
    {        //
        $expense->delete();

        return redirect()->back();
    }
}
