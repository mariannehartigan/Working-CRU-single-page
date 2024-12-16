<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use Illuminate\Http\Request;

class BudgetController extends Controller
{
    public function index()
    {
        /*return inertia(
            'Budget/Index',
            [
                'budgets' => Budget::all()
            ]
        );*/
    }

    public function create()
    {
        /*return inertia('Budget/Create');*/
    }

    public function store(Request $request)
    {
        Budget::create($request->all());
        return redirect()->route('finances.index');
    }

    public function show(Budget $budget)
    {
        /*return inertia(
            'Budget/Show',
            [
                'budget' => $budget
            ]
        );*/
    }

    public function edit(Budget $budget)
    {
        /*return inertia(
            'Budget/Edit',
            [
                'budget' => $budget
            ]
        );*/
    }

    public function update(Request $request, Budget $budget)
    {
        $budget->update($request->all());
        return redirect()->route('finances.index');
    }

    public function destroy(Budget $budget)
    {        //
        $budget->delete();
        return redirect()->back();
    }
}
