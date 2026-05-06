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
        Schema::table('candidateresumes', function (Blueprint $table) {
            $table->unsignedBigInteger('job_posting_id')->nullable()->after('id');
            $table->boolean('email_sent')->default(false)->after('applieddate');
            
            $table->foreign('job_posting_id')->references('id')->on('job_postings')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('candidateresumes', function (Blueprint $table) {
            $table->dropForeign(['job_posting_id']);
            $table->dropColumn(['job_posting_id', 'email_sent']);
        });
    }
};
