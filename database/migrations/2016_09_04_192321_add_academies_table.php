<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAcademiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type_academy_id')->unsigned();
            $table->string('name', 255);
            $table->string('color', 30)->nullable();
            $table->string('slug', 255)->unique();
            $table->string('description');
            $table->string('direction');
            $table->string('phone')->nullable();
            $table->string('zip_code');
            $table->string('avatar');
            $table->timestamps();
            $table->foreign('type_academy_id')->references('id')->on('type_academies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('academies');
    }
}
