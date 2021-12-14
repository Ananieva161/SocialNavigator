<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create_tblAds extends Migration
{
    /**
     * Запустить миграцию.
     *
     * @return void
     */
    public function up()
    {
		/**
		 * Таблица: tblAds - таблица объявлений
		 * Атрибуты:
		 * 
		 * id_ad (PK) - идентификатор объявления
		 * ad_title - заголовок объявления
		 * ad_text - текст объявления
		 * ad_added_files - прикреплённые файлы (картинки, текстовые документы, аудио-файлы)
		 * ad_links - ссылки на дополнительную информацию по объявлению
		 * ad_status - статус объявления (размещено ли оно на сайте в разделе объявлений (1) или нет (0))
		 */
        Schema::create('tblAds', function (Blueprint $table) {
            $table->increments('id_ad')->autoIncrement();
            $table->string('ad_title');
            $table->text('ad_text');
			$table->string('ad_added_files')->nullable($value = true);
			$table->string('ad_links')->nullable($value = true);
			$table->boolean('ad_status');			
            $table->timestamps();
        });
    }
}
?>