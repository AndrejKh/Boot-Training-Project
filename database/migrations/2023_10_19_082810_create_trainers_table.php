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
        Schema::create('trainers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('providerName');
            $table->string('email');
            $table->string('verifyEmail');
            $table->string('phone');
            $table->enum('format', ['onsite', 'vt_zoom']);
            $table->string('courses');
            $table->string('region');
            $table->text('bio');
            $table->boolean('approved')->nullable();
            $table->string('photo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trainers');
    }
};
