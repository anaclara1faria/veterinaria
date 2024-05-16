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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('race');
            $table->string('pet_name');
            $table->string('tutor_name');
            $table->string('age');
            $table->string('illnesses');
            $table->string('surgeries');
            $table->string('weight');
            $table->string('comments');
            $table->boolean('characteristics1')->nullable()->default(false);
            $table->boolean('characteristics2')->nullable()->default(false);
            $table->boolean('characteristics3')->nullable()->default(false);
            $table->boolean('characteristics4')->nullable()->default(false);
            $table->boolean('characteristics5')->nullable()->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
