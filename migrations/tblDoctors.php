<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create_tblDoctors extends Migration
{
    /**
     * Запустить миграцию.
     *
     * @return void
     */
    public function up()
    {
		/**
		 * Таблица: tblDoctors - таблица докторов (к которым могут записаться студенты с ОВЗ)
		 * Атрибуты:
		 * 
		 * id_doctor (PK) - идентификатор доктора
		 * doctor_name - ФИО доктора
		 * doctor_speciality - специальность доктора
		 * doctor_phone_number - телефонный номер доктора
		 * doctor_email - электронный адрес доктора
		 * doctor_job - место работы доктора
		 */
        Schema::create('tblDoctors', function (Blueprint $table) {
            $table->increments('id_doctor')->autoIncrement();
            $table->string('doctor_name');
            $table->string('doctor_speciality');
			$table->string('doctor_phone_number', 15)->nullable($value = true);
			$table->string('doctor_email')->nullable($value = true);
			$table->string('doctor_job');			
            $table->timestamps();
        });
    }
}
?>