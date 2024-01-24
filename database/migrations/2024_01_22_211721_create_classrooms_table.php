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
        Schema::create('classrooms', function (Blueprint $table) {
            $table->id();
            $table->string('class',50);
            $table->string('name',50);
            $table->string('jobTitle',50);
            $table->string('age');
            $table->string('time');
            $table->string('capacity');
            $table->float('cost');
            $table->string('image',100);
            $table->foreignId('teacher_id')->constrained('teachers');
            $table->boolean('published');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classrooms');
    }
};
