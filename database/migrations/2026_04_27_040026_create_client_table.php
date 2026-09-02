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
        Schema::create('client', function (Blueprint $table) {
            $table->id();
            $table->string('email', 180)->nullable();
            $table->integer('empId')->nullable();
            $table->string('empuuid', 25)->nullable();
            $table->string('imppartner', 200)->nullable();
            $table->string('client_phone', 255)->nullable();
            $table->integer('per_hour_rate')->nullable();
            $table->string('clientName', 250)->nullable();
            $table->date('Clientmindate')->nullable();
            $table->date('clientStartDate')->nullable();
            $table->date('clientEndDate')->nullable();
            $table->string('clientAddress', 250)->nullable();
            $table->string('clientState', 100)->nullable();
            $table->string('clientCity', 200)->nullable();
            $table->string('clientZipcode', 20)->nullable();
            $table->string('ManagerName', 200)->nullable();
            $table->string('ManagerEmail', 200)->nullable();
            $table->string('ManagerPhone', 200)->nullable();
            $table->integer('admin_id')->nullable();
            $table->integer('delete')->nullable();
            $table->string('logo', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client');
    }
};
