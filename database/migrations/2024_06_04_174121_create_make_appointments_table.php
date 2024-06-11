<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('make_appointments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger("user_id")->unsigned();
            $table->bigInteger("doctor_id")->unsigned()->nullable();
            $table->string('bi_number');
            $table->date('appointment_date');
            $table->time('preferred_time');
            $table->enum('appointment_type', ['urgent', 'scheduled', 'walk_in']);
            $table->enum('specialty', ['Pediatrician','Dentist','Psychologist','GeneralPractitioner','Obstetrician','Prenatal']);
            $table->enum('gender', ['male', 'female']);
            $table->enum('status',['requested', 'marked', 'concluded','rejected']);
            $table->text('message')->nullable();
            $table->foreign("user_id")->references("id")->on("users")->onDelete('cascade');
            $table->foreign("doctor_id")->references("id")->on("users")->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('make_appointments');
    }
};
