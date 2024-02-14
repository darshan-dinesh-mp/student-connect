<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sem_2_mse', function (Blueprint $table) {
            $table->integer('mse_number');
            $table->string('student_id')->foreign()->references('student_id')->on('students');
            $table->string('22MCA201');
            $table->string('22MCA202');
            $table->string('22MCA203');
            $table->string('22MCA204');
            $table->string('22MCA205');
            $table->string('22MCA206');
            $table->string('22MCA207');
            $table->string('22MCA208');
            $table->string('22MCA209');
            $table->string('22MCA211');
            $table->string('22MCA213');
            $table->string('22MCA222');
            $table->string('22MCA225');
            $table->primary(['mse_number', 'student_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sem_2_mse');
    }
};