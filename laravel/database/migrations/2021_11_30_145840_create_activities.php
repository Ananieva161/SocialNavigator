<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblActivites', function (Blueprint $table) {
            $table->increments('id_activites')->autoIncrement();
			$table->dateTime('activity_time');
			$table->string('activity_description');
			$table->string('activity_location', 200);
			$table->string('necessary_help');
			$table->char('number_of_vacansion',4);
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
        Schema::dropIfExists('tblActivites');
    }
}
