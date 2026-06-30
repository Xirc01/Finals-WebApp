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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
        
            $table->foreignId('userId')
                  ->constrained('user')
                  ->cascadeOnDelete();
        
            $table->string('paymentType');
        
            $table->foreignId('membershipId')
                  ->nullable()
                  ->constrained('membership')
                  ->nullOnDelete();
        
            $table->foreignId('trainingFeeId')
                  ->nullable()
                  ->constrained('training_fee')
                  ->nullOnDelete();
        
            $table->decimal('amount',8,2);
        
            $table->date('paymentDate');
        
            $table->string('paymentMethod');
        
            $table->string('status');
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
