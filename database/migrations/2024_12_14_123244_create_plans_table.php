<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->id();

            $table->text('income_day_deposited')->nullable();
            $table->text('income_description')->nullable();
            $table->text('income_amount')->nullable();

            $table->text('expense_description')->nullable();
            $table->text('expense_amount')->nullable();
            $table->text('expense_day_due')->nullable();
            $table->text('expense_notes')->nullable();
            $table->text('expense_frequency')->nullable();

            $table->text('budget_description')->nullable();
            $table->text('budget_amount')->nullable();
            $table->text('budget_frequency')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('plans');
    }
};
