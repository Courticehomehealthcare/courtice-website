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
            $table->string('email', 180)->nullable()->default('NULL');
            $table->integer('empId')->nullable()->default('NULL');
            $table->string('empuuid', 25)->nullable()->default('NULL');
            $table->string('imppartner', 200)->nullable()->default('NULL');
            $table->string('client_phone', 255)->nullable()->default('NULL');
            $table->integer('per_hour_rate')->nullable()->default('NULL');
            $table->string('clientName', 250)->nullable()->default('NULL');
            $table->date('Clientmindate')->nullable()->default('NULL');
            $table->date('clientStartDate')->nullable()->default('NULL');
            $table->date('clientEndDate')->nullable()->default('NULL');
            $table->string('clientAddress', 250)->nullable()->default('NULL');
            $table->string('clientState', 100)->nullable()->default('NULL');
            $table->string('clientCity', 200)->nullable()->default('NULL');
            $table->string('clientZipcode', 20)->nullable()->default('NULL');
            $table->string('ManagerName', 200)->nullable()->default('NULL');
            $table->string('ManagerEmail', 200)->nullable()->default('NULL');
            $table->string('ManagerPhone', 200)->nullable()->default('NULL');
            $table->integer('admin_id')->nullable()->default('NULL');
            $table->integer('delete')->nullable()->default('NULL');
            $table->string('logo', 100)->nullable()->default('NULL');
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
