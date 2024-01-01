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
        Schema::create('commentts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('recruiters_id');
            $table->foreign('recruiters_id')->references('id')->on('recruiters')->onDelete('cascade');
            //
            $table->unsignedBigInteger('candittts_id');
            $table->foreign('candittts_id')->references('id')->on('candittts')->onDelete('cascade');
            //
            $table->text('comment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commentts');
    }
};
