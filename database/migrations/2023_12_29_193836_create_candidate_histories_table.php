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
        Schema::create('candidate_histories', function (Blueprint $table) {
            $table->id();
            //
            $table->unsignedBigInteger('recruiters_id');
            $table->foreign('recruiters_id')->references('id')->on('recruiters')->onDelete('cascade');
            //
            $table->unsignedBigInteger('jobs_id');
            $table->foreign('jobs_id')->references('id')->on('jobs')->onDelete('cascade');
            //
            $table->unsignedBigInteger('candidates_id');
            $table->foreign('candidates_id')->references('id')->on('candidates')->onDelete('cascade');
            //
            $table->unsignedBigInteger('job_stages_id');
            $table->foreign('job_stages_id')->references('id')->on('job_stages')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidate_histories');
    }
};
