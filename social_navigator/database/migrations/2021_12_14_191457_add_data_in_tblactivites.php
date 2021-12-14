<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AddDataInTblactivites extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	DB::table('tblactivites')->insert(
			['activity_time' => '2021-10-23 10:00:00',
			'activity_description' => 'Мероприятие 1',
			'activity_location' => 'парк "Зеленые избы"',
			'necessary_help' => 'Волонтёры для помощи студентам с ОВЗ',
			'number_of_vacansion' => '12'
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
	DB::table('tblactivites')->where('activity_description', '=' ,'Мероприятие 1')->delete();
    }
}
