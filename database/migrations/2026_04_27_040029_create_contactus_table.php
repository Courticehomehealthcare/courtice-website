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
        Schema::create('contactus', function (Blueprint $table) {
            $table->integer('contactid');
            $table->string('Firstname', 30);
            $table->string('Lastname', 30)->nullable()->default('NULL');
            $table->string('Phoneno', 25);
            $table->string('passportno', 25)->nullable()->default('NULL');
            $table->string('Emailaddress', 60);
            $table->string('Location', 30)->nullable()->default('NULL');
            $table->string('Description', 60)->nullable()->default('NULL');
            $table->text('Message');
            $table->date('updated_at');
            $table->date('Created_at');
            $table->string('Qualification', 50)->nullable()->default('NULL');
            $table->string('visastatus', 500)->nullable()->default('NULL');
            $table->string('whatsapp', 50)->nullable()->default('NULL');
            $table->string('country', 50)->nullable()->default('NULL');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contactus');
    }
};
