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
        Schema::create('clamps', function (Blueprint $table) {
            $table->id();
            $table->text('latitude');
            $table->text('longitude');
            $table->string('plate_number');
            $table->integer('user_id');
            $table->text('image');
            $table->text('reason');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clamps');
    }
};
