<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Budget extends Model
{
    use HasFactory;

    protected $fillable = ['description', 'amount', 'frequency'];

    /* eliminates automatic timestamp columns */
    public $timestamps = false;
}
