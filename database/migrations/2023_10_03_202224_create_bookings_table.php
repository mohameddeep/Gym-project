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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->string('phone');
            $table->string('company_name')->nullable();
            $table->string('address')->nullable();
            $table->string('payment')->nullable();
            $table->string('card_number')->nullable();
            $table->string('card_name')->nullable();
            $table->date('epiration_date')->nullable();
            $table->string('security_code')->nullable();
            $table->foreignId('user_id')->nullable()->cascadeOnDelete();
            $table->foreign('user_id')->references('id')->on('users');

            $table->foreignId('pricing_id')->nullable()->cascadeOnDelete();
            $table->foreign('pricing_id')->references('id')->on('pricings');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
