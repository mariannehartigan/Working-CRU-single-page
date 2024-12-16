<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = ['income_day_deposited', 'income_amount', 'income_description', 'expense_description', 'expense_amount', 'expense_day_due', 'expense_notes', 'expense_frequency', 'budget_description', 'budget_amount', 'budget_frequency'];

    /* eliminates automatic timestamp columns */
    public $timestamps = false;
}
