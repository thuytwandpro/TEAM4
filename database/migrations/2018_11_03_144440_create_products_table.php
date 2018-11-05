<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_category')->unsigned();
            $table->foreign('id_category')->references('id')->on('categories');
            $table->integer('id_sale')->unsigned()->nullable();
            $table->foreign('id_sale')->references('id')->on('sales');
            $table->string('name',255)->unique();
            $table->integer('quantity')->unsigned();
            $table->integer('price')->unsigned();
            $table->text('img')->nullable();
            $table->longText('content')->nullable();
            $table->string('origin', 255)->nullable();
            $table->text('size')->nullable();
            $table->integer('gender')->unsigned()->nullable();
            $table->string('slug', 255);
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
        Schema::dropIfExists('products');
    }
}
