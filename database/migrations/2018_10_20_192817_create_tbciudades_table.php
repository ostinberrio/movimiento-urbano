<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatetbciudadesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbciudades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombreciudad');
            $table->integer('departamentos_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('departamentos_id')->references('id')->on('tbdepartamentos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tbciudades');
    }
}
