<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblstudentsapplications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblStudentsApplications', function (Blueprint $table) {
            $table->increments('id_student')->autoIncrement();
            $table->string('student_name');
			$table->integer('course')->nullable($value = true);
			$table->string('institute')->nullable($value = true);
			$table->char('group', 10)->nullable($value = true);
			$table->string('student_phone_number', 15)->nullable($value = true);
			$table->string('student_email');
			$table->dateTime('visit_time');
			$table->integer('id_doctor')->unsigned();			
			$table->foreign('id_doctor')->references('id_doctor')->on('tblDoctors');
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
        Schema::dropIfExists('tblstudentsapplications');
    }
}
