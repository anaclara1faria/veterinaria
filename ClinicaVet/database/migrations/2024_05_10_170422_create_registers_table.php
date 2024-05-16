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
        Schema::create('registers', function (Blueprint $table) {
            $table->id();
            $table->integer('registration');
            $table->string('breed_name');
            $table->string('origin');
            $table->string('appearance');
            $table->string('colors');
            $table->string('personality');
            $table->string('skills');
            $table->boolean('health');
            $table->integer('expectancy');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registers');
    }
};
