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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('doctor_id')->nullable()->constrained('doctors')->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign key to users table
            $table->string('name');
            $table->date('date_of_birth');
            $table->integer('age')->nullable();
            $table->string('gender');
            $table->string('address')->nullable()->default('Not Mentioned');
            $table->string('blood_group')->nullable()->default('Not Mentioned');
            $table->string('home_telephone')->nullable()->default('Null');
            $table->string('mobile_number')->nullable()->default('Null');
            $table->string('guardian_name')->nullable()->default('Null');
            $table->string('guardian_relationship')->nullable()->default('Mother');
            $table->string('guardian_nic')->nullable()->default('Null');
            $table->string('medications')->nullable()->default('No Medications Given');
            $table->string('remarks')->nullable()->default('No Remarks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
