<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPeriodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /* - En el caso de las universidades los períodos están representados por los semestres, trimestres o años que dura
         * un período.
         * -------------
         * - En el caso de los colegios y liceos los períodos son los años de cada grado
         * */
        Schema::create('periodos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('carrera_id')->unsigned();
            $table->foreign('carrera_id')->references('id')->on('carreras');
            $table->string('descripcion');
            $table->date('inicio')->nullable();
            $table->date('fin')->nullable();
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
        Schema::dropIfExists('periodos');
    }
}
