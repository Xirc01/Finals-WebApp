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
        Schema::create('trainingFees', function (Blueprint $table) {
            $table->id();
        
            $table->foreignId('programId')
                  ->constrained('programs')
                  ->cascadeOnDelete();
        
            $table->decimal('trainingFee',8,2);
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trainingFees');
    }
};
