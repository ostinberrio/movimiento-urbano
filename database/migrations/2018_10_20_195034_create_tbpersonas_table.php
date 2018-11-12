<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatetbpersonasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbpersonas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('telefono');
            $table->string('email');
            $table->string('sexo');
            $table->integer('ciudades_id')->unsigned();
            $table->integer('tipodocumentos_id')->unsigned();
            $table->string('ndocumento');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('ciudades_id')->references('id')->on('tbciudades');
            $table->foreign('tipodocumentos_id')->references('id')->on('tbtipodocumentos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tbpersonas');
    }
}
