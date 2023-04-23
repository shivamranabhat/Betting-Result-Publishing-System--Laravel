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
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table-> string('rank');
            $table-> string('name');
            $table-> string('bet_number');
            $table->unsignedBigInteger('game_id');
            $table->unsignedBigInteger('time_id');
            $table->foreign('game_id')->references('id')->on('games')->onDelete('cascade');
            $table->foreign('time_id')->references('id')->on('timings')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('results');
    }
};
