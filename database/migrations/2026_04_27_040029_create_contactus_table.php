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
            $table->string('Lastname', 30)->nullable();
            $table->string('Phoneno', 25);
            $table->string('passportno', 25)->nullable();
            $table->string('Emailaddress', 60);
            $table->string('Location', 30)->nullable();
            $table->string('Description', 60)->nullable();
            $table->text('Message');
            $table->date('updated_at');
            $table->date('Created_at');
            $table->string('Qualification', 50)->nullable();
            $table->string('visastatus', 500)->nullable();
            $table->string('whatsapp', 50)->nullable();
            $table->string('country', 50)->nullable();
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
