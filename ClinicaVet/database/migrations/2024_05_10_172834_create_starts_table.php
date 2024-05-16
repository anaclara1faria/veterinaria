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
        Schema::create('starts', function (Blueprint $table) {
            $table->id();
            $table->string('pet_name');
            $table->string('race');
            $table->string('tutor_name');
            $table->string('age');
            $table->string('illnesses');
            $table->string('surgeries');
            $table->string('wight');
            $table->string('comments');
            $table->boolean('characteristics');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('starts');
    }
};
