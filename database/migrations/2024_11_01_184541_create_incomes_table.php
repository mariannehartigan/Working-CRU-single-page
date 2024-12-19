<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('incomes', function (Blueprint $table) {
            $table->id();
            $table->text('month')->nullable();
            $table->text('year')->nullable();
            $table->text('description')->nullable();
            $table->text('amount')->nullable();
            $table->text('day_deposited')->nullable();
            $table->boolean('actual')->nullable();
            $table->boolean('paid')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incomes');
    }
};
