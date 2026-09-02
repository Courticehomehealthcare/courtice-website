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
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('email', 180);
            $table->string('password', 255);
            $table->string('first_name', 255)->nullable();
            $table->string('last_name', 255)->nullable();
            $table->string('address', 255)->nullable();
            $table->string('phone', 255)->nullable();
            $table->string('ssn', 255)->nullable();
            $table->string('city', 255)->nullable();
            $table->string('state', 255)->nullable();
            $table->string('zipcode', 255)->nullable();
            $table->string('status', 255)->nullable();
            $table->string('visa', 255)->nullable();
            $table->string('street', 255)->nullable();
            $table->string('visa_status', 255)->nullable();
            $table->string('zip_code', 255)->nullable();
            $table->string('emergency_name', 255)->nullable();
            $table->string('emergency_email', 255)->nullable();
            $table->string('emergency_phone', 255)->nullable();
            $table->string('tax_terms', 255)->nullable();
            $table->string('deductions', 255)->nullable();
            $table->date('date_of_birth')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
