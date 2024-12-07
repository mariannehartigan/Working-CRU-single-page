<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return inertia(
            'Income/Index',
            [
                'incomes' => Income::all()
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('Income/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Income::create($request->all());
        return redirect()->route('finances.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Income $income)
    {
        return inertia(
            'Income/Show',
            [
                'income' => $income
            ]
        );

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Income $income)
    {
        return inertia(
            'Income/Edit',
            [
                'income' => $income
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Income $income)
    {
        $income->update($request->all());
        return redirect()->route('finances.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Income $income)
    {        //
        $income->delete();

        return redirect()->back();
    }
}
