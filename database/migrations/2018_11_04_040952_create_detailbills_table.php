<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailbillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailbills', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_bill')->unsigned()->nullable();;
            $table->foreign('id_bill')->references('id')->on('bills');
            $table->integer('id_product')->unsigned()->nullable();
            $table->foreign('id_product')->references('id')->on('products');
            $table->integer('quantity');
            $table->integer('price');
            $table->integer('amount');
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
        Schema::dropIfExists('detailbills');
    }
}
