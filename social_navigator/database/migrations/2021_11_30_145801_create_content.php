<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblContent', function (Blueprint $table) {
            $table->increments('id_page')->autoIncrement();
            $table->string('page_title');//Название страницы
			$table->boolean('page_status');//Добавлена/не добавлена
			$table->text('content');//Что внутри какой код
			$table->dateTime('date_create');//дата создания
			$table->string('category');//статика-форма-что то другое
			$table->text('scripts'); //подключаемые файлы
						
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
        Schema::dropIfExists('tblContent');
    }
}
