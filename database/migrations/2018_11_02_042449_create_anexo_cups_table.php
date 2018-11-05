<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnexoCupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anexo_cups', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_anexo')->unsigned();
            $table->integer('id_cup')->unsigned();
            $table->timestamps();

            $table->foreign('id_anexo')->references('id_anexo')->on('referencias');
            $table->foreign('id_cup')->references('id_cup')->on('cups');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anexo_cups');
    }
}
