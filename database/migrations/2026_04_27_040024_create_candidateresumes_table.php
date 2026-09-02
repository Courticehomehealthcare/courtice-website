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
        Schema::create('candidateresumes', function (Blueprint $table) {
            $table->id();
            $table->string('candidateName', 200)->nullable();
            $table->string('candidatelastName', 200)->nullable();
            $table->string('candidateemail', 255)->nullable();
            $table->string('candidatephoneno', 200)->nullable();
            $table->string('appliedforposition', 200)->nullable();
            $table->string('Message', 200)->nullable();
            $table->string('resume', 250)->nullable();
            $table->date('applieddate')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidateresumes');
    }
};
