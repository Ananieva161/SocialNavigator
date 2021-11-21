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
Schema::create('tblAdmins', function (Blueprint $table) {
    $table->increments('id_admin')->autoIncrement();
    $table->string('admin_login');
    $table->string('admin_password');
    $table->string('admin_name');
});
}

    /**
     * Обратить миграции.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tblAdmins');
    }
}

?>