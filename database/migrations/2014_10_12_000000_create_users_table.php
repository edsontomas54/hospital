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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum("role", ['PATIENT','DOCTOR','NURSE','ADMIN','MANAGER','default'])->default('default');
            $table->boolean('is_admin')->default(false);
            $table->date('birthDay');
            $table->enum('gender', ['Male', 'Female']);
            $table->string('bI')->nullable();
            $table->string('address')->nullable();
            $table->string('phone');
            $table->string('emergencyContact');
            // Additional fields
            $table->string('allergies')->nullable();
            $table->string('medicines')->nullable();
            $table->string('bloodType')->nullable();
            $table->string('specialty')->nullable();
            $table->string('nurse')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
