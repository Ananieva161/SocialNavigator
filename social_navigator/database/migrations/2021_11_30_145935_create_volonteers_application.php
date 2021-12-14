<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolonteersApplication extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblVolunteersApplications', function (Blueprint $table) {
            $table->increments('id_volunteer')->autoIncrement();
			$table->dateTime('activity_time')->nullable($value = true);
			$table->string('volonteer_name');
			$table->string('volonteer_email', 200);
			$table->string('volonteer_institute')->nullable($value = true);
			$table->char('volonteer_phone_number',17)->nullable($value = true);
			$table->char('volonteer_cours',2)->nullable($value = true);
			$table->char('volonteer_group',10)->nullable($value = true);
			$table->integer('id_activites')->unsigned();
			$table->foreign('id_activites')->references('id_activites')->on('tblActivites');
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
        Schema::dropIfExists('tblVolunteersApplications');
    }
}
