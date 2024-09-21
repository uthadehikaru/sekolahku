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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('registration_number')->unique();
            $table->foreignId('academic_year_id')->constrained('academic_years');
            $table->foreignId('student_id')->nullable()->constrained('students');
            $table->string('student_nik');
            $table->string('student_name');
            $table->string('student_birth_place');
            $table->date('student_birth_date');
            $table->string('student_gender');
            $table->string('parent_name');
            $table->string('parent_phone');
            $table->string('parent_email');
            $table->string('parent_address');
            $table->string('status')->default('pending');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
