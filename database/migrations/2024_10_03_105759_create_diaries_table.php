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
        Schema::create('diaries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('u_id')->constrained('users', 'id')->onDelete('cascade');
            $table->string('start');
            $table->string('end');
            $table->string('vehicle');
            $table->string('date');
            $table->string('date2');
            $table->string('image')->nullable();
            $table->string('friend');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diaries');
    }
};
