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
            $table->string('page_title');
			$table->boolean('page_status');
			$table->text('content');
			$table->dateTime('date_create');
			$table->string('category');
			$table->text('scripts');
						
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
