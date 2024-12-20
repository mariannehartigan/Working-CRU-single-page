<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Income extends Model
{
    use HasFactory;

    protected $fillable = ['month', 'year', 'description', 'amount', 'frequency', 'day_deposited', 'actual', 'paid'];

    /* eliminates automatic timestamp columns */
    public $timestamps = false;
}
