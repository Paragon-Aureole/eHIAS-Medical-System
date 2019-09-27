<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('patient_lastname');
            $table->string('patient_middlename');
            $table->string('patient_firstname');
            $table->string('patient_gender');
            $table->string('patient_civstat');
            $table->date('patient_birthday');
            $table->integer('patient_age');
            $table->string('patient_barangay');
            $table->string('patient_city');
            $table->string('patient_province');
            $table->string('patient_height');
            $table->string('patient_weight');
            $table->string('patient_bp');
            $table->string('patient_contact');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
