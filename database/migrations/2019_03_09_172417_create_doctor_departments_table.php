<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_departments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();








        });

        Schema::table('prescriptions', function($table) {
          $table->foreign('case_id')->references('id')->on('sicknesses');
          $table->foreign('drug_id')->references('id')->on('drugs');
          $table->foreign('user_id')->references('id')->on('users');
        });
        Schema::table('medical_records', function($table) {
          $table->foreign('patient_id')->references('id')->on('patients');
          $table->foreign('case_id')->references('id')->on('sicknesses');
          $table->foreign('user_id')->references('id')->on('users');
        });
        Schema::table('referrals', function($table) {
            $table->foreign('case_id')->references('id')->on('sicknesses');
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
        Schema::dropIfExists('doctor_departments');
    }
}
