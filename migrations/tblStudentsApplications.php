<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create_tblStudentsApplications extends Migration
{
    /**
     * Запустить миграцию.
     *
     * @return void
     */
    public function up()
    {
		/**
		 * Таблица: tblStudentsApplications - таблица заявок студентов на запись к врачу
		 * Атрибуты:
		 *
		 * id_student (PK) - идентификатор студента
		 * student_name - ФИО студента
		 * course - курс обучения студента
		 * institute - институт обучения студента
		 * group - группа обучения студента
		 * student_phone_number - телефонный номер студента
		 * student_email - электронный адрес студента
		 * visit_time - время посещения специалиста
		 * id_doctor (FK) - идентификатор доктора, к которому записывается студент
		 */
        Schema::create('tblStudentsApplications', function (Blueprint $table) {
            $table->increments('id_student')->autoIncrement();
            $table->string('student_name');
			$table->integer('course')->nullable($value = true);
			$table->string('institute')->nullable($value = true);
			$table->char('group', 10)->nullable($value = true);
			$table->string('student_phone_number', 15)->nullable($value = true);
			$table->string('student_email');
			$table->dateTime('visit_time');
			$table->integer('id_doctor');			
            $table->timestamps();
			
			$table->foreign('id_doctor')->references('id_doctor')->on('tblDoctors');
        });
    }
}
?>