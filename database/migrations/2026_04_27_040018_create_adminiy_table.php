<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('adminiy', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('empuuid', 25)->nullable();
            $table->string('name', 255)->nullable();
            $table->string('email', 255);
            $table->string('contact', 255)->nullable();
            $table->string('image', 200)->nullable();
            $table->string('role', 255);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 255);
            $table->string('showPassword1', 255)->nullable();
            $table->integer('is_active')->nullable();
            $table->string('remember_token', 100)->nullable();
            $table->integer('notification')->nullable()->default(0);
            $table->string('user_kyc_bounce', 200)->nullable();
            $table->string('laravelToken', 200)->nullable();
            $table->string('gender', 200)->nullable();
            $table->string('qualification', 200)->nullable();
            $table->integer('age')->nullable();
            $table->string('location', 200)->nullable();
            $table->string('country', 200)->nullable();
            $table->string('state', 200)->nullable();
            $table->string('city', 200)->nullable();
            $table->string('whatsappno', 200)->nullable();
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('adminiy');
    }
};
