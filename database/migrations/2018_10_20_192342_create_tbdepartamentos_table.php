<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatetbdepartamentosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbdepartamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombredepartamento');
            $table->integer('pais_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('pais_id')->references('id')->on('tbpais');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tbdepartamentos');
    }
}
