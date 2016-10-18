<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            // $table->integer('forma_pago_id')->unsigned();
            // $table->foreign('forma_pago_id')->references('id')->on('formas_pago');
            // $table->string('numero');
            $table->double('tax')->default(0);
            $table->double('shipping')->default(0);
            $table->double('discount')->default(0);
            $table->integer('status')->default(0);
            $table->double('total')->default(0);
            // $table->dateTime('date');
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
        Schema::dropIfExists('orders');
        
    }
}
