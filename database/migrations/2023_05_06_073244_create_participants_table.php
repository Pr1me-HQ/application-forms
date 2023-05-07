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
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->string('f_name');
            $table->string('l_name');
            $table->string('p_number');
            $table->string('email');
            $table->string('job');
            $table->string('profession');
            $table->string('who_f_hackathon');
            $table->string('it_experience');
            $table->string('hackathon_experience');
            $table->string('idea');
            $table->string('about');
            $table->string('team_name')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participants');
    }
};
