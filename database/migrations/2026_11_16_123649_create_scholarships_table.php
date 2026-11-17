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
    Schema::create('applicants', function (Blueprint $table) {
        $table->id();

        // Personal Information
        $table->string('first_name');
        $table->string('middle_name')->nullable();
        $table->string('last_name');
        $table->string('suffix')->nullable();
        $table->date('birthdate');
        $table->enum('gender', ['Male', 'Female']);
        $table->string('email')->unique();
        $table->string('contact_number');

        // Educational Information
        $table->string('school_name');
        $table->string('course');
        $table->string('year_level');

        // Scholarship Information
        $table->string('scholarship_type');
        $table->enum('application_status', [
            'Pending',
            'Approved',
            'Rejected'
        ])->default('Pending');

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scholarships');
    }
};
