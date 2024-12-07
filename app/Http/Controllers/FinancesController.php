<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Http\Request;

class FinancesController extends Controller
{
    public function index()
    {
        return inertia(
            /* This gives the vue page */
            'Finances/FinancesMain',
            /* This passes the data to the vue page */
            [
                /* Income refers to the model name */
                'incomes' => Income::all()
            ]
        );
    }
}