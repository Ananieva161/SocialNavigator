<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightsTable extends Migration
{
    /**
     * Запустить миграцию.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('tblActivites', function (Blueprint $table) {
    $table->increments(id_activites')->autoIncrement();
    $table->dateTime('activity_time');
    $table->string('activity_description');
    $table->string('activity_location', 200);
    $table->string('necessary_help');
    $table->char('number_of_vacansion',4);
});
}

    /**
     * Обратить миграции.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tblActivites');
    }
}
?>