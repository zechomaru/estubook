<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCareersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // En esta tabla iran las carreras de las universidades, los grados de los colegios tambien son considerados carreras
        // Schema::create('carreras', function (Blueprint $table) {
        Schema::create('careers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('academy_id')->unsigned();
            $table->foreign('academy_id')->references('id')->on('academies')->onDelete('cascade');
            $table->integer('modality_id')->unsigned();
            $table->foreign('modality_id')->references('id')->on('modalities')->onDelete('cascade');
            $table->string('name');
            $table->string('description')->nullable();
            #$table->index(['academy_id','name']); // No se pueden repetir nombres de carreras en una misma academia

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
        Schema::dropIfExists('careers');
    }
}
