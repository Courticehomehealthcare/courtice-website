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
        Schema::create('adminiy', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable()->default('NULL');
            $table->string('empuuid', 25)->nullable()->default('NULL');
            $table->string('name', 255)->nullable()->default('NULL');
            $table->string('email', 255);
            $table->string('contact', 255)->nullable()->default('NULL');
            $table->string('image', 200)->nullable()->default('NULL');
            $table->string('role', 255);
            $table->timestamp('email_verified_at')->nullable()->default('NULL');
            $table->string('password', 255);
            $table->string('showPassword1', 255)->nullable()->default('NULL');
            $table->integer('is_active')->nullable()->default('NULL');
            $table->string('remember_token', 100)->nullable()->default('NULL');
            $table->integer('notification')->nullable()->default('0');
            $table->string('user_kyc_bounce', 200)->nullable()->default('NULL');
            $table->string('laravelToken', 200)->nullable()->default('NULL');
            $table->string('gender', 200)->nullable()->default('NULL');
            $table->string('qualification', 200)->nullable()->default('NULL');
            $table->integer('age')->nullable()->default('NULL');
            $table->string('location', 200)->nullable()->default('NULL');
            $table->string('country', 200)->nullable()->default('NULL');
            $table->string('state', 200)->nullable()->default('NULL');
            $table->string('city', 200)->nullable()->default('NULL');
            $table->string('whatsappno', 200)->nullable()->default('NULL');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adminiy');
    }
};
