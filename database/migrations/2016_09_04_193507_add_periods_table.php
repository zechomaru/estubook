<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPeriodsTable extends Migration
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
        Schema::create('periods', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('career_id')->unsigned();
            $table->foreign('career_id')->references('id')->on('careers');
            $table->string('name');
            $table->date('start')->nullable();
            $table->date('end')->nullable();
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
        Schema::dropIfExists('periods');
    }
}
