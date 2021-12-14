<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AddDataInTbldoctors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {		
        DB::table('tbldoctors')->insert(
			['doctor_name' => 'Новикова Сафина Констаниновна',
			 'doctor_speciality' => 'Психиатр',
			 'doctor_phone_number' => '890094323564',
			 'doctor_job' => 'ул. Райлено, д. 64, каб. 22'
			]
		);       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('tbldoctors')->where('doctor_name', '=' ,'Новикова Сафина Констаниновна')->delete();
    }
}
