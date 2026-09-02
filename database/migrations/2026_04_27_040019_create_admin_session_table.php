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
        Schema::create('admin_session', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->integer('user_id');
            $table->integer('type')->nullable();
            $table->integer('is_read')->nullable();
            $table->integer('is_active')->nullable();
            $table->integer('is_deleted')->nullable();
            $table->integer('check_login')->nullable();
            $table->integer('check_logout')->nullable();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_session');
    }
};
