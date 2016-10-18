<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAcademiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipo_academia_id')->unsigned();
            $table->foreign('tipo_academia_id')->references('id')->on('tipos_academia');
            $table->string('nombre', 255)->unique();
            $table->string('descripcion')->nullable();
            $table->string('informacion_extra')->nullable();
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
        Schema::dropIfExists('academias');
    }
}
