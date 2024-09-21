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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('student_number')->unique();
            $table->string('student_nik')->unique();
            $table->string('student_name');
            $table->string('student_gender');
            $table->date('student_birth_date');
            $table->string('student_birth_place');
            $table->string('parent_name');
            $table->string('parent_phone');
            $table->string('parent_email');
            $table->string('parent_address');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
