<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_customer')->unsigned()->nullable();
            $table->foreign('id_customer')->references('id')->on('customers');
            $table->integer('id_employee')->unsigned()->nullable();
            $table->foreign('id_employee')->references('id')->on('employees');
            $table->string('customer_name', 255);
            $table->string('adress', 255);
            $table->string('email',255);
            $table->string('phone', 11);
            $table->tinyInteger('status');
            $table->integer('total');
            $table->string('note', 255);
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
        Schema::dropIfExists('bills');
    }
}
