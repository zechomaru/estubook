<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAutoresLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autores_libros', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('autor_id')->unsigned();
            $table->foreign('autor_id')->references('id')->on('autores');
            $table->integer('libro_id')->unsigned();
            $table->foreign('libro_id')->references('id')->on('libros');
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
        Schema::dropIfExists('autores_libros');
    }
}
